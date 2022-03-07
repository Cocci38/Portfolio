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
    
        <header>
            <nav class="navbar">
                <li><a href="">Présentation</a></li>
                <li><a href="#competence">Compétences</a></li>
                <li><a href="#projet">Projets</a></li>
                <li><a href="#contact">Contact</a></li>
            </nav>
        </header>

        <div class="banniere">
            <div class="presentation">
                <h1>Sandra Villot</h1>
                <p>Développeuse Web & Mobile</p>
                <a href="https://github.com/Cocci38"><img class="logo" src="./img/github-logo.png" alt="logo_github" ></a>
                <a href="https://www.linkedin.com/in/sandra-villot-936136209/"><img class="logo" src="./img/linkedin_logo.png" alt="logo_linkedin"></a>
            </div>
            <div class="photo1">
                <img src="./img/Sandra Villot.png" alt="Photo Sandra Villot" srcset=""class="photo">
            </div>
            <div class="custom-shape-divider-bottom-1646578205">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
            </div>
        </div>

    <section class="competence" id="competence">
        <h2>Mes compétences</h2>
    </section>

    <section class="projet" id="projet">
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