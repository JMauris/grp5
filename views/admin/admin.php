<?php include_once ROOT_DIR.'global/header.php';?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Admin page</title>
		<link rel="stylesheet" type="text/css" href="/<?php echo SITE_NAME; ?>/public/css/main.css">
		<style>
			
			
			div {
				text-align: center;
			}
			
			input{
				margin: 2%;
				font-style: normal;
				font-family: "Times New Roman", Times, serif;
				font-size: 1.5em;			
			}
		</style>
	</head>
	<body>
		<div class="wrapper">
			<h1>Welcome to the Admin page!</h1>
			<h2>What do you want to manage?</h2>
			
			<a href="<?php echo URL_DIR.'admin/admin_details_tours'?>" >
			<button id="submit1" type="button">Tours</button>
			</a>
			<br>
			<a href="<?php echo URL_DIR.'admin/admin_details_members'?>">
			<button id="submit1" type="button">Members</button>
			</a>
			<br><br><br><br>
			<div class="push"></div>
		</div>
		<div class= "footer"><?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php';?></div>
	</body>
</html>
