/* Responsive navigation: usable without JavaScript, keyboard and touch friendly. */
(() => {
  const nav = document.getElementById('site-navigation');
  if (!nav) return;
  const button = nav.querySelector('.menu-toggle');
  const panel = nav.querySelector('.navigation-panel');
  if (!button || !panel) return;
  const mobile = window.matchMedia('(max-width: 992px)');
  const close = (restoreFocus = false) => {
    nav.classList.remove('toggled');
    button.setAttribute('aria-expanded', 'false');
    panel.inert = mobile.matches;
    if (restoreFocus) button.focus();
  };
  nav.classList.add('menu-enhanced');
  close();
  button.addEventListener('click', () => {
    nav.classList.add('has-interacted');
    const open = !nav.classList.contains('toggled');
    nav.classList.toggle('toggled', open);
    button.setAttribute('aria-expanded', String(open));
    panel.inert = mobile.matches && !open;
  });
  document.addEventListener('click', event => { if (!nav.contains(event.target)) close(); });
  document.addEventListener('keydown', event => {
    if (event.key === 'Escape' && nav.classList.contains('toggled')) close(true);
  });
  panel.addEventListener('click', event => { if (event.target.closest('a')) close(); });
  mobile.addEventListener('change', () => close());
  // Close once keyboard focus has moved beyond the mobile navigation.
  nav.addEventListener('focusout', event => {
    if (event.relatedTarget && !nav.contains(event.relatedTarget)) close();
  });
})();
