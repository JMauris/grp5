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
  /**
   * Method that controls the page 'programm_overview.php'
   */
  function programm_overview(){



  }

  function search_path(){

  }


}

?>
