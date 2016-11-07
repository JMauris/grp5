<?php include_once ROOT_DIR.'global/header.php';

 if(isset($_SESSION['Mynotice'])){
 	 $tourArray = $_SESSION['Mynotice'];
 }
 if(isset($_SESSION['Mynotice'])){
 	 $noticeArray = $_SESSION['notice'];
 }
   include_once ROOT_DIR.'languages/common.php';


	 ?>


<html>
	<head>
		<title>Proposal</title>
		<link rel="stylesheet" type="text/css" href="/<?php echo SITE_NAME; ?>/public/css/main.css">
	</head>
  <body>
		<div class= "wrapper">
			<div class= "MynoticeTopDiv">
				</div>
			<div id="MynoticeMiddleDiv">

				<table id="MynoticeShowTable">
					<tr>
							<?php if(isset($_SESSION['MyFavoris'])) { ?>
						<td style= "overflow-y: scroll; height: 100%;">
							<div>

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
						<button id="submit1" style="width: 15%;" type="button"><?php echo $lang['BTN_BACK']; ?></button>
						</a>
					</tr>
				</table>
			</div>
		</div>
		<div><?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php';?></div>
	</body>
</html>
