<?php include_once ROOT_DIR.'global/header.php';
$SelectedTour = $_SESSION['Selected_Tour'];

$nbrInscription = $_SESSION['nbrInscription'];
include_once ROOT_DIR.'languages/common.php';
?>

<html>
	<head>
		<title>Proposal Detail</title>
		<link rel="stylesheet" type="text/css" href="/<?php echo SITE_NAME; ?>/public/css/main.css">
	</head>
	<body>
		<div class= "wrapper">
			<h1><?php echo $lang['PROGRAMM_DETAIL']; ?></h1>
			<h3><?php echo ' '.$SelectedTour->getTitre(); ?></h3>
			<table id="HikingDetailsTable">
				<tr>
					<td><?php echo $lang['DATE_BEGIN']; ?></td>
					<td><?php echo ' '.$SelectedTour->getDateDebut(); ?></td>
				</tr>
				<tr>
					<td><?php echo $lang['PLACE_OF_DEP']; ?></td>
					<td><?php echo ' '.$SelectedTour->getLieuRDV(); ?></td>
				</tr>
				<tr>
					<td><?php echo $lang['DESTINATION']; ?></td>
					<td>XXX</td>
				</tr>
				<tr>
					<td><?php echo $lang['DIFFICULTY']; ?></td>
					<td><?php echo ' '.$SelectedTour->getDifficulte(); ?></td>
				</tr>
				<tr>
					<td><?php echo $lang['DURATION']; ?></td>
					<td><?php echo ' '.$SelectedTour->getDuree(); ?></td>
				</tr>
				<tr>
					<td><?php echo $lang['DESCRIPTION']; ?></td>
					<td><?php echo ' '.$SelectedTour->getInformation_fr(); ?></td>
				</tr>
				<tr>
					<td><?php echo $lang['POPULARITY']; ?></td>
					<td></td>
				</tr>
				<tr>

				<?php if(isset ($_SESSION['personne'])){?>
					<td><?php echo $lang['OPINION']; ?></td>
					<td>
							<?php $optionNotice = array(0,1,2,3,4,5); ?>
						<FORM Method="post" action="<?php echo URL_DIR.'programm/saveNotice';?>" >
					<SELECT name="notice" onchange="this.form.submit();" >
						<?php
						for ($cpt=0; $cpt<=(count($optionNotice)-1); $cpt++) {

							if(isset($_SESSION['FavorisData']))
							{
								if($_SESSION['FavorisData']!=false&&($cpt)==$_SESSION['FavorisData']->getEvaluation())
								{
								echo '<option value="'.$cpt.'" selected="selected"  >'.$optionNotice[$cpt] .'</option>';

							}
							else{
							echo '<option value="'.$cpt.'">'.$optionNotice[$cpt].'</option>';
					 			}
							}
						}
			?>
			</SELECT>
			</FORM>
			</td>
						<?php	}  ?>
				</tr>
				<tr>
					<td>
						<form method="post" action="<?php echo URL_DIR.'programm/saveFavoris';?>" >
						<?php if(isset ($_SESSION['personne'])){


							if($_SESSION['FavorisData']!=false&&$_SESSION['FavorisData']->getEstFavoris()==1)
							{
								echo	'	<button name = "favoris" value="remove">' .$lang['REMOVEFAVORIS'].'</button>	';

							}else{
						echo	'<button name = "favoris" value="add">' .$lang['ADDFAVORIS'].'</button>	';
						}
						}  ?>
						</form>
					</td>
				</tr>
			</table>
			<a href="<?php echo $_SERVER["HTTP_REFERER"]?>">

			<input type="button" value="<?php echo $lang['BTN_BACK']; ?>" ></input>
			</a>

			<?php if(isset ($_SESSION['personne'])&&$_POST['isInscri'])
				{?>
						<form method="post" action="<?php echo URL_DIR.'programm/removeRegister';?>" >
						<button name = "removeregister" value=<?php echo $SelectedTour->getId();?>><?php echo $lang['DISREGISTER']?></button>

			<?php 	}
				else{

					echo	'<a href="' .URL_DIR."programm/programm_register". '">
					<input type="button" value="' .$lang['REGISTER'].'"</input>
				</a>';
					}
				 ?>
				 </form>
				<br>
			</div>
		<div><?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php';?></div>
	</body>
</html>
