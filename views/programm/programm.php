<?php

include_once ROOT_DIR . 'global/header.php';
$tourArray = $_SESSION ['tour'];
include_once ROOT_DIR . 'languages/common.php';
if (isset ( $_GET ['lang'] )) {
	$_SESSION ['lang'] = $_GET ['lang'];
} else {
	$_SESSION ['lang'] = 'en';
}

?>

<html>
<head>
<meta charset="UTF-8">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>

<title>Programm overview</title>

<link rel="stylesheet" type="text/css"
	href="/<?php echo SITE_NAME; ?>/public/css/main.css">

<script>
		   $(function() {
		     $("#datepicker, #datepicker2, #datepicker3").datepicker();
		   });
		</script>
</head>
<body>
	<div class="wrapper"
		style="padding-bottom: 2%; padding-right: 2%; padding-left: 2%;">
		<h1><?php echo $lang['PROGRAM_TITLE']; ?></h1>

		<div id="ProgrammTopButton">
			<a href="<?php echo URL_DIR.'search/search_path'?>"><img
				id="ProgrammImage"
				src="<?php echo URL_DIR. 'public/img/searchRoute.png'?>"></a>
		</div>

		<div>

			<div id="ProgrammTopDiv">
				<table style="width: 100%;">
					<tr>
						<td style="text-align: center; width: 50%;">
							<form action="<?php echo URL_DIR.'programm/programm'?>"
								method="post">
								<button id="submit1" name="type" value='1'><?php echo $lang['SINGLE_HIKES']; ?></button>
							</form>
						</td>
						<td style="text-align: center; width: 50%;">
							<form action="<?php echo URL_DIR.'programm/programm'?>"
								method="post">
								<button id="submit1" name="type" value='2'><?php echo $lang['MULTI_DAY_HIKES']; ?></button>
							</form>
						</td>
					</tr>
				</table>
			</div>


		</div>

		<div id="yourProg">
			<h2 style="float: center; padding-left: 2%; padding-right: 2%;"><?php echo $lang['YOUR_PROGRAMM']; ?></h2>

			<form action="<?php echo URL_DIR.'programm/programm'?>" method="post">
				<button id="submit1"><?php echo $lang['BTN_VIEW']; ?></button>
			</form>

		</div>

		<div>
			<table style="width: 100%;">
				<tr>
					<th style="width: 20%; text-align: left;"> <?php echo $lang['TYPE_TOUR']; ?> </th>
					<th style="width: 20%; text-align: left;"> <?php echo $lang['TITLE_TOUR']; ?> </th>
					<th style="width: 20%; text-align: left;"> <?php echo $lang['INFO']; ?> </th>
					<th style="width: 20%; text-align: left;"> <?php echo $lang['TIME']; ?></th>
					<th style="width: 20%; text-align: left;"> <?php echo $lang['DATE']; ?> </th>
				</tr>
			</table>
		</div>
		<div id="ProgrammBottomDiv">
			<table id="table">
				<tr>
					<td colspan="5">
						<form action="<?php echo URL_DIR.'programm/hiking_detail';?>"
							method="post">
					 		<?php
								
foreach ( $tourArray as $cle => $element ) 

								{
									?>

					 	<button id="ProgrammButton" name="selectedTour"
								value=<?php echo $cle;?>>
								<table style="width: 100%;">
									<tr>
										<td style="width: 20%">
	            				<?php
									
if ($tourArray [$cle]->getIdxTypeTour () == 1) {
										echo "Hiking";
									} elseif ($tourArray [$cle]->getIdxTypeTour () == 2) {
										echo "Stay";
									} else {
										echo "Proposal";
									}
									?>
              					</td>
										<td style="width: 20%">
              					<?php echo ' '.$tourArray[$cle]->getTitre(); ?>
								</td>
										<td style="width: 20%">
								<?php
									
									switch ($_SESSION ['lang']) {
										
										case 'de' :
											echo ' ' . $tourArray [$cle]->getInfromation_de ();
											break;
										
										case 'fr' :
											echo ' ' . $tourArray [$cle]->getInformation_fr ();
											break;
										
										default :
											echo ' ' . $tourArray [$cle]->getInformation_fr ();
									}
									
									?>
								</td>
										<td style="width: 20%">
								<?php echo ' '.$tourArray[$cle]->getDepartHeure()?>
								</td>
										<td style="width: 20%">
								<?php echo ' '.$tourArray[$cle]->getDateDebut()?>
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
		<div class="push"></div>
	</div>
	<div><?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php'; include_once ROOT_DIR.'languages/common.php';?>?></div>
</body>
</html>


