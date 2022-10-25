<?php
require_once 'templates/header.php';
?>
<div class="container min-vh-100">
    <h1>Crie a sua equipe pokemon</h1>

    <?php

    if (count($pokemons) > 0) : ?>
        <div class="row">
            <?php foreach ($pokemons as $pokemon) : ?>
                <div class="col-md-4 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= $base ?>/media/<?= $pokemon->getImage() ?>" class="card-img-top" alt="foto do pokémon">
                        <div class="card-body">
                            <h5 class="card-title"><?= $pokemon->getName() ?></h5>
                            <p class="card-text"><?= $pokemon->getDescription() ?></p>
                            <a href="<?= $base ?>/pokemon/show/<?= $pokemon->getId() ?>" class="btn btn-primary">Ver mais</a>
                        </div>
                    </div>
                    <a href="<?= $base ?>/pokemon/delete/<?= $pokemon->getId() ?>" class="text-danger p-2" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                    <a href="<?= $base ?>/pokemon/edit/<?= $pokemon->getId() ?>" class="text-warning">Editar</a>
                </div>
            <?php endforeach ?>
        </div>
    <?php else : ?>
        <h2>Não há pokemons cadastrados</h2>
        <p>Você ainda não cadastrou nenhum pokémon para fazer parte da sua equipe, clique no botão abaixo e comece a montar seu time!</p>

    <?php endif ?>

    <?php if (count($pokemons) < 6) : ?>
        <a href="<?= $base ?>/pokemon/adicionar" class="btn btn-success mb-3">Adicione um novo pokemon a sua equipe</a>
    <?php endif ?>
</div>

<?php
require_once 'templates/footer.php';
?>