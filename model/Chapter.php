<?php

require_once("Bdd.php");


class Chapter extends Bdd{

    public function addChptr(){
        $dbAddChptr = $this->dbConnect();
        $reqAddChptr = $dbAddChptr->prepare('INSERT INTO chapter(title,mainText) VALUES(:val1,:val2)');
        $reqAddChptr->execute(array(
            'val1'=>$_POST['title'],
            'val2'=>$_POST['text']));
    }


    public function showlistChapter()
    {
        $dbChapter = $this->dbConnect();
        $reqChapter = $dbChapter->query('SELECT * FROM chapter' );
        return $reqChapter;

    }


}