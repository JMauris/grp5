<?php
class proposalController extends Controller{


  /**
   * Method that controls the page 'myProgram.php'
   */
  function proposal(){
  	$result = Tour::connectTour(6, null);
  	$_SESSION['tour']=$result;
  }

  function proposal_detail(){


  }
}

?>
