<?php

namespace core;

use core\config\Config;
use PDO;
use PDOException;

class Model
{
    protected $con;

    public function __construct()
    {
        $this->getConnect();
    }

    private function getConnect()
    {
        try {
            $this->con = new PDO(Config::DRIVER . ":dbname=" . Config::DBNAME . ";", Config::HOST, Config::USER, Config::PASSWORD);
        } catch (PDOException $e) {
            echo "Erro de conexão";
        }
    }
}
