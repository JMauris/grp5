<?php include_once ROOT_DIR.'global/header.php';
	//Collect data from controller
	$msg = $this->vars['msg'];
	$persistence = $this->vars['persistence'];
?>

<?php echo $msg;?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="http://localhost/cas_montana/public/css/main.css">
		
		<style type="text/css">
			form {
				width:25%; 
    			margin:0 auto;
			}
			
			div {
				text-align: center;
			}
		</style>
	</head>
	<body>
		<div style="height: 60%;">
			<h1>Register</h1>
			<form method="post" action="<?php echo URL_DIR.'login/register';?>">
				<table style="align:center">
					<tr>
						<td>First name: </td>
						<td><input type="text" name="firstname" value="<?php echo $persistence[0];?>"></td>
					</tr>
					<tr>
						<td>Last name: </td>
						<td><input type="text" name="lastname" value="<?php echo $persistence[1];?>"></td>
					</tr>
					<tr>
						<td>User name: </td>
						<td><input type="text" name="username" value="<?php echo $persistence[2];?>"></td>
					</tr>
					<tr>
						<td>Password: </td>
						<td><input type="password" name="password" value="<?php echo $persistence[3];?>"></td>
					</tr>			
				</table>
				<br>
			</form>
			<input type="submit" name="action" value="Register"><br><br>
				<a href="<?php echo URL_DIR.'login/login';?>">Login</a>
		</div>
	</body>
</html>

<?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php';?>
