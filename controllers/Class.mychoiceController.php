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

        $favoris = Favoris::connectForFavoris($iduser);


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

        $notice =Favoris::connectForEvalutation($iduser);

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

    function displaySelect()
    {
      $idtour=$_POST['tourSelect'];
      $test=$_SERVER["HTTP_REFERER"];

      if(strpos($test,'myregister'))
      {
        $Tour =   $_SESSION['MyRegister'];
      }
      elseif (strpos($test,'myfavoris')) {
        $Tour =  $_SESSION['Mynotice'];
      }    elseif (strpos($test,'mynotice')) {
          $Tour =  $_SESSION['MyFavoris'];
      }
$_SESSION['tour']= $Tour;
$_POST['selectedTour']=$idtour;

  $test2=$Tour[$idtour];
  if($test2->getIdxTypeTour()==1||$test2->getIdxTypeTour()==2){ $this->redirect('programm', 'hiking_detail');}
  elseif ($test2->getIdxTypeTour()==6) {
    $this->redirect('proposal', 'proposal_detail');
  }




    }










}

 ?>
