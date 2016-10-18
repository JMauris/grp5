<?php
class proposalController extends Controller{


  /**
   * Method that controls the page 'Propossal.php'
   */
  function Proposal()
  {
  	$result = Tour::connectTour(1, 2);
  	$_SESSION['tour']=$result;
  }

  function  proposal_detail()
  {
    
  }

  }
?>
