<?php
include_once("templates/header.php");
?>

<div class="container">
    <?php include_once("templates/backbtn.html"); ?>
    <h2 id="main-title">Cadastrar Usuário</h2>
    <form action="<?= $BASE_URL ?>config/process.php" method="POST" id="create-form">
        <input type="hidden" name="type" value="create" />
        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Digite seu nome" required />
        </div>
        </br>
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Digite seu e-mail" required />
        </div>
        </br>
        <div class="form-group">
            <label for="phone">Celular:</label>
            <input type="phone" class="form-control" name="phone" id="phone" placeholder="Digite seu celular" required />
        </div>
        </br>
        <div class="form-group">
            <label for="description">Descrição:</label>
            <textarea rows="4" class="form-control" name="description" id="description" placeholder="Digite as observações"></textarea>
        </div>
        </br>
        <input type="submit" class="btn btn-primary mb-5" value="Cadastrar novo usuário" />
    </form>
</div>

<?php
include_once("templates/footer.php");
?>