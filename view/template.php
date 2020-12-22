<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
   
    <link rel="stylesheet" href="css/style.css"  />
    <title><?= $title ?></title>
</head>

<body>
    <header>
   

        <nav class="menu">
        <img src="image/logo.png" alt="" id="logo">
            <ul>
                <li><a href="index.php?action=showChapters">Accueil</a></li>
                <li><a href= "index.php?action=inscription">inscription</a></li>
                <li><a href="connexion.php">connection</a> </li>
                <li><a href="view/deconnexion.php">deconnection</a></li>
            </ul>
        </nav>

        <img src="image/cover.jpeg" alt="" id="cover">

        <h1>Billet simple pour l'Alaska</h1>

    </header>
    <?= $content ?>

    <footer>
            <p>copyright "Daniel"</p>
        </footer>
    
    <script src="view/js/main.js"></script>

</body>

</html>


