<?php include_once ROOT_DIR.'global/header.php';
$user = $_SESSION['personne'];


?>

<head>
	<meta charset="UTF-8">
	<title>SAC Info</title>
<link rel="stylesheet" type="text/css" href="/<?php echo SITE_NAME; ?>/public/css/main.css">
<style>
		form {
			width:25%;
				margin:0 auto;
		}

		table{
			text-align: left;
		}

		h3, div {
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="wrapper" style="padding-bottom: 2%;">
		<h1> My Profil</h1>
		<h3>* = field obligatory</h3>
		<form method="post" action="<?php echo URL_DIR.'profil/profil';?>">
			<table style="align:center">
					<tr>
					<th><label for="name">Name</label>* : </th>
					<th><input type="text" name="firstname" value=" <?php echo $user->getLastname()?>"  disabled="disabled"></th>
					</tr>
					<tr>
					<th><label for="lastname">Lastname</label>* : </th>
					<th><input type="text" name="lastname" value="<?php echo $user->getFirstname()?>" disabled="disabled"></th>
					</tr>
					 <tr>
					<th><label for="adress">Adress</label>* :  </th>
					<th><input type="text" name="adress" value="<?php echo $user->getAdresse()?>"></th>
					</tr>
						<tr>
					<th><label for="npa">NPA</label>* :  </th>
					<th><input type="text" name="npa" value="<?php echo $user->getNpa()?>"></th>
					</tr>
						<tr>
							<th><label for="locality">Locality</label>* :  </th>
							<th><input type="text" name="localite" value="<?php echo $user->getLocalite()?>"></th>
					</tr>
						<tr>
							<th><label for="phone">Phone</label> :  </th>
							<th><input type="text" name="phone" value="<?php echo $user->getPhone()?>"></th>
					</tr>
						<tr>
							<th><label for="moblie">Mobile</label> :  </th>
							<th><input type="text" name="mobile" value="<?php echo $user->getPortable()?>"></th>
					</tr>
						<tr>
						<th><label for="email">Email</label> :  </th>
						<th><input type="text" name="email" value="<?php echo $user->getEmail()?>"></th>
					</tr>
				<tr>
					<th><label for="abonnement">Abonnement de transports publics</label> :  </th>
					<th>
						<?php $optionAbo = array('Select please', 'neither','gerneral rail pass', 'half price');?>
							<form>
								<select name="abonnement" >
								<?php
								for ($cpt=0; $cpt<=3; $cpt++) {
									if(($cpt+1)==$user->getIdxAbonnement())	{
										echo '<option value="'.$cpt.'" selected="selected">'.$optionAbo[$cpt].'</option>';
									} else {
										echo '<option value="'.$cpt.'">'.$optionAbo[$cpt].'</option>';
									}
								}
								?>
							</select>
						</form>

						<select name="age">
							<?php
								$valeurChoisie = 20;
								for ($i=7; $i<=77; $i++) {
									if ($i == $valeurChoisie) {
										echo '<option value="'.$i.'" selected="selected">'.$i.'</option>';
									} else {
										echo '<option value="'.$i.'">'.$i.'</option>';
									}
								}
							?>
						</select>
					</th>
				</tr>
			</table>
		</form>
		<br>
		<input type="submit" name="action" value="Save"><br><br>
		<a href="">Change the password</a>
		
			</div>
			
			<?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php';?>
		</body>
	</html>