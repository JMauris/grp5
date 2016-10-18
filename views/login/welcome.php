<?php
	include_once ROOT_DIR.'global/header.php';
	//Collect data from controller and session
	$msg = $this->vars['msg'];
	$user = $_SESSION['personne'];
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="http://localhost/cas_montana/public/css/main.css">
	</head>
	<body>
	<div>
		<br><br>
		<table style="text-align:center">
			<tr>
				<td>
					<?php echo $msg;?>
					<h1>Welcome <?php echo ' '.$user->getFirstname().' '.$user->getLastname();?> </h1>
					<a href="<?php echo URL_DIR.'login/logout';?>">Logout</a>
				</td>
			</tr>
		</table>
		<br/><br/><br/><br/>
	</div>
	</body>
</html>

<?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php';?>
