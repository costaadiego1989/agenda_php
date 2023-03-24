<?php

    $host = "localhost";
    $user = "root";
    $password = "ueuf3900";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $password, $db);

    // $query = "CREATE TABLE testando (nome VARCHAR(255))";
    // $result = $conn->query($query);
    // printf($result);
    // $conn->close();

    $query = "DROP TABLE testando";
    $conn->query($query);
    $conn->close();