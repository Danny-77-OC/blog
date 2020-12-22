<?php $title = "Roman Jean Forteroche";?>

<?php ob_start(); ?>

<form method="post" action="view/connexion.php" enctype="multipart/form-data">
	
	<label>pseudoin</label><br>
    <input type="text" name="pseudo" class="pseudo"><br><br>
    
    <label>mot de passe</label><br>
    <input type="text" name="mdp" class="mdp"><br><br>
    
    <label>confirmation mot de passe</label><br>
    <input type="text" name="cmdp" class="cmdp"><br><br>
    
    
    <label>adresse mail</label><br>
    <input type="mail" name="email" class="mail"><br><br>



    

	<input type="submit" value="Inscription" id="send">
</form>


<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>