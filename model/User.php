<?php

require_once("Bdd.php");


class User extends Bdd{

    private $pseudo;

    private $password;

    private $mail;


    // public function setPseudo($_POST["pseudo"]){
    //     $this->pseudo= $_POST["pseudo"];
    // }

    // public function getPseudo(){
    //     return $this->pseudo;
    // }


    public function listMember()
    {
        $dbUser = $this->dbConnect();
        $req = $dbUser->query('SELECT * FROM user' );
        return $req;

    }


    public function addUser(){
        $dbAddUser = $this->dbConnect();
        $reqAddUser = $dbAddUser->prepare('INSERT INTO user(pseudoUser,userPassword,mail) VALUES(:val1,:val2,:val3)');
        $reqAddUser->execute(array(
            'val1'=>$_POST['pseudo'],
            'val2'=>password_hash($_POST['mdp'], PASSWORD_DEFAULT),
            'val3'=>$_POST['email']));
    }


 }