<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
</head>
<body>
<?php
        require_once './crud/connexion.php';

        $id = $_GET['Id'];
                $select1 = $bdd->prepare("SELECT * FROM projects WHERE id = $id");
                $select1 -> execute();
                $resultat1 = $select1->fetch(PDO::FETCH_ASSOC);
                //print_r($resultat1);
        
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
        }
        ?>
    
    <form action="" method="post" enctype="multipart/form-data">
        <label for="title">Titre</label>
        <input type="text" id="title" name="title" value="<?=$resultat1["title"]?>">

        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10" placeholder="<?=$resultat1["description"]?>" ></textarea>

        <label for="techno">Techno</label>
        <input type="text" id="techno" name="techno" value="<?=$resultat1["techno"]?>">

        <label for="picture">Image du Projet</label>
        <input type="file" name="picture" id="picture">

        <label for="lien_web">Lien Web</label>
        <input type="url" name="lien_web" id="lien_web" value="<?=$resultat1["lien_web"]?>">

        <label for="lien_github">Lien GitHub</label>
        <input type="url" name="lien_github" id="lien_github" value="<?=$resultat1["lien_github"]?>">

        <input type="submit" value="Envoyer">
    </form>
    <input type="submit" value="Retour"  onclick = "history.go(-1)">

    <?php

    if ($_POST) {
        header('location: index.php');
    }
?>
</body>
</html>