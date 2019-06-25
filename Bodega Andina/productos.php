<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php require_once 'form-master-controller.php'; ?>
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

    <div class="container-productos">
      <div class="preguntas-body">
        <h2>Nuestros Productos</h2>

       <div class="preguntas-pedido ventanaProducto">
         <img src="images/mockup-botella.png" alt="Imagen de botella de vino" class="botella">
         <h3>Vino ....</h3>
         <p>Lorem ipsum dolor sit amet, consectetur</p>
         <p class="precio">$780</p>
       </div>

       <div class="preguntas-cambios">
         <h3>Cambios sobre mi pedido</h3>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
           ut labore et dolore magna aliqua.</p>
       </div>

       <div class="preguntas-pagos">
         <h3>Medios de pagos, precios y beneficios</h3>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
           ut labore et dolore magna aliqua.</p>
       </div>
       </div>

      <div class="preguntas-body2">
           <div class="preguntas-devolucion">
             <h3>Facturación, devolución y dudas de cobro</h3>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
               ut labore et dolore magna aliqua.</p>
           </div>

           <div class="preguntas-inconvenientes">
             <h3>Inconvenientes en el destino</h3>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
               ut labore et dolore magna aliqua.</p>
           </div>

           <div class="preguntas-cuenta">
             <h3>Dudas sobre mi cuenta</h3>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
               ut labore et dolore magna aliqua.</p>
           </div>
      </div> <!-- cierro preguntas body -->

    </div>



  </body>
</html>
