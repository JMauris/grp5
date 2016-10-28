<?php include_once ROOT_DIR.'global/header.php';
$SelectedTour = $_SESSION['Selected_Tour'];
$nbrInscription = $_SESSION['nbrInscription'];
include_once ROOT_DIR.'languages/common.php';
?>

<html>
	<head>
		<title>Proposal Detail</title>
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
		<div class= "wrapper" style="height: 100%">
			<h1><?php echo $lang['PROGRAMM_DETAIL']; ?></h1>
			<h3><?php echo ' '.$SelectedTour->getTitre(); ?></h3>
			<table>
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
					<td><?php echo $lang['OPINION']; ?></td>
					<td>*********</td>
				</tr>
			</table>
			<a href="<?php echo URL_DIR.'programm/programm'?>">
			<input type="button" value="<?php echo $lang['BTN_BACK']; ?>" ></input>
			</a>
			<?php if(isset ($_SESSION['personne'])&&$_POST['isInscri']==0)
				{
					echo 'You are already register 	<input type="button" value="disregister">';
				}
				else{echo	'<a href="' .URL_DIR."programm/programm_register". '>
					<input type="button" value="' .$lang['REGISTER'].'</input>
				</a>';} ?> </th>

			<br>
		</div>
	</body>
</html>

<?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php'; ?>
