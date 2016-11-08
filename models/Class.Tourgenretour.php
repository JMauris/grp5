<?php
/**
 *
 */
class Tourgenretour extends Tour {
	private $idxGenreTour;
	private $idxTour;
	
	/**
	 *
	 * @param unknown $idxGenreTour        	
	 * @param unknown $idxTour        	
	 */
	function __construct($idxGenreTour, $idxTour) {
		$this->setId ( $id );
		$this->setIdxTour ( $idxTour );
	}
	public function getIdxGenreTour() {
		return $this->idxGenreTour;
	}
	public function setIdxGenreTour($idxGenreTour) {
		$this->idxGenreTour = $idxGenreTour;
	}
	public function getIdxTour() {
		return $this->idxTour;
	}
	public function setIdxTour($idxTour) {
		$this->idxTour = $idxTour;
	}
	
	/**
	 * Method used to connect through tour id
	 * 
	 * @param unknown $idxTour        	
	 * @return boolean|Typeretour
	 */
	public static function connectbyTourId($idxTour) {
		$query = "SELECT * From tourgenretour WHERE idxTour='$idxTour' ";
		$result = MySqlConn::getInstance ()->selectDB ( $query );
		$row = $result->fetch ();
		if (! $row)
			return false;
		
		return new Typeretour ( $row ['idxGenreTour'], $row ['idxTour'] );
	}
}

?>
