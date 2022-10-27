<?php

namespace app\models;

use app\helpers\dao\PokemonDaoMysql;
use core\Model;

class Pokemon extends Model
{
    private $pokemonDao;
    function __construct()
    {
        $this->pokemonDao = new PokemonDaoMysql();

        parent::__construct($this->pokemonDao);
    }   
   
}
