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


  if(!isset ($_POST['selectedTour'] ))
  {
    $this->redirect('programm', 'programm');
    exit;

  }

  if(isset ($_SESSION['tour'])){
      $Tour=$_SESSION['tour'];
  }
  if(isset ($_SESSION['MyRegister'])){
      $Tour=$_SESSION['MyRegister'];
  }

  //$Tour = $_SESSION[tour] OR $_SESSION ['']
  $Tour=$_SESSION['tour'];

  $id =$_POST['selectedTour'];

  $_SESSION['Selected_Tour'] = $Tour[$id];
  //check the inscription to THIS programm

  $idTour =$_SESSION['Selected_Tour']->getId();
  $_SESSION['nbrInscription'] = Inscription::nbrInscription($idTour);

  if(isset ($_SESSION['personne']))
  {
      $_POST['isInscri']=Inscription::isInscri($_SESSION['personne']->getId(),$idTour);

  }
  else {
    $_POST['isInscri']=0;
  }

}


  function programm_register()
  {
    if(!isset ($_SESSION['Selected_Tour']))
    {
      $this->redirect('programm', 'programm');
      exit;

    }




  }



    function register_save()
    {
      date_default_timezone_set('UTC');




      $name=$_POST['firstname'];
      $lastname=$_POST['lastname'];
      $adress=$_POST['adress'];
      $npa = $_POST['npa'];
      $locality = $_POST['localite'];
      $phone = $_POST['phone'];
      $mobile = $_POST['mobile'];
      $abo = $_POST['abonnement'];
      $email = $_POST['email'];






       if(isset($_SESSION['personne']))
          {
            $user = $_SESSION['personne'];
          }
          else {
            if(Personne::checkExist($email,$name,$lastname)==true)
            {

                $user=Personne::checkExist($email,$name,$lastname);




            }
            else {
              $user=  new Personne($id=null, $name, $lastname,
                                            $email, null, null, null, null, null,
                                             $mobile, $phone, $adress, $locality, $npa, $abo);

              //crée la personne et récupér son ID
              Personne::CreateNonCAS($user);
            }
          }




       $idPersonne=$user->getId();

      $idRandonnee=$_SESSION['Selected_Tour']->getId();
       $date = date('Y-m-d');
      $heure = date('h:i:s');
       $idxStatus = 1;
        $remarque ="test J";


              //créer une inscription
              $inscription = new Inscription($idPersonne, $idRandonnee, $date, $heure, $idxStatus, $remarque);
              //
               Inscription::Create($inscription);

      $this->redirect('programm', 'hiking_detail');
    }




}

?>
