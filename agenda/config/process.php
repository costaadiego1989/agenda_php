<?php

session_start();

include_once("connection.php");
include_once("url.php");

$query = "SELECT * FROM contacts";
$smtm = $conn->query($query);
$smtm->execute();

$contacts = $smtm->fetchAll();
