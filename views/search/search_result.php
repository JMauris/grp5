<?php include_once ROOT_DIR.'global/header.php';
$tourResults = $_SESSION['tour'];

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
		</style>
	</head>
	<body>
		<div class= "wrapper">
			<div class= "top">
				<h1>Search Result</h1>
					<h2><?php echo $lang['PROPOSAL_SUBTITLE']; ?></h2>
			</div>

			<div class="middle">
				<table class="show">
					<tr>
						<td style= "overflow-y: scroll; height: 100%;">
							<div id="show"> 
								<form action="<?php echo URL_DIR.'program/program_detail'?>" method= "post">
					 				
					 				<?php 
					 				    if((is_array($tourResults) || is_object($tourResults))){?>
					 					<a href="<?php echo URL_DIR.'search/search_path'?>"><img id="search1" src="<?php echo URL_DIR. 'public/img/searchRoute.png'?>"></a>
					 					<?php }
					 					else
					 					{
					 					foreach( $tourResults as $cle => $element)

					 					{?>

										<button  name ="selectedValue" value = <?php echo $cle?> style="width: 100%;">
										<p><?php echo ' '.$tourResults[$cle]->getTitre(); ?></p>
										<p><?php echo ' '.$tourResults[$cle]->getInformation_fr(); ?></p>
									
									</button>
									<?php }} ?>
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
							<button id="submit1" href="<?php echo URL_DIR.'search/search_path.php'?>"><?php echo $lang['BTN_SEARCH']; ?></button>
							<button id="submit1"><?php echo $lang['BTN_NEAR']; ?></button>
						</td>
					</tr>
				</table>
			</div>

		</div>

		<?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php'; ?>
</body>
</html>
