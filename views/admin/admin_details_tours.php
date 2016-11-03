<?php include_once ROOT_DIR.'global/header.php';
include_once ROOT_DIR.'languages/common.php';
$tourUpdate = $_SESSION['tour_update'];

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
			<h1>Managing Tours</h1>
			
			<div id="buttondiv">
				<input id="ip1" type="button" value="insert" onclick="toggle_i();"></input>
				<input id="ip2" type="button" value="update" onclick="toggle_u();"></input>
				<input id="ip3" type="button" value="delete" onclick="toggle_d();"></input>
			</div>
			
			<div id="content_insert">
				<h2>New Tour</h2>
				<form method="post" action="<?php echo URL_DIR.'admin/saveNew';?>" onsubmit="alert('Inserted')">
				  <table>
				  	<tr>
				  		<td>Type of Tour:</td>
				  		<td>
				  			<select id="type_input_new">
				  				<option value="1">single-day hike</option>
				  				<option value="2">multi-day hike</option>
				  				<option value="3">proposal</option>
				  			</select>
				  		</td>
				  	</tr>
				  	<tr>
				  		<td>Title: </td>
				  		<td>
				  			<input type="text" name="title_input_new">
				  		</td>
				  	</tr>
				  	<tr>
				  		<td>Information: </td>
				  		<td>
				  			<input type="text" name="info_input_new">
				  		</td>
				  	</tr>
				  	<tr>
				  		<td>Difficulty: </td>
				  		<td>
				  			<input type="number" name="difficulty_input_new" max="10">
				  		</td>
				  	</tr>
				  	<tr>
				  		<td>Guide: </td>
				  		<td>
				  			<input type="text" name="guide_input_new">
				  		</td>
				  	</tr>
				  	<tr>
				  		<td>Time: </td>
				  		<td>
				  			<input type="time" name="timeF_input_new">
				  			<input type="time" name="timeT_input_new">
				  		</td>
				  	</tr>
				  	<tr>
				  		<td>Date: </td>
				  		<td>
				  			<input id="from" type="date" name="date_input_from" value="">
				  			<input id="to" type="date" name="date_input_to" value="">
				  		</td>
				  	</tr>
				  </table>
				  <br>
				</form>
				 <button id="button_save" type="submit" name="action">save</button>
			</div>
			
			<div id="content_update">
				<h2>Update Tour</h2>
				<br>
				<form method="post" action="<?php echo URL_DIR.'admin/updateTour';?>" onsubmit="alert('Updated')">
				  Choose a hike per ID: <input type="number" name="update_id" min="0"> 
				  <input type="button" value="choose" name="choose_id" onclick="">
				  <br>
				  <table>
				  	<tr>
				  		<td>Type of Tour:</td>
				  		<td>
				  			<select id="type_input_update" value="<?php if(isset($_SESSION["tour_update"])) {
																			echo $tourUpdate->getIdxTypeTour();
																		}?>">
				  				<option value="1">single-day hike</option>
				  				<option value="2">multi-day hike</option>
				  				<option value="6">proposal</option>
				  			</select>
				  		</td>
				  	</tr>
				  	<tr>
				  		<td>Title: </td>
				  		<td>
				  			<input type="text" name="update_title" value="<?php if(isset($_SESSION["tour_update"])) {
																						echo $tourUpdate->getTitre();
																					}?>">
				  		</td>
				  	</tr>
				  	<tr>
				  		<td>Information: </td>
				  		<td>
				  			<input type="text" name="update_info" value="<?php if(isset($_SESSION["tour_update"])) {
																						echo $tourUpdate->getInformation_fr();
																					}?>">
				  		</td>
				  	</tr>
				  	<tr>
				  		<td>Difficulty: </td>
				  		<td>
				  			<input type="number" name="update_difficult" value="<?php if(isset($_SESSION["tour_update"])) {
																						echo $tourUpdate->getDifficulte();
																					}?>" max="10">
				  		</td>
				  	</tr>
				  	<tr>
				  		<td>Guide: </td>
				  		<td>
				  			<input type="text" name="update_guide" value="<?php if(isset($_SESSION["tour_update"])) {
																						echo $tourUpdate->getIdxGuide();
																					}?>">
				  		</td>
				  	</tr>
				  	<tr>
				  		<td>Time: </td>
				  		<td>
				  			<input type="time" name="update_time_from" value="<?php if(isset($_SESSION["tour_update"])) {
																						echo $tourUpdate->getDepartHeure();
																					}?>">
				  			<input type="time" name="update_time_to" value="<?php if(isset($_SESSION["tour_update"])) {
																						echo $tourUpdate->getDescente();
																					}?>">
				  		</td>
				  	</tr>
				  	<tr>
				  		<td>Date: </td>
				  		<td>
				  			<input id="from" type="date" name="update_date_from" value="<?php if(isset($_SESSION["tour_update"])) {
																						echo $tourUpdate->getDateDebut();
																					}?>">
				  			<input id="to" type="date" name="update_date_to" value="<?php if(isset($_SESSION["tour_update"])) {
																						echo $tourUpdate->getDateFin();
																					}?>">
				  		</td>
				  	</tr>
				  </table>
				  	<br>
					<input id="button_update" type="submit" name="submit_update" value="save changes"></input>
				</form>
			</div>
			
			<div id="content_delete">
				<h2>Delete Tours</h2>
				Please give the ID of the Tour you want to delete: 
				<br><br>
				<form id="list_hikes" method="post" action="<?php echo URL_DIR.'admin/admin_details_tours';?>" onsubmit="alert('Deleted')">
					<input type="number" name="delete_id">	
				</form>	
				<br><br>		
				<input id="button_delete" type="submit" name="submit_delete" value="delete"></input>
			</div>
			<br><br><br>
		</div>
	</body>
</html>
<?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php'; ?>
