<?php

session_start();

include_once("connection.php");
include_once("url.php");

$data = $_POST;

if (!empty($data)) {
    if ($data["type"] == "create") {
        $name = $data["name"];
        $email = $data["email"];
        $phone = $data["phone"];
        $description = $data["description"];

        $query = "INSERT INTO contacts(name, email, phone, description) VALUES(:name, :email, :phone, :description)";
        $smtm = $conn->prepare($query);
        $smtm->bindParam(":name", $name);
        $smtm->bindParam(":email", $email);
        $smtm->bindParam(":phone", $phone);
        $smtm->bindParam(":description", $description);

        try {
            $smtm->execute();
            $_SESSION["msg"] = "Contato criado com sucesso!";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    } else if ($data["type"] == "edit") {
        $id = $data["id"];
        $name = $data["name"];
        $email = $data["email"];
        $phone = $data["phone"];
        $description = $data["description"];

        $query = "UPDATE contacts SET name = :name, email = :email, phone = :phone, description = :description WHERE id = :id";
        $smtm = $conn->prepare($query);
        $smtm->bindParam(":id", $id);
        $smtm->bindParam(":name", $name);
        $smtm->bindParam(":email", $email);
        $smtm->bindParam(":phone", $phone);
        $smtm->bindParam(":description", $description);

        try {
            $smtm->execute();
            $_SESSION["msg"] = "Contato atualizado com sucesso!";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    // Redirecionando
    header("Location:" . $BASE_URL . "../index.php");
} else {
    $id;

    if(!empty($_GET)) {
        $id = $_GET["id"];
    }
    
    if(!empty($id)) {
        $query = "SELECT * FROM contacts WHERE id = :id";
    
        $smtm = $conn->prepare($query);
        $smtm->bindParam(":id", $id);
        $smtm->execute();
    
        $contact = $smtm->fetch();
    } else {
        $query = "SELECT * FROM contacts ORDER BY id DESC";
    
        $smtm = $conn->query($query);
        $smtm->execute();
    
        $contacts = $smtm->fetchAll();
    }
}

// Fechando conexão
$conn = null;
