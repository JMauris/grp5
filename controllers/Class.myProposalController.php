<?php
class myProposalController extends Controller{


  /**
   * Method that controls the page 'myProgram.php'
   */
  function myproposal(){

    //The page cannot be displayed if no user connected
    if(!$this->getActiveUser()){
      $this->redirect('login', 'login');
      exit;
    }


      $iduser=$_SESSION['personne']->getId();


  }







}

?>
