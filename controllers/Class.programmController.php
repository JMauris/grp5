<?php
class ProgrammController extends Controller {
	
	/**
	 * Method that controls the page 'programm.php'
	 */
	function Programm() {
		// test récuprer un tableau
		// récuprer les séjours dans une row;
		date_default_timezone_set ( 'UTC' );
		$date = date ( 'l jS \of F Y' );
		
		if (isset ( $_POST ['type'] ) != null) {
			$result = Tour::connectTour ( $_POST ['type'], null );
		} else {
			// put var for connect with 1-2
			$result = Tour::connectTour ( 1, 2 );
		}
		// put var for connect with 1-2
		// $result = Tour::connectTour(1, 2);
		$_SESSION ['tour'] = $result;
	}
	
	/**
	 * Method that controls 'hiking_detail.php'
	 */
	function hiking_detail() {
		if (strpos ( $_SERVER ["HTTP_REFERER"], 'programm' )) {
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
			$Tour = $_SESSION ['tour'];
			$_SESSION ['Selected_Tour'] = $Tour [$_SESSION ['MyselectedTour']];
		}
		
		// check the inscription to THIS programm
		
		$idTour = $_SESSION ['Selected_Tour']->getId ();
		$_SESSION ['nbrInscription'] = Inscription::nbrInscription ( $idTour );
		
		if (isset ( $_SESSION ['personne'] )) {
			$_POST ['isInscri'] = Inscription::isInscri ( $_SESSION ['personne']->getId (), $idTour );
			
			$_SESSION ['FavorisData'] = Favoris::connectbyPersAndTour ( $_SESSION ['personne']->getId (), $idTour );
		} else {
			$_POST ['isInscri'] = 0;
		}
		
		if (isset ( $_SESSION ['back'] )) {
			if (! (strpos ( $_SERVER ["HTTP_REFERER"], 'hiking_detail' )))
				$_SESSION ['back'] = $_SERVER ["HTTP_REFERER"];
		} else {
			$_SESSION ['back'] = $_SERVER ["HTTP_REFERER"];
		}
	}
	
	/**
	 * Method that controls the function for saving a fvorite Tour
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
		$this->redirect ( 'programm', 'hiking_detail' );
	}
	
	/**
	 * Method that cpontrols the function for saving the notice of the tour
	 */
	function saveNotice() {
		
		//
		$Myvalue = $_POST ['notice'];
		if ($_SESSION ['FavorisData'] == false) {
			
			favoris::createFavoris ( $_SESSION ['Selected_Tour']->getId (), $_SESSION ['personne']->getId (), 0, $Myvalue );
		} else {
			$_SESSION ['FavorisData']->updateNotice ( $_SESSION ['FavorisData']->getIdTour (), $_SESSION ['FavorisData']->getIdPersonne (), $Myvalue );
		}
		$this->redirect ( 'programm', 'hiking_detail' );
	}
	
	/**
	 * Method that controls the function for removing form the registered Tour 
	 */
	function removeRegister() 

	{
		var_dump ( $_POST ['removeregister'] );
		
		Inscription::removeRegisterByID ( $_POST ['removeregister'], $_SESSION ['personne']->getId () );
		
		$this->redirect ( 'programm', 'hiking_detail' );
	}
	
	/**
	 * Method that controls 'programm_register.php'
	 */
	function programm_register() {
		if (! isset ( $_SESSION ['Selected_Tour'] )) {
			$this->redirect ( 'programm', 'programm' );
			exit ();
		}
	}
	
	/**
	 * Method that controls the function for registering the user to a tour
	 */
	function register_save() {
		date_default_timezone_set ( 'UTC' );
		
		$name = $_POST ['firstname'];
		$lastname = $_POST ['lastname'];
		$adress = $_POST ['adress'];
		$npa = $_POST ['npa'];
		$locality = $_POST ['localite'];
		$phone = $_POST ['phone'];
		$mobile = $_POST ['mobile'];
		$abo = $_POST ['abonnement'];
		$email = $_POST ['email'];
		
		if (isset ( $_SESSION ['personne'] )) {
			$user = $_SESSION ['personne'];
		} else {
			if (Personne::checkExist ( $email, $name, $lastname ) == true) {
				
				$user = Personne::checkExist ( $email, $name, $lastname );
			} else {
				$user = new Personne ( $id = null, $name, $lastname, $email, null, null, null, null, null, $mobile, $phone, $adress, $locality, $npa, $abo );
				
				// crée la personne et récupér son ID
				Personne::CreateNonCAS ( $user );
			}
		}
		
		$idPersonne = $user->getId ();
		
		$idRandonnee = $_SESSION ['Selected_Tour']->getId ();
		$date = date ( 'Y-m-d' );
		$heure = date ( 'h:i:s' );
		$idxStatus = 1;
		$remarque = "test J";
		
		// créer une inscription
		$inscription = new Inscription ( $idPersonne, $idRandonnee, $date, $heure, $idxStatus, $remarque );
		//
		Inscription::Create ( $inscription );
		
		$this->redirect ( 'programm', 'hiking_detail' );
	}
}

?>
