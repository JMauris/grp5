<?php
class profilController extends Controller{


  /**
   * Method that controls the page 'myProgram.php'
   */
  function profil(){
    //The page cannot be displayed if no user connected
    if(!$this->getActiveUser()){
      $this->redirect('login', 'login');
      exit;
    }

    //Get message from connection process
    $this->vars['msg'] = isset($_SESSION['msg']) ? $_SESSION['msg'] : '';
  }


  function save()

  {
    $user = $_SESSION['personne'];

    $adress=$_POST['adress'];
    $npa = $_POST['npa'];
    $locality = $_POST['localite'];
    $phone = $_POST['phone'];
    $mobile = $_POST['mobile'];
    $abo = $_POST['abonnement'];


      $user->setAdresse($adress);
      $user->setNpa($npa);
      $user->setLocalite($locality);
      $user->setPhone($phone);
      $user->setPortable($mobile);
      $user->setIdxAbonnement($abo);

      $user->update($user->getId());


	     $this->redirect('profil', 'profil');

  }


  function connection(){
    //Get data posted by the form

    $oldpwd = $_POST['oldpassword'];
    $newpassword = $_POST['newpassword'];
    $controlpassword = $_POST['controlpassword'];

    //Check if data valid
    if(empty($newpassword) or empty($oldpwd) or empty($controlpassword)){
      $_SESSION['msg'] = '<span class="error">A required field is empty!</span>';
      $this->redirect('profil', 'change_password');
    }
    else{
      //Load user from DB if exists
      $result = Personne::connect($_SESSION['personne']->getEmail(), $oldpwd);

      //Put user in session if exists or return error msg
      if(!$result){
        $_SESSION['msg'] = '<span class="error">password incorrect!</span>';
        $this->redirect('login', 'login');
      }
      else{
        $_SESSION['msg'] = '<span class="success">Welcome '. $result->getFirstname(). ' '.$result->getLastname().'!</span>';
        $_SESSION['personne'] = $result;
        $this->redirect('login', 'welcome');
      }
    }




}
function change_password()
{
$this->vars['msg'] = isset($_SESSION['msg']) ? $_SESSION['msg'] : '';
}


}

?>
