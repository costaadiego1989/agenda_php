<?php

    $host = "localhost";
    $user = "root";
    $password = "ueuf3900";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $password, $db);

    $id = 5;

    $stmt = $conn->prepare("SELECT * FROM products WHERE id > ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $result = $stmt->get_result();
    $data = $result->fetch_row();

    print_r($data);