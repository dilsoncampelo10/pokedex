<?php
require_once 'templates/header.php';
?>

<div class="container">
    <form action="<?= $base ?>/pokemon/update/<?= $pokemon->getId() ?>" method="post" enctype="multipart/form-data" class="mb-3">
        <label for="name" class="form-label">Nome</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Novo nome do pokemon" value="<?= $pokemon->getName() ?>">
        <label for="type_p" class="form-label">Tipo</label>
        <input type="text" name="type_p" id="type_p" class="form-control" placeholder="Novo primeiro tipo do pokemon" value="<?= $pokemon->getTypePrimary() ?>">
        <label for="type_s" class="form-label">Tipo</label>
        <input type="text" name="type_s" id="type_s" class="form-control" placeholder="Novo segundo tipo do pokemon" value="<?= $pokemon->getTypeSecondary() ?>">
        <label for="description" class="form-label">Descrição</label>
        <textarea name="description" id="description" rows="5" class="form-control" placeholder="Nova descrição do seu pokemon"><?= $pokemon->getDescription() ?></textarea>
        <label for="image" class="form-label">Imagem</label>
        <input type="file" name="image" id="image" class="form-control">
        <img src="<?= $base ?>/media/<?= $pokemon->getImage() ?>" class="d-block mt-2" alt="" id="mini-image">
        <input type="submit" value="Alterar pokemon" class="btn btn-success mt-3">
        <a href="<?= $base ?>" class="btn btn-dark mt-3">Cancelar</a>
    </form>

</div>

<?php

require_once 'templates/footer.php';
?>