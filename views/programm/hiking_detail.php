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
			</table>
			<table style="width: 100%; text-align: center;">
				<tr>
					<td>
						<form method="post" action="<?php echo URL_DIR.'programm/saveFavoris';?>" >
						<?php if(isset ($_SESSION['personne'])){


							if($_SESSION['FavorisData']!=false&&$_SESSION['FavorisData']->getEstFavoris()==1)
							{?>
									<button id="submit1" style="width: 15%;" name = "favoris" value="remove"><?php echo $lang['REMOVEFAVORIS']; ?></button>

							<?php }else{?>
									<button id="submit1" style="width: 15%;" name = "favoris" value="add"><?php echo $lang['ADDFAVORIS']; ?></button>
						<?php }
						}  ?>
						</form>
					</td>
				</tr>
			</table>
			<table style="width: 100%; text-align: center;">
				<tr>
					<td>
						<a href="<?php echo $_SESSION['back']?>">
						<button id="submit1" style="width: 15%;" type="button"><?php echo $lang['BTN_BACK']; ?></button>
						</a>
					</td>
				</tr>
			</table>
			<?php if(isset ($_SESSION['personne'])&&$_POST['isInscri'])
				{?>
						<form method="post" action="<?php echo URL_DIR.'programm/removeRegister';?>" >
			<table style="width: 100%; text-align: center;">
				<tr>
					<td><button id="submit1" style="width: 15%;" name = "removeregister" value=<?php echo $SelectedTour->getId();?>><?php echo $lang['DISREGISTER']?></button></td>
				</tr>
			</table>

			<?php 	}
				else{?>
			<table style="width: 100%; text-align: center;">
				<tr>
					<td>
						<a href=" <?php echo ' .URL_DIR."programm/programm_register". '?>">
						<button id="submit1" style="width: 15%;" type="button"><?php echo $lang['REGISTER'];?></button>
						</a>
					</td>
				</tr>
			</table>
					<?php }
				 ?>
				 </form>
				<br>
				<div class="push"></div>
			</div>
		<div><?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php';?></div>
	</body>
</html>
