const swiper = new Swiper('.swiper', {
    effect: 'slide', // or 'cube', 'coverflow' for different 3D effects
    loop: true, 
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });
  