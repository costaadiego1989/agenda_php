<?php

session_start();

include_once("connection.php");
include_once("url.php");

$id;

if(!empty($_GET)) {
    $id = $_GET['id'];
}

if(!empty($id)) {
    $query = "SELECT * FROM contacts WHERE id = :id";

    $smtm = $conn->prepare($query);
    $smtm->bindParam(":id", $id);
    $smtm->execute();

    $contact = $smtm->fetch();
} else {
    $query = "SELECT * FROM contacts";

    $smtm = $conn->query($query);
    $smtm->execute();

    $contacts = $smtm->fetchAll();
}
