<?php
require_once 'templates/header.php';
?>

<div class="container min-vh-100">
    <form action="<?= $base ?>/pokemon/create" method="post" enctype="multipart/form-data" class="mb-3">
        <label for="name" class="form-label">Nome</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Digite o nome do pokemon">
        <label for="type_p" class="form-label">Tipo</label>
        <input type="text" name="type_p" id="type_p" class="form-control" placeholder="Digite o primeiro tipo do pokemon">
        <label for="type_s" class="form-label">Tipo</label>
        <input type="text" name="type_s" id="type_s" class="form-control" placeholder="Digite o segundo tipo do pokemon">
        <label for="description" class="form-label">Descrição</label>
        <textarea name="description" id="description" rows="5" class="form-control" placeholder="Digite uma descrição do seu pokemon"></textarea>
        <label for="image" class="form-label">Imagem</label>
        <input type="file" name="image" id="image" class="form-control">
        <input type="submit" value="Adicionar pokemon" class="btn btn-success mt-3">
        <a href="<?= $base ?>" class="btn btn-dark mt-3">Cancelar</a>

    </form>
</div>

<?php

require_once 'templates/footer.php';
?>