<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/iconos.css">
    <link rel="stylesheet" href="css/libros.css">
    <link rel="stylesheet" href="css/footer.css">

  </head>
  <body>
    <?php
        include 'constantes.php';
        include 'header.php';
    ?>
    <img class="fotoPrincipal" src="<?php echo $fotoPrincipal; ?>">
    <section>
      <h1 class="Lucida-Calligraphy">Saga Whitehorse</h1>
      <div class="row">
        <div class="col-3">
          <h2 class="titulo-libro Castellar">WHITEHORSE 1</h2>
          <img class="sombra" src="<?php echo $whitehorse1; ?>" alt="">
        </div>
        <div class="col-9 descripcion desc-izq">
          <p> La historia de Lina Smith comienza a principios de los años noventa en el pequeño y hermoso Whitehorse. Lina llegó allí luego de quedar huérfana, y ahora es la obediente sobrina del reverendo del pueblo. Sus días simples transcurren junto a sus inseparables amigos, los hermanos J.J.</p>
          <p>Pero una noche, por estar en el momento y lugar equivocado, Lina se cruza con un hombre misterioso que resulta ser un demonio: Máximus. Así, la sencilla y asmática muchacha de Whitehorse se vuelve la pieza fundamental de la competencia más antigua entre Cielos e Infiernos.</p>
          <p>Todo ha funcionado bien desde que se inició la Gran Competencia, aquella que mantiene el equilibrio entre los reinos, hasta que la mujer elegida no es otra que Angelina.</p>
          <p>¿Qué elegirá Lina al final? ¿Cumplir como siempre con el mandato correcto pero impuesto o ser fiel a ella misma y a sus más profundos deseos? Este es el primer paso de una historia que confirma que el camino al Infierno está plagado de buenas intenciones.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-9 descripcion desc-der">
          <p> La historia de Lina Smith comienza a principios de los años noventa en el pequeño y hermoso Whitehorse. Lina llegó allí luego de quedar huérfana, y ahora es la obediente sobrina del reverendo del pueblo. Sus días simples transcurren junto a sus inseparables amigos, los hermanos J.J.</p>
          <p>Pero una noche, por estar en el momento y lugar equivocado, Lina se cruza con un hombre misterioso que resulta ser un demonio: Máximus. Así, la sencilla y asmática muchacha de Whitehorse se vuelve la pieza fundamental de la competencia más antigua entre Cielos e Infiernos.</p>
          <p>Todo ha funcionado bien desde que se inició la Gran Competencia, aquella que mantiene el equilibrio entre los reinos, hasta que la mujer elegida no es otra que Angelina.</p>
          <p>¿Qué elegirá Lina al final? ¿Cumplir como siempre con el mandato correcto pero impuesto o ser fiel a ella misma y a sus más profundos deseos? Este es el primer paso de una historia que confirma que el camino al Infierno está plagado de buenas intenciones.</p>
        </div>
        <div class="col-3">
          <h2 class="titulo-libro Castellar">WHITEHORSE 2</h2>
          <img class="sombra" src="<?php echo $whitehorse2; ?>" alt="">
        </div>
      </div>
      <div class="row">
        <div class="col-3">
          <h2 class="titulo-libro Castellar">WHITEHORSE 3</h2>
          <img class="sombra" src="<?php echo $whitehorse3; ?>" alt="">
        </div>
        <div class="col-9 descripcion desc-izq">
          <p> La historia de Lina Smith comienza a principios de los años noventa en el pequeño y hermoso Whitehorse. Lina llegó allí luego de quedar huérfana, y ahora es la obediente sobrina del reverendo del pueblo. Sus días simples transcurren junto a sus inseparables amigos, los hermanos J.J.</p>
          <p>Pero una noche, por estar en el momento y lugar equivocado, Lina se cruza con un hombre misterioso que resulta ser un demonio: Máximus. Así, la sencilla y asmática muchacha de Whitehorse se vuelve la pieza fundamental de la competencia más antigua entre Cielos e Infiernos.</p>
          <p>Todo ha funcionado bien desde que se inició la Gran Competencia, aquella que mantiene el equilibrio entre los reinos, hasta que la mujer elegida no es otra que Angelina.</p>
          <p>¿Qué elegirá Lina al final? ¿Cumplir como siempre con el mandato correcto pero impuesto o ser fiel a ella misma y a sus más profundos deseos? Este es el primer paso de una historia que confirma que el camino al Infierno está plagado de buenas intenciones.</p>
        </div>
      </div>
    </section>
    <?php include 'footer.php'; ?>

    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>

    <script src="js/slick.js" type="text/javascript"></script>
    <script src="js/variantes-color.js"></script>
    <script>verdeLibros();</script>
  </body>
</html>
