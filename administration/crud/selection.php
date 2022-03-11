<?php

require_once 'connexion.php';

try {
    $select = $bdd->prepare('SELECT * FROM projects');
    $select -> execute();
    $resultat = $select->fetchAll(PDO::FETCH_ASSOC);
    // echo '<pre>';
    // print_r($resultat);
    // echo '</pre>';
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

?>