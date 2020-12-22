<?php

require('controller/controller.php');

if (isset($_GET['action'])) {
      echo"c ok";
      if ($_GET['action']=="showChapters") {
          allChapters();
      }
      elseif ($_GET['action']=="inscription") {
        inscription();
    }
    }else{
        //TODO acceuil
        echo"redirection acceuil";
    }
    

