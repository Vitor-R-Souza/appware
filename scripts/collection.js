
var swiper = new Swiper(".mini-carousel1", {
  slidesPerView:1,
  spaceBetween: 10,
  autoplay: {
    delay: 5500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next", /*.swiper-button-next*/
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
     280:{
          slidesPerView:1,
          spaceBetween:10,
     },
     320:{
         slidesPerView:2,
         spaceBetween:10,
     },
     510:{
       slidesPerView:2,
       spaceBetween:10,
     },
     758:{
       slidesPerView:3,
       spaceBetween:15,
     },
     900:{
       slidesPerView:4,
       spaceBetween:20,
     },
  }
});

  var swiper2 = new Swiper(".mini-carousel2", {
    slidesPerView:1,
    spaceBetween: 10,
    autoplay: {
      delay: 4500,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".next2",
      prevEl: ".prev2",
    },
    breakpoints: {
       280:{
            slidesPerView:1,
            spaceBetween:10,
       },
       320:{
           slidesPerView:2,
           spaceBetween:10,
       },
       510:{
         slidesPerView:2,
         spaceBetween:10,
       },
       758:{
         slidesPerView:3,
         spaceBetween:15,
       },
       900:{
         slidesPerView:4,
         spaceBetween:20,
       },
    }
  });


var swiper3 = new Swiper(".mini-carousel3", {
  slidesPerView:1,
  spaceBetween: 10,
  autoplay: {
    delay: 6500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
     280:{
          slidesPerView:1,
          spaceBetween:10,
     },
     320:{
         slidesPerView:2,
         spaceBetween:10,
     },
     510:{
       slidesPerView:2,
       spaceBetween:10,
     },
     758:{
       slidesPerView:3,
       spaceBetween:15,
     },
     900:{
       slidesPerView:4,
       spaceBetween:20,
     },
  }
});