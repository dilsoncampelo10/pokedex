<?php

namespace core;

class Controller
{
    public function view($view, $data = [])
    {
        extract($data);
        require_once '../app/views/' . $view . '.php';
    }

    public function redirect($location)
    {
        header("location: http://localhost:50/pokedex/public/" . $location);
        exit();
    }
}
