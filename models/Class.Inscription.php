<?php

class Inscription {

	private $idPersonne;
	private $idRandonnee;
	private $date;
	private $heure;
	private $idxStatus;
	private $remarque;

	public function __construct($idPersonne, $idRandonnee, $date, $heure, $idxStatus, $remarque) {
		$this->setIdPersonne($idPersonne);
		$this->setIdRandonnee($idRandonnee);
		$this->setDate($date);
		$this->setHeure($heure);
		$this->setIdxStatus($idxStatus);
		$this->setRemarque($remarque);
	}

	public function getIdPersonne() {
		return $this->idPersonne;
	}

	public function setIdPersonne($idPersonne) {
		$this->idPersonne=$idPersonne;
	}

	public function getIdRandonnee() {
		return $this->idRandonnee;
	}

	public function setIdRandonnee($idRandonnee) {
		$this->idRandonnee=$idRandonnee;
	}

	public function getDate() {
		return $this->date;
	}

	public function setDate($date) {
		$this->date=$date;
	}

	public function getHeure() {
		return $this->heure;
	}

	public function setHeure($heure) {
		$this->heure=$heure;
	}

	public function getIdxStatus() {
		return $this->idxStatus;
	}

	public function setIdxStatus($idxStatus) {
		$this->idxStatus=$idxStatus;
	}

	public function getRemarque() {
		return $this->remarque;
	}

	public function setRemarque($remarque) {
		$this->remarque=$remarque;
	}

	public static function connectById($idPersonne, $idRandonnee) {
		$query = "SELECT * From inscription WHERE idPersonne='$idPersonne' AND idRandonnee='$idRandonnee'";
		$result = MySqlConn::getInstance()->selectDB($query);
	}
	public static function nbrInscription($idRandonnee) {
		$query = "SELECT * From inscription WHERE idRandonnee='$idRandonnee'";
		$result = MySqlConn::getInstance()->selectDB($query);
		return count($result);

	}
	public static function isInscri($idPersonne, $idRandonnee) {
		$query = "SELECT * From inscription WHERE idPersonne='$idPersonne' AND idRandonnee='$idRandonnee'";
		$result = MySqlConn::getInstance()->selectDB($query);
		return $result!=null;
	}

public static function Create($inscription){

$idPersonneInscr = $inscription->getIdPersonne();
$idRandonneeInscr = $inscription->getIdRandonnee();
$dateInscr = $inscription->getDate();
$HeureInscr = $inscription->getHeure();
$IdxStatusInscr = $inscription->getIdxStatus();
$RemarqueInscr = $inscription->getRemarque();


	$query ="INSERT INTO `inscription`(`idPersonne`, `idRandonnee`, `date`, `heure`, `idxStatus`, `remarque`)
	VALUES ('$idPersonneInscr','$idRandonneeInscr','$dateInscr','$HeureInscr','$IdxStatusInscr','$RemarqueInscr');";


	return  MySqlConn::getInstance()->executeQuery($query);
}



public static function connectByUser($idPersonne){


  $query = "SELECT * FROM `inscription` WHERE `idPersonne` = '$idPersonne'";
  $result = MySqlConn::getInstance()->selectDB($query);
	while($row = $result->fetch())
	{
	$resultArray[] =   new inscription($row['idPersonne'], $row['idRandonnee'], $row['date'],$row['heure'], $row['idxStatus'], $row['remarque']);

	}
	$result->closeCursor();
//($idPersonne, $idRandonnee, $date, $heure, $idxStatus, $remarque)


return $resultArray;

}

}

?>
