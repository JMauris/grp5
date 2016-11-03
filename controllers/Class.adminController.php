<?php

class adminController extends Controller {

	function admin(){
		# code...
	}

	function admin_details_members() {

	}

	//functions from the members
	function save_new_Member() {

	}

	function update_member() {

	}
	 
	function delete_member() {

	}


	function admin_details_tours() {
		if(isset($_POST['choose_id'])) {
			updateGetTour();
		}
	}

	//functions from the tours
	function saveNew() {
		alert("inside the save new");
		$type = $_POST['type_input_new'];
			
		$title = $_POST['title_input_new'];
		$information = $_POST['info_input_new'];
		$difficulty = $_POST['difficulty_input_new'];
		$guide = $_POST['guide_input_new'];
			
		$time_from = $_POST['timeF_input_new'];
		$time_to = $_POST['timeT_input_new'];
			
		$date_from = $_POST['date_input_from'];
		$date_to = $_POST['date_input_to'];

		$newTour = new Tour($time_to, $date_from, $date_to, $time_from, $difficulty, $guide, $type, $information, $title);

		$newTour->CreateNewTour($newTour);
		$this->redirect('admin_details_tours', 'admin_details_tours');
	}

	function updateTour() {
		$id = $_POST['update_id'];
		$updateTour->connectbyId2($id);
			
		$tour = $_POST['type_input_update'];
			
		$title = $_POST['update_title'];
		$information = $_POST['update_info'];
		$difficulty = $_POST['update_difficult'];
		$guide = $_POST['update_guide'];
		 
		$time_from = $_POST['update_time_from'];
		$time_to = $_POST['update_time_to'];
		 
		$date_from = $_POST['update_date_from'];
		$date_to = $_POST['update_date_to'];

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

	function updateGetTour() {
		$id = $_POST['update_id'];
		$tournee=Tour::connectbyId2($id);

		$_SESSION['tour_update']=$tournee;
	}

	function deleteTour() {
		$id = $_POST['delete_id'];
	}
}

?>
