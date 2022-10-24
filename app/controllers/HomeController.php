<?php

namespace app\controllers;

use app\models\Pokemon;
use core\Controller;
use app\dao\PokemonDaoMysql;

class HomeController extends Controller
{
    public function index()
    {
        $pokemonsDao = new PokemonDaoMysql();
        $pokemons = $pokemonsDao->findAll();

        $data = [
            "pokemons" => $pokemons,
            "title" => "Página principal"
        ];
        
        $this->view('home', $data);
    }
}
