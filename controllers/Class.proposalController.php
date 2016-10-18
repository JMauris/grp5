<?php
class proposalController extends Controller{


  /**
   * Method that controls the page 'Propossal.php'
   */
  function Proposal()
  {
  	$result = Tour::connectbyId(2);
  	$_SESSION['msg'] = '<span class="success">'. $result->getTitre().' '.$result->getInformation_fr().'!</span>';
  	$_SESSION['tour'] = $result;
  }
  	
  	function GetAllTours()
  	{
  		$result = Tour::getAll();
  		$_SESSION['msg'] = '<span class="success">'.$result->getTitre().'</span>';
  		$_SESSION['tour'] = $result;
  	}
  }
?>
