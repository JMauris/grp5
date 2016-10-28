<?php
class ProposalController extends Controller{


  /**
   * Method that controls the page 'myProgram.php'
   */
 function proposal(){
  	$result = Tour::connectTour(6, null);
  	$_SESSION['tour']=$result;
  	}
  	
  	
 function  proposal_detail()
  	{	
  		
  		$Tour=$_SESSION['tour'];
  		$id =$_POST['selectedTour'];
  		
  		$_SESSION['Selected_Tour'] = $Tour[$id];
  	}
}

?>
