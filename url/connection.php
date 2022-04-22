<?php


// Modelo de Banco de dados PDO


$host = "localhost";
$db = "register";
$user = "root";
$pass = "";

try {
    $connection = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    $error = $e->getMessage();
    echo "Erro na conexão: <br> $error";
}
