<?php

class Favoris {

	private $idPersonne;
	private $idTour;
	private $estFavoris;
	private $evaluation;

	public function __construct($idPersonne, $idTour, $estFavoris, $evaluation) {
		$this->setIdPersonne($idPersonne);
		$this->setIdTour($idTour);
		$this->setEstFavoris($estFavoris);
		$this->setEvaluation($evaluation);
	}

	public function getIdPersonne() {
		return $this->idPersonne;
	}

	public function setIdPersonne($idPersonne) {
		$this->idPersonne=$idPersonne;
	}

	public function getIdTour() {
		return $this->idTour;
	}

	public function setIdTour($idTour) {
		$this->idTour=$idTour;
	}

	public function getEstFavoris() {
		return $this->estFavoris;
	}

	public function setEstFavoris($estFavoris) {
		$this->estFavoris=$estFavoris;
	}

	public function getEvaluation() {
		return $this->evaluation;
	}

	public function setEvaluation($evaluation) {
		$this->evaluation=$evaluation;
	}

	public static function connectForFavoris($idPersonne) {
		$query = "SELECT * FROM `favoris` WHERE `idPersonne` = $idPersonne AND `estFavoris` = '$idPersonne'  ";
		$result = MySqlConn::getInstance()->selectDB($query);
	  	if(empty($result)==true)
				return false;

		while($row = $result->fetch())
		{
			if(!$row) return false;
			$resultArray[] = new Favoris($row['idPersonne'],$row['idTour'], $row['estFavoris'], $row['evaluation']);


		}

		$result->closeCursor();

		return $resultArray;



	}

	public static function connectForEvalutation($idPersonne) {
		$query = "SELECT * FROM `favoris` WHERE `idPersonne` = $idPersonne AND `evaluation` != 0  ";
		$result = MySqlConn::getInstance()->selectDB($query);
	  	if(empty($result)==true)
				return false;

		while($row = $result->fetch())
		{
			if(!$row) return false;
			$resultArray[] = new Favoris($row['idPersonne'],$row['idTour'], $row['estFavoris'], $row['evaluation']);


		}

		$result->closeCursor();

		return $resultArray;



	}

	public static function connectbyPersAndTour($idPersonne, $idTour) {
		$query = "SELECT * FROM `favoris` WHERE `idPersonne` = $idPersonne AND `idTour` = $idTour  ";
		$result = MySqlConn::getInstance()->selectDB($query);
		$row = $result->fetch();
		if(!$row) return false;


 return new Favoris($row['idPersonne'],$row['idTour'], $row['estFavoris'], $row['evaluation']);



	}

	public function updateFavoris($idTour,$idPersonne,$value)
	{
		  $query = "UPDATE `favoris` SET `estFavoris`=$value WHERE `idTour` = $idTour AND `idPersonne` = $idPersonne";

								return  MySqlConn::getInstance()->executeQuery($query);
	}
	public static function createFavoris($idTour,$idPersonne,$Favoris,$evaluation)
	{
	  $query = "INSERT INTO `favoris`(`idPersonne`, `idTour`, `estFavoris`, `evaluation`) VALUES ('$idPersonne','$idTour','$Favoris','$evaluation') ";
	
			return  MySqlConn::getInstance()->executeQuery($query);
}
	public function updateNotice($idTour,$idPersonne,$value)
	{
			$query = "UPDATE `favoris` SET `evaluation`=$value WHERE `idTour` = $idTour AND `idPersonne` = $idPersonne";

								return  MySqlConn::getInstance()->executeQuery($query);
	}



































}

?>
