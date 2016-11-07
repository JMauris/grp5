
<?php include_once ROOT_DIR.'global/header.php';
		include_once ROOT_DIR.'languages/common.php';
		$SelectedTour = $_SESSION['Selected_Tour'];
?>

<html>
	<head>
		<title>Proposal Detail</title>
		<link rel="stylesheet" type="text/css" href="/<?php echo SITE_NAME; ?>/public/css/main.css">
	</head>
	<body>
		<div class="wrapper" style="height: 100%">
			<h1>Proposal Detail</h1>
			<h3><?php echo ' '.$SelectedTour->getTitre(); ?></h3>
			<table id="ProposalDetailTable">
				<tr>
					<td>Date begin:</td>
					<td><?php echo ' '.$SelectedTour->getDateDebut(); ?></td>
				</tr>
				<tr>
					<td>Place of departure: </td>
					<td><?php echo ' '.$SelectedTour->getLieuRDV(); ?></td>
				</tr>
				<tr>
					<td>Destination:</td>
					<td><?php echo ' '.$SelectedTour->getIdxArriveeLocalite(); ?></td>
				</tr>
				<tr>
					<td>difficulty:</td>
					<td><?php echo ' '.$SelectedTour->getDifficulte(); ?></td>
				</tr>
				<tr>
					<td>Duration:</td>
					<td><?php echo ' '.$SelectedTour->getDuree(); ?></td>
				</tr>
				<tr>
					<td>Description:</td>
					<td><?php echo ' '.$SelectedTour->getInformation_fr(); ?></td>
				</tr>
				<tr>
				<?php if(isset ($_SESSION['personne'])){?>
					<td><?php echo $lang['OPINION']; ?></td>
					<td>
							<?php $optionNotice = array(0,1,2,3,4,5); ?>
						<FORM Method="post" action="<?php echo URL_DIR.'proposal/saveNotice';?>" >
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
						<form method="post" action="<?php echo URL_DIR.'proposal/saveFavoris';?>" >
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
						<a href="<?php echo $_SESSION['back_proposal']?>">
							<button id="submit1" style="width: 15%;" type="button" value="go back" >Go back</button>
						</a>
					</td>
				</tr>
			</table>
			<div class="push"></div>
			</div>
		<div><?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php';?></div>
	</body>
</html>
