<?php

namespace app\models;

use core\Model;

class User extends Model
{
    private $userDao;
    private $userBean;

    function __construct()
    {
        $this->pokemonDao = new UserDaoMysql();
        $this->pokemonBean = new UserBean();


        parent::__construct($this->userDao, $this->userBean);
    }
}
