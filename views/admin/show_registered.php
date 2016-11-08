<?php

include_once ROOT_DIR . 'global/header.php';
include_once ROOT_DIR . 'languages/common.php';
$SelectedTour = $_SESSION ['Selected_Tour'];
$PersonneList = $_SESSION ['listPersonne'];
?>

<html>
<head>
<title>Proposal Detail</title>
<link rel="stylesheet" type="text/css"
	href="/<?php echo SITE_NAME; ?>/public/css/main.css">
</head>
<body>
	<div class="wrapper" style="height: 100%">
		<h1><?php echo $lang['TITLE_REG_MEMBERS']; ?></h1>

		<h3><?php echo ' '.$SelectedTour->getTitre(); ?></h3>
		<table id="ProposalDetailTable">
			<tr>
				<td><?php echo $lang['DIFFICULTY']; ?>:</td>
				<td><?php echo ' '.$SelectedTour->getDifficulte(); ?></td>
			</tr>
		</table>
		<h2><?php echo $lang['LIST_REG_M']; ?></h2>
		<table id="ProposalDetailTable">
						<?php
						
foreach ( $PersonneList as $cle => $element ) 

						{
							?>
					 					<tr>
				<td><?php echo ' '.$PersonneList[$cle]->getFirstname(); ?></td>
				<td><?php echo ' '.$PersonneList[$cle]->getLastname(); ?></td>
			</tr>
									<?php } ?>
			</table>
		<table style="width: 100%; text-align: center;">
			<tr>
				<td><a href="<?php echo URL_DIR.'admin/admin_details_tours'?>">
						<button id="submit1" style="width: 15%;" type="button"
							value="go back"><?php echo $lang['BTN_BACK']; ?></button>
				</a></td>
			</tr>
		</table>
		<div class="push"></div>
	</div>
	<div><?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php';?></div>
</body>
</html>
