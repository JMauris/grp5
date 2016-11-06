<?php include_once ROOT_DIR.'global/header.php';

 if(isset($_SESSION['MyFavoris'])){
 	 $tourArray = $_SESSION['MyFavoris'];
 }
 if(isset($_SESSION['MyFavoris'])){
 	 $noticeArray = $_SESSION['notice'];
 }
   include_once ROOT_DIR.'languages/common.php';


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
				</div>
			<div class="middle">

				<table class="show">
					<tr>
							<?php if(isset($_SESSION['MyFavoris'])) { ?>
						<td style= "overflow-y: scroll; height: 100%;">
							<div id="show">

								<form action="<?php echo URL_DIR.'mychoice/displaySelect'?>" method= "post">

									<?php
									 foreach( $tourArray as $cle => $element)	{ ?>
										 <button  name ="tourSelect" value = <?php echo $cle?> style="width: 100%;">


										 <p><?php echo ' '.$tourArray[$cle]->getTitre(); ?></p>
										 <?php if( $tourArray[$cle]->getIdxTypeTour() == 1)
											 {
												 echo "Hiking";
											 }
													elseif ($tourArray[$cle]->getIdxTypeTour() == 2)
													{
														 echo "Stay";
													}
													 elseif($tourArray[$cle]->getIdxTypeTour() == 6)
														 {
														 echo "Proposal";
														 }
											 ?>
										 <p><?php echo ' '.$tourArray[$cle]->getInformation_fr(); ?></p>

                     <?php foreach ($noticeArray as $key => $value){
                       if($noticeArray[$key]->getIdTour() == $tourArray[$cle]->getId())
                       {
                         echo "note :" . $noticeArray[$key]->getEvaluation() . "/5";
                       }
                     } ?>

									 </button>


									<?php } ?>

								</form>

							</div>
						</td>
						<?php } ?>
						<a href="<?php echo URL_DIR.'mychoice/mychoice'?>">
						<input type="button" value="<?php echo $lang['BTN_BACK']; ?>" ></input>
						</a>
					</tr>
				</table>
			</div>
		</div>

<?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php'; ?>
</body>
</html>
