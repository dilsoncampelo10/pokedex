<?php

namespace core\config;

session_start();

class Config
{
    const DRIVER = "mysql";
    const HOST = "localhost";
    const DBNAME = "pokedex";
    const USER = "root";
    const PASSWORD = "";
    const BASE_URL = "http://localhost:50/pokedex/public/";
}
