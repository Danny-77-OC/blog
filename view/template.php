
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css"  />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title><?= $title ?></title>
    
</head>

<body>


<div class="container-fluid">

    <header>
   
 
        <nav id="menu" class="row">

        
        
        <div class="col ml-2">
        <img src="image/logo.png" alt="" id="logo">
        </div>
      
        <div class="dropdown" id="menuAdmin">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Administrateur
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <button class="dropdown-item" type="button"><a href="index.php?action=listMember">liste des abonnées</a></button>
    <button class="dropdown-item" type="button"><a href="index.php?action=listCom">liste des commentaires</a></button>
    <button class="dropdown-item" type="button"><a href="index.php?action=sign">signalement</a></button>
    <button class="dropdown-item" type="button"><a href="index.php?action=addChapter">ajouter un chapitre</a></button>
    
  </div>
</div>

        <div class="col">
        <ul class="row justify-content-center">
                <li class="col"><a href="index.php?action=showChapters">Accueil</a></li>
                <li class="col"><a href= "index.php?action=inscription">inscription</a></li>
                <li class="col"><a href="index.php?action=connexion">connection</a> </li>

                
                <li class="col"><a href="index.php?action=deconnexion">deconnection</a></li>
  
            </ul>
            
        </div>

        
           
        </nav>

        <img src="image/cover.jpeg" alt="" id="cover" class="img-thumbnail bg-dark">

        <h1>Billet simple pour l'Alaska</h1>

    </header>
    <?= $content ?>

    <footer>
            <p>copyright "Daniel"</p>
        </footer>


        </div>
    
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    

</body>

</html>







