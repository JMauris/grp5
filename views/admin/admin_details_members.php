<?php include_once ROOT_DIR.'global/header.php';
include_once ROOT_DIR.'languages/common.php';
$memberArray=$_SESSION['get_all_Membershit'];
?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Admin page</title>
		<link rel="stylesheet" type="text/css" href="/<?php echo SITE_NAME; ?>/public/css/main.css">
		<style type="text/css">			
			#ip1, #ip2, #ip3 {
				font-style: normal;
				font-family: "Times New Roman", Times, serif;
				font-size: 1.5em;	
			}
						
			h2 {
				color:black;
				text-align:center;
				font-family: "Times New Roman", Times, serif;
				font-style: normal;
			}
			
			#insert_table, #table_members_header, #table_members {
				margin: 0 auto;
				text-align: left;
				border-spacing: 10px;
			}
			
			#button_save, #button_update, #button_delete {
				font-style: normal;
				font-family: "Times New Roman", Times, serif;
				font-size: 1em;	
			}			
			
			#main_div {
				padding-bottom: 2%; padding-right: 2%; padding-left: 2%;
			}
					
			#content_insert, #content_update, #content_delete {
				display: none; text-align: center;
			}
			
			#table_members_header {
				width: 100%; text-align:left;
			}
			
			#table_members {
				width: 100%; text-align:left;
			}
			
			#div_list_members {
				float: bottom;
				background-color: lightgrey;
				height: 500px;
				overflow-y : scroll;
				margin-bottom: 2%;
			}
			
			#div_list_header {
				float: bottom;
			}
			
			#button_div {
				text-align: center;
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
		<div class="wrapper" id="main_div">
			<h1>Managing Members</h1>
			
			<div id="button_div">
				<input id="ip1" type="button" value="insert" onclick="toggle_i();"></input>
				<input id="ip2" type="button" value="update" onclick="toggle_u();"></input>
				<input id="ip3" type="button" value="delete" onclick="toggle_d();"></input>
			</div>
			
			<div id="content_insert">
				<h2>New Member</h2>
				<form method="post" action="<?php echo URL_DIR.'admin/saveNewMember';?>">
				  <table id="insert_table">
						<tr>
							<td>Firstname:</td>
							<td><input type="text" name="name" value=""></td>
						</tr>
						<tr>
							<td>Lastname:</td>
							<td><input type="text" name="lastname" value=""></td>
						</tr>
						<tr>
							<td>Adress:</td>
							<td><input type="text" name="adress" value=""></td>
						</tr>
						<tr>
							<td>NPA:</td>
							<td><input type="text" name="npa" value=""></td>
						</tr>
						<tr>
							<td>Locality:</td>
							<td><input type="text" name="locality" value=""></td>
						</tr>
						<tr>
							<td>Phone:</td>
							<td><input type="text" name="phone" value=""></td>
						</tr>
						<tr>
							<td>Mobile:</td>
							<td><input type="text" name="mobile" value=""></td>
						</tr>
						<tr>
							<td>Email:</td>
							<td><input type="text" name="email" value=""></td>
						</tr>
					</table>
					<br>
				  <button id="button_save" type="submit" name="action">save</button>
				</form>
				<a href="<?php echo URL_DIR.'admin/admin'?>">
					<input type="button" value="<?php echo $lang['BTN_BACK']; ?>" ></input>
				</a>
			</div>
						
			<div id="content_update">
				<h2>Update Member</h2>
				
				<div id="div_list_members" >				
					<table id="table_members">
						<thead>
							<tr>
							 	<th style = "width: 2%; text-align: left;"> ID </th>
		              			<th style = "width: 10%; text-align: left;"> Firstname </th>
		              			<th style = "width: 10%; text-align: left;"> Lastname </th>
							 	<th style = "width: 10%; text-align: left;"> Adress </th>
							 	<th style = "width: 2%; text-align: left;"> NPA </th>
							 	<th style = "width: 5%; text-align: left;"> Locality </th>
							 	<th style = "width: 10%; text-align: left;"> Phone </th>
							 	<th style = "width: 10%; text-align: left;"> Mobile </th>
							 	<th style = "width: 10%; text-align: left;"> Email </th>
							 	<th style = "width: 2%; text-align: left;">  </th>
						 	</tr>
					 	</thead>
					 	<tbody>
						<?php foreach($memberArray as $cle => $element) {?>
							<tr>
								<td style="width: 2%;" >
									<?php echo ' '.$memberArray[$cle]->getId(); ?>
								</td>
								<td style="width: 10%;">
								   	<?php echo ' '.$memberArray[$cle]->getFirstname(); ?>
								</td>
								<td style="width: 10%;">
								   	<?php echo ' '.$memberArray[$cle]->getLastname(); ?>
							    </td>
								<td style="width: 20%;">
									<?php 
										if( $memberArray[$cle]->getAdresse() == null){
											echo '---';
										} else {
											echo ' '.$memberArray[$cle]->getAdresse(); 
										}
									?>
								</td>
								<td style="width: 2%;">
									<?php 
										if($memberArray[$cle]->getNpa() == null){
											echo '---';
										} else {
											echo ' '.$memberArray[$cle]->getNpa(); 
										}
									?>
								</td>
								<td style="width: 5%;">
									<?php 
										if($memberArray[$cle]->getLocalite() == null){
											echo '---';
										} else {	
											echo ' '.$memberArray[$cle]->getLocalite(); 
										}
									?>
								</td>
								<td style="width: 10%;">
									<?php 
										if($memberArray[$cle]->getPhone() == null){
											echo '---';
										} else {
											echo ' '.$memberArray[$cle]->getPhone();
										}
									?>
								</td>
								<td style="width: 10%;">
									<?php 
										if($memberArray[$cle]->getPortable() == null){
											echo '---';
										} else {
											echo ' '.$memberArray[$cle]->getPortable();
										}
									?>
								</td>
								<td style="width: 10%;">
									<?php 
										if($memberArray[$cle]->getEmail() == null){
											echo '---';
										} else {
											echo ' '.$memberArray[$cle]->getEmail();
										}
									?>
								</td>
								<td style="width: 2%;"> 
									<form action="<?php echo URL_DIR.'admin/update_member';?>" method= "post">
										<button  name ="selectedIDMember" value = <?php echo $cle;?> type = "submit">Edit</button>
									</form>
								</td>
							</tr>	
						<?php } ?>
						<tbody>
					</table>	
				</div>
				<a href="<?php echo URL_DIR.'admin/admin'?>">
					<input type="button" value="<?php echo $lang['BTN_BACK']; ?>" ></input>
				</a>
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
				
				<a href="<?php echo URL_DIR.'admin/admin'?>">
				<input type="button" value="<?php echo $lang['BTN_BACK']; ?>" ></input>
			</a>
			</div>
			<br><br><br>
		</div>
	</body>
</html>
<?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php'; ?>

