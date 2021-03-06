<?php
include_once ROOT_DIR . 'global/header.php';
include_once ROOT_DIR . 'languages/common.php';
$memberArray = $_SESSION ['get_all_Membershit'];
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
	<div class="wrapper">
		<h1><?php echo $lang['MEMBERS_TITLE']; ?></h1>

		<div id="AdminDetailsMembersButtonDiv">
			<button id="submit1" style="width: 10%;" type="button" value="insert"
				onclick="toggle_i();">Insert</button>
			<button id="submit1" style="width: 10%;" type="button" value="update"
				onclick="toggle_u();">Update</button>
			<button id="submit1" style="width: 10%;" type="button" value="delete"
				onclick="toggle_d();">Delete</button>
		</div>

		<div id="content_insert">
			<h2><?php echo $lang['TITLE_NEW_MEMBER']; ?></h2>
			<form method="post"
				action="<?php echo URL_DIR.'admin/saveNewMember';?>">
				<table id="AdminDetailsMembersTable">
					<tr>
						<td><?php echo $lang['FIRSTNAME']; ?>:</td>
						<td><input type="text" name="name" value=""></td>
					</tr>
					<tr>
						<td><?php echo $lang['LASTNAME']; ?>:</td>
						<td><input type="text" name="lastname" value=""></td>
					</tr>
					<tr>
						<td><?php echo $lang['ADRESS']; ?>:</td>
						<td><input type="text" name="adress" value=""></td>
					</tr>
					<tr>
						<td><?php echo $lang['NPA']; ?>:</td>
						<td><input type="text" name="npa" value=""></td>
					</tr>
					<tr>
						<td><?php echo $lang['LOCALITY']; ?>:</td>
						<td><input type="text" name="locality" value=""></td>
					</tr>
					<tr>
						<td><?php echo $lang['PHONE']; ?>:</td>
						<td><input type="text" name="phone" value=""></td>
					</tr>
					<tr>
						<td><?php echo $lang['MOBILE']; ?>:</td>
						<td><input type="text" name="mobile" value=""></td>
					</tr>
					<tr>
						<td><?php echo $lang['MAIL']; ?>:</td>
						<td><input type="text" name="email" value=""></td>
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
			<h2><?php echo $lang['TITLE_LIST_MEMBER']; ?></h2>
			<table style="width: 100%; padding-right: 13%;">
				<thead>
					<tr>
						<th style="width: 2%; text-align: left;">ID</th>
						<th style="width: 10%; text-align: left;"> <?php echo $lang['FIRSTNAME']; ?> </th>
						<th style="width: 10%; text-align: left;"> <?php echo $lang['LASTNAME']; ?> </th>
						<th style="width: 10%; text-align: left;"> <?php echo $lang['ADRESS']; ?> </th>
						<th style="width: 2%; text-align: left;"> <?php echo $lang['NPA']; ?> </th>
						<th style="width: 5%; text-align: left;"> <?php echo $lang['LOCALITY']; ?> </th>
						<th style="width: 10%; text-align: left;"> <?php echo $lang['PHONE']; ?> </th>
						<th style="width: 10%; text-align: left;"> <?php echo $lang['MOBILE']; ?> </th>
						<th style="width: 10%; text-align: left;"> <?php echo $lang['MAIL']; ?> </th>
						<th style="width: 2%; text-align: left;"></th>
					</tr>
				</thead>
			</table>

			<div id="AdminDetailsMembersListDiv">
				<table id="AdminDetailsMembersTable">
					<tbody>
						<?php foreach($memberArray as $cle => $element) {?>
							<tr>
							<td style="width: 2%;">
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
							if ($memberArray [$cle]->getAdresse () == null) {
								echo '---';
							} else {
								echo ' ' . $memberArray [$cle]->getAdresse ();
							}
							?>
								</td>
							<td style="width: 2%;">
									<?php
							if ($memberArray [$cle]->getNpa () == null) {
								echo '---';
							} else {
								echo ' ' . $memberArray [$cle]->getNpa ();
							}
							?>
								</td>
							<td style="width: 5%;">
									<?php
							if ($memberArray [$cle]->getLocalite () == null) {
								echo '---';
							} else {
								echo ' ' . $memberArray [$cle]->getLocalite ();
							}
							?>
								</td>
							<td style="width: 10%;">
									<?php
							if ($memberArray [$cle]->getPhone () == null) {
								echo '---';
							} else {
								echo ' ' . $memberArray [$cle]->getPhone ();
							}
							?>
								</td>
							<td style="width: 10%;">
									<?php
							if ($memberArray [$cle]->getPortable () == null) {
								echo '---';
							} else {
								echo ' ' . $memberArray [$cle]->getPortable ();
							}
							?>
								</td>
							<td style="width: 10%;">
									<?php
							if ($memberArray [$cle]->getEmail () == null) {
								echo '---';
							} else {
								echo ' ' . $memberArray [$cle]->getEmail ();
							}
							?>
								</td>
							<td style="width: 2%;">
								<form action="<?php echo URL_DIR.'admin/update_member';?>"
									method="post">
									<button name="selectedIDMember" value=<?php echo $cle;?>
										type="submit"><?php echo $lang['BTN_EDIT']; ?></button>
								</form>
							</td>
						</tr>	
						<?php } ?>
						
					
					
					
					
					
					
					
					
					<tbody>
				
				</table>
			</div>
			<a href="<?php echo URL_DIR.'admin/admin'?>">
				<button id="submit1" style="width: 15%;" type="button"><?php echo $lang['BTN_BACK']; ?></button>
			</a>
		</div>
		<div id="content_delete">
			<h2><?php echo $lang['TITLE_LIST_MEMBER']; ?></h2>
			<table style="width: 100%; padding-right: 13%;">
				<thead>
					<tr>
						<th style="width: 2%; text-align: left;">ID</th>
						<th style="width: 10%; text-align: left;"> <?php echo $lang['FIRSTNAME']; ?> </th>
						<th style="width: 10%; text-align: left;"> <?php echo $lang['LASTNAME']; ?> </th>
						<th style="width: 10%; text-align: left;"> <?php echo $lang['ADRESS']; ?> </th>
						<th style="width: 2%; text-align: left;"> <?php echo $lang['NPA']; ?> </th>
						<th style="width: 5%; text-align: left;"> <?php echo $lang['LOCALITY']; ?> </th>
						<th style="width: 10%; text-align: left;"> <?php echo $lang['PHONE']; ?> </th>
						<th style="width: 10%; text-align: left;"> <?php echo $lang['MOBILE']; ?> </th>
						<th style="width: 10%; text-align: left;"> <?php echo $lang['MAIL']; ?> </th>
						<th style="width: 2%; text-align: left;"></th>
					</tr>
				</thead>
			</table>
			<div id="AdminDetailsMembersListDiv">
				<table id="AdminDetailsMembersTable">
					<tbody>
						<?php foreach($memberArray as $cle => $element) {?>
							<tr>
							<td style="width: 2%;">
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
							if ($memberArray [$cle]->getAdresse () == null) {
								echo '---';
							} else {
								echo ' ' . $memberArray [$cle]->getAdresse ();
							}
							?>
								</td>
							<td style="width: 2%;">
									<?php
							if ($memberArray [$cle]->getNpa () == null) {
								echo '---';
							} else {
								echo ' ' . $memberArray [$cle]->getNpa ();
							}
							?>
								</td>
							<td style="width: 5%;">
									<?php
							if ($memberArray [$cle]->getLocalite () == null) {
								echo '---';
							} else {
								echo ' ' . $memberArray [$cle]->getLocalite ();
							}
							?>
								</td>
							<td style="width: 10%;">
									<?php
							if ($memberArray [$cle]->getPhone () == null) {
								echo '---';
							} else {
								echo ' ' . $memberArray [$cle]->getPhone ();
							}
							?>
								</td>
							<td style="width: 10%;">
									<?php
							if ($memberArray [$cle]->getPortable () == null) {
								echo '---';
							} else {
								echo ' ' . $memberArray [$cle]->getPortable ();
							}
							?>
								</td>
							<td style="width: 10%;">
									<?php
							if ($memberArray [$cle]->getEmail () == null) {
								echo '---';
							} else {
								echo ' ' . $memberArray [$cle]->getEmail ();
							}
							?>
								</td>
							<td style="width: 2%;">
								<form action="<?php echo URL_DIR.'admin/deleteMember';?>"
									method="post">
									<button name="selectedIDMember"
										value=<?php echo $memberArray[$cle]->getId();?> type="submit"><?php echo $lang['BTN_DELETE']; ?></button>
								</form>
							</td>
						</tr>	
						<?php } ?>
						
					
					
					
					
					
					
					
					
					<tbody>
				
				</table>
			</div>
			<a href="<?php echo URL_DIR.'admin/admin'?>">
				<button id="submit1" style="width: 15%;" type="button"><?php echo $lang['BTN_BACK']; ?></button>
			</a>
		</div>
		<br> <br> <br>
		<div class="push"></div>
	</div>
	<div><?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php';?></div>
</body>
</html>
