<?php include_once ROOT_DIR.'global/header.php';
$tourArray=$_SESSION['tour'];

?>

<html>
	<head>
		<meta charset="UTF-8">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>

		<title>Programm overview</title>

		<link rel="stylesheet" type="text/css" href="http://localhost/cas_montana/public/css/main.css">

		<script>
		   $(function() {
		     $("#datepicker, #datepicker2, #datepicker3").datepicker();
		   });
		</script>

		<style type="text/css">
			
			#tableDiv{
				width: 94%;
				height: 50%;
				background: transparent;
			}
			
			#insideTable{
				background: transparent;
				padding: 0;
				margin-bottom: 3%;
				width: 94%;
				text-align: left;
				float: top;
				text-align: center;
			}
			
			tr{
				text-align:left;
			}
			
			#search{
				display:inline-block;
				align: left;
				width: 20%;
			}	
			#searchButton{
				float: right;
				width: 15%;
				display: inline;
				height: 50px;
				margin-top: 5%;
				margin-right: 3%;
				align: center;
				font-family: "Times New Roman", Times, serif;
				font-style: normal;
				font-size: 1.30em;
				
			}
			#top {
				float: top;
				height: 6%;
				background-color : transparent;
			}
			
			#yourProg{
				background-color : transparent;
				text-align: center;
			}
			
			#mainTable{
				width: 100%;
				margin-left: 2%;
				margin-right: 2%;
				margin-top: 2%;
			}
			#submit1{
				float: right;
				margin-left: 2%;
				text-align: center;
				font-family: "Times New Roman", Times, serif;
				font-style: normal;
				font-size: 1.10em;
			}
			#submit2{
				float: right;
				margin-left: 2%;
				text-align: center;
				font-family: "Times New Roman", Times, serif;
				font-style: normal;
				font-size: 1.10em;
			}
			#bottom {
				float: bottom;
				background-color : transparent;
				height: 150px;
				overflow-y : scroll;
				margin-bottom: 2%;
			}
			#table{
				border: 1px;
			}
			#topButton{
				background: transparent;
			}
			#search1{
				float: left;
				width: 30%;
			}
			#searchButton{
				float: right;
				width: 20%;
				margin: 0;
				padding-left: 1%;
				text-align: right;
				font-family: "Times New Roman", Times, serif;
				font-style: normal;
				font-size: 1.20em;
			}
		</style>
	</head>
	<body>
		<div style="height: 110%;">
			<h1>Hikinglists</h1>
			<div id="topButton">
				<button id="searchButton"><img id="search1" src="http://localhost/cas_montana/public/img/search.png" onclick="window.location = 'search_path.php';">Search route</button>
			</div>
			<div id="top">
			<table style="width: 100%;">
			<tr>
			<td style="text-align: center; width: 50%;">
				<h2>Single hikes</h2>
			</td>
			<td style="text-align: center; width: 50%;">
				<h2>Multi-day hikes</h2>
			</td>
			</tr>
			</table>
		</div>
<div id="tableDiv">
			
<table id = "mainTable">
		<tr>
			<td style="width: 50%;">
				<div id="insideTable">
				 
				<table>
				<tr>
				  <td>Choose a day:</td>
				  <td><input type="text" id="datepicker" name="from"></td>
				</tr>
				<tr>
					<td>Route for the selected day:</td>
					<td>...</td>
				</tr>
				<tr>
					<td></td>
					<td>
					<button id="submit1" onclick="window.location = '';">Add hike</button>
					</td>
				</tr>
			  	</table>
				</div>
			</td>
			
			<td style="width: 50%;">
							
				<div id="insideTable">
			  	<table>
			  	<tr>
			  		<td>Choose date</td>
			  	</tr>
			  	<tr>
				    <td><b>From:</b></td>
				    <td><input type="text" id="datepicker2" name="from"></td>
				</tr>
				<tr>
					<td><b>To:</b></td>
					<td><input type="text" id="datepicker3" name="to"></td>
				</tr>
				<tr>
					<td>Route for the selected stay:</td>
					<td>....</td>
				</tr>
				<tr>
					<td></td>
					<td>
					<button id="submit2" onclick="window.location = '';">Add multi-hike</button>
					</td>
				</tr>
			  	</table>
			 
				</div>
			</td>			
			
		</tr>
	</table>
</div>
<div id="yourProg">
			<h2>Your Programm:</h2>
			</div>
			<div id="bottom">						
					<table id="table">

					 <tr>
              			<th> Type </th>
						 <th> Titre </th>
						 <th> Information </th>
						 <th> Depart</th>
						 <th> Date debut </th>


					 </tr>
					 <?php foreach( $tourArray as $cle => $element)

					 {?>
					 <tr>
	            <td><?php if( $tourArray[$cle]->getIdxTypeTour() == 1){
                echo "Hiking";
              }
              elseif ($tourArray[$cle]->getIdxTypeTour() == 2) {
                echo "Stay";
              }
              else {
                echo "Proposal";
              } ?> </td>
					<td><?php echo  $tourArray[$cle]->getTitre(); ?> </td>
					<td><?php echo  $tourArray[$cle]->getInformation_fr(); ?> </td>
					<td><?php echo  $tourArray[$cle]->getIdxDepartLocalite(); ?> </td>
					<td><?php echo  $tourArray[$cle]->getDateDebut(); ?> </td>



					<?php } ?>
					</tr>
			</table>

			</div>
			</div>
	</body>
</html>

<?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php'; ?>
