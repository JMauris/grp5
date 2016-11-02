<?php

class mychoiceController extends Controller{

function mychoice(){

  //The page cannot be displayed if no user connected
  if(!$this->getActiveUser()){
    $this->redirect('login', 'login');
    exit;
    }

  }

  function myfavoris(){

    //The page cannot be displayed if no user connected
    if(!$this->getActiveUser()){
      $this->redirect('login', 'login');
      exit;
      }

        $iduser=$_SESSION['personne']->getId();

        $favoris = Favoris::connectForEvalutation($iduser);


        //ne pas créer la session si elle est vide
        if($favoris!=false)
        {


          $TourFavoris = Tour::connectForMyProgramm($favoris,1);
          $_SESSION['MyFavoris']=$TourFavoris;




      }
    }

  function mynotice(){

      //The page cannot be displayed if no user connected
      if(!$this->getActiveUser()){
        $this->redirect('login', 'login');
        exit;
        }
        $iduser=$_SESSION['personne']->getId();

        $notice =Favoris::connectForFavoris($iduser);

        $_SESSION['notice']= $notice;
        //faire un array des  Tour enregistrer
        if($notice!=false)
        {


          $TourNotice = Tour::connectForMyProgramm($notice,1);
          $_SESSION['Mynotice']=$TourNotice;


      }
      }


  function myregister(){

    //The page cannot be displayed if no user connected
    if(!$this->getActiveUser()){
      $this->redirect('login', 'login');
      exit;
    }


        $iduser=$_SESSION['personne']->getId();

        $inscription = Inscription::connectByUser($iduser);


        //faire un array des  Tour enregistrer
        if($inscription!=false)
        {
        $TourRegister = Tour::connectForMyProgramm($inscription,0);

        $_SESSION['MyRegister']=$TourRegister;
      }


    }










}

 ?>
