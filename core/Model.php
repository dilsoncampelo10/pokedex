<?php

namespace core;

class Model
{
    private $dao;
    private $bean;

    public function __construct($dao)
    {
        $this->dao = $dao;
    }

    public function create($bean)
    {
        return $this->dao->add($bean);
    }

    public function read()
    {
        return $this->dao->findAll();
    }
    public function readById($id)
    {
        return $this->dao->findById($id);
    }
    public function update($bean)
    {
        return $this->dao->update($bean);
    }
    public function delete($id)
    {
        return $this->dao->delete($id);
    }
}
