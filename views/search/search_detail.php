
<?php include_once ROOT_DIR.'global/header.php';
include_once ROOT_DIR.'languages/common.php';
$SelectedTour = $_SESSION['Selected_Tour'];
?>

<html>
	<head>
		<title>Search Detail</title>
		<link rel="stylesheet" type="text/css" href="/<?php echo SITE_NAME; ?>/public/css/main.css">
		<style type="text/css">
			div {
				text-align: center;
			}

			table {
				margin: 0 auto;
				text-align: left;
			}
		</style>
	</head>
	<body>
		<div class="wrapper" style="height: 100%">
			<h1>Search Detail</h1>
			<h3><?php echo ' '.$SelectedTour->getTitre(); ?></h3>
			<table>
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
						<FORM Method="post" action="<?php echo URL_DIR.'search/saveNotice';?>" >
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
						<form method="post" action="<?php echo URL_DIR.'search/saveFavoris';?>" >
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
			<a href="<?php echo URL_DIR.'search/search_path'?>">
				<input type="button" value="go back" ></input>
			</a>
			</div>
		<div><?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php';?></div>
	</body>
</html>