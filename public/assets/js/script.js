function toggleMenu() {
  const links = document.querySelector('.nav-links');
  links.classList.toggle('active');
}

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
    }
  });
});

document.querySelectorAll('.show-on-scroll').forEach(el => observer.observe(el));

window.addEventListener('scroll', () => {
  const nav = document.querySelector('nav');
  window.scrollY > 50 
      ? nav.classList.add('scrolled') 
      : nav.classList.remove('scrolled');
});

// Swiper init
const swiper = new Swiper(".mySwiper", {
  loop: true,
  spaceBetween: 20,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});