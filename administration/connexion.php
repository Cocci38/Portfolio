<?php

$servername = 'localhost';
$username = 'root';
$password = '';

try {
    $bdd =  new PDO("mysql:host=localhost;dbname=portfolio;charset=utf8" , $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connexion réussie <br>';
} catch (PDOException $e) {
   echo "Erreur : " . $e->getMessage();
}


?>