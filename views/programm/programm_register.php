<?php include_once ROOT_DIR.'global/header.php';
$user ;
if(isset($_SESSION['personne']))
	$user = $_SESSION['personne'];

$SelectedTour = $_SESSION['Selected_Tour'];
?>

<head>
	<meta charset="UTF-8">
	<!-- Google reCaptcha JS -->
<script src='https://www.google.com/recaptcha/api.js'></script>
<link rel="stylesheet" type="text/css" href="/<?php echo SITE_NAME; ?>/public/css/main.css">
<style>
		form {
			width:25%;
				margin:0 auto;
		}

		table{
			text-align: left;
		}
	</style>
</head>
<body>
	<div  class="wrapper" style="height: 90%">
		<h1> Register</h1>
		<h2> <?php echo ' '.$SelectedTour->getTitre(); ?></h2>
		<h3>* = field obligatory</h3>
		<form method="post" action="<?php echo URL_DIR.'programm/register_save';?>" onsubmit="alert('Saved')">
			<table style="align:center">
					<tr>
					<th><label for="name">Name</label>* : </th>
					<th><input type="text" name="firstname" value=" <?php if(isset($_SESSION["personne"]))
					 	{
							echo $user->getFirstname();
						}?>" ></th>
					</tr>
					<tr>
					<th><label for="lastname">Lastname</label>* : </th>
					<th><input type="text" name="lastname" value="<?php if(isset($_SESSION["personne"]))
					 	{
							echo $user->getLastname();}?>" ></th>
					</tr>
					 <tr>
					<th><label for="adress">Adress</label>* :  </th>
					<th><input type="text" name="adress" value="<?php if(isset($_SESSION["personne"]))
					 	{
							echo $user->getAdresse();}?>"></th>
					</tr>
						<tr>
					<th><label for="npa">NPA</label>* :  </th>
					<th><input type="text" name="npa" value="<?php if(isset($_SESSION["personne"]))
					 	{
							 echo $user->getNpa();}?>"></th>
					</tr>
						<tr>
							<th><label for="locality">Locality</label>* :  </th>
							<th><input type="text" name="localite" value="<?php if(isset($_SESSION["personne"]))
							 	{
									echo $user->getLocalite();}?>"></th>
					</tr>
						<tr>
							<th><label for="phone">Phone</label> :  </th>
							<th><input type="text" name="phone" value="<?php if(isset($_SESSION["personne"]))
							 	{
									echo $user->getPhone();}?>"></th>
					</tr>
						<tr>
							<th><label for="moblie">Mobile</label> :  </th>
							<th><input type="text" name="mobile" value="<?php if(isset($_SESSION["personne"]))
							 	{
									 echo $user->getPortable();}?>"></th>
					</tr>
						<tr>
						<th><label for="email">Email</label> :  </th>
						<th><input type="text" name="email" value="<?php if(isset($_SESSION["personne"]))
						 	{
								 echo $user->getEmail();}?>"></th>
					</tr>
				<tr>
					<th><label for="abonnement">Abonnement de transports publics</label> :  </th>
					<th>
						<?php
				$optionAbo = array('Select please', 'neither','gerneral rail pass', 'half price');
				 ?>
				    <FORM>
				    <SELECT name="abonnement" id= "abonnement">


				<?php
				for ($cpt=0; $cpt<=3; $cpt++) {
					if(isset($_SESSION["personne"])&&($cpt)==$user->getIdxAbonnement()){
						echo '<option value="'.$cpt.'" selected="selected">'.$optionAbo[$cpt] .'</option>';
					}
					else {
						echo '<option value="'.$cpt.'">'.$optionAbo[$cpt].'</option>';
					}
				}
				?>
				</SELECT>
				</FORM>

			</th></br>
				</tr>
			</table>
		</form>
		<br>
		<div class="g-recaptcha" data-sitekey="6Lc43gkUAAAAAPsuLQ6YjIL5wYo5fi51_wcDLcOl"></div>
		<input type="submit" name="action" value="Save"><br><br>
		<div class="push"></div>
	</div>
	<div class= "footer"><?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php';?></div>
</body>
</html>