<?php $title = "Roman Jean Forteroche";?>

<?php ob_start(); ?>

<?php
    while ($dataChptr = $addTheChapter->fetch()) {
    ?>
    <h2><?= $dataChptr['title'] ?></h2>  
    <h2><?= $dataChptr['mainText'] ?></h2>  
    <?php 
    }
?>


<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>