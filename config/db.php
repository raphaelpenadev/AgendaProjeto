<?php
$host = "localhost";
$db_name = "db_agenda";
$user = "root";
$password = "";


try {
  $conn = new PDO("mysql:host=$host;dbname=$db_name", $user, $password);

  // Ativar modo de erros
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  $error = $e->getMessage();
  echo "Erro: $error";
}
