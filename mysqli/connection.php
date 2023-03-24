<?php

    $host = "localhost";
    $user = "root";
    $password = "ueuf3900";
    $db = "cursophpa";

    $conn = new mysqli($host, $user, $password, $db);

    if ($conn->connect_errno) {
        echo "Error: " . $conn->connect_errno . "<br>";
    } else {
        echo "Conexão estabelecidade com sucesso.";
    }