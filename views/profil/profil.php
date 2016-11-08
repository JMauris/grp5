<?php include_once ROOT_DIR.'global/header.php'; $user = $_SESSION['personne']; include_once ROOT_DIR.'languages/common.php';?>

<head>
<meta charset="UTF-8">
<title>SAC Info</title>
<link rel="stylesheet" type="text/css"
	href="/<?php echo SITE_NAME; ?>/public/css/main.css">
</head>
<body>
	<div class="wrapper">
		<h1><?php echo $lang['PROFIL_TITLE']; ?></h1>
		<h3><?php echo $lang['FIELD_OBLIGATORY']; ?></h3>
		<form id="ProfilForm" method="post"
			action="<?php echo URL_DIR.'profil/save';?>"
			onsubmit="alert('Saved')">
			<table style="align: center">
				<tr>
					<th><label for="name"><?php echo $lang['P_NAME']; ?></label></th>
					<th><input type="text" name="firstname"
						value=" <?php echo $user->getLastname()?>" disabled="disabled"></th>
				</tr>
				<tr>
					<th><label for="lastname"><?php echo $lang['P_LASTNAME']; ?></label></th>
					<th><input type="text" name="lastname"
						value="<?php echo $user->getFirstname()?>" disabled="disabled"></th>
				</tr>
				<tr>
					<th><label for="adress"><?php echo $lang['P_ADRESS']; ?></label></th>
					<th><input type="text" name="adress"
						value="<?php echo $user->getAdresse()?>"></th>
				</tr>
				<tr>
					<th><label for="npa"><?php echo $lang['P_NPA']; ?></label></th>
					<th><input type="text" name="npa"
						value="<?php echo $user->getNpa()?>"></th>
				</tr>
				<tr>
					<th><label for="locality"><?php echo $lang['P_LOCALITY'];?></label></th>
					<th><input type="text" name="localite"
						value="<?php echo $user->getLocalite()?>"></th>
				</tr>
				<tr>
					<th><label for="phone"><?php echo $lang['P_PHONE']; ?></label></th>
					<th><input type="text" name="phone"
						value="<?php echo $user->getPhone()?>"></th>
				</tr>
				<tr>
					<th><label for="moblie"><?php echo $lang['P_MOBILE']; ?></label></th>
					<th><input type="text" name="mobile"
						value="<?php echo $user->getPortable()?>"></th>
				</tr>
				<tr>
					<th><label for="email"><?php echo $lang['P_EMAIL']; ?></label></th>
					<th><input type="text" name="email"
						value="<?php echo $user->getEmail()?>" disabled="disabled"></th>
				</tr>
				<tr>
					<th><label for="abonnement"><?php echo $lang['P_ABO']; ?></label></th>
					<th>
						<?php $optionAbo = array($lang['SELECTION_1'], $lang['SELECTION_2'], $lang['SELECTION_3'], $lang['SELECTION_4']); ?>
					    <FORM>
							<SELECT name="abonnement" id="abonnement">
				<?php
				for($cpt = 0; $cpt <= 3; $cpt ++) {
					if (($cpt) == $user->getIdxAbonnement ()) {
						echo '<option value="' . $cpt . '" selected="selected">' . $optionAbo [$cpt] . '</option>';
					} else {
						echo '<option value="' . $cpt . '">' . $optionAbo [$cpt] . '</option>';
					}
				}
				?>
				</SELECT>
						</FORM>
					</th>
				</tr>
			</table>
		</form>
		<br>
		<table style="width: 100%; text-align: center;">
			<tr>
				<td>
					<button id="submit1" type="submit" name="action"><?php echo $lang['BTN_SAVE']; ?></button>
				</td>
			</tr>
		</table>
		<table style="width: 100%; text-align: center;">
			<tr>
				<td><a href="<?php echo URL_DIR.'profil/change_password'?>"><?php echo $lang['LINK_CHANGE_PW']; ?></a>
				</td>
			</tr>
		</table>
		<div class="push"></div>
	</div>
	<div><?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php';?></div>
</body>
</html>
