<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertion projets</title>
</head>
<body>
    <?php
        require_once 'connexion.php'
    ?>
    <form action="insertion.php" method="post" enctype="multipart/form-data">
        <label for="title">Titre</label>
        <input type="text" id="title" name="title">

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
</body>
</html>