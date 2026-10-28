#!/usr/bin/env python3
"""Read-only checks against a running WordPress instance with this theme.

python3 tests/seo-smoke.py --base-url http://127.0.0.1:8087 --english
Run with AIOSEO enabled, then disabled, to check the theme fallback as well.
"""
import argparse
import json
import subprocess
from html.parser import HTMLParser
from urllib.parse import urljoin, urlparse


class Page(HTMLParser):
    def __init__(self, source):
        super().__init__()
        self.meta, self.canonicals, self.links, self.schemas = {}, [], [], []
        self.h1, self.details = 0, 0
        self.alternates = []
        self.schema = None
        self.feed(source)

    def handle_starttag(self, tag, attrs):
        a = dict(attrs)
        if tag == 'meta':
            key = a.get('name', a.get('property', ''))
            self.meta.setdefault(key, []).append(a.get('content', ''))
        if tag == 'link' and a.get('rel') == 'canonical':
            self.canonicals.append(a.get('href'))
        if tag == 'link' and a.get('hreflang'):
            self.alternates.append(a['hreflang'])
        if tag == 'a':
            self.links.append(a.get('href', ''))
        if tag == 'h1':
            self.h1 += 1
        if tag == 'details' and 'soin-details' in a.get('class', ''):
            self.details += 1
        if tag == 'script' and a.get('type') == 'application/ld+json':
            self.schema = ''

    def handle_data(self, text):
        if self.schema is not None:
            self.schema += text

    def handle_endtag(self, tag):
        if tag == 'script' and self.schema is not None:
            data = json.loads(self.schema)
            self.schemas.extend(data.get('@graph', [data]))
            self.schema = None


def fetch(url):
    result = subprocess.run(['curl', '-fsS', '-L', '--max-time', '30', '-w', '\n%{url_effective}', url], capture_output=True, text=True)
    assert result.returncode == 0, f'{url}: {result.stderr}'
    source, final = result.stdout.rsplit('\n', 1)
    return source, final


def main():
    parser = argparse.ArgumentParser(description=__doc__)
    parser.add_argument('--base-url', required=True)
    parser.add_argument('--english', action='store_true')
    args = parser.parse_args()
    routes = ['', 'cabinets/', 'page-equipe/', 'page-infos/', 'page-soins/', 'tarifs/', 'mentions-legales/', 'protection-des-donnees/']
    if args.english:
        routes += ['en/', 'en/clinics/', 'en/team/', 'en/informations/', 'en/treatments/', 'en/prices/', 'en/legal-notice/', 'en/privacy-policy/']
    titles, descriptions = set(), set()
    for route in routes:
        url = urljoin(args.base_url.rstrip('/') + '/', route)
        source, final = fetch(url)
        page = Page(source)
        assert page.h1 == 1, f'{route}: expected exactly one H1'
        assert len(page.meta.get('description', [])) == 1, f'{route}: duplicate/missing description'
        assert len(page.canonicals) == 1 and page.canonicals[0] == final, f'{route}: incorrect canonical {page.canonicals}'
        assert len(page.meta.get('robots', [])) == 1, f'{route}: duplicate robots'
        assert 'noindex' not in page.meta['robots'][0], f'{route}: public page is noindex'
        for key in ('og:title', 'og:description', 'og:url', 'og:type', 'og:locale', 'twitter:card'):
            assert len(page.meta.get(key, [])) == 1, f'{route}: duplicate/missing {key}'
        title = page.meta['og:title'][0]
        assert title not in titles, f'{route}: duplicate title'
        titles.add(title)
        description = page.meta['description'][0]
        assert description and description not in descriptions, f'{route}: empty or shared description'
        descriptions.add(description)
        assert len(page.alternates) == len(set(page.alternates)), f'{route}: duplicate hreflang'
        if args.english:
            assert len(page.alternates) == 2, f'{route}: missing language alternate'
        assert not any(urlparse(link).path in ('/soins/', '/mention-legales/') for link in page.links), f'{route}: old broken internal link'
        if route in ('', 'en/'):
            expected = 'en/treatments/' if route else 'page-soins/'
            assert urljoin(args.base_url.rstrip('/') + '/', expected) in page.links, f'{route}: treatments link missing'
        if route.startswith('en/'):
            assert urljoin(args.base_url.rstrip('/') + '/', 'en/legal-notice/') in page.links, f'{route}: untranslated footer link'
        if route in ('page-soins/', 'en/treatments/'):
            assert page.details == 9 and 'data-desc=' not in source and 'soinModal' not in source, f'{route}: treatments not rendered as native details'
        ids = [node['@id'] for node in page.schemas if '@id' in node]
        assert len(ids) == len(set(ids)), f'{route}: duplicate schema IDs'
        clinics = [node for node in page.schemas if node.get('@type') == 'Dentist']
        if route in ('', 'cabinets/', 'en/', 'en/clinics/'):
            assert len(clinics) == 2, f'{route}: expected exactly two practices'
            bassins = next(node for node in clinics if node['address']['addressLocality'] == 'Bassins')
            hours = bassins['openingHoursSpecification'][0]
            assert hours['dayOfWeek'] == ['Tuesday', 'Wednesday', 'Thursday'] and hours['opens'] == '08:30', f'{route}: incorrect Bassins hours'
        print(f'PASS {route or "/"}: metadata, canonical, links, headings, schema')
    for old, target in (('soins/', 'page-soins/'), ('mention-legales/', 'mentions-legales/')):
        result = subprocess.run(['curl', '-sS', '-o', '/dev/null', '-w', '%{http_code}\n%{redirect_url}', urljoin(args.base_url.rstrip('/') + '/', old)], capture_output=True, text=True)
        status, destination = result.stdout.split('\n', 1)
        assert status == '301' and destination == urljoin(args.base_url.rstrip('/') + '/', target), f'{old}: missing permanent redirect'
    print('PASS legacy links: 301 redirects to published pages')
    error_url = urljoin(args.base_url.rstrip('/') + '/', 'audit-page-inexistante/')
    result = subprocess.run(['curl', '-sS', '--max-time', '30', '-w', '\n%{http_code}', error_url], capture_output=True, text=True)
    source, status = result.stdout.rsplit('\n', 1)
    error = Page(source)
    assert status == '404', 'Missing page must return HTTP 404'
    assert len(error.meta.get('robots', [])) == 1 and 'noindex' in error.meta['robots'][0], '404 robots must be unambiguous'
    assert not error.canonicals, '404 must not advertise a canonical URL'
    assert not error.meta.get('description'), '404 should not reuse a public page description'
    search, _ = fetch(urljoin(args.base_url.rstrip('/') + '/', '?s=auditintrouvable'))
    search_page = Page(search)
    assert len(search_page.meta.get('robots', [])) == 1 and 'noindex' in search_page.meta['robots'][0], 'Search must be noindex'
    print(f'PASS 404 + search: HTTP status and noindex; {len(routes)} public pages checked')


if __name__ == '__main__':
    main()
