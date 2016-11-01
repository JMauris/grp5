<?php
class myProgramController extends Controller{


  /**
   * Method that controls the page 'myProgram.php'
   */
  function myprogram(){

    //The page cannot be displayed if no user connected
    if(!$this->getActiveUser()){
      $this->redirect('login', 'login');
      exit;
    }


    //charger tout les inscription de cette personne

    $iduser=$_SESSION['personne']->getId();

    $inscription = Inscription::connectByUser($iduser);


    //faire un array des  Tour enregistrer
    if($inscription!=false)
    {
    $TourRegister = Tour::connectForMyProgramm($inscription,0,12);

    $_SESSION['MyRegister']=$TourRegister;
  }

    $favoris = Favoris::connectForFavoris($iduser);


    //ne pas créer la session si elle est vide
    if($favoris!=false)
    {


      $TourFavoris = Tour::connectForMyProgramm($favoris,1,12);
      $_SESSION['MyFavoris']=$TourFavoris;




  }


  }







}

?>
