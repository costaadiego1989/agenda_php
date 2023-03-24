<?php

    $host = "localhost";
    $user = "root";
    $password = "ueuf3900";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $password, $db);

    $nome = "Sargento Pimentinha";
    $descricao = "Um boneco muito legal de quebra nozes.";
    $preco = 79;

    $stmt = $conn->prepare("INSERT INTO products(nome, descricao, preco) VALUES(?, ?, ?)");
    $stmt->bind_param("ssi", $nome, $descricao, $preco); // s = String, i = Integer, d = Double
    $stmt->execute();
    $stmt->close();