<?php

namespace app\controllers;

use app\dao\PokemonDaoMysql;
use core\Controller;

class SearchController extends Controller
{
    public function index()
    {

        $search = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_SPECIAL_CHARS);


        $pokemonDao = new PokemonDaoMysql();

        $pokemons = $pokemonDao->search($search);
        $data = [
            "pokemons" => $pokemons,
            "search" => $search
        ];

        $this->view('search', $data);

    }
}
