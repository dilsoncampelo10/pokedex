<?php

namespace app\controllers;

use core\Controller;
use app\models\Pokemon;

class HomeController extends Controller
{
    public function index()
    {
        $pokemon = new Pokemon();
        $pokemons = $pokemon->read();

        $data = [
            "pokemons" => $pokemons,
            "title" => "Página principal"
        ];
        
        $this->view('home', $data);
    }
}
