<?php

	include_once ROOT_DIR.'global/header.php';
	$tourArray = $_SESSION['tour'];
?>

<html>
	<head>
		<title>Proposal</title>
		<link rel="stylesheet" type="text/css" href="/<?php echo SITE_NAME; ?>/public/css/main.css">
		<style type="text/css">
			.top{
				text-align: center;
			}
			.middle{
				width: 100%;
				height: 30%;
			}
			.show{
				width: 100%;
				height: 100%;
			}
			.bottom{
				height: 100%;
				width: 100%;
			}
			.buttons{
				width: 100%;
			}
			#searchButton {
				float: right;
				width: 25%;
				display: inline;
				height: 30%;
				margin-top: 4%;
				margin-right: 3%;
				text-align: center;
				font-family: "Times New Roman", Times, serif;
				font-style: normal;
				font-size: 100%;
				font-weight: bold;								
			}
			#search {
				display:inline-block;
				align: left;
				width: 20%;
			}

			#searchButton, #near {
				float: right;
				width: 25%;
				display: inline;
				height: 30%;
				margin-top: 4%;
				margin-right: 3%;
				text-align: center;
				font-family: "Times New Roman", Times, serif;
				font-style: normal;
				font-size: 100%;
				font-weight: bold;
			}
			a{
				text-decoration: none;
			}
			#search1{
				float: right;
				width: 20%;
				padding: 2%;
			}
			

		</style>
	</head>
	<body>
		<div class= "wrapper">
			<div class= "top">
			<h1>Proposal</h1>
			<h2>These are our Proposals for you:</h2>
			</div>
			
			<div class="middle">
				<table class="show">
					<tr>
						<td style= "overflow-y: scroll; height: 100%;">
							<div id="show"> 
								<a href="<?php echo URL_DIR.'proposal/proposal_detail'?>">
									<?php foreach( $tourArray as $cle => $element)

					 				{?>

										<button id = <?php echo ' '.$tourArray[$cle]->getId(); ?> style="width: 100%;">
										<p><?php echo ' '.$tourArray[$cle]->getTitre(); ?></p>
										<p><?php echo ' '.$tourArray[$cle]->getInformation_fr(); ?></p>
									<?php } ?>
										</button>
								</a>
							</div>
						</td>
					</tr>
				</table>
			</div>
			
			<div class = "bottom">
				<table class="buttons">
					<tr>
						<td>
							<div id="topButton">
								<a href="<?php echo URL_DIR.'search/search_path.php'?>"><img id="search1" src="<?php echo URL_DIR. 'public/img/searchRoute.png'?>"></a>
							</div>
						<button id="near">Near us</button>
						</td>
					</tr>
				</table>
			</div>
			
		</div>
		
		<?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php'; ?>
</body>
</html>

