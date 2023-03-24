<?php
    include_once("templates/header.php");
?>

<div class="container" id="view-contact-container">
    <h2 id="main-title"><?= $contact["name"] ?></h2>

    <hr>

    <p class="bold">E-mail:</p>
    <p><?= $contact["email"] ?></p>

    <p class="bold">Telefone:</p>
    <p><?= $contact["phone"] ?></p>

    <p class="bold">Descrição:</p>
    <p><?= $contact["description"] ?></p>
</div>

<?php
    include_once("templates/footer.php");
?>