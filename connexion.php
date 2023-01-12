<?php
  //connexion à la base de données
  $conn = new mysqli('localhost', 'root', '','test'); // J'utilise xampp
  if($conn->connect_error)
      die('Connection failed: '.$cconn->connect_error);
?>