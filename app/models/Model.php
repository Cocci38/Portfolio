<?php

require_once('app\database.php');

abstract class Model
{
    protected $pdo;

    public function __construct()
    {
        $this->pdo = Database::getPdo();
    }
}




?>