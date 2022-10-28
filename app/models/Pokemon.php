<?php

namespace app\models;

use app\helpers\bean\PokemonBean;
use app\helpers\dao\PokemonDaoMysql;
use core\Model;

class Pokemon extends Model
{
    private $pokemonDao;
    private $pokemonBean;

    function __construct()
    {
        $this->pokemonDao = new PokemonDaoMysql();
        $this->pokemonBean = new PokemonBean();


        parent::__construct($this->pokemonDao, $this->pokemonBean);
    }
}
