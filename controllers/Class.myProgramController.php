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

    $result = Inscription::connectByUser($iduser);

    $_SESSION['MyRegister']=$result;
    //faire un array des  Tour enregistrer

    


  }







}

?>
