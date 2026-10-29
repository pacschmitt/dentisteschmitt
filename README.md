# Cabinet Dentaire Schmitt — thème WordPress

Thème du site [dentisteschmittnyon.ch](https://dentisteschmittnyon.ch/), hébergé chez Hostinger. Le code du thème est à la racine du dépôt ; une installation WordPress et sa base de données ne sont pas incluses.

L’audit, les corrections et les étapes restantes sont documentés dans [l’audit SEO du 28 octobre 2026](docs/AUDIT-SEO-2026-10-28.md). Le thème 1.1.1 et les deux [pages locales](docs/SEO-LOCAL-CONTENUS.md) sont publiés sur le site depuis le 28 octobre 2026.

## Architecture

- `functions.php` : configuration, ressources et bouton de rendez-vous.
- `inc/seo.php` : métadonnées par défaut, compatibilité AIOSEO, schémas locaux et redirections des anciens liens cassés.
- `inc/site-data.php` : horaires/coordonnées, résolution des pages traduites et images WordPress responsives.
- `page-*.php` et `front-page.php` : modèles de pages.
- `js/` et `style.css` : navigation, galeries et interface.

AIOSEO produit les métadonnées lorsqu’il est actif. Les champs personnalisés saisis par page dans AIOSEO restent prioritaires. Sans extension SEO reconnue, le thème fournit ses métadonnées et laisse WordPress produire la canonique des pages. Polylang gère les traductions, les liens hreflang et les langues du document.

Pour adapter les titres et descriptions par défaut, utiliser le filtre `dentiste_schmitt_seo_profile` ou les champs AIOSEO par page. Les langues prises en charge par les nouveaux profils sont le français et l’anglais.

## Validation

Sur une copie WordPress contenant les pages et traductions du site :

```sh
python3 tests/seo-smoke.py --base-url http://127.0.0.1:8087 --english --local-pages
```

Exécuter une fois avec AIOSEO, puis sans extension SEO pour vérifier le mécanisme de secours. Le script ne crée aucune réservation et n’écrit aucune donnée sur le site contrôlé. Il requiert Python 3 et curl. Les autres plugins SEO reconnus sont laissés responsables de leurs métadonnées ; leur configuration n’a pas été testée dans cet audit.

## Déploiement

Sauvegarder le thème et la base, valider en préproduction, puis mettre à jour le dossier de thème existant `wp-content/themes/dentisteschmitt/`. Déployer les PHP à la racine, `style.css`, `theme.json` et les dossiers `inc`, `css`, `js`, `images` et `languages`. Ne pas déployer les documents, tests, fichiers Git ni le dossier historique imbriqué `wp-content/` du dépôt. Purger ensuite LiteSpeed et le cache Hostinger/CDN, et refaire les contrôles en production. Les réglages et médias sont conservés dans WordPress ; aucune migration automatique de la base n’est déclenchée par le thème.

Les traductions anglaises de production sont stockées hors du thème, dans le répertoire personnalisé de Loco Translate. Préserver cet emplacement lors des futures migrations. Les deux nouvelles pages locales sont enregistrées dans la base WordPress ; le dépôt en conserve les textes dans `docs/SEO-LOCAL-CONTENUS.md`.

## Design en staging

La version `1.2.0-rc4` est installée uniquement sur [la copie de prévisualisation](https://design.dentisteschmittnyon.ch/?design=1.2.0-rc4), en attente de validation. La production reste en 1.1.1. Voir le [compte rendu des pages intérieures](docs/STAGING-PAGES-INTERIEURES-2026-10-29.md). Les ajouts visuels se trouvent dans `css/premium.css`, `css/interior.css` et `js/interactions.js`. Les éléments communs aux pages sont dans `inc/presentation.php`.

Créer l’archive du thème avec `python3 scripts/package-theme.py`. Le dossier `dist/` est exclu de Git. Sur le staging, ajouter `--staging` à la commande de contrôle pour exiger noindex.
