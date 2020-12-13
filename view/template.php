
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link href="css/style.css" rel="stylesheet" /> 
    </head>
        
    <body>
        <header>
                <nav class="menu">
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="view/inscription.php">inscription</a></li>
                    <li><a href="view/connexion.php">connexion</a> </li>
                    <li><a href="view/deconnexion.php">deconnection</a></li>
                </ul>
                </nav>
        </header>
        <?= $content ?>

        <footer>
            <p>copyright "Daniel"</p>
        </footer>
        <script src="js/main.js"></script>
        
    </body>
</html>