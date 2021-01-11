<?php $title = "Roman Jean Forteroche";?>

<?php ob_start(); ?>


<div class="container">
<div class="row">
<div class="col">
            
<form method="post" action="index.php?action=validChapter" enctype="multipart/form-data">
<div class="form-group mt-5">

	<label>le titre</label><br>
    <input type="text" name="title" class="form-control border-dark" id="titleChapter"><br><br>
    
    <label>le texte</label><br>
    <textarea name="text" class="form-control  border-dark" id="textChapter" rows="3" ></textarea>
	


	<input type="submit" value="valider" class="btn btn-outline-primary mt-4" id="chapterValid">
	</div>
</div>
</form>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>


