<?php

    $host = "localhost";
    $user = "root";
    $password = "ueuf3900";
    $db = "cursophp";

    $conn = new PDO("mysql:host=$host; dbname=$db", $user, $password);

    $id = 11; 

    $stmt = $conn->prepare("SELECT * FROM products WHERE id < :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    print_r($data);
    echo "<br>";
    // $data2 = $stmt->fetch(PDO::FETCH_ASSOC);
    // print_r($data2);