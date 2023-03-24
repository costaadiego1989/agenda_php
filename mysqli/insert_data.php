<?php

    $host = "localhost";
    $user = "root";
    $password = "ueuf3900";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $password, $db);

    $table = "products";
    $nome = "Calcinha rosa de renda";
    $descricao = "Uma pequena calcinha de rosa com rendinha.";
    $preco = "19";

    $q = "INSERT INTO $table (nome, descricao, preco) VALUES ('$nome', '$descricao', '$preco')";
    $result = $conn->query($q);
    print_r($result);
    $conn->close();