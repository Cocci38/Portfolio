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
        //$select1 -> bindValue (":id" , $_GET['Id'] );
        $select1 -> execute();
        $resultat1 = $select1->fetchAll(PDO::FETCH_ASSOC);
        print_r($resultat1);
        ?>
    
    <form action="./crud/modifier.php" method="post" enctype="multipart/form-data">
        <label for="title">Titre</label>
        <input type="text" id="title" name="title" value="<?= implode($resultat1["title"]) ?>">

        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>

        <label for="techno">Techno</label>
        <input type="text" id="techno" name="techno">

        <label for="picture">Image du Projet</label>
        <input type="file" name="picture" id="picture">

        <label for="lien_web">Lien Web</label>
        <input type="url" name="lien_web" id="lien_web">

        <label for="lien_github">Lien GitHub</label>
        <input type="url" name="lien_github" id="lien_github">

        <input type="submit" value="Envoyer">
    </form>
    <input type="submit" value="Retour"  onclick = "history.go(-1)">
</body>
</html>