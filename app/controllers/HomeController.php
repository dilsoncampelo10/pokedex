<?php

namespace app\controllers;

use app\helpers\bean\Pokemon;
use core\Controller;
use app\helpers\dao\PokemonDaoMysql;

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
