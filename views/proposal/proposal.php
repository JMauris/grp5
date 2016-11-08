<?php include_once ROOT_DIR.'global/header.php'; $tourArray = $_SESSION['tour']; include_once ROOT_DIR.'languages/common.php';?>


<html>
<head>
<title>Proposal</title>
<link rel="stylesheet" type="text/css"
	href="/<?php echo SITE_NAME; ?>/public/css/main.css">
</head>
<body>
	<div class="wrapper">
		<div id="ProposalTopDiv">
			<h1><?php echo $lang['PROPOSAL_TITLE']; ?></h1>
			<h2><?php echo $lang['PROPOSAL_SUBTITLE']; ?></h2>
		</div>

		<div id="ProposalMiddleDiv">
			<table id="ProposalShowTable">
				<tr>
					<td style="overflow-y: scroll; height: 100%;">
						<div>
							<form action="<?php echo URL_DIR.'proposal/proposal_detail'?>"
								method="post">
					 				<?php
										
foreach ( $tourArray as $cle => $element ) 

										{
											?>

										<button name="selectedTour" value=<?php echo $cle?>
									style="width: 100%;">
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

		<div id="ProposalBottomDiv">
			<table id="ProposalButtonsTable">
				<tr>
					<td id="ProposalTde"><a
						href="<?php echo URL_DIR.'search/search_path'?>"><button
								id="submit1"><?php echo $lang['BTN_SEARCH']; ?></button></a>
						<button id="submit1"><?php echo $lang['BTN_NEAR']; ?></button></td>
				</tr>
			</table>
		</div>
		<div class="push"></div>
	</div>
	<div><?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php';?></div>
</body>
</html>
