<?php
include_once("templates/header.php");
?>

<div class="container" id="view-contact-container">
    <?php include_once("templates/backbtn.html"); ?>
    <h2 id="main-title">Editar Usuário: <?= $contact["name"] ?></h2>
    <form action="<?= $BASE_URL ?>config/process.php" method="POST" class="edit-form">
        <input type="hidden" name="type" value="edit" />
        <input type="hidden" name="id" value="<?= $contact["id"] ?>" />
        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Digite seu nome" required value="<?= $contact["name"] ?>" />
        </div>
        </br>
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Digite seu e-mail" required value="<?= $contact["email"] ?>" />
        </div>
        </br>
        <div class="form-group">
            <label for="phone">Celular:</label>
            <input type="phone" class="form-control" name="phone" id="phone" placeholder="Digite seu celular" required value="<?= $contact["phone"] ?>" />
        </div>
        </br>
        <div class="form-group">
            <label for="description">Descrição:</label>
            <textarea rows="4" class="form-control" name="description" id="description" placeholder="Digite as observações"><?= $contact["description"] ?></textarea>
        </div>
        </br>
        <input type="submit" class="btn btn-primary mb-5" value="Editar usuário" />
    </form>
</div>

<?php
include_once("templates/footer.php");
?>