<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modif</title>
</head>
<body>
<?php

require_once 'connexion.php';

$sql2 = $bdd->prepare("UPDATE projects SET title = :title, description = :description, techno = :techno, picture = :picture, lien_web = :lien_web, lien_github = :lien_github WHERE id = :id");
$sql2->execute(array(
    'title' => $title,
    'description' => $description,
    'techno' =>$techno,
    'picture' =>$picture,
    'lien_web' =>$lien_web,
    'lien_github' =>$lien_github
));
?>

</body>
</html>

