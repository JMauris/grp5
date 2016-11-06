<?php include_once ROOT_DIR.'global/header.php'; include_once ROOT_DIR.'languages/common.php';?>
<html>
	<title>search path</title>
	<link rel="stylesheet" type="text/css" href="/<?php echo SITE_NAME; ?>/public/css/main.css">		
</html>
<body>
	<div class="wrapper">
	<table>
		<tr>
			<td>
				<?php echo $msg;?>
				<h1>Welcome <?php echo ' '.$user->getFirstname().' '.$user->getLastname();?></h1>
			</td>
		</tr>
	</table>
	<div class="push"></div>
	</div>
	<div class= "footer"><?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php';?></div>
</body>