<?php include_once ROOT_DIR.'global/header.php';
include_once ROOT_DIR.'global/header.php';
$tour = $_SESSION['tour'];?>
<html>
	<head>
		<title>Hikings</title>
		<link rel="stylesheet" type="text/css" href="/<?php echo SITE_NAME; ?>/public/css/main.css">
	</head>
	<body>
		<div style="height: 100%">
			<h1>Available Hikings</h1>
			<h2>These are the available Hikings for the chosen day:</h2>
			<div id="HikingListShowDiv">
			<a href="<?php echo URL_DIR.'programm/hiking_detail'?>">
				<button id="0">
					<p><?php// echo ' '.$tour->getTitre(); ?></p>
					<p><?php //echo ' '.$tour->getInformation_fr(); ?></p>
					</button>
				</a>
				<a href="<?php echo URL_DIR.'programm/hiking_detail'?>">
					<button id="1">
						<p>Name</p>
						<p>Description..........................</p>
					</button>
				</a>
			</div>
			<button id="HikingListButton"><img id="HikingListImage" src="http://localhost/cas_montana/public/img/search.png" onclick="window.location = 'search_path.php';">Search route</button>
			<button id="HikingListButton">Near us</button>
			<div class="push"></div>
		</div>
		<div><?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php';?></div>
	</body>
</html>