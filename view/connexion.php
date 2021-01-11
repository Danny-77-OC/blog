<?php $title = "Roman Jean Forteroche";?>

<?php ob_start(); ?>

<div class="container">
	<div class="row">
<div class="col">
                <h2 class="row justify-content-center">Se connecter :</h2>
<form method="post" action="index.php?action=lastConnexion" enctype="multipart/form-data">
<div class="form-group mt-5">	
	<label>pseudo</label><br>
    <input type="text" name="psdCo" class="form-control border-dark" id="psdCo"><br><br>
    
    <label>mot de passe</label><br>
	<input type="text" name="mdpCo" class="form-control border-dark" id="mdpCo"><br><br>
	


	<input type="submit" value="Inscription" class="btn btn-outline-primary" id="valid">
	</div>
</div>
</form>
	</div>


<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>