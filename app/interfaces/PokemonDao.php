<?php

namespace app\interfaces;

use app\models\Pokemon;

interface PokemonDao
{
    public function add(Pokemon $pokemon);

    public function findAll();

    public function findById($id);

    public function update(Pokemon $pokemon);

    public function delete($id);
}
