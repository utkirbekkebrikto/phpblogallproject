<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="php-blog";

try {
  $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  // set the PDO error mode to exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo " ";
} catch(PDOException $e) {
  echo "Afsus boglana olmadi: " . $e->getMessage();
}
?>