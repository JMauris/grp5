<?php include_once ROOT_DIR.'global/header.php';?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Admin page</title>
		<link rel="stylesheet" type="text/css" href="/<?php echo SITE_NAME; ?>/public/css/main.css">
	</head>
	<body>
		<div class="wrapper" style= "text-align: center;">
			<h1><?php echo $lang['ADMIN_TITLE']; ?></h1>
			<h2><?php echo $lang['ADMIN_SUBTITLE']; ?></h2>
			<a href="<?php echo URL_DIR.'admin/admin_details_tours'?>" >
			<button id="submit1" style= "text-align: center; width: 15%;" type="button"><?php echo $lang['BTN_TOURS']; ?></button>
			</a>
			<br>
			<a href="<?php echo URL_DIR.'admin/admin_details_members'?>">
			<button id="submit1" style= "text-align: center; width: 15%;" type="button"><?php echo $lang['BTN_MEMBERS']; ?></button>
			</a>
			<br><br><br><br>
			<div class="push"></div>
		</div>
		<div><?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php';?></div>
	</body>
</html>
