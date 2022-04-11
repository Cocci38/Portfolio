<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <title>Sandra Villot - Portfolio - Développeuse</title>
</head>
<body>
    
        <header>
            <nav class="navbar">
                <li><a href="#presentation">Présentation</a></li>
                <li><a href="#competence">Compétences</a></li>
                <li><a href="#projet">Projets</a></li>
                <li><a href="#contact">Contact</a></li>
            </nav>
        </header>

        <div class="banniere">
            <div class="accueil">
                <h1>Sandra Villot</h1>
                <p>Développeuse Web & Mobile</p>
                <a href="https://github.com/Cocci38"><img class="logo" src="./img/github-logo.png" alt="logo_github" ></a>
                <a href="https://www.linkedin.com/in/sandra-villot-936136209/"><img class="logo" src="./img/linkedin_logo.png" alt="logo_linkedin"></a>
            </div>
            <div class="photo1">
                <img src="./img/Sandra Villot.png" alt="Photo Sandra Villot" srcset=""class="photo">
            </div>
            <!--<div class="custom-shape-divider-bottom-1646578205">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
            </div>-->
        </div>

        <section class="presentation" id="presentation">
        <h2>Présentation</h2>
            <p></p>
    </section>

    <section class="competence" id="competence">
        <h2 class="titre-competence">Mes Compétences</h2>
        <div class="competence-container">
            <div class="langage">
                <h3>Langages</h3>
                <div>HTML / CSS</div>
                <div>PHP</div>
                <div>JAVASCRIPT</div>
                <div>SASS</div>
            </div>

            <div class="framework">
                <h3>Framework</h3>
                <div>Bootstrap</div>
            </div>
        </div>
    </section>

    <section class="projet" id="projet">
    <h2>Mes Projets</h2>
        <div class="projet-container">
        <?php  require_once '../administration/crud/selection.php';
        for ($i=0; $i < count($resultat) ; $i++) { ?>

                <div class="projet-item">
                    <?php  if($resultat[$i]["picture"]) : ?> 
                    <?= '<img class="projet-image" src="../administration/image/'  . $resultat[$i]["picture"] . '" alt="image_du_projet' . $resultat[$i]["title"] .'" width="500px">'?>
                    <?php  else : ?>
                        <img class="projet-image" src="./img/image_vide.png" alt="image_vide" srcset="">
                    <?php endif; ?>
                            
                    <div class="projet-text">
                        <h3><?= $resultat[$i]["title"] ?></h3>
                        <h4>Description  </h4>
                        <p><?= $resultat[$i]["description"] ?></p>
                        <h4>Technologies  </h4>
                        <p><?= $resultat[$i]["techno"] ?></p>
                        <?php if($resultat[$i]["lien_web"]) : ?>
                        <a target="_blank" href="<?= $resultat[$i]["lien_web"] ?>"> Accès au site </a>
                        <?php endif; ?>
                        <?php if($resultat[$i]["lien_github"]): ?>
                        <a target="_blank" href="<?= $resultat[$i]["lien_github"] ?>"> Page GitHub </a>
                        <?php endif; ?>
                    </div>
                </div>
        <?php
        }
        ?>
        </div>
    </section>
    
    <footer>
        
        <section id="contact">
            <h2 class="titre-contact">Me Conctacter</h2>
            <form action="" method="post">
                <label for="last-name"></label>
                <input type="text" id="last-name" name="nom" placeholder="Nom">

                <label for="mail"></label>
                <input type="email" name="email" id="mail" placeholder="Email">

                <label for="message"></label>
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>

                <input type="submit" value="Envoyer">
            </form>
        </section>
    </footer>
</body>
</html>