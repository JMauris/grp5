<?php include_once ROOT_DIR.'global/header.php';

$tourResults = $_SESSION['tour_results'];

include_once ROOT_DIR.'languages/common.php';
if(isset($_GET['lang'])){
$_SESSION['lang']=$_GET['lang'];}
else {
	$_SESSION['lang']='en';
}?>

<html>
	<head>
		<title>Search Result</title>
		<link rel="stylesheet" type="text/css" href="/<?php echo SITE_NAME; ?>/public/css/main.css">
	</head>
	<body>
		<div class= "wrapper">
			<div id= "SearchResultTopDiv">
				<h1>Search Results</h1>
			</div>

			<div id="SearchResultMiddleDiv">
				<table id="SearchResultShowTable">
					<tr>
						<td style= "overflow-y: scroll; height: 100%;">
							<div id="show"> 
							
								<form action="<?php echo URL_DIR.'search/search_detail'?>" method= "post">
					 				
					 			<?php if($tourResults == "error"){?>
					 				<h3>There are no Tours with the given search conditions. Please search again</h3>
					 			 	<?php }
					 			else
					 				{
					 					foreach( (array) $tourResults as $cle => $element)

					 					{?>

										<button  name ="selectedTour" style="width: 100%;" value = <?php echo $tourResults[$cle]->getId(); ?>>
										<p><?php echo ' '.$tourResults[$cle]->getTitre(); ?></p>
										<p>Difficulty: <?php echo ' '.$tourResults[$cle]->getDifficulte(); ?></p>
										<p><?php echo ' '.$tourResults[$cle]->getInformation_fr(); ?></p>
									
									</button>
									<?php }
					 					} ?>
								</form>
										
							</div>
						</td>
					</tr>
				</table>
			</div>

			<div id= "SearchResultBottomDiv">
				<table id="SearchResultTable">
					<tr>
						<td id="SearchResultTd">
							<a href="<?php echo URL_DIR.'search/search_path'?>"><img id="SearchResultImage" src="<?php echo URL_DIR. 'public/img/searchRoute.png'?>"></a>			 			
						</td>
					</tr>
				</table>
			</div>
			<div class="push"></div>
		</div>
		<div><?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php';?></div>
	</body>
</html>
