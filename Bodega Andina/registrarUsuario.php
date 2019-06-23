<?php
  require_once 'conexion.php';
  require_once 'register.php';

  $name = $_POST['name'];
  $user = $_POST['user'];
  $country = $_POST['country'];
  $email = $_POST['email'];
  $avatar = $_POST['avatar'];
  $password = $_POST['password'];



  try {
  	$consulta = $base->prepare("INSERT INTO registro (name, user, country, email, avatar, password) values (?, ?, ?, ?, ?, ?)");

  	//con bind value
  	// $consulta->bindValue(1, $titulo, PDO::PARAM_STR);
  	// $consulta->bindValue(2, $id_autor, PDO::PARAM_INT);
  	// $consulta->execute();

  	//con execute cortito
  	$consulta->execute([$name, $user, $country, $email, $avatar, $password]);

  } catch(PDOException $error) {

  	echo("Ocurrió un error al crear el nuevo libro");
  	die();
  }

  header('Location: perfil-de-usuario.php');






 ?>
