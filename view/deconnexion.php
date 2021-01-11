

<?php $title = "Roman Jean Forteroche";?>

<?php ob_start(); ?>

<?php session_start();

// Suppression des variables de session et de la session
$_SESSION = array();
session_destroy();

?>




<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>