$(function() {
    $('#flecha').click(function () {
        $('.lista-navegable').slideToggle('slow');
    });
});
$(window).resize(function() {
  var ancho = $(window).width();
  if (ancho > 766) {
    $('.lista-navegable').css("display", "flex");
  }
  else {
    $('.lista-navegable').css("display", "none");
  }
});
