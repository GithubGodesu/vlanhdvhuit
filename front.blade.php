<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple de mise en page CSS</title>
    <link rel="stylesheet" href="stylesHDVHUIT.css">
    <style>
        /* CSS pour les boutons */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff; /* Couleur de fond du bouton */
            color: #fff; /* Couleur du texte du bouton */
            text-decoration: none; /* Suppression du soulignement par défaut */
            border-radius: 5px; /* Bords arrondis */
            transition: background-color 0.3s ease; /* Transition de couleur fluide */
        }

        .btn:hover {
            background-color: #0056b3; /* Couleur de fond du bouton au survol */
        }
    </style>
</head>
<body>
    <header>
        <h1>Mon Site Web</h1>
        <nav>
            <ul>
                <li><a href="accueil.php" class="btn">Accueil</a></li>
                <li><a href="apropos.php" class="btn">À propos</a></li>
                <li><a href="contact.php" class="btn">Contact</a></li>
            </ul>
        </nav>
    </header>
    
    <section class="content">
        <article>
            <h2>Titre de l'article</h2>
            <p>Ceci est un exemple de contenu d'article.</p>
        </article>
    </section>

    <footer>
        <p>&copy; 2024 Mon Site Web. Tous droits réservés.</p>
    </footer>
</body>
</html>
