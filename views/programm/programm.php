<?php include_once ROOT_DIR.'global/header.php';
$tourArray=$_SESSION['tour'];
include_once ROOT_DIR.'languages/common.php';
if(isset($_GET['lang'])){
$_SESSION['lang']=$_GET['lang'];}
else {
	$_SESSION['lang']='en';
}

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
			#buttonsTr
			{
				text-align: center;
			}
			#search{
				display:inline-block;
				align: left;
				width: 20%;
			}
			#top {
				float: top;
				height: 6%;
				background-color : transparent;
				padding-bottom: 2%;
			}

			#yourProg{
				background-color : transparent;
				text-align: center;
				padding-bottom:2%;
				padding-left: 2%;
				padding-right: 2%;
			}

			#mainTable{
				width: 100%;
				padding-top: 2%;
				padding-left: 2%;
				padding-right: 2%;
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
			}
			#search1:hover {
			    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
			    border: 2px solid #555555;
			}
			#datepicker{
				width: 100%;
				padding: 0;
			}
		</style>
	</head>
	<body>
		<div class="wrapper" style= "padding-bottom: 2%; padding-right: 2%; padding-left: 2%;">
				<h1><?php echo $lang['PROGRAM_TITLE']; ?></h1>
				<div id="topButton">
					<a href="<?php echo URL_DIR.'search/search_path'?>"><img id="search1" src="<?php echo URL_DIR. 'public/img/searchRoute.png'?>"></a>
				</div>

				<div>

				<div id="top">
					<table style="width: 100%;">
						<tr>
							<td style="text-align: center; width: 50%;">
								<h2><?php echo $lang['SINGLE_HIKES']; ?></h2>
						<p>
							Description
						</P>
					</td>
					<td style="text-align: center; width: 50%;">
				<h2><?php echo $lang['MULTI_DAY_HIKES']; ?></h2>
						<p>
							Description
						</P>
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
									  <td><?php echo $lang['CHOOSE_A_DAY']; ?></td>
									  <td><input type="text" id="datepicker" name="from"></td>
									</tr>
									<tr>
										<td><?php echo $lang['DAY_ROUTE']; ?></td>
										<td>...</td>
									</tr>
							  	</table>
							</div>
						</td>
						<td style="width: 50%;">
							<div id="insideTable">
							  	<table>
								  	<tr>
								  		<td><?php echo $lang['CHOOSE_DATE']; ?></td>
								  	</tr>
								  	<tr>
									    <td><b><?php echo $lang['FROM']; ?></b></td>
									    <td><input type="text" id="datepicker2" name="from"></td>
									</tr>
									<tr>
										<td><b><?php echo $lang['TO']; ?></b></td>
										<td><input type="text" id="datepicker3" name="to"></td>
									</tr>
									<tr>
										<td><?php echo $lang['STAY_ROUTE']; ?></td>
										<td>....</td>
									</tr>
							  	</table>
							</div>
						</td>
					</tr>
				</table>
			</div>
		   <div>
			<table style="width: 100%;">
					<tr id="buttonsTr">
						<td>
							<form action="<?php echo URL_DIR.'programm/programm'?>" method= "post">
								<button id="submit1" name ="type" value = '1'><?php echo $lang['BTN_ONLY_HIKE']; ?></button>
							</form>
						</td>
						<td>
							<form action="<?php echo URL_DIR.'programm/programm'?>" method= "post">
								<button id="submit1" name ="type" value = '2'><?php echo $lang['BTN_ONLY_MULTI']; ?></button>
							</form>
						</td>
					</tr>
			</table>
		</div>

		<div id="yourProg">
				<h2 style="float: center; padding-left: 2%; padding-right: 2%;"><?php echo $lang['YOUR_PROGRAMM']; ?></h2>

			<form action="<?php echo URL_DIR.'programm/programm'?>" method= "post">
				<button id="submit1"><?php echo $lang['BTN_VIEW']; ?></button>
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
						<form action="<?php echo URL_DIR.'programm/hiking_detail';?>" method= "post">
					 		<?php foreach( $tourArray as $cle => $element)

					 		{?>

					 	<button  name ="selectedTour" value = <?php echo $cle;?>>
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
								<?php

								switch ($_SESSION['lang']) {

									  case 'de':
									  	echo ' '.$tourArray[$cle]->getInfromation_de();
									  break;

									  case 'fr':
									  	echo ' '.$tourArray[$cle]->getInformation_fr();
									  break;

										default:
										echo ' '.$tourArray[$cle]->getInformation_fr();
									}

								 ?>
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

<?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php';
	include_once ROOT_DIR.'languages/common.php';?>?>
