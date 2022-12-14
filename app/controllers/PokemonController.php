<?php

namespace app\controllers;

use core\Controller;
use app\helpers\bean\PokemonBean;
use app\helpers\dao\PokemonDaoMysql;
use app\models\Pokemon;

class PokemonController extends Controller
{
    function __construct()
    {
        if ($_SESSION['user']) {
        } else {
            $this->redirect('login');
        }
    }

    public function adicionar()
    {
        $data = [
            "title" => "Adicionar ao time"
        ];

        $this->view('create', $data);
    }

    public function create()
    {
        $pokemon = new PokemonBean();
        $pokemonDao = new PokemonDaoMysql();


        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $typeP = filter_input(INPUT_POST, 'type_p', FILTER_SANITIZE_SPECIAL_CHARS);
        $typeS = filter_input(INPUT_POST, 'type_s', FILTER_SANITIZE_SPECIAL_CHARS);
        $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_SPECIAL_CHARS);
        $image = $_FILES['image'];


        if ($name && $typeP && $description) {
            $pokemon->setName($name);
            $pokemon->setTypePrimary($typeP);
            $pokemon->setTypeSecondary($typeS);
            $pokemon->setDescription($description);
            if (empty($image['name'])) {
                $pokemon->setImage("pokeball_default.png");
            }

            if (isset($image) && !empty($image['tmp_name'])) {
                if (in_array($image['type'], ['image/jpeg', 'image/jpg', 'image/png'])) {
                    $newName = md5(time() . rand(0, 9999)) . '.jpg';
                    move_uploaded_file($image['tmp_name'], 'media/' . $newName);
                    $pokemon->setImage($newName);
                }
            }

            $pokemonDao->add($pokemon);

            $this->redirect('home');
        }

        $this->redirect('pokemon/adicionar');
    }

    public function show($id)
    {
        $pokemon = new Pokemon();

        $pokemons = $pokemon->readById($id);

        $data = [
            "pokemon" => $pokemons,
            "title" => $pokemons->getName()
        ];

        $this->view('pokemon', $data);
    }

    public function edit($id)
    {
        $pokemonDao = new PokemonDaoMysql();
        $pokemon = $pokemonDao->findById($id);
        $data = [
            "pokemon" => $pokemon,
            "title" => "Editar - " . $pokemon->getName()
        ];
        $this->view("edit", $data);
    }

    public function update($id)
    {
        $pokemon = new PokemonBean();
        $pokemonDao = new PokemonDaoMysql();

        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $typeP = filter_input(INPUT_POST, 'type_p', FILTER_SANITIZE_SPECIAL_CHARS);
        $typeS = filter_input(INPUT_POST, 'type_s', FILTER_SANITIZE_SPECIAL_CHARS);
        $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_SPECIAL_CHARS);
        $image = $_FILES['image'];

        if ($name && $typeP && $description) {
            $pokemon->setId($id);
            $pokemon->setName($name);
            $pokemon->setTypePrimary($typeP);
            $pokemon->setTypeSecondary($typeS);
            $pokemon->setDescription($description);
            $pokemon->setImage($image);

            if (empty($image['name'])) {
                $pokemon->setImage("pokeball_default.png");
            }

            if (isset($image) && !empty($image['tmp_name'])) {
                if (in_array($image['type'], ['image/jpeg', 'image/jpg', 'image/png'])) {
                    $newName = md5(time() . rand(0, 9999)) . '.jpg';
                    move_uploaded_file($image['tmp_name'], 'media/' . $newName);
                    $pokemon->setImage($newName);
                }
            }

            $pokemonDao->update($pokemon);

            $this->redirect('home');
        }
    }

    public function delete($id)
    {
        $pokemonDao = new PokemonDaoMysql();
        $pokemonDao->delete($id);

        $this->redirect('home');
    }
}
