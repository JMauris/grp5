<?php include_once ROOT_DIR.'global/header.php';
$SelectedTour = $_SESSION['Selected_Tour'];
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
		<div class="wrapper" style="height: 100%">
			<h1>Programm Detail</h1>
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
					<td>XXX</td>
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
					<td>Popularity for the SAC Members:</td>
					<td></td>
				</tr>
				<tr>
					<td>Share my Optinion:</td>
					<td>*********</td>
				</tr>
			</table>
			<a href="<?php echo URL_DIR.'programm/programm'?>">
				<input type="button" value="go back" ></input>
			</a>
			<a href="">
				<input type="button" value="register"></input>


			</a>
			<br>
		</div>
	</body>
</html>

<?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php'; ?>
