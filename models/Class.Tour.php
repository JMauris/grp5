<?php
/**
 *
 */
class Tour
{
  private $id;

  protected $arriveeHeure;
  protected $codeprogramme;
  protected $dateDebut;
  protected $dateFin;
  protected $dateLimiteInscr;

  protected $departHeure;
  protected $descente;
  protected $description_de;
  protected $description_fr;
  protected $difficulte;

  protected $duree;
  protected $idxArriveeLocalite;
  protected $idxAssistant;
  protected $idxDepartLocalite;
  protected $idxGuide;

  protected $idxTypeTour;
  protected $idxTypeTransport;
  protected $infromation_de;
  protected $information_fr;
  protected $inscriptionMax;

  protected $lienCarte;
  protected $lieuRDV;
  protected $montee;
  protected $prixMax;
  protected $prixMin;

  protected $soustitre;
  protected $status;
  protected $titre;
  protected $transportArrivee;
  protected $transportDepart;



  function __construct($id=null,
                        $arriveeHeure, $codeprogramme, $dateDebut, $dateFin, $dateLimiteInscr,
                        $departHeure, $descente, $description_de, $description_fr, $difficulte,
                        $duree, $idxArriveeLocalite, $idxAssistant, $idxDepartLocalite, $idxGuide,
                        $idxTypeTour, $idxTypeTransport, $infromation_de, $information_fr, $inscriptionMax,
                        $lienCarte, $lieuRDV, $montee, $prixMax, $prixMin,
                        $soustitre, $status, $titre, $transportArrivee, $transportDepart)
  {





      $this->setId($id);

    $this->setArriveeHeure($arriveeHeure);
    $this->setCodeprogramme($codeprogramme);
    $this->setDateDebut($dateDebut);
    $this->setDateFin($dateFin);
    $this->setDateLimiteInscr($dateLimiteInscr);

    $this->setDepartHeure($departHeure);
    $this->setDescente($descente);
    $this->setDescription_de($description_de);
    $this->setDescription_fr($description_fr);
    $this->setDifficulte($difficulte);

    $this->setDuree($duree);
    $this->setIdxArriveeLocalite($idxArriveeLocalite);
    $this->setIdxAssistant($idxAssistant);
    $this->setIdxDepartLocalite($idxDepartLocalite);
    $this->setIdxGuide($idxGuide);

    $this->setIdxTypeTour($idxTypeTour);
    $this->setIdxTypeTransport($idxTypeTransport);
    $this->setInfromation_de($infromation_de);
    $this->setInformation_fr($information_fr);
    $this->setInscriptionMax($inscriptionMax);

    $this->setLienCarte($lienCarte);
    $this->setLieuRDV($lieuRDV);
    $this->setMontee($montee);
    $this->setPrixMax($prixMax);
    $this->setPrixMin($prixMin);

    $this->setSoustitre($soustitre);
    $this->setStatus($status);
    $this->setTitre($titre);
    $this->setTransportArrivee($transportArrivee);
    $this->setTransportDepart($transportDepart);

  }


//id
public function getId(){

  return $this->id;
}

public function setId($id)
{
  $this->id= $id;
}


public function getArriveeHeure(){

  return $this->arriveeHeure;
}

public function setArriveeHeure($arriveeHeure)
{
  $this->arriveeHeure= $arriveeHeure;
}

public function getCodeprogramme(){

  return $this->codeprogramme;
}

public function setCodeprogramme($codeprogramme)
{
  $this->codeprogramme= $codeprogramme;
}


public function getDateDebut(){

  return $this->dateDebut;
}

public function setDateDebut($dateDebut)
{
  $this->dateDebut= $dateDebut;
}


public function getDateFin(){

  return $this->dateFin;
}

public function setDateFin($dateFin)
{
  $this->dateFin= $dateFin;
}


public function getDateLimiteInscr(){

  return $this->dateLimiteInscr;
}

public function setDateLimiteInscr($dateLimiteInscr)
{
  $this->dateLimiteInscr= $dateLimiteInscr;
}


public function getDepartHeure(){

  return $this->departHeure;
}

public function setDepartHeure($departHeure)
{
  $this->departHeure= $departHeure;
}


public function getDescente(){

  return $this->descente;
}

public function setDescente($descente)
{
  $this->descente= $descente;
}


public function getDescription_de(){

  return $this->description_de;
}

public function setDescription_de($description_de)
{
  $this->description_de= $description_de;
}


public function getDescription_fr(){

  return $this->description_fr;
}

public function setDescription_fr($description_fr)
{
  $this->description_fr= $description_fr;
}


public function getDifficulte(){

  return $this->difficulte;
}

public function setDifficulte($difficulte)
{
  $this->difficulte= $difficulte;
}



public function getDuree(){

  return $this->duree;
}

public function setDuree($duree)
{
  $this->duree= $duree;
}


public function getIdxArriveeLocalite(){

  return $this->idxArriveeLocalite;
}

public function setIdxArriveeLocalite($idxArriveeLocalite)
{
  $this->idxArriveeLocalite= $idxArriveeLocalite;
}


public function getIdxAssistant(){

  return $this->idxAssistant;
}

public function setIdxAssistant($idxAssistant)
{
  $this->idxAssistant= $idxAssistant;
}


public function getIdxDepartLocalite(){

  return $this->idxDepartLocalite;
}

public function setIdxDepartLocalite($idxDepartLocalite)
{
  $this->idxDepartLocalite= $idxDepartLocalite;
}


public function getIdxGuide(){

  return $this->idxGuide;
}

public function setIdxGuide($idxGuide)
{
  $this->idxGuide= $idxGuide;
}


public function getIdxTypeTour(){

  return $this->idxTypeTour;
}

public function setIdxTypeTour($idxTypeTour)
{
  $this->idxTypeTour= $idxTypeTour;
}


public function getIdxTypeTransport(){

  return $this->idxTypeTransport;
}

public function setIdxTypeTransport($idxTypeTransport)
{
  $this->idxTypeTransport= $idxTypeTransport;
}



public function getInfromation_de(){

  return $this->infromation_de;
}

public function setInfromation_de($infromation_de)
{
  $this->infromation_de= $infromation_de;
}


public function getInformation_fr(){

  return $this->information_fr;
}

public function setInformation_fr($information_fr)
{
  $this->information_fr= $information_fr;
}


public function getInscriptionMax(){

  return $this->inscriptionMax;
}

public function setInscriptionMax($inscriptionMax)
{
  $this->inscriptionMax= $inscriptionMax;
}


public function getLienCarte(){

  return $this->lienCarte;
}

public function setLienCarte($lienCarte)
{
  $this->lienCarte= $lienCarte;
}


public function getLieuRDV(){

  return $this->lieuRDV;
}

public function setLieuRDV($lieuRDV)
{
  $this->lieuRDV= $lieuRDV;
}


public function getMontee(){

  return $this->montee;
}

public function setMontee($montee)
{
  $this->montee= $montee;
}


public function getPrixMax(){

  return $this->prixMax;
}

public function setPrixMax($prixMax)
{
  $this->prixMax= $prixMax;
}


public function getPrixMin(){

  return $this->prixMin;
}

public function setPrixMin($prixMin)
{
  $this->prixMin= $prixMin;
}


public function getSoustitre(){

  return $this->soustitre;
}

public function setSoustitre($soustitre)
{
  $this->soustitre= $soustitre;
}


public function getStatus(){

  return $this->status;
}

public function setStatus($status)
{
  $this->status= $status;
}


public function getTitre(){

  return $this->titre;
}

public function setTitre($titre)
{
  $this->titre= $titre;
}


public function getTransportArrivee(){

  return $this->transportArrivee;
}

public function setTransportArrivee($transportArrivee)
{
  $this->transportArrivee= $transportArrivee;
}


public function getTransportDepart(){

  return $this->transportDepart;
}

public function setTransportDepart($transportDepart)
{
  $this->transportDepart= $transportDepart;
}


public static function connectbyId($id)
{
  $query =  "SELECT * From tour WHERE idTour= '$id' ";
  $result = MySqlConn::getInstance()->selectDB($query);
  $row=$result->fetch();
  if(!$row) return false;

  return new Tour($row['idTour'],
                  $row['arriveeHeure'], $row['codeprogramme'],$row['dateDebut'], $row['dateFin'], $row['dateLimiteInscr'],
                  $row['departHeure'], $row['descente'],$row['description_de'], $row['description_fr'], $row['difficulte'],
                  $row['duree'], $row['idxArriveeLocalite'],$row['idxAssistant'], $row['idxDepartLocalite'], $row['idxGuide'],
                  $row['idxTypeTour'], $row['idxTypeTransport'],$row['infromation_de'], $row['information_fr'], $row['inscriptionMax'],
                  $row['lienCarte'], $row['lieu'],$row['montee'], $row['prixMax'], $row['prixMin'],
                  $row['soustitre'], $row['status'],$row['titre'], $row['transportArrivee'], $row['transportDepart']);




}


//return and array
public static function connectbyIdType($idxTypeTour)
{
  $query =  "SELECT * From tour WHERE idTypeTour='$idxTypeTour' ";
  $result = MySqlConn::getInstance()->selectDB($query);

  //todo


}
//if programm 1 or and 2 // proposal 6 by TYPE TOUR
public static function connectTour($idTour1, $idTour2)
{

  if($idTour1==null && $idTour2 == null)
  {
    $query =  Tour::queryAll();
  }
    elseif ( $idTour2 == null) {
    $query =  Tour::queryOne($idTour1);
    }
    else {
    $query = Tour::queryTwo($idTour1, $idTour2);
    }

  $result = MySqlConn::getInstance()->selectDB($query);


  while($row = $result->fetch())
  {
    $resultArray[] =   new Tour($row['idTour'],
                $row['arriveeHeure'], $row['codeprogramme'],$row['dateDebut'], $row['dateFin'], $row['dateLimiteInscr'],
                $row['departHeure'], $row['descente'],$row['description_de'], $row['description_fr'], $row['difficulte'],
                $row['duree'], $row['idxArriveeLocalite'],$row['idxAssistant'], $row['idxDepartLocalite'], $row['idxGuide'],
                $row['idxTypeTour'], $row['idxTypeTransport'],$row['information_de'], $row['information_fr'], $row['inscriptionMax'],
                $row['lienCarte'], $row['lieuRDV'],$row['montee'], $row['prixMax'], $row['prixMin'],
                $row['soustitre'], $row['status'],$row['titre'], $row['transportArrivee'], $row['transportDepart']);

                }

                $result->closeCursor();

return $resultArray;

}

private static function queryAll()
{
  $query =  "SELECT * From tour ";

  return $query;
}

private static function queryOne($idTour1)
{
  $query =  "SELECT * From tour
              where idxTypeTour =$idTour1";

  return $query;
}
private static function queryTwo($idTour1, $idTour2)
{
  $query =  "SELECT * From tour
              where idxTypeTour = $idTour1
              or idxTypeTour = $idTour2";

  return $query;
}


// for Search page function

public static function get_results($region, $difficulte, $genre)

{
	
	if($region == "all" and  $difficulte=="all" and  $genre =="all"){
		
		$query = "SELECT * FROM tour
		INNER JOIN tourgenretour ON tour.idTour = tourgenretour.idxTour
		INNER JOIN genretour ON genretour.idGenreTour = tourgenretour.idxGenreTour
		INNER JOIN tourregion ON tourregion.idxTour = tour.idTour
		INNER JOIN region ON region.idRegion = tourregion.idxRegion";
		
	}
	elseif ($difficulte =="all" and  $genre =="all"){
		$query = "SELECT * FROM tour
				INNER JOIN tourgenretour ON tour.idTour = tourgenretour.idxTour
				INNER JOIN genretour ON genretour.idGenreTour = tourgenretour.idxGenreTour
				INNER JOIN tourregion ON tourregion.idxTour = tour.idTour
				INNER JOIN region ON region.idRegion = tourregion.idxRegion
				WHERE idRegion = $region";
	}
	elseif ($region == "all" and $genre == "all"){
		$query = "SELECT * FROM tour
		INNER JOIN tourgenretour ON tour.idTour = tourgenretour.idxTour
		INNER JOIN genretour ON genretour.idGenreTour = tourgenretour.idxGenreTour
		INNER JOIN tourregion ON tourregion.idxTour = tour.idTour
		INNER JOIN region ON region.idRegion = tourregion.idxRegion
		WHERE difficulte = $difficulte";
	}
	elseif ($region == "all" and $difficulte == "all"){
		$query = "SELECT * FROM tour
		INNER JOIN tourgenretour ON tour.idTour = tourgenretour.idxTour
		INNER JOIN genretour ON genretour.idGenreTour = tourgenretour.idxGenreTour
		INNER JOIN tourregion ON tourregion.idxTour = tour.idTour
		INNER JOIN region ON region.idRegion = tourregion.idxRegion
		WHERE idGenreTour = $genre";
	}
	elseif ($difficulte == "all"){
		$query = "SELECT * FROM tour
				INNER JOIN tourgenretour ON tour.idTour = tourgenretour.idxTour
				INNER JOIN genretour ON genretour.idGenreTour = tourgenretour.idxGenreTour
				INNER JOIN tourregion ON tourregion.idxTour = tour.idTour
				INNER JOIN region ON region.idRegion = tourregion.idxRegion
				WHERE idRegion = $region AND idGenreTour = $genre";
	}
	elseif ($genre =="all"){
		$query = "SELECT * FROM tour
				INNER JOIN tourgenretour ON tour.idTour = tourgenretour.idxTour
				INNER JOIN genretour ON genretour.idGenreTour = tourgenretour.idxGenreTour
				INNER JOIN tourregion ON tourregion.idxTour = tour.idTour
				INNER JOIN region ON region.idRegion = tourregion.idxRegion
				WHERE idRegion = $region AND difficulte = $difficulte";
	}
	elseif ($region=="all"){
		$query = "SELECT * FROM tour
		INNER JOIN tourgenretour ON tour.idTour = tourgenretour.idxTour
		INNER JOIN genretour ON genretour.idGenreTour = tourgenretour.idxGenreTour
		INNER JOIN tourregion ON tourregion.idxTour = tour.idTour
		INNER JOIN region ON region.idRegion = tourregion.idxRegion
		WHERE difficulte = $difficulte AND idGenreTour = $genre";
	}
	else{
		$query = "SELECT * FROM tour
					INNER JOIN tourgenretour ON tour.idTour = tourgenretour.idxTour
					INNER JOIN genretour ON genretour.idGenreTour = tourgenretour.idxGenreTour
					INNER JOIN tourregion ON tourregion.idxTour = tour.idTour
					INNER JOIN region ON region.idRegion = tourregion.idxRegion
					WHERE idRegion = $region AND difficulte = $difficulte AND idGenreTour = $genre";
	}
	
	
	$result = MySqlConn::getInstance()->selectDB($query);
	$row_no = $result->rowCount();
	if($row_no == 0){
		return false;
	}
	while($row = $result->fetch())
	{
	
		$resultArray[] =   new Tour($row['idTour'],
				$row['arriveeHeure'], $row['codeprogramme'],$row['dateDebut'], $row['dateFin'], $row['dateLimiteInscr'],
				$row['departHeure'], $row['descente'],$row['description_de'], $row['description_fr'], $row['difficulte'],
				$row['duree'], $row['idxArriveeLocalite'],$row['idxAssistant'], $row['idxDepartLocalite'], $row['idxGuide'],
				$row['idxTypeTour'], $row['idxTypeTransport'],$row['information_de'], $row['information_fr'], $row['inscriptionMax'],
				$row['lienCarte'], $row['lieuRDV'],$row['montee'], $row['prixMax'], $row['prixMin'],
				$row['soustitre'], $row['status'],$row['titre'], $row['transportArrivee'], $row['transportDepart']);
	
	
	
	
	}
	
	$result->closeCursor();
	return $resultArray;
		
	
}

public static function get_results_byTxt($tx){
	
	$query = "SELECT * FROM tour
	INNER JOIN tourgenretour ON tour.idTour = tourgenretour.idxTour
	INNER JOIN genretour ON genretour.idGenreTour = tourgenretour.idxGenreTour
	INNER JOIN tourregion ON tourregion.idxTour = tour.idTour
	INNER JOIN region ON region.idRegion = tourregion.idxRegion
	WHERE region.region_fr LIKE '%$tx%' OR region.region_de LIKE '%$tx%' 
	OR tour.titre  LIKE '%$tx%' OR genreTour.genreTour_fr LIKE '%$tx%' OR genreTour.genreTour_DE  LIKE '%$tx%'";
	
	$result = MySqlConn::getInstance()->selectDB($query);
	$row_no = $result->rowCount();
	if($row_no == 0){
		return false;
	}
	while($row = $result->fetch())
	{
	
		$resultArray[] =   new Tour($row['idTour'],
				$row['arriveeHeure'], $row['codeprogramme'],$row['dateDebut'], $row['dateFin'], $row['dateLimiteInscr'],
				$row['departHeure'], $row['descente'],$row['description_de'], $row['description_fr'], $row['difficulte'],
				$row['duree'], $row['idxArriveeLocalite'],$row['idxAssistant'], $row['idxDepartLocalite'], $row['idxGuide'],
				$row['idxTypeTour'], $row['idxTypeTransport'],$row['information_de'], $row['information_fr'], $row['inscriptionMax'],
				$row['lienCarte'], $row['lieuRDV'],$row['montee'], $row['prixMax'], $row['prixMin'],
				$row['soustitre'], $row['status'],$row['titre'], $row['transportArrivee'], $row['transportDepart']);
	
	
	
	
	}
	
	$result->closeCursor();
	return $resultArray;
	

}




public static function connectForMyProgramm($inscriptionArray, $type) //0=>Register   1=>Favoris  2=>evalutation
{

  if($type==0)
  {
  $condition = Tour::CreateConditionRegister($inscriptionArray);
  }
  if($type==1)
  {
    $condition = Tour::CreateConditionFavoris($inscriptionArray);
}

//add Type

$query = "SELECT * FROM tour " . $condition ;
  $result = MySqlConn::getInstance()->selectDB($query);


  while($row = $result->fetch())
  {

        $resultArray[] =   new Tour($row['idTour'],
                    $row['arriveeHeure'], $row['codeprogramme'],$row['dateDebut'], $row['dateFin'], $row['dateLimiteInscr'],
                    $row['departHeure'], $row['descente'],$row['description_de'], $row['description_fr'], $row['difficulte'],
                    $row['duree'], $row['idxArriveeLocalite'],$row['idxAssistant'], $row['idxDepartLocalite'], $row['idxGuide'],
                    $row['idxTypeTour'], $row['idxTypeTransport'],$row['information_de'], $row['information_fr'], $row['inscriptionMax'],
                    $row['lienCarte'], $row['lieuRDV'],$row['montee'], $row['prixMax'], $row['prixMin'],
                    $row['soustitre'], $row['status'],$row['titre'], $row['transportArrivee'], $row['transportDepart']);




}
                $result->closeCursor();

return $resultArray;

}




private static function CreateConditionRegister($inscriptionArray)
{

  $condition = "WHERE ";
  if(!is_array($inscriptionArray))
  {
    $condition .= " idTour = " . $inscriptionArray[0]->getIdRandonnee();
      return $condition  ;
  }
  else {


    foreach ($inscriptionArray as $key => $element) {

      if($key==0){
      $condition .= " idTour = " . $inscriptionArray[$key]->getIdRandonnee();
    }
    else {
        $condition .= " OR idTour = " . $inscriptionArray[$key]->getIdRandonnee();
    }
  }
}
  return $condition  ;

}


private static function CreateConditionFavoris($inscriptionArray)
{

  $condition = "WHERE ";
  if(!is_array($inscriptionArray))
  {
    $condition .= " idTour = " . $inscriptionArray[0]->getIdTour();
      return $condition  ;
  }
  else {
    foreach ($inscriptionArray as $key => $element) {

      if($key==0){
      $condition .= " idTour = " . $inscriptionArray[$key]->getIdTour();
    }
    else {
        $condition .= " OR idTour = " . $inscriptionArray[$key]->getIdTour();
    }
  }
}
  return $condition  ;

}

public static function connectForRegisterTour($inscriptionArray) {

	$condition = Tour::CreateCondition($inscriptionArray);

	$query = "SELECT * FROM tour " . $condition ;


	$result = MySqlConn::getInstance()->selectDB($query);


	while($row = $result->fetch()) {
		$resultArray[] =   new Tour($row['idTour'],
				$row['arriveeHeure'], $row['codeprogramme'],$row['dateDebut'], $row['dateFin'], $row['dateLimiteInscr'],
				$row['departHeure'], $row['descente'],$row['description_de'], $row['description_fr'], $row['difficulte'],
				$row['duree'], $row['idxArriveeLocalite'],$row['idxAssistant'], $row['idxDepartLocalite'], $row['idxGuide'],
				$row['idxTypeTour'], $row['idxTypeTransport'],$row['information_de'], $row['information_fr'], $row['inscriptionMax'],
				$row['lienCarte'], $row['lieuRDV'],$row['montee'], $row['prixMax'], $row['prixMin'],
				$row['soustitre'], $row['status'],$row['titre'], $row['transportArrivee'], $row['transportDepart']);

	}
	$result->closeCursor();

	return $resultArray;
}


private static function CreateCondition($inscriptionArray) {
	$condition = "WHERE ";
	foreach ($inscriptionArray as $key => $element) {
		if($key==0){
			$condition .= " idTour = " . $inscriptionArray[$key]->getIdRandonnee();
		} else {
			$condition .= " OR idTour = " . $inscriptionArray[$key]->getIdRandonnee();
		}
	}
	return $condition  ;
}

public static function CreateNewTour($tour){

	$type = $tour->getIdxTypeTour();
	$title = $tour->getTitre();
	$information =   $tour->getInformation_fr();
	$difficulty = $tour->getDifficulte();
	$guide =  $tour->getIdxGuide();
	$time_from = $tour->getDepartHeure();
	$time_to = $tour->getDescente();
	$date_from = $tour->getDateDebut();
	$date_to = $tour->getDateFin();

	if($title !=''|| $date !='') {
		$query = "INSERT INTO `tour`(`dateDebut`, `dateFin`, `difficulte`, `titre`, `departHeure`, `arriveeHeure`, `information_fr`, `IdxTypeTour`, `idxGuide`)
		VALUES ('$date_from', '$date_to', '$difficulty', '$title', '$time_from', '$time_to', '$information', '$type', '$guide');";
	} else {
		echo "<p>Insertion Failed</p>";
	}
	MySqlConn::getInstance()->executeQuery($query);
	//setup l'id de ce USER

	$idquery = "SELECT idTour From tour
	WHERE IdxTypeTour  ='$type'
	AND dateDebut      ='$date_from'
	AND dateFin    	   ='$date_to'
	AND difficulte     ='$difficulty'
	AND titre     	   ='$title'
	AND departHeure    ='$time_from'
	AND arriveeHeure   ='$time_to'
	AND information_fr ='$information'
	AND idxGuide	   ='$guide'
	";


	$result = MySqlConn::getInstance()->selectDB($idquery);
	$row = $result->fetch();
	if(!$row) return false;

	$user->setId($row['idTour']);
	$user->getId();
	;

}

public function update($id){

	$query = "UPDATE tour
	SET IdxTypeTour = '$this->idxTypeTour',
	dateDebut= '$this->dateDebut',
	dateFin='$this->dateFin',
	difficulte='$this->difficulte',
	titre='$this->titre',
	departHeure='$this->departHeure',
	arriveeHeure='$this->arriveeHeure',
	information_fr='$this->information_fr',
	idxGuide='$this->idxGuide'
	WHERE idTour='$id'
	";

	return  MySqlConn::getInstance()->executeQuery($query);
}

public static function connectbyId2($id) {
	$query =  "SELECT * FROM `tour` WHERE `idTour` = '$id' ";
	$result = MySqlConn::getInstance()->selectDB($query);
	$row=$result->fetch();
	if(!$row) return false;

	return new Tour($row['idTour'],
			$row['arriveeHeure'], $row['codeprogramme'],$row['dateDebut'], $row['dateFin'], $row['dateLimiteInscr'],
			$row['departHeure'], $row['descente'],$row['description_de'], $row['description_fr'], $row['difficulte'],
			$row['duree'], $row['idxArriveeLocalite'],$row['idxAssistant'], $row['idxDepartLocalite'], $row['idxGuide'],
			$row['idxTypeTour'], $row['idxTypeTransport'],$row['infromation_de'], $row['information_fr'], $row['inscriptionMax'],
			$row['lienCarte'], $row['lieu'],$row['montee'], $row['prixMax'], $row['prixMin'],
			$row['soustitre'], $row['status'],$row['titre'], $row['transportArrivee'], $row['transportDepart']);
}

public static function deleteById($id) {
	$query =  "DELETE FROM tour WHERE idTour='$id' ";
	$result = MySqlConn::getInstance()->selectDB($query);
	$row=$result->fetch();
	if(!$row) return false;
	return true;
}

public static function connectToAll() {
	$query =  "SELECT * From tour ";
	$result = MySqlConn::getInstance()->selectDB($query);
	while($row = $result->fetch()) {
		$resultArray[$row['idTour']] =   new Tour($row['idTour'],
				$row['arriveeHeure'], $row['codeprogramme'],$row['dateDebut'], $row['dateFin'], $row['dateLimiteInscr'],
				$row['departHeure'], $row['descente'],$row['description_de'], $row['description_fr'], $row['difficulte'],
				$row['duree'], $row['idxArriveeLocalite'],$row['idxAssistant'], $row['idxDepartLocalite'], $row['idxGuide'],
				$row['idxTypeTour'], $row['idxTypeTransport'],$row['information_de'], $row['information_fr'], $row['inscriptionMax'],
				$row['lienCarte'], $row['lieuRDV'],$row['montee'], $row['prixMax'], $row['prixMin'],
				$row['soustitre'], $row['status'],$row['titre'], $row['transportArrivee'], $row['transportDepart']);

	}

	$result->closeCursor();
	return $resultArray;
}



}

?>
