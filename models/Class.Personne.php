<?php //15
class Personne{
  private $id;

  private $firstname;
  private $lastname;


  private $email;
  private $password;

  private $role;


  private $portable;
  private $phone;

  private $adresse;
  private $localite;
  private $npa;



  private $idxAbonnement;
  

  /**
   * 
   * @param unknown $id
   * @param unknown $firstname
   * @param unknown $lastname
   * @param unknown $email
   * @param unknown $password
   * @param unknown $idxLangue
   * @param unknown $estActif
   * @param unknown $numMember
   * @param unknown $role
   * @param unknown $portable
   * @param unknown $phone
   * @param unknown $adresse
   * @param unknown $localite
   * @param unknown $npa
   * @param unknown $idxAbonnement
   */
  public function __construct($id=null, $firstname, $lastname,
                              $email, $password=null, $idxLangue, $estActif, $numMember, $role,
                               $portable, $phone, $adresse, $localite, $npa, $idxAbonnement){

      $this->setId($id);
      $this->setFirstname($firstname);
      $this->setLastname($lastname);


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
 public function getAdresse(){
   return $this->adresse;
 }

 public function setAdresse($adresse){
   $this->adresse = $adresse;
 }

 public function getLocalite()
 {
   return $this->localite;
 }

 public function setLocalite($localite){
   $this->localite=$localite;
 }


 public function getNpa()
 {
   return $this->npa;
 }

  public function setNpa($npa){
    $this->npa=$npa;
  }

  public function getPortable()
  {
    return $this->portable;
  }

   public function setPortable($portable){
     $this->portable= $portable;
   }

   public function getPhone()
   {
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
public static function connect($adressEmail,$pwd){
  var_dump($adressEmail);
  var_dump($pwd);
  $pwd = sha1($pwd);
  $query = "SELECT * From personne WHERE email='$adressEmail' AND motDePasse='$pwd'";
  $result = MySqlConn::getInstance()->selectDB($query);
  $row = $result->fetch();
  if(!$row) return false;

  return new Personne($row['idPersonne'], $row['prenom'], $row['nom'],$row['email'], $row['motDePasse']
                      , $row['idxLangue'], $row['estActif'] , $row['numMembre'], $row['role'], $row['portable'],
                       $row['telephone'], $row['adresse'], $row['localite'], $row['NPA'], $row['idxAbonnement']);


}


public function update($id){

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

}


public static function updatePassword($user){
{

  $t = $user->getPassword();
  $pwd = sha1($t);
  $id = $user->getId();
}

  $query = "UPDATE personne
            SET motDePasse= '$pwd'
            WHERE idPersonne='$id'
            ;";

  return  MySqlConn::getInstance()->executeQuery($query);
}


public static function checkExist($adressEmail,$name,$lastname){


  $query = "SELECT * From personne WHERE email='$adressEmail' AND nom='$lastname' AND prenom='$name'";
  $result = MySqlConn::getInstance()->selectDB($query);
  $row = $result->fetch();
  if(!$row) return false;

  return new Personne($row['idPersonne'], $row['prenom'], $row['nom'],$row['email'], $row['motDePasse']
                      , $row['idxLangue'], $row['estActif'] , $row['numMembre'], $row['role'], $row['portable'],
                       $row['telephone'], $row['adresse'], $row['Localite'], $row['NPA'], $row['idxAbonnement']);


}


public static function CreateNonCAS($user){


  $lastnameUser = $user->getLastname();
  $firstnameUser = $user->getFirstname();
  $adresseUser =   $user->getAdresse();
  $emailUser = $user->getEmail();
  $phoneUser =  $user->getPhone();
  $portableUser = $user->getPortable();
  if($user->getIdxAbonnement()==null)
  {

    $idxAbonnementUser=0;
  }else {
      $idxAbonnementUser = $user->getIdxAbonnement();
  }

  $npaUser = $user->getNpa();
  $localityUser = $user->getLocalite();


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
      return getId();
;

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

public static function deleteById($id) {
	$query =  "DELETE FROM personne WHERE idPersonne='$id' ";
	$result = MySqlConn::getInstance()->selectDB($query);
	$row=$result->fetch();
	if(!$row) return false;
	return true;
}




}

 ?>
