<?php

  // Opcion 1 como lo mostraron en clase

  // $dsn = "mysql:host=localhost;dbname=bodegaAndina;port=3306";
  // $opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
  //
  // $base = new PDO($dsn, 'root', '', $opt); //se conecta, talvez
  //

  // Opcion 2 como el video mac de fede

  // $dsn = "mysql:dbname=bodegaAndina;host=127.0.0.1;port=3306";
  //
  // $usuario = "root";
  //
  // // opcion mac de fede
  //
  // // $pass = "";
  //
  // //  opcion DH
  //
  // $pass = "root";
  //
  // $baseDeDatos = new PDO($dsn, $usuario, $pass);



  // Prueba de la conec
  try {

    $dsn = "mysql:dbname=bodegaAndina;host=127.0.0.1;port=3306";
    $usuario = "root";
    $pass = "";

    $baseDeDatos = new PDO($dsn, $usuario, $pass);

    //con execute cortito

    // echo ("estoy conectado logi");


  } catch(PDOException $error) {

    echo("Ocurrió un error al crear el nuevo libro");
    die();
  }


 ?>
