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
  const motion = window.matchMedia('(prefers-reduced-motion: reduce)');
  if (motion.matches || !('IntersectionObserver' in window)) return;
  const observer = new IntersectionObserver(entries => entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('is-reveal-visible');
      observer.unobserve(entry.target);
    }
  }), { threshold: .08 });
  document.querySelectorAll('.practice-preview, .family-intro .container, .patient-section .two-columns-grid, .soins-grid .soin-details').forEach(el => {
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
