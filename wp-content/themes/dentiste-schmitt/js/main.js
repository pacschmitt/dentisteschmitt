/**
 * Main JavaScript for Dentiste Schmitt Theme
 */

(function() {
    'use strict';

    // Mobile menu toggle
    function initMobileMenu() {
        const nav = document.querySelector('.main-navigation');
        if (!nav) return;

        // Create mobile menu button if it doesn't exist
        if (!document.querySelector('.mobile-menu-toggle')) {
            const button = document.createElement('button');
            button.classList.add('mobile-menu-toggle');
            button.innerHTML = '<i class="fas fa-bars"></i>';
            button.setAttribute('aria-label', 'Toggle Menu');
            button.setAttribute('aria-expanded', 'false');
            
            const header = document.querySelector('.site-header .container');
            header.appendChild(button);

            button.addEventListener('click', function() {
                nav.classList.toggle('active');
                const expanded = button.getAttribute('aria-expanded') === 'true';
                button.setAttribute('aria-expanded', !expanded);
                button.innerHTML = nav.classList.contains('active') 
                    ? '<i class="fas fa-times"></i>' 
                    : '<i class="fas fa-bars"></i>';
            });
        }
    }

    // Smooth scroll for anchor links
    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href === '#' || href === '#0') return;

                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    }

    // Add active class to current menu item
    function initActiveMenu() {
        const currentUrl = window.location.href;
        const menuLinks = document.querySelectorAll('.main-navigation a');
        
        menuLinks.forEach(link => {
            if (link.href === currentUrl) {
                link.classList.add('current-menu-item');
            }
        });
    }

    // Scroll to top button
    function initScrollToTop() {
        const scrollBtn = document.createElement('button');
        scrollBtn.classList.add('scroll-to-top');
        scrollBtn.innerHTML = '<i class="fas fa-arrow-up"></i>';
        scrollBtn.setAttribute('aria-label', 'Scroll to top');
        scrollBtn.style.display = 'none';
        document.body.appendChild(scrollBtn);

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                scrollBtn.style.display = 'block';
            } else {
                scrollBtn.style.display = 'none';
            }
        });

        scrollBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    // Initialize on DOM ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function() {
            initMobileMenu();
            initSmoothScroll();
            initActiveMenu();
            initScrollToTop();
        });
    } else {
        initMobileMenu();
        initSmoothScroll();
        initActiveMenu();
        initScrollToTop();
    }

})();
