<?php

/**
 *
 */
class Tourregion extends Tour {
	private $idxRegion;
	private $idxTour;
	
	/**
	 *
	 * @param unknown $idxRegion        	
	 * @param unknown $idxTour        	
	 */
	function __construct($idxRegion, $idxTour) {
		$this->setIdxRegion ( $idxRegion );
		$this->setIdxTour ( $idxTour );
	}
	public function getIdidxRegion() {
		return $this->ididxRegion;
	}
	public function setId($ididxRegion) {
		$this->ididxRegion = $ididxRegion;
	}
	public function getIdxTour() {
		return $this->idxTour;
	}
	public function setIdxTour($idxTour) {
		$this->idxTour = $idxTour;
	}
	/**
	 *
	 * @param unknown $idxRegion        	
	 * @return boolean|Typeretour
	 */
	public static function connectbyId($idxRegion) 

	{
		$query = "SELECT * From tourregion WHERE idxRegion='$idxRegion' ";
		$result = MySqlConn::getInstance ()->selectDB ( $query );
		$row = $result->fetch ();
		if (! $row)
			return false;
		
		return new Tourregion ( $row ['idxRegion'], $row ['idxTour'] );
	}
}

?>
