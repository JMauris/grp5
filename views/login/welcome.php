<?php
include_once ROOT_DIR . 'global/header.php';
include_once ROOT_DIR . 'languages/common.php';

// Collect data from controller and session
$msg = $this->vars ['msg'];
$user = $_SESSION ['personne'];
?>
<link rel="stylesheet" type="text/css"
	href="/<?php echo SITE_NAME; ?>/public/css/main.css">
<br>
<br>
<div class="wrapper">
	<table style="text-align: center; width: 100%; padding-bottom: 2%;">
		<tr>
			<td>
					<?php echo $msg;?>
					<h1><?php echo $lang['WELCOME_TITLE']; ?> <?php echo ' '.$user->getFirstname().' '.$user->getLastname();?> </h1>
				<a href="<?php echo URL_DIR.'login/logout';?>">Logout</a>
			</td>
		</tr>
	</table>
</div>
<br />
<br />
<br />
<br />
<div class="push"></div>
<div><?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php';?></div>
