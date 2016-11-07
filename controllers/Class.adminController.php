<?php

class adminController extends Controller {

	function admin(){
		date_default_timezone_set('UTC');
		$date =date('l jS \of F Y');
	}
	 
	//--------------------------------------------------------------
	 
	function admin_details_tours() {
		$result = Tour::connectToAll();
		$_SESSION['get_all_shit']=$result;
			
		$Tour=$_SESSION['get_all_shit'];
	}
	 
	function update_tour() {
		$Tour=$_SESSION['get_all_shit'];
		 
		$id = $_POST['selectedTour'];
		 
		$_SESSION['selectedID'] = $Tour[$id];
	}
	 
	//functions from the tours
	function saveNew() {
		date_default_timezone_set('UTC');
		 
		$type = $_POST['type_input_new'];
			
		$title = $_POST['title_input_new'];
		$information = $_POST['info_input_new'];
		$difficulty = $_POST['difficulty_input_new'];
		$guide = $_POST['guide_input_new'];
			
		$time_from = $_POST['timeF_input_new'];
		$time_to = $_POST['timeT_input_new'];
			
		$date_from = date($_POST['date_input_from']);
		$date_to = date($_POST['date_input_to']);
		 
		$newTour = new Tour(null, $time_to, null, $date_from, $date_to, null,
				$time_from, null, null, null, $difficulty,  null, null, null, null,
				$guide, $type, null, null, $information, null, null, null, null,
				null, null,null, null,$title, null, null);
		 
		$newTour->CreateNewTour($newTour);
		$this->redirect('admin', 'admin_details_tours');
	}
	 
	function updateTour() {
		date_default_timezone_set('UTC');
		 
		$updateTour = $_SESSION['selectedID'];
		 
		$type = $_POST['type_input_update'];
			
		$title = $_POST['update_title'];
		$information = $_POST['update_info'];
		$difficulty = $_POST['update_difficult'];
		$guide = $_POST['update_guide'];
			
		$time_from = $_POST['update_time_from'];
		$time_to = $_POST['update_time_to'];
			
		$date_from = date($_POST['update_date_from']);
		$date_to = date($_POST['update_date_to']);
		 
		$updateTour->setIdxTypeTour($type);
		$updateTour->setTitre($title);
		$updateTour->setInformation_fr($information);
		$updateTour->setDifficulte($difficulty);
		$updateTour->setIdxGuide($guide);
		$updateTour->setDepartHeure($time_from);
		$updateTour->setDescente($time_to);
		$updateTour->setDateDebut($date_from);
		$updateTour->setDateFin($date_to);
			
		$updateTour->update($updateTour->getId());
		$this->redirect('admin', 'admin');
	}
	
	 function deleteTour(){
	 	date_default_timezone_set('UTC');
	 	$idForDelete=$_POST['selectedTour'];
	 	$delteTour=Tour::deleteById($idForDelete);
	 	$this->redirect('admin', 'admin');
	 }
	//----------------------------------------------------------------
	 
	function admin_details_members() {
		$result_Member = Personne::connectToAll();
		$_SESSION['get_all_Membershit']=$result_Member;

		$Member=$_SESSION['get_all_Membershit'];
	}

	function update_member() {
		$Member=$_SESSION['get_all_Membershit'];

		$id =$_POST['selectedIDMember'];

		$_SESSION['selectedMember'] = $Member[$id];
	}

	//functions from the members
	function saveNewMember() {
		date_default_timezone_set('UTC');

		$name = $_POST['name'];
		$lastname = $_POST['lastname'];
		$adress = $_POST['adress'];
		$npa = $_POST['npa'];
		$locality = $_POST['locality'];
		$telefon = $_POST['phone'];
		$portable = $_POST['mobile'];
		$email = $_POST['email'];
		 
		$newMember = new Personne(null, $name, $lastname, $adress, $email, null,
				$telefon, $portable, null, null, null, $npa, $locality, null, null);
		 
		$newMember->CreateNonCAS($newMember);
		$this->redirect('admin', 'admin_details_members');
	}
	 
	function updateMember() {
		$updateMember = $_SESSION['selectedMember'];
			
		$name = $_POST['name_update'];
		$lastname = $_POST['lastname_update'];
		$adress = $_POST['adress_update'];
		$npa = $_POST['npa_update'];
		$locality = $_POST['locality_update'];
		$telefon = $_POST['phone_update'];
		$portable = $_POST['mobile_update'];
		$email = $_POST['email_update'];
			
		$updateMember->setFirstname($name);
		$updateMember->setLastname($lastname);
		$updateMember->setAdresse($adress);
		$updateMember->setNpa($npa);
		$updateMember->setLocalite($locality);
		$updateMember->setPhone($telefon);
		$updateMember->setPortable($portable);
		$updateMember->setEmail($email);
		 
		$updateMember->update2($updateMember->getId());
		$this->redirect('admin', 'admin_details_members');
	}
	function deleteMember(){
		date_default_timezone_set('UTC');
		$idForDelete=$_POST['selectedIDMember'];
		$delteTour=Personne::deleteById($idForDelete);
		$this->redirect('admin', 'admin');
	}
	
	function show_registered() {
		$Tour=$_SESSION['tour'];
		$idTour = $_POST['selectedTour'];
		
		$PersonneList = Tour::get_registered_members($idTour);
		$_SESSION['listPersonne']=$PersonneList;
	}
}

?>
