<?php
class ProgrammController extends Controller{


  /**
   * Method that controls the page 'programm.php'
   */
  function Programm(){
    //test récuprer un tableau
    //récuprer les séjours dans une row;
    date_default_timezone_set('UTC');
    $date =date('l jS \of F Y');

    if(isset($_POST['type'])!=null)
    {
      $result = Tour::connectTour($_POST['type'], null);

    }
    else {
      //put var for connect with 1-2
      $result = Tour::connectTour(1, 2);
    }
    //put var for connect with 1-2
  //  $result = Tour::connectTour(1, 2);
    $_SESSION['tour']=$result;




  }

function hiking_detail(){


  if(!isset ($_POST['selectedTour']))
  {
    $this->redirect('programm', 'programm');
    exit;

  }
  $Tour=$_SESSION['tour'];
  $id =$_POST['selectedTour'];

  $_SESSION['Selected_Tour'] = $Tour[$id];
  //check the inscription to THIS programm

  $idTour =$_SESSION['Selected_Tour']->getId();
  $_SESSION['nbrInscription'] = Inscription::nbrInscription($idTour);

  if(isset ($_SESSION['personne']))
  {
      $_SESSION['isInscri']=Inscription::isInscri($_SESSION['personne']->getId(),$idTour);

  }


}


  function programm_register()
  {
    if(!isset ($_SESSION['Selected_Tour'])||$_SESSION['isInscri']==0)
    {
      $this->redirect('programm', 'programm');
      exit;

    }
    if(isset($_SESSION['personne']))
       $user = $_SESSION['personne'];


      
    $adress=$_POST['adress'];
    $npa = $_POST['npa'];
    $locality = $_POST['localite'];
    $phone = $_POST['phone'];
    $mobile = $_POST['mobile'];
    $abo = $_POST['abonnement'];




  }



    function register_save()
    {

    }




}

?>
