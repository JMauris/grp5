
<!DOCTYPE html>
<?php

include_once ROOT_DIR.'languages/common.php';

?>

<html>
    <head>

      <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

        <link rel="stylesheet" href="/<?php echo SITE_NAME; ?>/public/css/headerStyle.css" type="text/css">

        <title>Cas Montana</title>
    </head>

    <body>
    	<ul class="head">
    	<li class="ulh">
    	<a class="header" href="<?php echo URL_DIR.'mainPage/mainPage'?>"><img src="/<?php echo SITE_NAME; ?>/public/img/newLogo.png" align="middle" height="15%" width="15%"/></a>
    	</li>
    	</ul>
      <ul class="ulh">
        <li class="lih"><a class="ah" href="<?php echo URL_DIR.'mainpage/mainpage'?>"><?php echo $lang['H_HOME']; ?></a></li>
        <li class="lih"><a class="ah" href="<?php echo URL_DIR.'programm/programm'?>"><?php echo $lang['H_PROGRAM']; ?></a></li>
    
        <li class="lih"><a class="ah" href="<?php echo URL_DIR.'proposal/proposal'?>"><?php echo $lang['H_PROPOSAL']; ?></a></li>

        <li class="lih"><a class="ah" href="<?php echo URL_DIR.'contact/contact'?>"><?php echo $lang['H_CONTACT']; ?></a></li>
        <li class="lih"><a class="ah"  href="<?php echo URL_DIR.'about/about'?>"><?php echo $lang['H_ABOUT']; ?></a></li>
        <?php if(isset($_SESSION["personne"]))
        {
            echo  '<li class="lih"><a class="ah" href="' .URL_DIR."profil/profil". ' "">'.$lang['H_PROFIL'].'</a></li>';
            }?>

      <?php if(isset($_SESSION["personne"]))
        {
            echo  '<li class="lih"><a class="ah" href="' .URL_DIR."mychoice/mychoice". ' "">'.$lang['H_MYCHOICE'].'</a></li>';
        }?>

        <?php if(isset($_SESSION["personne"]))

        {
          echo  '<c><a class="ah" href="' .URL_DIR."login/logout". ' ">Logout</a></c> ' ;
         //if($_SESSION["personne"]->getRole()=='admin')
            echo  '<c><a class="ah" href="' .URL_DIR."admin/admin". ' ">'.$lang['H_ADMIN'].'</a></c> ' ;
        }
        else {
         echo  '<c><a class="ah" href="' . URL_DIR."login/login". ' ">Login</a></c>';
     }
        ?>
      </ul>
   </body>
</html>
