<?php
class ProposalController extends Controller {
	
	/**
	 * Method that controls the page 'myProgram.php'
	 */
	function proposal() {
		$result = Tour::connectTour ( 6, null );
		$_SESSION ['tour'] = $result;
	}
	
	/**
	 * Method that controls the page 'proposal_detail.php'
	 */
	function proposal_detail() {
		if (strpos ( $_SERVER ["HTTP_REFERER"], 'proposal' )) {
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
		}
		
		if (isset ( $_SESSION ['back_proposal'] )) {
			if (! (strpos ( $_SERVER ["HTTP_REFERER"], 'proposal_detail' )))
				$_SESSION ['back_proposal'] = $_SERVER ["HTTP_REFERER"];
		} else {
			$_SESSION ['back_proposal'] = $_SERVER ["HTTP_REFERER"];
		}
	}
	
	/**
	 * Method that controls the function for saving as favoris the selected proposal
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
	 * Method that controls the function for saving notice
	 */
	function saveNotice() {
		
		//
		$Myvalue = $_POST ['notice'];
		
		$_SESSION ['FavorisData']->updateNotice ( $_SESSION ['FavorisData']->getIdTour (), $_SESSION ['FavorisData']->getIdPersonne (), $Myvalue );
		$this->redirect ( 'proposal', 'proposal_detail' );
	}
}

?>
