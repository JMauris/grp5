<?php

include_once ROOT_DIR.'global/header.php';
$tourArray = $_SESSION['tour'];
?>

<html>
	<head>
		<title>Proposal</title>
		<link rel="stylesheet" type="text/css" href="/<?php echo SITE_NAME; ?>/public/css/main.css">
		<style type="text/css">
			#show{
				background-color : transparent;
				height: 30%;
				width:100%;
				padding: 2%;
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
			
			#searchButton {
				float: right;
				width: 20%;
				display: inline;
				height: 50px;
				margin-top: 5%;
				margin-right: 3%;
				text-align: center;
				font-family: "Times New Roman", Times, serif;
				font-style: normal;
				font-size: 1.30em;
			}
			#near{
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
			#buttonDiv{
				background-color : transparent;
				height: 30%;
			}
			a{
				text-decoration: none;
			}
			
		</style>
	</head>
	<body>
		<div class="wrapper">
			<h1>Proposal</h1>
			
			
			<table id="show">
			<tr>
			<td  style="text-align: center;">
			<h2>These are our Proposals for you:</h2>

			</td>
			</tr>
			<tr>
			<td style= "height: 30%; overflow-y: scroll;">
			<div id="show"> <a href="<?php echo URL_DIR.'proposal/proposal_detail'?>">
			<?php foreach( $tourArray as $cle => $element)

					 {?>

					<button id = <?php echo ' '.$tourArray[$cle]->getId(); ?>>
					<p><?php echo ' '.$tourArray[$cle]->getTitre(); ?></p>
					<p><?php echo ' '.$tourArray[$cle]->getInformation_fr(); ?></p>
				<?php } ?>
					</button>
				</a>
			</td>
			</tr>
			<tr>
			<td>
			<a><button id="searchButton"><img id="search" src="http://localhost/cas_montana/public/img/search.png">Search route</button></a>
			<a><button id="near">Near us</button></a>
			</td>
			</tr>
			</table>
			
		
			
		</div>
			
			<?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php';?>
		</body>
	</html>