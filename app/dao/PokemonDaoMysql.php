<?php

namespace app\dao;


use app\models\Pokemon;

use app\interfaces\PokemonDao;

use PDO;



class PokemonDaoMysql implements PokemonDao
{
    private $con;


    public function __construct()
    {

        $this->con = new PDO("mysql:dbname=pokedex;localhost", "root", "");
    }

    public function add(Pokemon $pokemon)
    {
        $stm = $this->con->prepare("INSERT INTO pokemons (name,type_primary,type_secondary,description,image) VALUES (:name,:typeP,:typeS,:description,:image)");
        $stm->bindValue(":name", $pokemon->getName());
        $stm->bindValue(":typeP", $pokemon->getTypePrimary());
        $stm->bindValue(":typeS", $pokemon->getTypeSecondary());
        $stm->bindValue(":description", $pokemon->getDescription());
        $stm->bindValue(":image", $pokemon->getImage());
        $stm->execute();

        return true;
    }

    public function findAll()
    {
        $pokemons = [];
        $stm = $this->con->query("SELECT * FROM pokemons");

        if ($stm->rowCount() > 0) {
            $dados = $stm->fetchAll(PDO::FETCH_ASSOC);
            foreach ($dados as $dado) {
                $pokemon = new Pokemon();
                $pokemon->setId($dado['id']);
                $pokemon->setName($dado['name']);
                $pokemon->setTypePrimary($dado['type_primary']);
                $pokemon->setTypeSecondary($dado['type_secondary']);
                $pokemon->setDescription($dado['description']);
                $pokemon->setImage($dado['image']);
                array_push($pokemons, $pokemon);
            }
        }
        return $pokemons;
    }

    public function findById($id)
    {
        $pokemon = new Pokemon();
        $stm = $this->con->prepare("SELECT * FROM pokemons WHERE id = :id");
        $stm->bindValue(":id", $id);
        $stm->execute();
        if ($stm->rowCount() > 0) {
            $dado = $stm->fetch(PDO::FETCH_ASSOC);
            $pokemon->setId($dado['id']);
            $pokemon->setName($dado['name']);
            $pokemon->setTypePrimary($dado['type_primary']);
            $pokemon->setTypeSecondary($dado['type_secondary']);
            $pokemon->setDescription($dado['description']);
            $pokemon->setImage($dado['image']);
        }


        return $pokemon;
    }

    public function update(Pokemon $pokemon)
    {
        $stm = $this->con->prepare("UPDATE pokemons SET name = :name, type_primary = :typeP, type_secondary = :typeS,description = :description, image =:image WHERE id = :id");
        $stm->bindValue(":id", $pokemon->getId());
        $stm->bindValue(":name", $pokemon->getName());
        $stm->bindValue(":typeP", $pokemon->getTypePrimary());
        $stm->bindValue(":typeS", $pokemon->getTypeSecondary());
        $stm->bindValue(":description", $pokemon->getDescription());
        $stm->bindValue(":image", $pokemon->getImage());
        $stm->execute();

        return true;
    }

    public function delete($id)
    {
        $stm = $this->con->prepare("DELETE FROM pokemons WHERE id = :id");
        $stm->bindValue(":id", $id);
        $stm->execute();

        return $id;
    }

    public function search($search)
    {
        $pokemons = [];
        $stm = $this->con->prepare("SELECT * FROM pokemons WHERE name LIKE '%$search%'");
        $stm->execute();
        if ($stm->rowCount() > 0) {
            $data = $stm->fetchAll(PDO::FETCH_ASSOC);

            foreach ($data as $d) {
                $pokemon = new Pokemon();
                $pokemon->setName($d['name']);
                $pokemon->setTypePrimary($d['type_primary']);
                $pokemon->setTypeSecondary($d['type_secondary']);
                $pokemon->setDescription($d['description']);
                $pokemon->setImage($d['image']);
                array_push($pokemons, $pokemon);
            }
        }
        return $pokemons;
    }
}
