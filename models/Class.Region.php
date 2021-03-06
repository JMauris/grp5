<?php
class Region {
	private $id;
	private $region_de;
	private $region_fr;
	
	/**
	 *
	 * @param unknown $id        	
	 * @param unknown $region_fr        	
	 * @param unknown $region_de        	
	 */
	function __construct($id = null, $region_fr, $region_de) {
		$this->setId ( $id );
		$this->setRegion_fr ( $region_fr );
		$this->setRegion_de ( $region_de );
	}
	
	// id
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
	}
	
	// id
	public function getRegion_de() {
		return $this->region_de;
	}
	public function setRegion_de($region_de) {
		$this->region_de = $region_de;
	}
	
	// id
	public function getRegion_fr() {
		return $this->region_fr;
	}
	public function setRegion_fr($region_fr) {
		$this->region_fr = $region_fr;
	}
	/**
	 * Method that retrives an array of all Regions
	 * 
	 * @return Region
	 */
	public static function getAllRegion() {
		$query = "SELECT * From region";
		$result = MySqlConn::getInstance ()->selectDB ( $query );
		
		while ( $row = $result->fetch () ) {
			$resultArray [] = new Region ( $row ['idRegion'], $row ['region_fr'], $row ['region_de'] );
		}
		
		$result->closeCursor ();
		
		return $resultArray;
	}
	/**
	 * Method that connect all Region by idRegion
	 * 
	 * @param unknown $id        	
	 * @return boolean|Region
	 */
	public static function connectbyId($id) {
		$query = "SELECT * From region WHERE idRegion='$id' ";
		$result = MySqlConn::getInstance ()->selectDB ( $query );
		$row = $result->fetch ();
		if (! $row)
			return false;
		
		return new Region ( $row ['idRegion'], $row ['region_fr'], $row ['region_de'] );
	}
}
?>
