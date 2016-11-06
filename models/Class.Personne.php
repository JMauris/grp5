<?php //15
class Personne{
	private $id;

	private $firstname;
	private $lastname;

	private $email;
	private $password;

<<<<<<< HEAD
	private $email;
	private $password;

	private $role;
=======
	private $role;

	private $portable;
	private $phone;
>>>>>>> parent of 0fbcf81... Revert change on Personn

	private $adresse;
	private $localite;
	private $npa;

<<<<<<< HEAD
	private $portable;
	private $phone;

	private $adresse;
	private $localite;
	private $npa;
=======
	private $idxAbonnement;

	//It uses null as the default value for the function argument $id
	public function __construct($id=null, $firstname, $lastname, $adresse, $email, $password=null,
			$phone, $portable, $numMember,  $estActif, $idxAbonnement,
			$npa, $localite, $idxLangue, $role){
>>>>>>> parent of 0fbcf81... Revert change on Personn

				$this->setId($id);
				$this->setFirstname($firstname);
				$this->setLastname($lastname);

				$this->setEmail($email);

<<<<<<< HEAD
	private $idxAbonnement;
=======
				$this->setPassword($password);
>>>>>>> parent of 0fbcf81... Revert change on Personn

				$this->setIdxLangue($idxLangue);
				$this->setEstActif($estActif);

				$this->setNumMember($numMember);

				$this->setRole($role);

<<<<<<< HEAD
	//It uses null as the default value for the function argument $id
	public function __construct($id=null, $firstname, $lastname,
			$email, $password=null, $idxLangue, $estActif, $numMember, $role,
			$portable, $phone, $adresse, $localite, $npa, $idxAbonnement){

				$this->setId($id);
				$this->setFirstname($firstname);
				$this->setLastname($lastname);
=======
				$this->setPortable($portable);
				$this->setPhone($phone);

				$this->setAdresse($adresse);
				$this->setLocalite($localite);
				$this->setNpa($npa);
>>>>>>> parent of 0fbcf81... Revert change on Personn

				$this->setIdxAbonnement($idxAbonnement);

<<<<<<< HEAD
				$this->setEmail($email);

				$this->setPassword($password);

				$this->setIdxLangue($idxLangue);
				$this->setEstActif($estActif);

				$this->setNumMember($numMember);

				$this->setRole($role);

				$this->setPortable($portable);
				$this->setPhone($phone);

				$this->setAdresse($adresse);
				$this->setLocalite($localite);
				$this->setNpa($npa);

				$this->setIdxAbonnement($idxAbonnement);

	}


	//id
	public function getId(){

		return $this->id;
	}

	public function setId($id)
	{
		$this->id= $id;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

=======
	}

	//id
	public function getId(){
		return $this->id;
	}

	public function setId($id) {
		$this->id= $id;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

>>>>>>> parent of 0fbcf81... Revert change on Personn
	public function getPassword(){
		return $this->password;
	}

	public function setPassword($password){
		$this->password = $password;
	}

	//firstname
	public function getFirstname(){
		return $this->firstname;
	}

	public function setFirstname($firstname){
		$this->firstname = $firstname;
	}

	//lastname
	public function getLastname(){
		return $this->lastname;
	}

	public function setLastname($lastname){
		$this->lastname = $lastname;
	}
<<<<<<< HEAD
=======
	 
>>>>>>> parent of 0fbcf81... Revert change on Personn
	public function getAdresse(){
		return $this->adresse;
	}

	public function setAdresse($adresse){
		$this->adresse = $adresse;
	}

<<<<<<< HEAD
	public function getLocalite()
	{
=======
	public function getLocalite() {
>>>>>>> parent of 0fbcf81... Revert change on Personn
		return $this->localite;
	}

	public function setLocalite($localite){
		$this->localite=$localite;
	}


<<<<<<< HEAD
	public function getNpa()
	{
=======
	public function getNpa() {
>>>>>>> parent of 0fbcf81... Revert change on Personn
		return $this->npa;
	}

	public function setNpa($npa){
		$this->npa=$npa;
	}

<<<<<<< HEAD
	public function getPortable()
	{
=======
	public function getPortable() {
>>>>>>> parent of 0fbcf81... Revert change on Personn
		return $this->portable;
	}

	public function setPortable($portable){
		$this->portable= $portable;
	}

<<<<<<< HEAD
	public function getPhone()
	{
=======
	public function getPhone() {
>>>>>>> parent of 0fbcf81... Revert change on Personn
		return $this->phone;
	}

	public function setPhone($phone){
		$this->phone= $phone;
	}

	public function getNumMember(){
		return $this->numMember;
	}

	public function setNumMember($numMember){
		$this->numMember = $numMember;
	}

	public function getEstActif(){
		return $this->estActif;
	}

	public function setEstActif($estActif){
		$this->estActif = $estActif;
	}

	public function getRole(){
		return $this->role;
	}

	public function setRole($role){
		$this->role = $role;
	}

	public function getIdxAbonnement(){
		return $this->idxAbonnement;
	}

	public function setIdxAbonnement($idxAbonnement){
		$this->idxAbonnement = $idxAbonnement;
	}

	public function getIdxLangue(){
		return $this->idxLangue;
	}

	public function setIdxLangue($idxLangue){
		$this->idxLangue = $idxLangue;
	}
<<<<<<< HEAD
	public static function connect($adressEmail,$pwd){

=======
	 
	public static function connect($adressEmail,$pwd){
>>>>>>> parent of 0fbcf81... Revert change on Personn
		$pwd = sha1($pwd);
		$query = "SELECT * From personne WHERE email='$adressEmail' AND motDePasse='$pwd'";
		$result = MySqlConn::getInstance()->selectDB($query);
		$row = $result->fetch();
		if(!$row) return false;

		return new Personne($row['idPersonne'], $row['prenom'], $row['nom'],$row['email'], $row['motDePasse']
				, $row['idxLangue'], $row['estActif'] , $row['numMembre'], $row['role'], $row['portable'],
				$row['telephone'], $row['adresse'], $row['localite'], $row['NPA'], $row['idxAbonnement']);
<<<<<<< HEAD


	}

	public function update($id){

=======
	}

	public function update($id){
>>>>>>> parent of 0fbcf81... Revert change on Personn
		$query = "UPDATE personne
		SET email= '$this->email',
		portable= '$this->portable',
		telephone='$this->phone',
		adresse='$this->adresse',
		localite='$this->localite',
		NPA='$this->npa',
		idxAbonnement='$this->idxAbonnement'
		WHERE idPersonne='$id'
		;";

		return  MySqlConn::getInstance()->executeQuery($query);
<<<<<<< HEAD

	}


	public static function checkExist($adressEmail,$name,$lastname){


=======
	}
	 
	public function update2($id){
		$query = "UPDATE personne
		SET lastname= '$this->lastname',
		firstname= '$this->firstname',
		adresse='$this->adresse',
		npa='$this->npa',
		localite='$this->localite',
		portable='$this->portable',
		phone='$this->phone',
		email='$this->email'

		WHERE idPersonne='$id'
		;";
		 
		return  MySqlConn::getInstance()->executeQuery($query);
	}

	 
	public static function connectToAll() {
		$query =  "SELECT * From personne ";
		$result = MySqlConn::getInstance()->selectDB($query);
		while($row = $result->fetch()) {
			
			$resultArray[$row['idPersonne']] =   new Personne($row['idPersonne'], $row['prenom'], $row['nom'], $row['adresse'], $row['email'], $row['motDePasse']
					, $row['telephone'], $row['portable'], $row['idxLangue'], $row['estActif'] , $row['numMembre'], $row['Localite'], $row['NPA'], $row['role'],
					$row['idxAbonnement']);
				
		}

		$result->closeCursor();
		return $resultArray;
	}

	public static function checkExist($adressEmail,$name,$lastname){
>>>>>>> parent of 0fbcf81... Revert change on Personn
		$query = "SELECT * From personne WHERE email='$adressEmail' AND nom='$lastname' AND prenom='$name'";
		$result = MySqlConn::getInstance()->selectDB($query);
		$row = $result->fetch();
		if(!$row) return false;

		return new Personne($row['idPersonne'], $row['prenom'], $row['nom'],$row['email'], $row['motDePasse']
				, $row['idxLangue'], $row['estActif'] , $row['numMembre'], $row['role'], $row['portable'],
				$row['telephone'], $row['adresse'], $row['Localite'], $row['NPA'], $row['idxAbonnement']);
<<<<<<< HEAD


=======
>>>>>>> parent of 0fbcf81... Revert change on Personn
	}


	public static function CreateNonCAS($user){
<<<<<<< HEAD


=======
>>>>>>> parent of 0fbcf81... Revert change on Personn
		$lastnameUser = $user->getLastname();
		$firstnameUser = $user->getFirstname();
		$adresseUser =   $user->getAdresse();
		$emailUser = $user->getEmail();
		$phoneUser =  $user->getPhone();
		$portableUser = $user->getPortable();
<<<<<<< HEAD
		if($user->getIdxAbonnement()==null)
		{

			$idxAbonnementUser=0;
		}else {
=======
		if($user->getIdxAbonnement()==null) {
			$idxAbonnementUser=0;
		} else {
>>>>>>> parent of 0fbcf81... Revert change on Personn
			$idxAbonnementUser = $user->getIdxAbonnement();
		}

		$npaUser = $user->getNpa();
		$localityUser = $user->getLocalite();

<<<<<<< HEAD

=======
>>>>>>> parent of 0fbcf81... Revert change on Personn
		$query = "INSERT INTO `personne`(`nom`, `prenom`, `adresse`, `email`, `telephone`, `portable`,`idxAbonnement`, `NPA`, `localite`)
		VALUES ('$lastnameUser','$firstnameUser','$adresseUser','$emailUser','$phoneUser','$portableUser','$idxAbonnementUser','$npaUser','$localityUser');";

		MySqlConn::getInstance()->executeQuery($query);
		//setup l'id de ce USER

		$idquery = "SELECT idPersonne From personne
		WHERE nom     ='$lastnameUser'
		AND prenom    ='$firstnameUser'
		AND adresse   ='$adresseUser'
		AND email     ='$emailUser'
		AND NPA       ='$npaUser'
		AND Localite  ='$localityUser'
		";


		$result = MySqlConn::getInstance()->selectDB($idquery);
		$row = $result->fetch();
		if(!$row) return false;

		$user->setId($row['idPersonne']);
<<<<<<< HEAD
		return getId();
		;

	}







=======
		$user->getId();
	}
	 
>>>>>>> parent of 0fbcf81... Revert change on Personn
}

?>
