document.addEventListener('DOMContentLoaded', () => {
  const carousels = Array.from(document.querySelectorAll('[data-carousel]'));

  carousels.forEach((carousel) => {
    const track = carousel.querySelector('[data-carousel-track]');
    const slides = Array.from(carousel.querySelectorAll('[data-carousel-slide]'));
    const prevBtn = carousel.querySelector('[data-carousel-prev]');
    const nextBtn = carousel.querySelector('[data-carousel-next]');
    const dotsContainer =
      carousel.querySelector('[data-carousel-dots]') ||
      carousel.parentElement?.querySelector('[data-carousel-dots]') ||
      carousel.closest('.card')?.querySelector('[data-carousel-dots]');

    if (!track || slides.length === 0) return;

    let index = 0;

    function getSlideWidth() {
      const firstSlide = slides[0];
      if (!firstSlide) return 0;
      // Prefer the carousel viewport width; fallback to slide width.
      const viewportWidth = Math.round(carousel.getBoundingClientRect().width);
      if (viewportWidth > 0) return viewportWidth;
      return Math.round(firstSlide.getBoundingClientRect().width);
    }

    function update() {
      const slideWidth = getSlideWidth();
      track.style.transform = `translate3d(-${index * slideWidth}px, 0, 0)`;
      slides.forEach((slide, i) => {
        slide.setAttribute('aria-hidden', i === index ? 'false' : 'true');
      });

      if (dotsContainer) {
        const dots = Array.from(dotsContainer.querySelectorAll('button'));
        dots.forEach((dot, i) => {
          const isActive = i === index;
          dot.setAttribute('aria-current', isActive ? 'true' : 'false');
          dot.classList.toggle('is-active', isActive);
        });
      }

      if (prevBtn) prevBtn.disabled = slides.length <= 1;
      if (nextBtn) nextBtn.disabled = slides.length <= 1;
    }

    function goTo(newIndex) {
      const max = slides.length - 1;
      index = Math.max(0, Math.min(max, newIndex));
      update();
    }

    function goPrev() {
      goTo(index - 1);
    }

    function goNext() {
      goTo(index + 1);
    }

    if (prevBtn) prevBtn.addEventListener('click', goPrev);
    if (nextBtn) nextBtn.addEventListener('click', goNext);

    // --- Touch Support for Mobile (Swipe) ---
    let touchStartX = 0;
    let touchEndX = 0;

    // Use passive listeners for better scrolling performance
    carousel.addEventListener(
      'touchstart',
      (e) => {
        touchStartX = e.changedTouches[0].screenX;
      },
      { passive: true }
    );

    carousel.addEventListener(
      'touchend',
      (e) => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
      },
      { passive: true }
    );

    function handleSwipe() {
      // Swipe threshold in pixels
      const threshold = 50;
      if (touchEndX < touchStartX - threshold) {
        // Swiped Left -> Next
        goNext();
      }
      if (touchEndX > touchStartX + threshold) {
        // Swiped Right -> Prev
        goPrev();
      }
    }
    // ---------------------------------------

    if (dotsContainer) {
      dotsContainer.innerHTML = '';
      slides.forEach((_, i) => {
        const dot = document.createElement('button');
        dot.type = 'button';
        dot.className = 'carousel-dot';
        dot.setAttribute('aria-label', `Aller à la photo ${i + 1}`);
        dot.addEventListener('click', () => goTo(i));
        dotsContainer.appendChild(dot);
      });
    }

    carousel.addEventListener('keydown', (e) => {
      if (e.key === 'ArrowLeft') {
        e.preventDefault();
        goPrev();
      }
      if (e.key === 'ArrowRight') {
        e.preventDefault();
        goNext();
      }
    });

    // Keep sizing correct when viewport changes or images finish loading.
    window.addEventListener('resize', () => update());

    // Force update on window load to ensure all styles are applied
    window.addEventListener('load', () => update());

    slides.forEach((slide) => {
      const img = slide.querySelector('img');
      if (!img) return;
      if (img.complete) {
         // If already loaded, update immediately
         update();
      } else {
         img.addEventListener('load', () => update(), { once: true });
         img.addEventListener('error', () => update(), { once: true });
      }
    });

    // Initial update
    update();

    // Safety check: retry after a short delay in case of layout thrashing
    setTimeout(update, 100);
    setTimeout(update, 500);
  });
});
