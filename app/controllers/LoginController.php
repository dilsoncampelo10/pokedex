<?php

namespace app\controllers;

use core\Controller;

class LoginController extends Controller
{
    public function index()
    {
        $this->view('login');
    }

    public function signin()
    {
        echo "login realizado com sucesso";
    }
    public function signup()
    {
        echo "cadastro realizado com sucesso";
    }
}
