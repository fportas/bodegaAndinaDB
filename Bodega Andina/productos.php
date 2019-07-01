<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php require_once 'form-master-controller.php';
require_once 'conexion.php';



?>

  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/stylesf.css">
    <link rel="stylesheet" href="css/preguntas-frecuentes.css">
    <!-- css de pregutas frecuentes pongo los estilos para no hacer otro css de productos -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Productos</title>
  </head>
  <body>

    <header class="header_productos">
      <div class="nav-preguntas">
        <div class="logo-preguntas">
          <img src="images/logo-principal.png" alt="logo andina">
        </div>
      </div>
          <?php
          require_once("partials/nav-bar.php");
           ?>
    </header>
    <div class="titulo-productos">
      <h2>Nuestros Productos</h2>
    </div>

    <div class="container-productos">
      <div class="preguntas-body">



       <div class="preguntas-pedido ventanaProducto">
         <img src="images/mockup-botella.png" alt="Imagen de botella de vino" class="botella">
         <h3>Vino ....</h3>
         <p>Lorem ipsum dolor sit amet, consectetur</p>
         <p class="precio">$780</p>
       </div>

       <div class="preguntas-pedido ventanaProducto">
         <img src="images/mockup-botella.png" alt="Imagen de botella de vino" class="botella">
         <h3>Vino ....</h3>
         <p>Lorem ipsum dolor sit amet, consectetur</p>
         <p class="precio">$630</p>
       </div>

       <div class="preguntas-pedido ventanaProducto">
         <img src="images/mockup-botella.png" alt="Imagen de botella de vino" class="botella">
         <h3>Vino ....</h3>
         <p>Lorem ipsum dolor sit amet, consectetur</p>
         <p class="precio">$723</p>
       </div>

       <div class="preguntas-pedido ventanaProducto">
         <img src="images/mockup-botella.png" alt="Imagen de botella de vino" class="botella">
         <h3>Vino ....</h3>
         <p>Lorem ipsum dolor sit amet, consectetur</p>
         <p class="precio">$723</p>
       </div>


      </div>

      <div class="preguntas-body2">
        <div class="preguntas-pedido ventanaProducto">
          <img src="images/mockup-botella.png" alt="Imagen de botella de vino" class="botella">
          <h3>Vino ....</h3>
          <p>Lorem ipsum dolor sit amet, consectetur</p>
          <p class="precio">$540</p>
        </div>

        <div class="preguntas-pedido ventanaProducto">
          <img src="images/mockup-botella.png" alt="Imagen de botella de vino" class="botella">
          <h3>Vino ....</h3>
          <p>Lorem ipsum dolor sit amet, consectetur</p>
          <p class="precio">$230</p>
        </div>

        <div class="preguntas-pedido ventanaProducto">
          <img src="images/mockup-botella.png" alt="Imagen de botella de vino" class="botella">
          <h3>Vino ....</h3>
          <p>Lorem ipsum dolor sit amet, consectetur</p>
          <p class="precio">$180</p>
        </div>

        <div class="preguntas-pedido ventanaProducto">
          <img src="images/mockup-botella.png" alt="Imagen de botella de vino" class="botella">
          <h3>Vino ....</h3>
          <p>Lorem ipsum dolor sit amet, consectetur</p>
          <p class="precio">$180</p>
        </div>
      </div> <!-- cierro preguntas body -->

    </div>

    <!-- Footer -->

    <?php
      require_once("partials/footerIndex.php");
    ?>



    <!-- Evento para desplegar menu  -->

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
      $('.toggle-nav').click(function (e) {
      e.preventDefault();
      $('.main-nav').slideToggle('fast');
      });
    </script>



  </body>
</html>
