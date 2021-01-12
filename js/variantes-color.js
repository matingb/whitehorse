function violeta(){
  var violeta = 'rgb(127, 109, 151)';
  var blanco = 'rgb(255, 255, 255)';
  var gris = 'rgb(238, 238, 238)';
  var negro = 'rgb(0, 0, 0)';

  $(".navegable").css("background", violeta);

  $(".navegable-li").mouseenter(function() {
      $(this).css("color", violeta);
  }).mouseleave(function() {
      $(this).css("color", blanco);
  });
  $(".icono").mouseenter(function() {
      $(this).css("background-color", violeta).css("color", blanco);
  }).mouseleave(function() {
      $(this).css("background-color", gris).css("color", negro);
  });

  $(".footer").css("background", violeta);

  $(".icono").addClass("icono-violeta");
};


function verde(){
  var verde = 'rgb(79, 140, 135)';
  var blanco = 'rgb(255, 255, 255)';
  var gris = 'rgb(238, 238, 238)';
  var negro = 'rgb(0, 0, 0)';

  $(".navegable").css("background", verde);
  $(".navegable-li").mouseenter(function() {
      $(this).css("color", verde);
  }).mouseleave(function() {
      $(this).css("color", blanco);
  });
  $(".icono").mouseenter(function() {
      $(this).css("background-color", verde).css("color", blanco);
  }).mouseleave(function() {
      $(this).css("background-color", gris).css("color", negro);
  });
  $(".footer").css("background", verde);
  $(".icono").addClass("icono-verde");
};

function verdeLibros(){
  var verdeLibros = 'rgb(130, 195, 139)';
  var blanco = 'rgb(255, 255, 255)';
  var negro = 'rgb(0, 0, 0)';
  var gris = 'rgb(238, 238, 238)';

  $(".navegable").css("background", verdeLibros);

  $(".navegable-li").mouseenter(function() {
      $(this).css("color", verdeLibros);
  }).mouseleave(function() {
      $(this).css("color", blanco);
  });

  $(".icono").mouseenter(function() {
      $(this).css("background-color", verdeLibros).css("color", blanco);
  }).mouseleave(function() {
      $(this).css("background-color", gris).css("color", negro);
  });
  $(".footer").css("background", verdeLibros);

  $(".icono").addClass("icono-verde-libros");
};

function celeste(){
  var celeste = 'rgb(7, 175, 238)';
  var blanco = 'rgb(255, 255, 255)';
  var gris = 'rgb(238, 238, 238)';
  var negro = 'rgb(0, 0, 0)';

  $(".navegable").css("background", celeste);

  $(".navegable-li").mouseenter(function() {
      $(this).css("color", celeste);
  }).mouseleave(function() {
      $(this).css("color", blanco);
  });

  $(".icono").mouseenter(function() {
      $(this).css("background-color", celeste).css("color", blanco);
  }).mouseleave(function() {
      $(this).css("background-color", gris).css("color", negro);
  });

  $(".footer").css("background", celeste);
  $(".icono").addClass("icono-rojo");
};
