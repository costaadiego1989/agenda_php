<?php

    $host = "localhost";
    $user = "root";
    $password = "ueuf3900";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $password, $db);

    $q = "SELECT * FROM products";
    $result = $conn->query($q);
    // Retorna apeas um item
    print_r($result->fetch_assoc());
    // Retornando todos os itens
    print_r($result->fetch_all());