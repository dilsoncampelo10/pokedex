<?php

namespace app\models;


class Pokemon
{
    private $id;
    private $name;
    private $typePrimary;
    private $typeSecondary;
    private $description;
    private $image;

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = ucwords($name);
    }

    public function getTypePrimary()
    {
        return $this->typePrimary;
    }
    public function setTypePrimary($typePrimary)
    {
        $this->typePrimary = ucfirst($typePrimary);
    }
    public function getTypeSecondary()
    {
        return $this->typeSecondary;
    }
    public function setTypeSecondary($typeSecondary)
    {
        $this->typeSecondary = ucfirst($typeSecondary);
    }

    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = trim(ucfirst($description));
    }
    public function getImage()
    {
        return $this->image;
    }
    public function setImage($image)
    {
        $this->image = $image;
    }
}

interface PokemonDao
{
    public function add(Pokemon $pokemon);

    public function findAll();

    public function findById($id);

    public function update(Pokemon $pokemon);

    public function delete($id);
}
