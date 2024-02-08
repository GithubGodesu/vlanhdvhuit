<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mise en page CSS</title>
    <style>
        /* CSS pour les boutons */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #8a2be2; /* Violet */
            color: #fff; /* Blanc */
            text-decoration: none; /* Suppression du soulignement par défaut */
            border-radius: 5px; /* Bords arrondis */
            transition: background-color 0.3s ease; /* Transition de couleur fluide */
        }

        .btn:hover {
            background-color: #f0f0f0; /* Blanc teinté au survol */
        }

        /* CSS pour le menu déroulant */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f0f0f0; /* Blanc légèrement teinté */
            min-width: 160px;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* CSS pour le reste du site */
        body {
            background-color: #f5f5f5; /* Fond de page blanc légèrement teinté */
            color: #333; /* Couleur du texte principale en violet foncé */
        }

        header {
            background-color: #8a2be2; /* Violet pour l'en-tête */
            color: #fff; /* Texte en blanc pour l'en-tête */
        }

        footer {
            background-color: #8a2be2; /* Violet pour le pied de page */
            color: #fff; /* Texte en blanc pour le pied de page */
        }
    </style>
</head>
<body>
    <header>
        <h1>Site Web du Projet</h1>
        <nav>
            <div class="dropdown">
                <a href="#" class="btn">Menu</a>
                <div class="dropdown-content">
                    <a href="accueil.php" class="btn">Accueil</a>
                    <a href="apropos.php" class="btn">À propos</a>
                    <a href="contact.php" class="btn">Contact</a>
                </div>
            </div>
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
