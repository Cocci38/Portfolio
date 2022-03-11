<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
<h1>Liste de mes projets</h1>
<a href="projet-ajout.php"><button type="submit">Ajouter</button></a>
<a href="../public/index.php"><button type="submit">Portfolio</button></a>
<div class="liste-container">
        <?php  require_once './crud/selection.php';
        for ($i=0; $i < count($resultat) ; $i++) { ?>

                <div class="projet-item">
                    <input type="hidden" name="id" value="<?= $resultat[$i]["id"] ?>">
                    <?= '<img class="liste-image" src="../administration/image/'  . $resultat[$i]["picture"] . '" alt="">'?>
                    <div class="liste-text">
                    <h3>Titre <?= $resultat[$i]["title"] ?></h3>
                    <p>Description <?= $resultat[$i]["description"] ?></p>
                    <p>Technologies <?= $resultat[$i]["techno"] ?></p>
                    <?php if($resultat[$i]["lien_web"]) : ?>
                    <a target="_blank" href="<?= $resultat[$i]["lien_web"] ?>"> Accès au site </a>
                    <?php endif; ?>
                    <?php if($resultat[$i]["lien_github"]): ?>
                    <a target="_blank" href="<?= $resultat[$i]["lien_github"] ?>"> Page GitHub </a>
                    <?php endif; ?>
                    </div>
                </div>
                <p><?= '<a href="projet-modif.php?Id='. $resultat[$i]["id"] . '">' . ' Modifier' . '</a><br>' . '<br>'; ?></p>
        <?php
        }
        ?>
        
        </div>
</body>
</html>