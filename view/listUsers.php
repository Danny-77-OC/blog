<?php $title = "Roman Jean Forteroche";?>

<?php ob_start(); ?>

<?php
    while ($data = $listUsers->fetch()) {
    ?>
    <h2><?= $data['pseudoUser'] ?></h2>  
    <h2><?php echo $data['mail'] ?></h2>
   
    <?php 
    }
?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>