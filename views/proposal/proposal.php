<?php include_once ROOT_DIR.'global/header.php'; $tourArray = $_SESSION['tour']; include_once ROOT_DIR.'languages/common.php';?>


<html>
	<head>
		<title>Proposal</title>
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
			#near {
				float: right;
				width: 20%;
				display: inline;
				height: 30%;
				text-align: center;
				font-family: "Times New Roman", Times, serif;
				font-style: normal;
				font-size: 100%;
				font-weight: bold;
				background-color: #555555;
			    color: white;
			    align: center;
			    padding-top: 1.5%;
			    padding-bottom: 1.5%;
			    margin-right: 2%;
			 }
			 #near:hover {
			    background-color: white;
			    color: black;
			    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
			    border: 2px solid #555555;
			}
			a{
				text-decoration: none;
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
				<h1><?php echo $lang['PROPOSAL_TITLE']; ?></h1>
					<h2><?php echo $lang['PROPOSAL_SUBTITLE']; ?></h2>
			</div>

			<div class="middle">
				<table class="show">
					<tr>
						<td style= "overflow-y: scroll; height: 100%;">
							<div id="show"> 
								<form action="<?php echo URL_DIR.'proposal/proposal_detail'?>" method= "post">
					 				<?php foreach( $tourArray as $cle => $element)

					 					{?>

										<button  name ="selectedTour" value = <?php echo $cle?> style="width: 100%;">
										<p><?php echo ' '.$tourArray[$cle]->getTitre(); ?></p>
										<p><?php echo ' '.$tourArray[$cle]->getInformation_fr(); ?></p>
									
									</button>
									<?php } ?>
								</form>
										
							</div>
						</td>
					</tr>
				</table>
			</div>

			<div class = "bottom">
				<table class="buttons">
					<tr>
						<td>
							<div style="padding-top: 2%;">
								<a href="<?php echo URL_DIR.'search/search_path.php'?>"><img id="search1" src="<?php echo URL_DIR. 'public/img/searchRoute.png'?>"></a>
							<button id="near"><?php echo $lang['BTN_NEAR']; ?></button>
							</div>
						</td>
					</tr>
				</table>
			</div>

		</div>

		<?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php'; ?>
</body>
</html>
