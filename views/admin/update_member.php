<?php include_once ROOT_DIR.'global/header.php';
include_once ROOT_DIR.'languages/common.php';
$SelectedMember = $_SESSION['selectedMember'];
?>

<html>
	<head>
		<title>Update Member</title>
		<link rel="stylesheet" type="text/css" href="/<?php echo SITE_NAME; ?>/public/css/main.css">
		<style type="text/css">
			#main_div {
				height: 100%;
				text-align: center;
			}
			
			table {
				margin: 0 auto;
				text-align: left;
			}
		</style>
	</head>
	<body>
		<div class= "wrapper" id="main_div">
			<h2>Update Member</h2>
			
			<form method="post" action="<?php echo URL_DIR.'admin/updateMember';?>">
			  <table>
					<tr>
						<td>Firstname:</td>
						<td>
							<input type="text" name="name_update" value="<?php echo ' '.$SelectedMember->getFirstname(); ?>">
						</td>
					</tr>
					<tr>
						<td>Lastname:</td>
						<td>
							<input type="text" name="lastname_update" value="<?php echo ' '.$SelectedMember->getLastname(); ?>">
						</td>
					</tr>
					<tr>
						<td>Adress:</td>
						<td>
							<input type="text" name="adress_update" value="<?php echo ' '.$SelectedMember->getAdresse(); ?>">
						</td>
					</tr>
					<tr>
						<td>NPA:</td>
						<td>
							<input type="text" name="npa_update" value="<?php echo ' '.$SelectedMember->getNpa(); ?>">
						</td>
					</tr>
					<tr>
						<td>Locality:</td>
						<td>
							<input type="text" name="locality_update" value="<?php echo ' '.$SelectedMember->getLocalite(); ?>">
						</td>
					</tr>
					<tr>
						<td>Phone:</td>
						<td>
							<input type="text" name="phone_update" value="<?php echo ' '.$SelectedMember->getPhone(); ?>">
						</td>
					</tr>
					<tr>
						<td>Mobile:</td>
						<td>
							<input type="text" name="mobile_update" value="<?php echo ' '.$SelectedMember->getPortable(); ?>">
						</td>
					</tr>
					<tr>
						<td>Email:</td>
					<td>
							<input type="text" name="email_update" value="<?php echo ' '.$SelectedMember->getEmail(); ?>">
						</td>
					</tr>
				</table>
			</form>
			<br>
			<input type="submit" value="save changes"></input>
			
			<a href="<?php echo URL_DIR.'admin/admin_details_members'?>">
				<input type="button" value="<?php echo $lang['BTN_BACK']; ?>" ></input>
			</a>
		</div>
	</body>
</html>

<?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php'; ?>
