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
        require_once '../models/Model.php'
    ?>
    <form action="Model.php" method="post">
        <label for="title">Titre</label>
        <input type="text" id="title" name="titre">

        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>

        <label for="picture">Image du Projet</label>
        <input type="file" name="picture" id="picture">

        <label for="date">Date</label>
        <input type="datetime" name="date" id="date">

        <label for="lien-web">Lien Web</label>
        <input type="url" name="lien-web" id="lien-web">

        <label for="lien-github">Lien GitHub</label>
        <input type="url" name="lien-github" id="lien-github">

        <input type="submit" value="Envoyer">
    </form>
</body>
</html>