<?php

    $host = "localhost";
    $user = "root";
    $password = "ueuf3900";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $password, $db);

    $nome = "Chupeta do Joaquim";
    $descricao = "Uma chupeta muito linda que comprei para meu bebezinho.";
    $preco = 35;
    $id = 5;

    $stmt = $conn->prepare("UPDATE products SET nome = ?, descricao = ?, preco = ? WHERE id = ?");
    $stmt->bind_param("ssii", $nome, $descricao, $preco, $id);
    $stmt->execute();