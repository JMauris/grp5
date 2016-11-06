<?php include_once ROOT_DIR.'global/header.php'; include_once ROOT_DIR.'languages/common.php';?>
	<html>
		<head>
			<meta charset="UTF-8">
			<title>Home</title>
			<link rel="stylesheet" type="text/css" href="/<?php echo SITE_NAME; ?>/public/css/main.css">
		</head>
		<body>
			<div class="wrapper" style="height: 600px;">
				<h1><?php echo $lang['HOME_TITLE']; ?></h1>
				<br>
				<p>
					<?php echo $lang['HOME_TEXT_1'];?>
				</p>
				<p>
					<?php echo $lang['HOME_TEXT_2']; ?>
				</p>
				<p>
					<?php echo $lang['HOME_TEXT_3']; ?>
				</p>
			<div class="push"></div>
			</div>
			<div class= "footer"><?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php';?></div>
		</body>
	</html>