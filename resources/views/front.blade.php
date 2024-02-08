<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple de mise en page CSS</title>
    <style>
        /* Reset CSS basique pour réinitialiser les styles par défaut des navigateurs */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f8f9fa;
            color: #333;
            line-height: 1.6;
        }

        header {
            background-color: #343a40;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        nav {
            text-align: center;
            margin-top: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            margin: 0 10px;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #fff;
            min-width: 160px;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            z-index: 1;
            border-radius: 5px;
        }

        .dropdown-content a {
            display: block;
            padding: 10px;
            color: #333;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .dropdown-content a:hover {
            background-color: #f8f9fa;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .content {
            padding: 20px;
            margin: 20px auto;
            max-width: 800px;
        }

        article {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }

        article h2 {
            color: #007bff;
        }

        footer {
            background-color: #343a40;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Site d'Analyse</h1>
        <nav>
            <div class="dropdown">
                <a href="#" class="btn">Menu</a>
                <div class="dropdown-content">
                    <a href="accueil.php">Accueil</a>
                    <a href="apropos.php">À propos</a>
                    <a href="contact.php">Contact</a>
                </div>
            </div>
        </nav>
    </header>
    
    <div class="content">
        <article>
            <h2>Titre de l'article</h2>
            <p>Ceci est un exemple de contenu d'article.</p>
        </article>
    </div>

    <footer>
        <p>&copy; 2024 Site d'Analyse. Tous droits réservés.</p>
    </footer>
</body>
</html>
