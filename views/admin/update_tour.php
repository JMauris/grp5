<?php

include_once ROOT_DIR . 'global/header.php';
include_once ROOT_DIR . 'languages/common.php';
$SelectedTour = $_SESSION ['selectedID'];
?>
<html>
<head>
<title>Update Tour</title>
<link rel="stylesheet" type="text/css"
	href="/<?php echo SITE_NAME; ?>/public/css/main.css">
</head>
<body>
	<div class="wrapper">
		<h2><?php echo $lang['TITLE_UPDATE_TOUR']; ?></h2>
		<h3><?php echo $lang['SUBTITLE_UPDATE_TOUR']; ?></h3>
		<br>
		<form method="post" action="<?php echo URL_DIR.'admin/updateTour';?>">
			<table id="UpdateToursTable">
				<tr>
					<td>ID:</td>
					<td><input type="text" name="update_ID"
						value="<?php echo ' '.$SelectedTour->getID(); ?>" disabled></td>
				</tr>
				<tr>
					<td><?php echo $lang['TYPE_TOUR']; ?>:</td>
					<td><select id="type_input_update"
						value="<?php echo ' '.$SelectedTour->getIdxTypeTour(); ?>">
							<option value="1">single-day hike</option>
							<option value="2">multi-day hike</option>
							<option value="6">proposal</option>
					</select></td>
				</tr>
				<tr>
					<td><?php echo $lang['TITLE_TOUR']; ?>: </td>
					<td><input type="text" name="update_title"
						value="<?php echo ' '.$SelectedTour->getTitre(); ?>"></td>
				</tr>
				<tr>
					<td><?php echo $lang['INFO']; ?>: </td>
					<td><input type="text" name="update_info"
						value="<?php echo ' '.$SelectedTour->getInformation_fr(); ?>"></td>
				</tr>
				<tr>
					<td><?php echo $lang['DIFFICULTY']; ?>: </td>
					<td><input type="number" name="update_difficult"
						value="<?php echo ' '.$SelectedTour->getDifficulte(); ?>" max="10"></td>
				</tr>
				<tr>
					<td><?php echo $lang['GUIDE']; ?>: </td>
					<td><input type="text" name="update_guide"
						value="<?php echo ' '.$SelectedTour->getIdxGuide(); ?>"></td>
				</tr>
				<tr>
					<td><?php echo $lang['TIME']; ?>: </td>
					<td><input type="time" name="update_time_from"
						value="<?php echo ' '.$SelectedTour->getDepartHeure(); ?>"> <input
						type="time" name="update_time_to"
						value="<?php echo ' '.$SelectedTour->getArriveeHeure(); ?>"></td>
				</tr>
				<tr>
					<td><?php echo $lang['DATE']; ?>: </td>
					<td><input id="from" type="date" name="update_date_from"
						value="<?php echo ' '.$SelectedTour->getDateDebut(); ?>"> <input
						id="to" type="date" name="update_date_to"
						value="<?php echo ' '.$SelectedTour->getDateFin(); ?>"></td>
				</tr>
			</table>
			<br>
			<table style="width: 100%; text-align: center; padding-bottom: 2%;">
				<tr>
					<td>
						<button id="submit1" style="width: 15%; text-align: center;"
							type="submit" name="submit_update" value="save changes"><?php echo $lang['BTN_SAVE_CHANGE']; ?></button>

						<a href="<?php echo URL_DIR.'admin/admin_details_tours'?>">
							<button id="submit1" style="width: 15%; text-align: center;"
								type="button"><?php echo $lang['BTN_BACK']; ?></button>
					</a>
					</td>
				</tr>
			</table>
		</form>
		<div class="push"></div>
	</div>
	<div><?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php';?></div>
</body>
</html>
