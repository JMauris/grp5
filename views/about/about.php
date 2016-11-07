<?php include_once ROOT_DIR.'global/header.php'; include_once ROOT_DIR.'languages/common.php';?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>SAC Info</title>
		<link rel="stylesheet" type="text/css" href="/<?php echo SITE_NAME; ?>/public/css/main.css">
	</head>
	<body>
		<div class="wrapper" style= "padding-bottom: 2%; padding-right: 2%; padding-left: 2%;">
			<h1><?php echo $lang['ABOUT_TITLE']; ?></h1>
			<br>
			<table style="padding-left: 2%; padding-right: 2%; border-spacing: 10px;">
				<tr>
				    <td><b><?php echo $lang['NAME']; ?></b></td>
				    <td><?php echo $lang['DES_NAME']; ?></td>
				</tr>
				<tr>
				    <td><b><?php echo $lang['ESTABLISHMENT']; ?></b></td>
				    <td>1943</td>
				</tr>
				<tr>
				    <td><b><?php echo $lang['HEADQUARTERS']; ?></b></td>
				    <td>CH-1951 Sitten</td>
				</tr>
				<tr>
				    <td><b><?php echo $lang['MAINORGANISATION']; ?></b></td>
				    <td><a href="http://www.randonner.ch">Swiss hickingways</a></td>
				</tr>
				<tr>
				    <td><b><?php echo $lang['CERTIFICATION']; ?></b></td>
				    <td><a href="http://www.sqs.ch/fr/Offre-de-Prestation/Produits/Normes-Principales/ISO-14001-2004/H.144">ISO 9001 - ISO 14001 - Valais Excellence</a></td>
				</tr>
				<tr>
				    <td><b><?php echo $lang['FIELD_OF_ACTIVITY']; ?></b></td>
				    <td>
				    	<?php echo $lang['DES_FIELD_OF_ACTIVITY']; ?>
						<a href="programm.php">programm</a>
					</td>
				</tr>
				<tr>
				    <td><b><?php echo $lang['AMOUNT_OF_MEMBERS']; ?></b></td>
				    <td>2000</td>
				</tr>
				<tr>
				    <td><b><?php echo $lang['MEMBERSHIP_FEE']; ?></b></td>
				    <td>
					    <ul>
					   	    <li><?php echo $lang['DES_MEMBERSHIP_FEE_1']; ?></li>
						    <li><?php echo $lang['DES_MEMBERSHIP_FEE_2']; ?></li>
						    <li><a href="http://www.valrando.ch/nouveaumembre.php"><?php echo $lang['DES_MEMBERSHIP_FEE_3']; ?></a></li>
					    </ul>
				    </td>
				</tr>
				<tr>
					<td><b><?php echo $lang['ADVANTAGES']; ?></b></td>
					<td>
						<ul>
							<li><?php echo $lang['DES_ADVANTAGES_1']; ?></li>
							<li><?php echo $lang['DES_ADVANTAGES_2']; ?></li>
							<li><?php echo $lang['DES_ADVANTAGES_3']; ?></li>
							<li><?php echo $lang['DES_ADVANTAGES_4']; ?></li>
							<li><?php echo $lang['DES_ADVANTAGES_5']; ?></li>
						</ul>
					</td>
				<tr>
					<td><b><?php echo $lang['STATUTES']; ?></b></td>
					<td><a href="http://www.casmontana.ch/Default.aspx?num=37"><?php echo $lang['DES_STATUTES']; ?></a></td>
				</tr>
			</table>
		</div>
		<div><?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php'; include_once ROOT_DIR.'languages/common.php';?></div>
	</body>
</html>

