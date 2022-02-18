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
    <section class="presentation">
        <header>
            <nav>
                <li><a href="">Présentation</a></li>
                <li><a href="">Compétences</a></li>
                <li><a href="">Mes projets</a></li>
                <li><a href="">Contact</a></li>
            </nav>
        </header>
        <div>
            <h1>Sandra Villot</h1>
            <p>Développeuse Web & Mobile</p>
        </div>
    </section>
    <section>
        <h2>Mes compétences</h2>
    </section>
    <section>
        <h2>Mes projets</h2>
            <div class="projet-container">
                <div class="projet-item">
                    <div>image</div>
                    <div>texte</div>
                </div>
            </div>
    </section>
    <footer>
        <section>
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