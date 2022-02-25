<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <title>Portfolio</title>
</head>
<body>
    <?Php
    ?>
        <header>
            <nav class="navbar">
                <li><a href="">Présentation</a></li>
                <li><a href="#competence">Compétences</a></li>
                <li><a href="#projet">Mes projets</a></li>
                <li><a href="#contact">Contact</a></li>
            </nav>
        </header>
        <div class="banniere">
        <div>
            <h1>Sandra Villot</h1>
            <p>Développeuse Web & Mobile</p>
            <a href="https://github.com/Cocci38"><img class="logo" src="./img/github-logo.png" alt="logo_github" ></a>
            <a href="https://www.linkedin.com/in/sandra-villot-936136209/"><img class="logo" src="./img/linkedin_logo.png" alt="logo_linkedin"></a>
        </div>
        <div class="photo">
            <img src="./img/Sandra Villot.jpg" alt="Photo Sandra Villot" srcset="">
        </div>
        </div>
    <section id="competence">
        <h2>Mes compétences</h2>
    </section>
    <section id="projet">
        <h2>Mes projets</h2>
            <div class="projet-container">
                <div class="projet-item">
                    <img class="projet-image" src="./img/projet3.png" alt="">
                    <div class="projet-texte">texte</div>
                </div>
            </div>
    </section>
    <footer>
        <section id="contact">
            <h2>Me conctacter</h2>
            <form action="" method="post">
                <label for="first-name"></label>
                <input type="text" id="first-name" name="prenom" placeholder="Prénom">

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