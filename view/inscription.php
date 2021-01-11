<?php $title = "Roman Jean Forteroche";?>

<?php ob_start(); ?>
<div class="container">
    <div class="row">
<div class="col">
                <h2 class="row justify-content-center">Formulaire d'inscription :</h2>
<form method="post" action="index.php?action=inscriptionPage" enctype="multipart/form-data">
<div class="form-group mt-5">
	<label>pseudoin</label><br>
    <input type="text" name="pseudo" id="pseudo" class="form-control border-dark"><br><br>
    
    <label>mot de passe</label><br>
    <input type="password" name="mdp" id="mdp" class="form-control border-dark"><br><br>
    
    
    
    <label>adresse mail</label><br>
    <input type="mail" name="email" id="mail" class="form-control border-dark"><br><br>



    

    <input type="submit" value="Inscription" id="send" class="btn btn-outline-primary">
    </div>
</div>
</form>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>