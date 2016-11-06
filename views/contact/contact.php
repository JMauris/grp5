<?php include_once ROOT_DIR.'global/header.php';?>

	<html>
		<head>
		<style type="text/css">
			#contactDiv{
			margin: 200em, 20em;
			color: black;
			font-family: "Times New Roman", Times, serif;
			font-size:105%;
			padding-left: 10%;

			}
			
		</style>
			<meta charset="UTF-8">
			<title>Contact</title>
		<link rel="stylesheet" type="text/css" href="/<?php echo SITE_NAME; ?>/public/css/main.css">
		</head>
		<body>
			<div class="wrapper">
				<h1>Contact information</h1>
				<br>
				<img  style="width: 400px; padding-right: 10%; height: 400px; float:right; " alt="contactinfo" src="http://localhost/cas_montana/contactinfo.png">
				<p id= "contactDiv">		VALRANDO
				<br>	Association Valaisanne de la Randonnée
				<br>	Pré-Fleuri 6
				<br>	Case postale 23
				<br>	CH - 1951 Sion
				</p>

				<p id= "contactDiv">	Openinghours
				<br>Lundi-Vendredi de 8h00 à 12h00 et de 14h00 à 17h00
				</p>

				<p id= "contactDiv"> Tel. +41 (0)27 / 327 35 80
				<br> Fax +41 (0)27 / 327 35 81
				</p>

				<p id= "contactDiv">	or per Mail:
				<br>info[@]valrando.ch
				</p>
				
				<div class="push"></div>
			</div>
			
			<?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php';?>
		</body>
	</html>
	
