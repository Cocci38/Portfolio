<?php

$servername = 'localhost';
$username = 'root';
$password = '';

try {
    $bdd =  new PDO("mysql:host=localhost;dbname=portfolio" , $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connexion réussie';
} catch (PDOException $e) {
   echo "Erreur : " . $e->getMessage();
}

// L'upload d'une imge :

// Vérifier si le formulaire a été soumis
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Vérifie si le fichier a été uploadé sans erreur
    if(isset($_FILES["picture"]) && $_FILES["picture"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "png" => "image/png");
        $filename = $_FILES["picture"]["name"];
        $filetype = $_FILES["picture"]["type"];
        $filetmp = $_FILES["picture"]["tmp_name"];

        // Vérifie l'extension du fichier
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die ("Erreur : Veuillez sélectionner un format de fichier valide.");

        // Pour redimensionner l'image en fonction de l'extension et on la bouge dans le répertoire de destination
        switch ($ext) {
            case 'png':
                $im = imagecreatefrompng($filetmp); // Pour créer une nouvelle image depuis un fichier ou une URL (selon le nom de l'extention (ici PNG))
                $newimg = imagescale($im, 250);        // Pour redimentionner l'image
                imagepng($newimg,"image/". $filename); // Pour envoyer une image vers un navigateur ou un fichier (selon le nom de l'extention (ici PNG))
                break;
            case 'jpg':
                $im = imagecreatefromjpeg($filetmp);
                $newimg = imagescale($im, 250);
                imagejpeg($newimg,"image/". $filename);
            case 'jpeg':
                $im = imagecreatefromjpeg($filetmp);
                $newimg = imagescale($im, 250);
                imagejpeg($newimg,"image/". $filename);
                break;
            default:
                echo "erreur extension";
                break;
        }
        echo $im;
        // Je bouge la nouvelle image dans le dossier image et je garde l'ancien nom
       // move_uploaded_file($filetmp, "image/" . $filename); 
    }
}
date_default_timezone_set('Europe/Paris'); // Pour déterminer le fuseau horaire
$created_at = date("Y-m-d H:i:s", time());  // Pour formater une date / heure

// Insertion des données dans la base de donnée grace à une requête préparer 
$sql = $bdd->prepare("INSERT INTO projects (title, description, picture, created_at, lien_web, lien_github)
                VALUES ( :title, :description, :picture, :created_at, :lien_web, :lien_github)");

$sql->bindParam(':title', $_POST ['title']);
$sql->bindParam(':description', $_POST ['description']);
$sql->bindParam(':picture', $_FILES['picture']['name']);
$sql->bindParam(':created_at', $created_at);
$sql->bindParam(':lien_web', $_POST ['lien_web']);
$sql->bindParam(':lien_github', $_POST ['lien_github']);
$sql->execute();
echo 'Entrée ajoutée dans la table';
?>