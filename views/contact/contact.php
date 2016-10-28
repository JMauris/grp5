<?php include_once ROOT_DIR.'global/header.php';?>

	<html>
		<head>
		<style type="text/css">
			#contactDiv{
			margin: 200em, 20em;
			color: black;
			font-family: "Times New Roman", Times, serif;
			font-size:105%;
			padding-left: 9%;

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
				<img  style="width: 28%; padding-right: 10%; padding-bottom: 2%; height: 28%; float:right; " alt="contactinfo" src="<?php echo URL_DIR. 'public/img/contactinfo.png'?>">
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

				<p id= "contactDiv" style="padding-bottom: 2%;">    or per Mail:
				<br> info[@]valrando.ch
				</p>
				
			</div>
			
			<?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php';?>
		</body>
	</html>
	
