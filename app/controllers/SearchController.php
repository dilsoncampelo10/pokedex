<?php

namespace app\controllers;

use app\helpers\dao\PokemonDaoMysql;
use core\Controller;

class SearchController extends Controller
{
    function __construct()
    {
        if ($_SESSION['user']) {
        } else {
            $this->redirect('login');
        }
    }
    public function index()
    {

        $search = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_SPECIAL_CHARS);


        $pokemonDao = new PokemonDaoMysql();

        $pokemons = $pokemonDao->search($search);
        $data = [
            "pokemons" => $pokemons,
            "search" => $search,
            "title" => "Pesquisa"
        ];

        $this->view('search', $data);
    }
}
