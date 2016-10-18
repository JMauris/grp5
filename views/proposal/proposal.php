<?php

	include_once ROOT_DIR.'global/header.php';
	$tourArray = $_SESSION['tour'];
?>

<html>
	<head>
		<title>Proposal</title>
		<link rel="stylesheet" type="text/css" href="http://localhost/cas_montana/public/css/main.css">
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
			a{
				text-decoration: none;
			}

		</style>
	</head>
	<body>
		<div style="height: 600px;">
			<h1>Proposal</h1>
			<h2>These are our Proposals for you:</h2>
			<div id="show">
			<?php foreach( $tourArray as $cle => $element)

					 {?>
					<a href="<?php echo URL_DIR.'proposal/proposal_detail'?>">
					<button id = <?php echo ' '.$tourArray[$cle]->getId(); ?>>
					<p><?php echo ' '.$tourArray[$cle]->getTitre(); ?></p>
					<p><?php echo ' '.$tourArray[$cle]->getInformation_fr(); ?></p>
				S
				<?php } ?>
					</button>
				</a>
			</div>

			<button id="searchButton"><img id="search" src="http://localhost/cas_montana/public/img/search.png" onclick="window.location = 'search_path.php';">Search route</button>
			<button id="near">Near us</button>
		</div>
</body>
</html>
<?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php'; ?>
