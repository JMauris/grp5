<?php

class Genretour {
	
	private $idGenreTour;
	private $genreTour_fr;
	private $genreTour_DE;
	
	public function __construct($idGenreTour=null, $genreTour_fr, $genreTour_de) {
		$this->setId($idGenreTour);
		$this->setGenreTour_fr($genreTour_fr);
		$this->setGenreTour_de($genreTour_de);
	}
	
	public function getIdGenreTour() {
		return $this->idGenreTour;
	}
	
	public function setId($idGenreTour) {
		$this->idGenreTour=$idGenreTour;
	}
	
	public function getGenreTour_fr() {
		return $this->genreTour_fr;
	}
	
	public function setGenreTour_fr($genreTour_fr) {
		$this->genreTour_fr=$genreTour_fr;
	}
	
	public function getGenreTour_de() {
		return $this->genreTour_DE;
	}
	
	public function setGenreTour_de($genreTour_de) {
		$this->genreTour_DE=$genreTour_de;
	}
	
	public static function getAllGenre(){
		
		$query = "SELECT * From genretour";
		$result = MySqlConn::getInstance()->selectDB($query);
		
		while($row = $result->fetch())
		{
			$resultArray[] =   new Genretour($row['idGenreTour'],$row['genreTour_fr'],$row['genreTour_DE']);
		}
		
		$result->closeCursor();
		
		return $resultArray;
	}
	
	public static function connectByIdGenreTour($idGenreTour) {
		$query = "SELECT * From genretour WHERE idGenreTour='$idGenreTour'";
		$result = MySqlConn::getInstance()->selectDB($query);
		
		$row=$result->fetch();
		if(!$row) return false;
		
		
		return new Genreretour($row['idGenreTour'],$row['genreTour_fr'],$row['genreTour_DE']);
	}
	
}

?>