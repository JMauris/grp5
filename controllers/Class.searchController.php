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
	$idRegion = $_POST['selected_region'];
  	$difficulty = $_POST['difficulty'];
  	$genre = $_POST['sort_hike'];
  	
  	$tourResults=Tour::get_results($idRegion, $difficulty, $genre);
  	
  	if($tourResults==1)
  	{
  		$tourResults = "error";
  	}
  		
  	$_SESSION['tour_results']=$tourResults;
  }
}



 ?>
