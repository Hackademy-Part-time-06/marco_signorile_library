import 'bootstrap';
  // import Swiper JS
  import Swiper from 'swiper/bundle';

  // import styles bundle
  import 'swiper/css/bundle';

//const swiper = new Swiper('.swiper', {
    // Optional parameters
//    direction: 'vertical',
//    loop: true,
  
 //   // If we need pagination
   // pagination: {
    //  el: '.swiper-pagination',
    //},
  
    // Navigation arrows
    //navigation: {
    //  nextEl: '.swiper-button-next',
    //  prevEl: '.swiper-button-prev',
    //},
  
    // And if we need scrollbar
    //scrollbar: {
    //  el: '.swiper-scrollbar',
    //},
  //});

  const progressCircle = document.querySelector(".autoplay-progress svg");
    const progressContent = document.querySelector(".autoplay-progress span");
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      },
      on: {
        autoplayTimeLeft(s, time, progress) {
          progressCircle.style.setProperty("--progress", 1 - progress);
          progressContent.textContent = `${Math.ceil(time / 1000)}s`;
        }
      }
    });

  