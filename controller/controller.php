<?php


// if (isset($_POST['pseudo'])&& isset($_POST['mdp'])) {
//     require("view/connexion.php");
// }else{
//     require("view/inscription.php");
// }


require_once("model/User.php");

require_once("model/Chapter.php");


class Controller{

public function allChapters(){
    require("view/listChapters.php");
}

public function inscription(){
    require("view/inscription.php");
}

public function connexion (){
    require("view/connexion.php");
}

public function deconnexion(){
    require("view/deconnexion.php");
}

public function linkInscription(){
    require("view/connexion.php");
}



public function listCom(){
    require("view/listComments.php");
}

public function sign(){
    require("view/listSignal.php");
}

public function checkListUsers(){
    $user = new User;
    $listUsers = $user->listMember();
    require("view/listUsers.php");
}


public function addOneUser(){
    $oneUser= new User;
    $oneUser->addUser();
}

public function chapterObject(){
    $oneChapter = new Chapter;
      $oneChapter->addChptr();

}

public function showTheListChapter(){
    $listChapter = new Chapter;
    $addTheChapter =  $listChapter->showlistChapter();
    require("view/listChapters.php");
}

public function addChapter(){
    require("view/addChapter.php");
}


}

