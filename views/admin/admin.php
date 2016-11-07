<?php include_once ROOT_DIR.'global/header.php';?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Admin page</title>
		<link rel="stylesheet" type="text/css" href="/<?php echo SITE_NAME; ?>/public/css/main.css">
	</head>
	<body>
		<div class="wrapper" style= "text-align: center;">
			<h1>Welcome to the Admin page!</h1>
			<h2>What do you want to manage?</h2>
			<a href="<?php echo URL_DIR.'admin/admin_details_tours'?>" >
			<button id="submit1" style= "text-align: center; width: 15%;" type="button">Tours</button>
			</a>
			<br>
			<a href="<?php echo URL_DIR.'admin/admin_details_members'?>">
			<button id="submit1" style= "text-align: center; width: 15%;" type="button">Members</button>
			</a>
			<br><br><br><br>
		</div>
		<div><?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php';?></div>
	</body>
</html>
