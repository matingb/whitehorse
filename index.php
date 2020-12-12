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
    <link rel="stylesheet" href="css/index.css">
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
      <h1 class="Lucida-Calligraphy">Saga Whitehorse</h1>
      <div class="carrousel-libros">
        <div class="columna-libro">
          <h2 class="titulo-libro Castellar">WHITEHORSE 1</h2>
          <div class="libro">
            <img id="whitehorse1" class="sombra" src="<?php echo $whitehorse1; ?>" alt="">
            <div class="iconos-de-libro">
              <a href="#" class="icon-eye icono-de-libro" style="text-decoration:none;"></a>
              <a href="<?php echo $compraWhitehorse1; ?>" class="icon-shopping-cart icono-de-libro" style="text-decoration:none;"></a>
            </div>
          </div>
        </div>
        <div class="columna-libro">
          <h2 class="titulo-libro Castellar">WHITEHORSE 2</h2>
          <div class="libro">
            <img id="whitehorse2" class="sombra" src="<?php echo $whitehorse2; ?>" alt="">
            <div class="iconos-de-libro">
              <a href="#" class="icon-eye icono-de-libro" style="text-decoration:none;"></a>
              <a href="<?php echo $compraWhitehorse2; ?>" class="icon-shopping-cart icono-de-libro" style="text-decoration:none;"></a>
            </div>
          </div>
        </div>
        <div class="columna-libro">
          <h2 class="titulo-libro Castellar">WHITEHORSE 3</h2>
          <div class="libro">
            <img id="whitehorse3" class="sombra" src="<?php echo $whitehorse3; ?>" alt="">
            <div class="iconos-de-libro">
              <a href="#" class="icon-eye icono-de-libro" style="text-decoration:none;"></a>
              <a href="<?php echo $compraWhitehorse3; ?>" class="icon-shopping-cart icono-de-libro" style="text-decoration:none;"></a>
            </div>
          </div>
        </div>
        <div class="columna-libro">
          <h2 class="titulo-libro Castellar">WHITEHORSE 4</h2>
          <div class="libro">
            <img id="whitehorse1" class="sombra" src="<?php echo $proximamente; ?>" alt="">
            <div class="iconos-de-libro">
              <a href="#" class="icon-eye icono-de-libro" style="text-decoration:none;"></a>
              <a href="#" class="icon-shopping-cart icono-de-libro" style="text-decoration:none;"></a>
            </div>
          </div>
        </div>
        <div class="columna-libro">
          <h2 class="titulo-libro Castellar">WHITEHORSE 5</h2>
          <div class="libro">
            <img id="whitehorse3" class="sombra" src="<?php echo $proximamente; ?>" alt="">
            <div class="iconos-de-libro">
              <a href="#" class="icon-eye icono-de-libro" style="text-decoration:none;"></a>
              <a href="#" class="icon-shopping-cart icono-de-libro" style="text-decoration:none;"></a>
            </div>
          </div>
        </div>
        <div class="columna-libro">
          <h2 class="titulo-libro Castellar">WHITEHORSE 6</h2>
          <div class="libro">
            <img id="whitehorse3" class="sombra" src="<?php echo $proximamente; ?>" alt="">
            <div class="iconos-de-libro">
              <a href="#" class="icon-eye icono-de-libro" style="text-decoration:none;"></a>
              <a href="#" class="icon-shopping-cart icono-de-libro" style="text-decoration:none;"></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php include ('footer.php'); ?>
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>

    <script src="js/slick.js" type="text/javascript"></script>
    <script src="js/variantes-color.js"></script>
    <script>verde();</script>

  </body>
</html>
