<?php



require('controller/controller.php');

if (isset($_GET['action'])) {
      
      if ($_GET['action']=="showChapters") {
        $control1=new Controller;
        $control1->showTheListChapter();
      }
      elseif ($_GET['action']=="inscription") {
        $control2=new Controller;
        $control2->inscription();
    }elseif($_GET['action']=="connexion"){
        $control3=new Controller;
        $control3->connexion();
    }elseif($_GET['action']=="deconnexion"){
        $control4=new Controller;
        $control4->deconnexion();  
    }elseif($_GET['action']=="inscriptionPage"){
        $control5=new Controller;
        $control5->linkInscription();
        if (!empty($_POST["pseudo"]) && !empty($_POST["mdp"]) && !empty($_POST["email"])) {

            $_POST["pseudo"] = strip_tags($_POST["pseudo"]);
            $_POST["mdp"] = strip_tags($_POST["mdp"]);
         
            $_POST["email"] = strip_tags($_POST["email"]);
        // $pseudo=$_POST["pseudo"];
        // $mdp=$_POST["mdp"];
        // $cdmp=$_POST["cmdp"];
        // $email=$_POST["email"];
        // echo $pseudo . $mdp . $cdmp . $email;
        $control5->addOneUser();
        }
    }elseif($_GET['action']=="lastConnexion" && !empty($_POST["psdCo"]) && !empty($_POST["mdpCo"])){
        session_start();
        $_SESSION['pseudo'] = $_POST['psdCo'];
        $_SESSION['password'] = $_POST['mdpCo'];
        echo "bienvenu".$_SESSION['pseudo'];

        $control6=new Controller;
        $control6->showTheListChapter();
       
            $_POST["psdCo"] = strip_tags($_POST["psdCo"]);
            $_POST["mdpCo"] = strip_tags($_POST["mdpCo"]);
            if ($_POST["psdCo"]==="admin" && $_POST["mdpCo"]==="admin") {
                ?><script>$("#menuAdmin").css("display","block")</script>  <?php
            }
    }elseif($_GET['action']=="listMember"){
        session_start();
        $control7=new Controller;
        $control7->checkListUsers();
        if ($_SESSION["pseudo"]==="admin" && $_SESSION["password"]==="admin") {
            ?><script>$("#menuAdmin").css("display","block")</script>  <?php
        }  
    }
    elseif($_GET['action']=="listCom"){
        session_start();
        $control8=new Controller;
        $control8->listCom();
        if ($_SESSION["pseudo"]==="admin" && $_SESSION["password"]==="admin") {
            ?><script>$("#menuAdmin").css("display","block")</script>  <?php
        }
    }
    elseif($_GET['action']=="sign"){
        session_start();
        $control9=new Controller;
        $control9->sign();
        if ($_SESSION["pseudo"]==="admin" && $_SESSION["password"]==="admin") {
            ?><script>$("#menuAdmin").css("display","block")</script>  <?php
        
        }
    }
    elseif($_GET['action']=="addChapter"){
        session_start();
        $control10=new Controller;
        $control10->addChapter();
        
        if ($_SESSION["pseudo"]==="admin" && $_SESSION["password"]==="admin") {
            ?><script>$("#menuAdmin").css("display","block")</script>  <?php
        }
    }elseif($_GET['action']=="validChapter") {
        session_start();
        $control11=new Controller;
        $control11->chapterObject();
       $control11->showTheListChapter();
        if ($_SESSION["pseudo"]==="admin" && $_SESSION["password"]==="admin") {
            ?><script>$("#menuAdmin").css("display","block")</script>  <?php
        }
    }
    }
    
    
    
    
    else{
        require("view/listChapters.php");
    }
    

    

    

// $control1=new Controller;

// $control1->go();

  