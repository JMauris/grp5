<?php
/**
 *
 */
class searchController extends Controller {
	
	/**
	 * Method that controls the page 'search.php'
	 */
	function search() {
	}
	
	/**
	 * Methos that controls the page 'search_path.php'
	 */
	function search_path() {
		$genre = Genretour::getAllGenre ();
		$_SESSION ['genretour'] = $genre;
		
		$region = Region::getAllRegion ();
		$_SESSION ['region'] = $region;
	}
	
	/**
	 * Method that controls the page 'search_result.php' for displaying the details of the selected searched tour
	 */
	function search_result() {
		$idRegion = $_POST ['selected_region'];
		$difficulty = $_POST ['difficulty'];
		$genre = $_POST ['sort_hike'];
		$txt = $_POST ['filter'];
		if ($txt != null) {
			$tourResults = Tour::get_results_byTxt ( $txt );
			if ($tourResults == false) {
				$tourResults = "error";
			}
			$_SESSION ['tour_results'] = $tourResults;
		} else {
			$tourResults = Tour::get_results ( $idRegion, $difficulty, $genre );
			
			if ($tourResults == false) {
				$tourResults = "error";
			}
			
			$_SESSION ['tour_results'] = $tourResults;
		}
	}
	function search_detail() {
		if (strpos ( $_SERVER ["HTTP_REFERER"], 'search' )) {
			if (isset ( $_POST ['selectedTour'] )) {
				
				if (isset ( $_SESSION ['tour'] )) {
					$Tour = $_SESSION ['tour'];
				}
				
				$id = $_POST ['selectedTour'];
				$_SESSION ['Selected_Tour'] = $Tour [$id];
			} elseif (isset ( $_SESSION ['idTourbyFavoris'] )) {
				
				$Tour = Tour::connectbyId ( $_SESSION ['idTourbyFavoris'] );
				$idTour = $_SESSION ['idTourbyFavoris'];
				$_SESSION ['Selected_Tour'] = $Tour;
			}
		}
		if (strpos ( $_SERVER ["HTTP_REFERER"], 'mychoice' )) {
			
			$id = $_SESSION ['MyselectedTour'];
			// $Tour = $_SESSION[tour] OR $_SESSION ['']
			$Tour = $_SESSION ['tour'];
			$_SESSION ['Selected_Tour'] = $Tour [$_SESSION ['MyselectedTour']];
		}
		
		// check the inscription to THIS programm
		
		$idTour = $_SESSION ['Selected_Tour']->getId ();
		
		if (isset ( $_SESSION ['personne'] )) {
			
			$_SESSION ['FavorisData'] = Favoris::connectbyPersAndTour ( $_SESSION ['personne']->getId (), $idTour );
		} else {
			$_POST ['isInscri'] = 0;
		}
	}
	
	/**
	 * Method that controls the function for saving the selected tour as favorite
	 */
	function saveFavoris() {
		//
		if ($_POST ['favoris'] != 'add') {
			$value = 0;
		} else {
			$value = 1;
		}
		
		if ($_SESSION ['FavorisData'] == false) {
			
			favoris::createFavoris ( $_SESSION ['Selected_Tour']->getId (), $_SESSION ['personne']->getId (), $value, 0 );
		} else {
			$_SESSION ['FavorisData']->updateFavoris ( $_SESSION ['FavorisData']->getIdTour (), $_SESSION ['FavorisData']->getIdPersonne (), $value );
		}
		
		$this->redirect ( 'proposal', 'proposal_detail' );
	}
	
	/**
	 * Method that controls the function for saving the notice of the choosen tour
	 */
	function saveNotice() {
		
		//
		$Myvalue = $_POST ['notice'];
		
		$_SESSION ['FavorisData']->updateNotice ( $_SESSION ['FavorisData']->getIdTour (), $_SESSION ['FavorisData']->getIdPersonne (), $Myvalue );
		$this->redirect ( 'proposal', 'proposal_detail' );
	}
}

?>
