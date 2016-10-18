<?php include_once ROOT_DIR.'global/header.php';?>

<html>
	<head>
		<title>Proposal Detail</title>
		<link rel="stylesheet" type="text/css" href="/<?php echo SITE_NAME; ?>/public/css/main.css">
		<style type="text/css">
			div {
				text-align: center;
			}

			table {
				margin: 0 auto;
				text-align: left;
			}
		</style>
	</head>
	<body>
		<div class="wrapper" style= "padding-bottom: 2%;">
			<h1>Proposal Detail</h1>
			<h3>"Name"</h3>
			<table>
				<tr>
					<td>Place of departure: </td>
					<td>....</td>
				</tr>
				<tr>
					<td>Destination:</td>
					<td>....</td>
				</tr>
				<tr>
					<td>Schwierigkeit:</td>
					<td>***********</td>
				</tr>
				<tr>
					<td>Duration:</td>
					<td>0</td>
				</tr>
				<tr>
					<td>Description:</td>
					<td>---------------------</td>
				</tr>
				<tr>
					<td>Popularity for the SAC Members:</td>
					<td>*********</td>
				</tr>
				<tr>
					<td>Share my Optinion:</td>
					<td>*********</td>
				</tr>
			</table>
			<a href="<?php echo URL_DIR.'proposal/proposal'?>" style="padding-bottom: 2%;">
			<input type="button" value="Go back" ></input>
		</a>
			</div>
			
			<?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php';?>
		</body>
	</html>