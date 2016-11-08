<?php

include_once ROOT_DIR . 'global/header.php';
include_once ROOT_DIR . 'languages/common.php';
// $tourArray=Tour::connectToAll();
$tourArray = $_SESSION ['get_all_shit'];
if (isset ( $_GET ['lang'] )) {
	$_SESSION ['lang'] = $_GET ['lang'];
} else {
	$_SESSION ['lang'] = 'en';
}
?>

<html>
<head>
<meta charset="UTF-8">
<title>Admin page</title>
<link rel="stylesheet" type="text/css"
	href="/<?php echo SITE_NAME; ?>/public/css/main.css">
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
	<div class="wrapper" style="text-align: center;">
		<h1><?php echo $lang['TOUR_TITLE']; ?></h1>
		<div>
			<button id="submit1" style="width: 10%;" type="button" value="insert"
				onclick="toggle_i();">Insert</button>
			<button id="submit1" style="width: 10%;" type="button" value="List"
				onclick="toggle_u();">List</button>
			<button id="submit1" style="width: 10%;" type="button" value="delete"
				onclick="toggle_d();">Delete</button>
		</div>

		<div id="content_insert">
			<h2><?php echo $lang['TITLE_NEW_TOUR']; ?></h2>
			<form method="post" action="<?php echo URL_DIR.'admin/saveNew';?>">
				<table id="AdminDetailsToursTable">
					<tr>
						<td><?php echo $lang['TYPE_TOUR']; ?>:</td>
						<td><select id="type_input_new">
								<option value="1">single-day hike</option>
								<option value="2">multi-day hike</option>
								<option value="3">proposal</option>
						</select></td>
					</tr>
					<tr>
						<td><?php echo $lang['TITLE_TOUR']; ?>: </td>
						<td><input type="text" name="title_input_new"></td>
					</tr>
					<tr>
						<td><?php echo $lang['INFO']; ?>: </td>
						<td><input type="text" name="info_input_new"></td>
					</tr>
					<tr>
						<td><?php echo $lang['DIFFICULTY']; ?>: </td>
						<td><input type="number" name="difficulty_input_new" max="10"></td>
					</tr>
					<tr>
						<td><?php echo $lang['GUIDE']; ?>: </td>
						<td><input type="text" name="guide_input_new"></td>
					</tr>
					<tr>
						<td><?php echo $lang['TIME']; ?>: </td>
						<td><input type="time" name="timeF_input_new"> <input type="time"
							name="timeT_input_new"></td>
					</tr>
					<tr>
						<td><?php echo $lang['DATE']; ?>: </td>
						<td><input id="from" type="date" name="date_input_from" value="">
							<input id="to" type="date" name="date_input_to" value=""></td>
					</tr>
				</table>
				<br>
				<button id="submit1" style="width: 15%;" type="submit" name="action"><?php echo $lang['BTN_SAVE']; ?></button>
			</form>
			<a href="<?php echo URL_DIR.'admin/admin'?>">
				<button id="submit1" style="width: 15%;" type="button"><?php echo $lang['BTN_BACK']; ?></button>
			</a>
		</div>

		<div id="content_update">
			<h2><?php echo $lang['TITLE_LIST_TOUR']; ?></h2>

			<table id="AdminDetailsToursTable">
				<tr>
					<th style="width: 20%; text-align: left;">ID</th>
					<th style="width: 20%; text-align: left;"> <?php echo $lang['TYPE_TOUR']; ?> </th>
					<th style="width: 20%; text-align: left;"> <?php echo $lang['TITLE_TOUR']; ?> </th>
					<th style="width: 20%; text-align: left;"> <?php echo $lang['INFO']; ?> </th>
					<th style="width: 20%; text-align: left;"></th>
				</tr>
			</table>

			<div id="AdminDetailsToursListDiv">
					<?php foreach( $tourArray as $cle => $element) {?>
								<table id="AdminDetailsToursTable">
					<tr>
						<td style="width: 20%">
											<?php echo ' '.$tourArray[$cle]->getId(); ?>
										</td>
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
							<form action="<?php echo URL_DIR.'admin/update_tour';?>"
								method="post">
								<button name="selectedTour" value=<?php echo $cle;?>
									type="submit"><?php echo $lang['BTN_EDIT']; ?></button>
							</form>
							<form action="<?php echo URL_DIR.'admin/show_registered';?>"
								method="post">
								<button name="selectedTour" value=<?php echo $cle;?>
									type="submit"><?php echo $lang['BTN_SHOW_MEMBERS']; ?></button>
							</form>
						</td>
					</tr>
				</table>	
					<?php } ?>
				</div>
			<a href="<?php echo URL_DIR.'admin/admin'?>">
				<button id="submit1" style="width: 15%;" type="button"><?php echo $lang['BTN_BACK']; ?></button>
			</a>
		</div>

		<div id="content_delete">
			<h2><?php echo $lang['TITLE_LIST_TOUR']; ?></h2>

			<table id="AdminDetailsToursTable">
				<tr>
					<th style="width: 20%; text-align: left;">ID</th>
					<th style="width: 20%; text-align: left;"> <?php echo $lang['TYPE_TOUR']; ?> </th>
					<th style="width: 20%; text-align: left;"> <?php echo $lang['TITLE_TOUR']; ?> </th>
					<th style="width: 20%; text-align: left;"> <?php echo $lang['INFO']; ?> </th>
					<th style="width: 20%; text-align: left;"></th>
				</tr>
			</table>

			<div id="AdminDetailsToursListDiv">
					<?php foreach( $tourArray as $cle => $element) {?>
								<table id="AdminDetailsToursTable">
					<tr>
						<td style="width: 20%">
											<?php echo ' '.$tourArray[$cle]->getId(); ?>
										</td>
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
							<form action="<?php echo URL_DIR.'admin/deleteTour';?>"
								method="post">
								<button name="selectedTour"
									value=<?php echo $tourArray[$cle]->getId();?> type="submit"><?php echo $lang['BTN_DELETE']; ?></button>
							</form>
						</td>
					</tr>
				</table>	
					<?php } ?>
				</div>
			<a href="<?php echo URL_DIR.'admin/admin'?>">
				<button id="submit1" style="width: 15%;" type="button"><?php echo $lang['BTN_BACK']; ?></button>
			</a>
		</div>
		<br>
		<br>
		<br>
		<div class="push"></div>
	</div>
	<div><?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php';?></div>
</body>
</html>