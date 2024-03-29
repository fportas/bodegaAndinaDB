<!DOCTYPE html>
<html lang="es" dir="ltr">
  <?php
    require_once 'form-master-controller.php';
    require_once 'conexion.php';
    //
    if ( !isLogged() ) {
      header('location: login.php');
      exit;
    }
    $theUser = $_SESSION['userLoged'];

    // echo "<pre>";
    // var_dump($_SESSION['userLoged']);
    // echo "</pre>";

  ?>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Perfil de Usuario</title>
    <link rel="stylesheet" href="css/perfil-de-usuario.css">
    <link rel="stylesheet" href="css/stylesf.css">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <!-- Iconos -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- Iconos -->
  </head>


  <body>
    <div class="body-usuario">
      <nav>

        <div class="logo-perfil">
          <img class=imagen-perfil src="images/logo-principal.png" alt="logo andina">
        </div>

        <div class="iconos">
         <!-- <a title="Home" href="index.php"> <i class="fas fa-user-circle"></i> </a>
         <a title="Preguntas Frecuentes" href="preguntas-frecuentes.php"><i class="fas fa-question-circle"></i></a> -->
          <a title="Salir" href="logout.php"><i class="fas fa-sign-out-alt"></i></a>

          <div class="nav-bar-preguntas">
            <?php require_once("partials/nav-bar.php");?>
          </div>

        </div>
      </nav>

    <div class="titulo">
      <h1>Bienvenid@ <?= $theUser["name"]; ?></h1>
      <img src="data/avatars/<?= $theUser['avatar']=null ? "default.jpg" : $theUser['avatar']; ?>" class="avatar" alt="">
    </div>

    <div class="container">
      <div class="servicios">

        <a title="Envios" href="http://www.google.com"><img src="images/icons/icon-envios.png" alt="Envios" /></a>
        <h4>Seguimiento <br>de entrega</h4>
      </div>
      <div class="servicios">
        <a title="Lista" href="http://www.google.com"><img src="images/icons/icon-lista.png" alt="Lista" /></a>
        <h4>Mis pedidos</h4>
      </div>
      <div class="servicios">
      <a title="Pagos" href="http://www.google.com"><img src="images/icons/icon-tarjeta-dorada.png" alt="Pagos" /></a>
        <h4>Mis pagos</h4>
      </div>
      <div class="servicios">
        <a title="Shop" href="http://www.google.com"><img src="images/icons/icon-carrito.png" alt="Shop" /></a>
        <h4>Shop online</h4>
      </div>
    </div>



      <footer>
        <div class="contacto">
          <h5>Atención al cliente <br> +54 000-000-000</h5>
        </div>
        <div class="contacto">
          <h5>Dirección Av. Siempre Viva 1234<br> Rafaela, Mendoza</h5>
        </div>
        <div class="compras">
          <h5>Compra <br> Segura</h5>
        </div>
      </footer>

      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>
          $('.toggle-nav').click(function (e) {
            e.preventDefault();
            $('.main-nav').slideToggle('fast');
          });
        </script>
    </div>
  </body>
</html>
