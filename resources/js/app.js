import './bootstrap';
import Splide from '@splidejs/splide';
import '@splidejs/splide/dist/css/splide.min.css';

document.addEventListener('DOMContentLoaded', function () {
  // === SPLIDE BEST SELLERS
  const splideBest = document.getElementById('splide-best-sellers');
  if (splideBest) {
    new Splide(splideBest, {
      type: 'loop',
      perPage: 5,
      autoplay: true,
      interval: 2200,
      speed: 800,
      gap: '20px',
      pagination: false,
      arrows: true,
      breakpoints: {
        1600: { perPage: 4 },
        1300: { perPage: 3 },
        967: { perPage: 2 },
        650: { perPage: 1 },
      },
    }).mount();
  }

  // === SPLIDE SECOND SLIDER
  const splideSecond = document.getElementById('second-slider');
  if (splideSecond) {
    new Splide(splideSecond, {
      type: 'loop',
      pagination: false,
      perPage: 1,
      autoplay: true,
      gap: '1rem',
    }).mount();
  }

  // === SIDEMENU TOGGLE
  const toggleOpen = document.getElementById('toggleOpen');
  const toggleClose = document.getElementById('toggleClose');
  const collapseMenu = document.getElementById('collapseMenu');

  if (toggleOpen && toggleClose && collapseMenu) {
    function openMenu() {
      collapseMenu.classList.remove('max-lg:-translate-x-full');
      collapseMenu.classList.add('max-lg:translate-x-0');
    }

    function closeMenu() {
      collapseMenu.classList.remove('max-lg:translate-x-0');
      collapseMenu.classList.add('max-lg:-translate-x-full');
    }

    toggleOpen.addEventListener('click', openMenu);
    toggleClose.addEventListener('click', closeMenu);

    document.addEventListener('click', function (event) {
      const isClickInsideMenu = collapseMenu.contains(event.target);
      const isClickToggleButton = toggleOpen.contains(event.target);

      if (!isClickInsideMenu && !isClickToggleButton && window.innerWidth <= 1024) {
        closeMenu();
      }
    });
  }
});
