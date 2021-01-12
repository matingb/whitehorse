<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>W. Parrot</title>

    <link rel="icon" href="">
    <meta name="viewport" content="width=device-width" />

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/iconos.css">
    <link rel="stylesheet" href="css/sobreMi.css">
    <link rel="stylesheet" href="css/footer.css">

    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
  </head>
  <body>
    <?php
        include 'constantes.php';
        include 'header.php';
    ?>
    <img class="fotoPrincipal" src="<?php echo $fotoPrincipal; ?>">
    <section>
        <h1 class="Lucida-Calligraphy">Sobre Mí</h1>
      <div class="row">
        <div class="col-3">
          <img class="sombra" src="<?php echo $lauraPerfil; ?>" alt="">
        </div>
        <div class="col-9 sobreMi">
          <p>Hasta ahora, W.Parrot ha tenido tres bonitas sorpresas en su vida: los libros, la psicología y Whitehorse.</p>
          <p>En sus historias y en su día a día se interesa por la igualdad y la aceptación de lo diferente.</p>
        </div>
      </div>
    </section>
    <?php include ('footer.php'); ?>
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <script src="js/variantes-color.js"></script>
    <script>celeste();</script>

  </body>
</html>
