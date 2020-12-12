$(document).ready(function(){
  $('.carrousel-libros').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
    draggable: false,
    dots:true,
    responsive: [
    {
      breakpoint: 769,
      settings: {
        slidesToShow: 2,
        draggable: true,
      }
    },
    {
      breakpoint: 500,
      settings: {
        slidesToShow: 1,
        autoplaySpeed: 1500,
      }
    },
  ]
  });
});
