<?php

include_once ROOT_DIR . 'global/header.php';
include_once ROOT_DIR . 'languages/common.php';
$SelectedMember = $_SESSION ['selectedMember'];
?>

<html>
<head>
<title>Update Member</title>
<link rel="stylesheet" type="text/css"
	href="/<?php echo SITE_NAME; ?>/public/css/main.css">
</head>
<body>
	<div class="wrapper">
		<h2><?php echo $lang['TITLE_UPDATE_MEM']; ?></h2>

		<form method="post"
			action="<?php echo URL_DIR.'admin/updateMember';?>">
			<table id="UpdateMemberTable">
				<tr>
					<td><?php echo $lang['FIRSTNAME']; ?>:</td>
					<td><input type="text" name="name_update"
						value="<?php echo ' '.$SelectedMember->getFirstname(); ?>"></td>
				</tr>
				<tr>
					<td><?php echo $lang['LASTNAME']; ?>:</td>
					<td><input type="text" name="lastname_update"
						value="<?php echo ' '.$SelectedMember->getLastname(); ?>"></td>
				</tr>
				<tr>
					<td><?php echo $lang['ADRESS']; ?>:</td>
					<td><input type="text" name="adress_update"
						value="<?php echo ' '.$SelectedMember->getAdresse(); ?>"></td>
				</tr>
				<tr>
					<td><?php echo $lang['NPA']; ?>:</td>
					<td><input type="text" name="npa_update"
						value="<?php echo ' '.$SelectedMember->getNpa(); ?>"></td>
				</tr>
				<tr>
					<td><?php echo $lang['LOCALITY']; ?>:</td>
					<td><input type="text" name="locality_update"
						value="<?php echo ' '.$SelectedMember->getLocalite(); ?>"></td>
				</tr>
				<tr>
					<td><?php echo $lang['PHONE']; ?>:</td>
					<td><input type="text" name="phone_update"
						value="<?php echo ' '.$SelectedMember->getPhone(); ?>"></td>
				</tr>
				<tr>
					<td><?php echo $lang['MOBILE']; ?>:</td>
					<td><input type="text" name="mobile_update"
						value="<?php echo ' '.$SelectedMember->getPortable(); ?>"></td>
				</tr>
				<tr>
					<td><?php echo $lang['MAIL']; ?>:</td>
					<td><input type="text" name="email_update"
						value="<?php echo ' '.$SelectedMember->getEmail(); ?>"></td>
				</tr>
			</table>
		</form>
		<br>
		<table style="width: 100%; text-align: center; padding-bottom: 2%;">
			<tr>
				<td>
					<button id="submit1" style="width: 15%; text-align: center;"
						type="submit"><?php echo $lang['BTN_SAVE_CHANGE']; ?></button> <a
					href="<?php echo URL_DIR.'admin/admin_details_members'?>">
						<button id="submit1" style="width: 15%; text-align: center;"
							type="button"><?php echo $lang['BTN_BACK']; ?></button>
				</a>
				</td>
			</tr>
		</table>
		<div class="push"></div>
	</div>
	<div><?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php';?></div>
</body>
</html>