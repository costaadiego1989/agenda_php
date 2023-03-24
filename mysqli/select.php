<?php

    $host = "localhost";
    $user = "root";
    $password = "ueuf3900";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $password, $db);

    $query = "SELECT * from products";
    $result = $conn->query($query);
    print_r($result);
    $conn->close();