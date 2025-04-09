document.addEventListener('DOMContentLoaded', function () {
  // More reliable viewport check (20% visibility threshold)
  function isInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
      rect.top <= window.innerHeight * 0.99 &&
      rect.bottom >= window.innerHeight * 0.01
    );
  }

  // Throttled scroll handler
  let ticking = false;
  const handleScroll = () => {
    const elements = document.querySelectorAll(
      '.animate-on-scroll:not(.in-view)'
    );
    elements.forEach((el) => {
      if (isInViewport(el)) {
        el.classList.add('in-view');
      }
    });
    ticking = false;
  };

  window.addEventListener('scroll', () => {
    if (!ticking) {
      requestAnimationFrame(handleScroll);
      ticking = true;
    }
  });

  // Trigger immediately
  handleScroll();
});