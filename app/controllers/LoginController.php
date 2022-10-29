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
        $nickname = filter_input(INPUT_POST, 'nickname', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $birthdate = filter_input(INPUT_POST, 'birthdate');
        $password = filter_input(INPUT_POST, 'password');

        if ($nickname && $email && $birthdate && $password) {
            $user = new User();
            $user->setNickname();
            $user->setEmail();
            $user->setBirthdate();
            $user->setPassword();
            
            $_SESSION['user'] = $user->getId();


            $this->redirect('home');
        }
    }
}
