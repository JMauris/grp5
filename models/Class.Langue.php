<?php
class Langue {
	private $codeLangue;
	private $langue;
	
	/**
	 *
	 * @param unknown $codeLangue        	
	 * @param unknown $langue        	
	 */
	public function __construct($codeLangue, $langue) {
		$this->setCodeLangue ( $codeLangue );
		$this->setLangue ( $langue );
	}
	public function getCodeLangue() {
		return $this->codeLangue;
	}
	public function setCodeLangue($codeLangue) {
		$this->codeLangue = $codeLangue;
	}
	public function getLangue() {
		return $this->langue;
	}
	public function setLangue($langue) {
		$this->langue = $langue;
	}
	/**
	 *
	 * @param unknown $codeLangue        	
	 */
	public static function connectById($codeLangue) {
		$query = "SELECT * From langue WHERE codeLangue='$codeLangue'";
		$result = MySqlConn::getInstance ()->selectDB ( $query );
	}
}

?>