<?php

  $dsn = "mysql:host=localhost;dbname=bodegaAndina;port=3306";
  $opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

  $base = new PDO($dsn, 'root', '', $opt); //se conecta, talvez 


 ?>
