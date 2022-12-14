<?php
require_once 'templates/header.php';
?>

<div class="container mt-2 min-vh-100">
    <div class="card mb-3">
        <div class="row d-flex align-items-center">
            <div class="col-md-6"><img src="<?= $base ?>/media/<?= $pokemon->getImage() ?>" class="card-img-top img-thumbnail" alt="Foto do pokémon"></div>
            <div class="card-body col-md-6">
                <h1 class="card-title"><?= $pokemon->getName() ?></h1>
                <p class="card-text"><?= $pokemon->getDescription() ?></p>
                <span class="badge text-bg-dark p-3"><?= $pokemon->getTypePrimary() ?></span>
                <span class="badge text-bg-dark p-3"><?= $pokemon->getTypeSecondary() ?></span>
            </div>
        </div>
    </div>
    <a href="<?= $base ?>/" class="btn btn-dark mb-3">Voltar para página principal</a>

</div>

<?php
require_once 'templates/footer.php';
?>