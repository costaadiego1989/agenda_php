<?php

$host = "localhost";
$db = "agenda";
$user = "root";
$password = "ueuf3900";

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    // Ativar modo de erros
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}