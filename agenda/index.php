<?php
    include_once("templates/header.php");
?>

<div class="container">
    <?php if(isset($print_msg) && $print_msg != ""): ?>
        <p id="msg"><?= $print_msg ?></p>
    <?php endif; ?>

    <h1 id="main-title">Minha Agenda</h1>
    <?php if(count($contacts) > 0): ?>
        <table class="table" id="contacts-table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contacts as $contact): ?>
                    <tr>
                        <td scope="row"><?= $contact["id"] ?></td>
                        <td scope="row"><?= $contact["name"] ?></td>
                        <td scope="row"><?= $contact["email"] ?></td>
                        <td scope="row"><?= $contact["phone"] ?></td>
                        <td scope="row"><?= $contact["description"] ?></td>
                        <td class="actions">
                            <a href="#"><i class="fas fa-eye check-icon"></i></a>
                            <a href="#"><i class="fas fa-edit edit-icon"></i></a>
                            <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Não há contatos cadastrados em sua agenda. <a href="<?= $BASE_URL ?>create.php">Clique aqui para adicionar seu primeiro contato.</a></p>
    <?php endif; ?>
</div>

<?php
    include_once("templates/footer.php");
?>