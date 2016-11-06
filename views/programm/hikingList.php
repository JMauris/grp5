<?php include_once ROOT_DIR.'global/header.php';
include_once ROOT_DIR.'global/header.php';
$tour = $_SESSION['tour'];?>
<html>
	<head>
		<title>Hikings</title>
		<link rel="stylesheet" type="text/css" href="/<?php echo SITE_NAME; ?>/public/css/main.css">
		<style type="text/css">
			#show{
				overflow-y : scroll;
				background-color : transparent;
				height: 30%;
				border: 1px solid black;
				padding-bottom: 2%;
			}

			button {
				width: 100%;
				text-align: left;
			}

			h2 {
				text-align: center;
			}

			p {
			    margin: 0;
			    padding: 0;
			}

			#search {
				display:inline-block;
				align: left;
				width: 20%;
			}

			#searchButton, #near {

				float: right;
				width: 15%;
				display: inline;
				height: 50px;
				margin-top: 5%;
				margin-right: 3%;
				text-align: center;
				font-family: "Times New Roman", Times, serif;
				font-style: normal;
				font-size: 1.30em;
			}

		</style>
	</head>
	<body>
		<div style="height: 100%">
			<h1>Available Hikings</h1>
			<h2>These are the available Hikings for the chosen day:</h2>
			<div id="show">
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
			<button id="searchButton"><img id="search" src="http://localhost/cas_montana/public/img/search.png" onclick="window.location = 'search_path.php';">Search route</button>
			<button id="near">Near us</button>
		</div>
	</body>
</html>

<?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php'; ?>
