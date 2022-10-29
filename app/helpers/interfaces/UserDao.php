<?php

namespace app\helpers\interfaces;

use app\helpers\bean\UserBean;

interface UserDao
{
    public function add(UserBean $user);

    public function findAll();

    public function findById($id);

    public function update(UserBean $user);

    public function delete($id);
}
