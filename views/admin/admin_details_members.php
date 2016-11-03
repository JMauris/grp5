<?php include_once ROOT_DIR.'global/header.php';
$member = $_SESSION['member'];
include_once ROOT_DIR.'languages/common.php';
?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Admin page</title>
		<link rel="stylesheet" type="text/css" href="/<?php echo SITE_NAME; ?>/public/css/main.css">
		<style type="text/css">
			#buttondiv {
				text-align: center;
			}
			
			#ip1, #ip2, #ip3 {
				font-style: normal;
				font-family: "Times New Roman", Times, serif;
				font-size: 1.5em;	
			}
			
			#content_insert, #content_update, #content_delete {
				display: none;
				text-align: center;
			}
			
			h2 {
				color:black;
				text-align:center;
				font-family: "Times New Roman", Times, serif;
				font-style: normal;
			}
			
			table {
				margin: 0 auto;
				text-align: left;
				border-spacing: 10px;
			}
						
			#button_save, #button_update, #button_delete {
				font-style: normal;
				font-family: "Times New Roman", Times, serif;
				font-size: 1em;	
			}
			
		</style>
		<script>
		function toggle_i() {
		    document.getElementById("content_insert").style.display = 'block';
		    document.getElementById("content_update").style.display = '';
		    document.getElementById("content_delete").style.display = '';
		}
		function toggle_u() {
		    document.getElementById("content_insert").style.display = '';
		    document.getElementById("content_update").style.display = 'block';
		    document.getElementById("content_delete").style.display = '';
		}
		function toggle_d() {
		    document.getElementById("content_insert").style.display = '';
		    document.getElementById("content_update").style.display = '';
		    document.getElementById("content_delete").style.display = 'block';
		}
		</script>
	</head>
	<body>
		<div class="wrapper">
			<h1>Managing Members</h1>
			
			<div id="buttondiv">
				<input id="ip1" type="button" value="insert" onclick="toggle_i();"></input>
				<input id="ip2" type="button" value="update" onclick="toggle_u();"></input>
				<input id="ip3" type="button" value="delete" onclick="toggle_d();"></input>
			</div>
			
			<div id="content_insert">
				<h2>New Member</h2>
				<form action="">
					<table>
						<tr>
							<td>Name:</td>
							<td>
								<input type="text" name="name_new">
							</td>
						</tr>
						<tr>
							<td>Lastname:</td>
							<td>
								<input type="text" name="lastname_new">
							</td>
						</tr>
						<tr>
							<td>Adress:</td>
							<td>
								<input type="text" name="adress_new">
							</td>
						</tr>
						<tr>
							<td>NPA:</td>
							<td>
								<input type="text" name="npa_new">
							</td>
						</tr>
						<tr>
							<td>Locality:</td>
							<td>
								<input type="text" name="locality_new">
							</td>
						</tr>
						<tr>
							<td>Phone:</td>
							<td>
								<input type="text" name="phone_new">
							</td>
						</tr>
						<tr>
							<td>Mobile:</td>
							<td>
								<input type="text" name="mobile_new">
							</td>
						</tr>
						<tr>
							<td>Email:</td>
							<td>
								<input type="text" name="email_new">
							</td>
						</tr>
					</table>
				</form>
				<br>
				<input type="submit" value="save"></input>
			</div>
			
			<div id="content_update">
				<h2>Update Member</h2>
				
				<form action="">
				  Choose a Member per ID: <input type="number"> 
				  <input type="button" value="choose">
				  <br>
				  <br>
				  <table>
						<tr>
							<td>Firstname:</td>
							<td>
								<input type="text" name="name_update" value=" <?php if(isset($_SESSION["member"])) {
																						echo $user->getFirstname();
																					}?>">
							</td>
						</tr>
						<tr>
							<td>Lastname:</td>
							<td>
								<input type="text" name="lastname_update" value=" <?php if(isset($_SESSION["member"])) {
																						echo $user->getLastname();
																					}?>">
							</td>
						</tr>
						<tr>
							<td>Adress:</td>
							<td>
								<input type="text" name="adress_update" value=" <?php if(isset($_SESSION["member"])) {
																						echo $user->getAdresse();
																					}?>">
							</td>
						</tr>
						<tr>
							<td>NPA:</td>
							<td>
								<input type="text" name="npa_update" value=" <?php if(isset($_SESSION["member"])) {
																						echo $user->getNpa();
																					}?>">
							</td>
						</tr>
						<tr>
							<td>Locality:</td>
							<td>
								<input type="text" name="locality_update" value=" <?php if(isset($_SESSION["member"])) {
																						echo $user->getLocalite();
																					}?>">
							</td>
						</tr>
						<tr>
							<td>Phone:</td>
							<td>
								<input type="text" name="phone_update" value=" <?php if(isset($_SESSION["member"])) {
																						echo $user->getPhone();
																					}?>">
							</td>
						</tr>
						<tr>
							<td>Mobile:</td>
							<td>
								<input type="text" name="mobile_update" value=" <?php if(isset($_SESSION["member"])) {
																						echo $user->getPortable();
																					}?>">
							</td>
						</tr>
						<tr>
							<td>Email:</td>
							<td>
								<input type="text" name="email_update" value=" <?php if(isset($_SESSION["member"])) {
																						echo $user->getEmail();
																					}?>">
							</td>
						</tr>
					</table>
				</form>
				<br>
				<input type="submit" value="save changes"></input>
			</div>
			
			<div id="content_delete">
				<h2>Delete Member</h2>
				Please tip in the ID of the Member you want to delete:
				<form id="list_hikes" method="post" action="<?php echo URL_DIR.'admin/admin_details_members';?>" onsubmit="alert('Deleted')">
					<br>
					<input type="number" value="member">
				</form>	
				<br><br>		
				<input type="submit" value="delete"></input>
			</div>
			<br><br><br>
		</div>
	</body>
</html>
<?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php'; ?>

