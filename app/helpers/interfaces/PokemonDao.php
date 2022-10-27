<?php

namespace app\helpers\interfaces;

use app\helpers\bean\PokemonBean;

interface PokemonDao
{
    public function add(PokemonBean $pokemon);

    public function findAll();

    public function findById($id);

    public function update(PokemonBean $pokemon);

    public function delete($id);
}
