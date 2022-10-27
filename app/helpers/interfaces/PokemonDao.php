<?php

namespace app\helpers\interfaces;

use app\helpers\bean\Pokemon;

interface PokemonDao
{
    public function add(Pokemon $pokemon);

    public function findAll();

    public function findById($id);

    public function update(Pokemon $pokemon);

    public function delete($id);
}
