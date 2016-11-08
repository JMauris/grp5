<?php

include_once ROOT_DIR . 'global/header.php';
include_once ROOT_DIR . 'languages/common.php';
$msg = $this->vars ['msg'];
?>
<html>
<head>
<title>Change Password</title>
<link rel="stylesheet" type="text/css"
	href="/<?php echo SITE_NAME; ?>/public/css/main.css">
</head>
<body>
	<div class="wrapper">
		<h1><?php echo $lang['MON_CAS']; ?></h1>
		<form id="LoginForm"
			action="<?php echo URL_DIR.'profil/connection';?>" method="post">
		    <?php echo $msg;?>
		    <table>
				<tr>
					<td><?php echo $lang['OLD_PW']; ?></td>
					<td><input type="password" name="oldpassword" size="25" /><br>
					<br></td>
				</tr>
				<tr>
					<td><?php echo $lang['NEW_PW']; ?></td>
					<td><input type="password" name="newpassword" size="25" /><br>
					<br></td>
				</tr>
				<tr>
					<td><?php echo $lang['CONTROL_NEW_PW']; ?></td>
					<td><input type="password" name="controlpassword" size="25" /><br>
					<br></td>
				</tr>
				<table style="width: 100%; text-align: center;">
					<tr>
						<td>
							<button id="submit1" type="submit" name="submit"><?php echo $lang['BTN_SUBMIT']; ?></button>
						</td>
					</tr>
				</table>
				<tr>
					<td><br /> <!--	<a href="<?php echo URL_DIR.'login/newuser';?>">Register</a>-->
						<br />
					<br /></td>
				</tr>
			</table>
		</form>
		<div class="push"></div>
	</div>
	<div><?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php';?></div>
</body>
</html>
