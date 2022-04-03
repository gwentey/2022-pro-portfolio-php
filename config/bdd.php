<?php
  $servername = 'localhost';
  $username = 'root';
  $password = 'root';
  $bd= 'portfolio';
  
  try{
      $conn = new PDO("mysql:host=$servername;dbname=$bd", $username, $password);

      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  

  catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
  }

?>