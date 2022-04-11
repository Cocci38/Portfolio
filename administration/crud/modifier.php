<?php

require_once 'connexion.php';

$id = $_GET['Id'];
        $select1 = $bdd->prepare("SELECT * FROM projects WHERE id = $id");
        $select1 -> execute();
        $resultat1 = $select1->fetch(PDO::FETCH_ASSOC);
        print_r($resultat1);

if (@$_POST) {
    extract(@$_POST);

$sql2 = $bdd->prepare("UPDATE projects SET title = :title, description = :description, techno = :techno, picture = :picture, lien_web = :lien_web, lien_github = :lien_github WHERE id = $id");
$sql2->bindParam(':title', $title, PDO::PARAM_STR);
$sql2->bindParam(':description', $description, PDO::PARAM_STR);
$sql2->bindParam(':techno', $techno, PDO::PARAM_STR);
$sql2->bindParam(':picture', $picture, PDO::PARAM_STR);
$sql2->bindParam(':lien_web', $lien_web, PDO::PARAM_STR);
$sql2->bindParam(':lien_github', $lien_github, PDO::PARAM_STR);
$sql2->execute();

header('location: administration\index.php');
}

?>


