<?php
/**
 *
 */
class searchController extends Controller
{

  function search()
  {

  }
  function search_path()
  {
  		$result = Tour::connectTour(1, 2);
  		$_SESSION['tour']=$result;
  	
  }
  
  function search_result()
  {
  	$Tour=$_SESSION['tour'];
  	
  	$difficulty = $_POST['difficulty'];
  	
  	$_SESSION['difficulty'] = $Tour::get_results($difficulty);
  }
}



 ?>
