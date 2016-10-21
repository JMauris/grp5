<?php include_once ROOT_DIR.'global/header.php';?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>SAC Info</title>
		<link rel="stylesheet" type="text/css" href="/<?php echo SITE_NAME; ?>/public/css/main.css">
	</head>
	<body>
		<div class="wrapper">
			<h1>Information about SAC</h1>
			<div style = "height: 100%; padding-bottom: 2%;">
			<table style="border: 1px; padding-left: 2%; padding-right: 2%; padding-bottom: 2%;">
				<tr>
				    <td><b>Name:</b></td>
				    <td>SAC is the abbreviation for Schweizer Alpen Club</td>
				</tr>
				<tr>
				    <td><b>Establishment:</b></td>
				    <td>1943</td>
				</tr>
				<tr>
				    <td><b>Headquarters:</b></td>
				    <td>CH-1951 Sitten</td>
				</tr>
				<tr>
				    <td><b>Mainorganisation:</b></td>
				    <td><a href="http://www.randonner.ch">Swiss hickingways</a></td>
				</tr>
				<tr>
				    <td><b>Certification:</b></td>
				    <td><a href="http://www.sqs.ch/fr/Offre-de-Prestation/Produits/Normes-Principales/ISO-14001-2004/H.144">ISO 9001 - ISO 14001 - Valais Excellence</a></td>
				</tr>
				<tr>
				    <td><b>Field of activity:</b></td>
				    <td>Organisation of more than 50 leaded hikes,
						Hiking-Weekends und -weeks, Winterhikes und Snowshoeing
						<a href="programm.php">programm</a></td>
				</tr>
				<tr>
				    <td><b>Amount of Members:</b></td>
				    <td>2000</td>
				</tr>
				<tr>
				    <td><b>Membership fee:</b></td>
				    <td>
				    <li>single person and family CHF 50.-</li>
				    <li>Municipalities and tourism organizations CHF 100.-</li>
				    </td>
				    <td><a href="http://www.valrando.ch/nouveaumembre.php">Membership registration form</a></td>
				</tr>
				<tr>
					<td><b>Advantages of a membership:</b></td>
					<td>
					<li>Participation in the walks at no extra charge (CHF 5.-)</li>
					<li>Price reduction on all maps of the Swiss Federal Office of Topography, as are numerous hiking maps of our canton</li>
					<li>Entitled to participate in the multi-day hikes and hiking weeks</li>
					<li>1 Hiking index with annually more than 50 new hiking tips</li>
					<li>6 times per year the magazine â€šWanderland Schweizâ€™</li>
					</td>
				<tr>
					<td><b>Statutes:</b></td>
					<td><a href="http://www.casmontana.ch/Default.aspx?num=37">Download statutes as pdf</a></td>
				</tr>
			</table>
			</div>

			</div>

			
		</body>
	</html>
		<?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php';?>
