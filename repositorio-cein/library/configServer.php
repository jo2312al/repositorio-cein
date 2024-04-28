<?php
$servername = "10.0.0.6";
$username = "admin";
$password = "1234123";
$dbname = "store";



$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
  }
  
  echo "Conexión exitosa";


?>
