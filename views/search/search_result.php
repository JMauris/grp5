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
		<style type="text/css">
			
			
			.buttons{
				width: 100%;
			}
			
			
			a{
				text-decoration: none;
			}
			
			#buttonsTd
			{
				width: 100%;
				text-align: right;
				padding: 2%;
			}
			
			
			
		</style>
	</head>
	<body>
		<div class= "wrapper">
			<div id= "SearchResultTopDiv">
				<h1>Search Result</h1>
					<h2><?php echo $lang['SEARCH']; ?></h2>
			</div>

			<div id="SearchResultMiddleDiv">
				<table id="SearchResultShowDiv">
					<tr>
						<td style= "overflow-y: scroll; height: 100%;">
							<div> 
								<form id ="SearchResultForm"action="<?php echo URL_DIR.'program/program_detail'?>" method= "post">
					 				
					 			<?php 
					 			if(empty($tourResults)){?>
					 				<h3>There are no Tours with the given search conditions. Please search again</h3>
					 			 	<?php }
					 			else
					 				{
					 					foreach( (array) $tourResults as $cle => $element)

					 					{?>

										<button  name ="selectedValue" value = <?php echo $cle?> style="width: 100%;">
										<p><?php echo ' '.$tourResults[$cle]->getTitre(); ?></p>
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

			<div id = "SearchResultBottomDiv">
				<table class="buttons">
					<tr>
						<td id="buttonsTd">
							<a href="<?php echo URL_DIR.'search/search_path'?>"><img id="ImageSearch" src="<?php echo URL_DIR. 'public/img/searchRoute.png'?>"></a>
					 			
							<button id="submit1"><?php echo $lang['BTN_NEAR']; ?></button>
						</td>
					</tr>
				</table>
			</div>
			<div class="push"></div>
		</div>
	<div class= "footer"><?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php';?></div>
</body>
</html>
