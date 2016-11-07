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
  	
  	if($tourResults== false)
  	{
  		$tourResults = "error";
  	}
  		
  	$_SESSION['tour_results']=$tourResults;
  }
  
  
  function  search_detail(){
  
  	if(strpos($_SERVER["HTTP_REFERER"],'search')){
  		if(isset ($_POST['selectedTour'] ))
  		{
  
  
  			if(isset ($_SESSION['tour'])){
  				$Tour=$_SESSION['tour'];
  			}
  
  
  			$id =$_POST['selectedTour'];
  			$_SESSION['Selected_Tour'] = $Tour[$id];
  		}elseif (isset($_SESSION['idTourbyFavoris']))
  		{
  
  			$Tour=Tour::connectbyId($_SESSION['idTourbyFavoris']);
  			$idTour= $_SESSION['idTourbyFavoris'];
  			$_SESSION['Selected_Tour'] = $Tour;
  		}
  	}
  	if(strpos($_SERVER["HTTP_REFERER"],'mychoice')){
  
  		$id= $_SESSION['MyselectedTour'];
  		//$Tour = $_SESSION[tour] OR $_SESSION ['']
  		$Tour=$_SESSION['tour'];
  		$_SESSION['Selected_Tour'] = $Tour[$_SESSION['MyselectedTour']];
  	}
  
  
  
  
  
  
  	//check the inscription to THIS programm
  
  	$idTour =$_SESSION['Selected_Tour']->getId();
  
  
  	if(isset ($_SESSION['personne']))
  	{
  
  
  
  		$_SESSION['FavorisData']= Favoris::connectbyPersAndTour($_SESSION['personne']->getId(),$idTour);
  
  
  
  	}
  	else {
  		$_POST['isInscri']=0;
  	}
  
  
  
  
  
  }
  
  
  
  
  function saveFavoris()
  {
  	//
  
  
  
  	if($_POST['favoris']!='add')
  	{
  		$value= 0;
  	}else {
  		$value = 1 ;
  	}
  
  
  	if($_SESSION['FavorisData']==false)
  	{
  
  		favoris::createFavoris($_SESSION['Selected_Tour']->getId(),$_SESSION['personne']->getId(),$value,0);
  	}else{
  		$_SESSION['FavorisData']->updateFavoris($_SESSION['FavorisData']->getIdTour(),$_SESSION['FavorisData']->getIdPersonne(),$value);
  	}
  
  	$this->redirect('proposal', 'proposal_detail');
  
  
  }
  
  function saveNotice()
  {
  
  	//
  	$Myvalue= $_POST['notice'];
  
  	$_SESSION['FavorisData']->updateNotice($_SESSION['FavorisData']->getIdTour(),$_SESSION['FavorisData']->getIdPersonne(),$Myvalue);
  	$this->redirect('proposal', 'proposal_detail');
  
  
  }
}



 ?>
