<?php
class Logmessages {
	private $idLog;
	private $idRandonnee;
	private $message_fr;
	
	/**
	 *
	 * @param unknown $idLog        	
	 * @param unknown $idRandonnee        	
	 * @param unknown $message_fr        	
	 */
	public function __construct($idLog, $idRandonnee, $message_fr) {
		$this->setIdLog ( $idLog );
		$this->setIdRandonnee ( $idRandonnee );
		$this->setMessage_fr ( $message_fr );
	}
	public function getIdLog() {
		return $this->idLog;
	}
	public function setIdLog($idLog) {
		$this->idLog = $idLog;
	}
	public function getIdRandonnee() {
		return $this->idRandonnee;
	}
	public function setIdRandonnee($idRandonnee) {
		$this->idRandonnee = $idRandonnee;
	}
	public function getMessage_fr() {
		return $this->message_fr;
	}
	public function setMessage_fr($message_fr) {
		$this->message_fr = $message_fr;
	}
	/**
	 * Mtheod that connects by id
	 * @param unknown $idLog
	 * @param unknown $idRandonnee
	 */
	public static function connectById($idLog, $idRandonnee) {
		$query = "SELECT * From logmessages WHERE idLog='$idLog' AND idRandonnee='$idRandonnee'";
		$result = MySqlConn::getInstance ()->selectDB ( $query );
	}
}

?>