<?php include_once ROOT_DIR.'global/header.php';?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Admin page</title>
		<link rel="stylesheet" type="text/css" href="/<?php echo SITE_NAME; ?>/public/css/main.css">
		<style>
			h2 {
				color:black;
				text-align:center;
				font-family: "Times New Roman", Times, serif;
				font-style: normal;
			}
			
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
			
			<a href="<?php echo URL_DIR.'admin/admin_details_tours'?>" ><input type="button" value="Tours"></input></a>
			<br>
			<a href="<?php echo URL_DIR.'admin/admin_details_members'?>"><input type="button" value="Members"></input></a>
			<br><br><br><br>
		</div>
	</body>
</html>
