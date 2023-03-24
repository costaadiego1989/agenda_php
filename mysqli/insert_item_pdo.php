<?php

    $host = "localhost";
    $user = "root";
    $password = "ueuf3900";
    $db = "cursophp";

    $conn = new PDO("mysql:host=$host; dbname=$db", $user, $password);

$nome = "Cabeça de Buda em Mármore";
$descricao = "Essa cabeça do Buda é linda e maravilhosa, além de valorizar sua sala.";
$preco = 199;

$stmt = $conn->prepare("INSERT INTO products (nome, descricao, preco) VALUES (:nome, :descricao, :preco)");
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":descricao", $descricao);
$stmt->bindParam(":preco", $preco);
$stmt->execute();