<?php include_once ROOT_DIR.'global/header.php';
$tourArray=$_SESSION['tour'];

?>

<html>
	<head>
		<meta charset="UTF-8">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>

		<title>Programm overview</title>

		<link rel="stylesheet" type="text/css" href="/<?php echo SITE_NAME; ?>/public/css/main.css">

		<script>
		   $(function() {
		     $("#datepicker, #datepicker2, #datepicker3").datepicker();
		   });
		</script>

		<style type="text/css">

		button {
			width: 100%;
			text-align: left;
		}
		p {
				margin: 0;
				padding: 0;
		}

			#tableDiv{
				height: 50%;
				background: transparent;
				padding-left: 2%;
				padding-right: 2%;
				padding-top: 2%;
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
				width: 20%;
				display: inline;
				height: 30%;
				margin-top: 4%;
				margin-right: 3%;
				text-align: center;
				font-family: "Times New Roman", Times, serif;
				font-style: normal;
				font-size: 100%;
				font-weight: bold;
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
				padding: 2%;
			}
			#submit1{
				float: right;
				width: 40%;
				display: inline;
				height: 30%;
				margin-top: 4%;
				margin-right: 3%;
				text-align: center;
				font-family: "Times New Roman", Times, serif;
				font-style: normal;
				font-size: 100%;
				font-weight: bold;
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
				float: right;
				width: 20%;
				padding: 2%;
			}

			#datepicker{
				width: 100%;
				padding: 0;
			}

			#view_all{
						width: 20%;
						height: 10%;
						font-size: 0.8em;
						text-align: center;
					}
		</style>
	</head>
	<body>
		<div class="wrapper" style= "padding-bottom: 2%; padding-right: 2%; padding-left: 2%;">
			<h1>Hikinglists</h1>
				<div id="topButton">
					<a href="<?php echo URL_DIR.'search/search_path'?>"><img id="search1" src="<?php echo URL_DIR. 'public/img/searchRoute.png'?>"></a>
				</div>

			<div>

	<div id="top">
			<table style="width: 100%;">
				<tr>
					<td style="text-align: center; width: 50%;">
						<h2>Single hikes</h2>
						<p>
							Description
						</P>
					</td>
					<td style="text-align: center; width: 50%;">
						<h2>Multi-day hikes</h2>
						<p>
							Description
						</P>
					</td>
				</tr>
			</table>
			</div>

	<!--				<div id="tableDiv">

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
				    				<td>
				    					<b>From:</b>
				    				</td>
				    				<td>
				    					<input type="text" id="datepicker" name="from">
				    				</td>
								</tr>
								<tr>
									<td>
										<b>To:</b>
									</td>
									<td>
										<input type="text" id="datepicker" name="to">
									</td>
								</tr>
								<tr>
									<td>Route for the selected stay:</td>
									<td>....</td>
								</tr>
								<tr>
									<td></td>

								</tr>
			  				</table>

							</div>
						</td>

					</tr>
			</table>
		</div>-->

		<div id="buttonsDiv1">
			<table style="width: 100%;">
					<tr>
						<td>
							<form action="<?php echo URL_DIR.'programm/programm'?>" method= "post">
								<button id="submit1" name ="type" value = '1'>Only hike</button>
							</form>
						</td>
						<td>
							<form action="<?php echo URL_DIR.'programm/programm'?>" method= "post">
								<button id="submit1" name ="type" value = '2'>Only multi-hike</button>
							</form>
						</td>
					</tr>
			</table>
		</div>

		<div id="yourProg">
			<h2>Your Programm:</h2>

			<form action="<?php echo URL_DIR.'programm/programm'?>" method= "post">
				<button id="view_all" name ="type">view all</button>
			</form>
		</div>

			<div>
				<table style = "width: 100%;">
					 <tr>
              			<th style = "width: 20%; text-align: left;"> Type </th>
						 <th style = "width: 20%; text-align: left;"> Titre </th>
						 <th style = "width: 20%; text-align: left;"> Information </th>
						 <th style = "width: 20%; text-align: left;"> Depart</th>
						 <th style = "width: 20%; text-align: left;"> Date debut </th>
					 </tr>
				</table>
			</div>
		<div id="bottom">
					 <table id="table">
					 <tr>
					  <td colspan = "5">
						<form action="<?php echo URL_DIR.'programm/hiking_detail'?>" method= "post">
					 		<?php foreach( $tourArray as $cle => $element)

					 		{?>
					 	<button  name ="selectedTour" value = <?php echo $cle?>>
					 		<table style="width: 100%;">
					 			<tr>
					 			<td style="width: 20%">
	            				<?php if( $tourArray[$cle]->getIdxTypeTour() == 1)
	            					{
                					echo "Hiking";
	            					}
             							 elseif ($tourArray[$cle]->getIdxTypeTour() == 2)
             							 {
                							echo "Stay";
             							 }
              							else
              								{
                							echo "Proposal";
              								}
              					?>
              					</td>
					 			<td style="width: 20%">
              					<?php echo ' '.$tourArray[$cle]->getTitre(); ?>
								</td>
					 			<td style="width: 20%">
								<?php echo ' '.$tourArray[$cle]->getInformation_fr(); ?>
								</td>
								<td style="width: 20%">
								<?php echo ' '.$tourArray[$cle]->getDepartHeure() ?>
								</td>
					 			<td style="width: 20%">
								<?php echo ' '.$tourArray[$cle]->getDateDebut() ?>
								</td>
								</tr>
							</table>
						</button>
							<?php } ?>
						</form>
						</td>
					</tr>
			</table>

			</div>
		</div>
		</div>
	</body>
</html>

<?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php'; ?>
