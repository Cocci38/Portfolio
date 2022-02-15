<?php

require_once('../Database.php');

abstract class Model
{
    protected $pdo;
    protected $table = "projects";

    public function __construct()
    {
        $this->pdo = Database::getPdo();
    }

    public function insert($id, $title, $description, $picture, $created_at, $lien_web, $lien_github)
    {
        $sql=$this->pdo->prepare("INSERT INTO projects (id, title, description, picture, created_at, lien_web, lien_github)
                    VALUES ($id, $title, $description, $picture, $created_at, $lien_web, $lien_github)");
        $this->pdo->exec($sql);
        var_dump($sql);
    }
}




?>