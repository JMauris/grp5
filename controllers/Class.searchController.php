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
  		$genre=Genretour::getAllGenre();
  		$_SESSION['genretour']=$genre;
 
  		$region=Region::getAllRegion();
  		$_SESSION['region']=$region;
  		

  }

  function search_result()
  {
  	
	$idRegion = $_POST['region'];
  	$difficulty = $_POST['difficulty'];
  	$genre = $_POST['sort_hike'];
  	
  	$_SESSION['tour']=Tour::get_results($idRegion, $difficulty, $genre);
  	$tourResults=$_SESSION['tour'];
  }
}



 ?>
