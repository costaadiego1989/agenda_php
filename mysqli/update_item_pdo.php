<?php

    $host = "localhost";
    $user = "root";
    $password = "ueuf3900";
    $db = "cursophp";

    $conn = new PDO("mysql:host=$host; dbname=$db", $user, $password);

    $nome = "Cabeça de Buda em Mármore";
    $descricao = "Essa cabeça do Buda é chiquérrima, além de valorizar sua sala.";
    $preco = 1999;  
    $id = 11; 

    $stmt = $conn->prepare("UPDATE products SET nome = :nome, descricao = :descricao, preco = :preco WHERE id = :id");
    
    $stmt->bindParam(":id",$id);
    $stmt->bindParam(":nome",$nome);
    $stmt->bindParam(":descricao",$descricao);
    $stmt->bindParam(":preco",$preco);
    $stmt->execute();