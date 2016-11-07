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
			.top{
				text-align: center;
			}
			.middle{
				width: 96%;
				height: 30%;
				padding-left: 2%;
				paddin g-right: 2%;
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
			#search {
				display:inline-block;
				align: left;
				width: 20%;
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
			#search1{
				float: right;
				width: 20%;
			}
			#search1:hover {
			    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
			    border: 2px solid #555555;
			}
		</style>
	</head>
	<body>
		<div class= "wrapper">
			<div class= "top">
				<h1>Search Results</h1>
			</div>

			<div class="middle">
				<table class="show">
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

										<button  name ="selectedTour" value = <?php echo $cle?> style="width: 100%;">
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

			<div class = "bottom">
				<table class="buttons">
					<tr>
						<td id="buttonsTd">
							<a href="<?php echo URL_DIR.'search/search_path'?>"><img id="search1" src="<?php echo URL_DIR. 'public/img/searchRoute.png'?>"></a>			 			
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div><?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php';?></div>
	</body>
</html>
