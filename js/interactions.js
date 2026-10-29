/* Quiet motion, with content available without JS and reduced-motion support. */
(() => {
  const header = document.getElementById('masthead');
  if (header) {
    let queued = false;
    const update = () => { header.classList.toggle('is-scrolled', window.scrollY > 24); queued = false; };
    update();
    window.addEventListener('scroll', () => {
      if (!queued) { queued = true; requestAnimationFrame(update); }
    }, { passive: true });
  }
  const team = document.querySelector('.team-grid');
  if (team) {
    const controls = team.querySelector('[data-team-controls]');
    const cards = [...team.querySelectorAll('[data-team-group]')];
    const count = team.querySelector('[data-team-count]');
    const english = document.documentElement.lang.startsWith('en');
    const updateTeam = group => {
      let visible = 0;
      cards.forEach(card => {
        card.hidden = group !== 'all' && card.dataset.teamGroup !== group;
        if (!card.hidden) visible++;
      });
      team.querySelectorAll('[data-team-filter]').forEach(button => {
        button.setAttribute('aria-pressed', String(button.dataset.teamFilter === group));
      });
      if (count) count.textContent = `${visible} ${english ? (visible === 1 ? 'team member' : 'team members') : (visible === 1 ? 'membre' : 'membres')}`;
    };
    if (controls && cards.length) {
      controls.hidden = false;
      controls.addEventListener('click', event => {
        const button = event.target.closest('[data-team-filter]');
        if (button) updateTeam(button.dataset.teamFilter);
      });
      updateTeam('all');
    }
  }
  const documentLinks = [...document.querySelectorAll('.document-nav a[href^="#"]')];
  if (documentLinks.length && 'IntersectionObserver' in window) {
    const sectionObserver = new IntersectionObserver(entries => {
      const entry = entries.find(item => item.isIntersecting);
      if (!entry) return;
      documentLinks.forEach(link => {
        if (link.hash === '#' + entry.target.id) link.setAttribute('aria-current', 'location');
        else link.removeAttribute('aria-current');
      });
    }, { rootMargin: '-15% 0px -65% 0px' });
    documentLinks.forEach(link => {
      const heading = document.getElementById(link.hash.slice(1));
      if (heading) sectionObserver.observe(heading);
    });
  }
  const motion = window.matchMedia('(prefers-reduced-motion: reduce)');
  if (motion.matches || !('IntersectionObserver' in window)) return;
  const observer = new IntersectionObserver(entries => entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('is-reveal-visible');
      observer.unobserve(entry.target);
    }
  }), { threshold: .08 });
  document.querySelectorAll('.practice-preview, .family-intro .container, .patient-section .two-columns-grid, .soins-grid .soin-details, .team-card, .contact-card').forEach(el => {
    if (el.getBoundingClientRect().top < window.innerHeight) return;
    el.classList.add('is-reveal-pending');
    observer.observe(el);
    el.addEventListener('focusin', () => el.classList.add('is-reveal-visible'), { once: true });
  });
  motion.addEventListener('change', event => {
    if (event.matches) {
      observer.disconnect();
      document.querySelectorAll('.is-reveal-pending').forEach(el => el.classList.add('is-reveal-visible'));
    }
  });
})();
