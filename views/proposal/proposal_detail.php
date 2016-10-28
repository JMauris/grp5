<?php include_once ROOT_DIR.'global/header.php'; include_once ROOT_DIR.'languages/common.php';?>

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
		<div  class= "wrapper" style="height: 100%">
			<h1><?php echo $lang['PROPOSAL_DETAIL_TITLE']; ?></h1>
			<h3>"Name"</h3>
			<table>
				<tr>
					<td><?php echo $lang['PLACE_OF_DEP']; ?></td>
					<td>....</td>
				</tr>
				<tr>
					<td><?php echo $lang['DESTINATION']; ?></td>
					<td>....</td>
				</tr>
				<tr>
					<td><?php echo $lang['DIFFICULTY']; ?></td>
					<td>***********</td>
				</tr>
				<tr>
					<td><?php echo $lang['DURATION']; ?></td>
					<td>0</td>
				</tr>
				<tr>
					<td><?php echo $lang['DESCRIPTION']; ?></td>
					<td>---------------------</td>
				</tr>
				<tr>
					<td><?php echo $lang['POPULARITY']; ?></td>
					<td>*********</td>
				</tr>
				<tr>
					<td><?php echo $lang['OPINION']; ?></td>
					<td>*********</td>
				</tr>
			</table>
			<a href="<?php echo URL_DIR.'proposal/proposal'?>">
			<input type="button" value="<?php echo $lang['BTN_BACK']; ?>" ></input>
		</a>
		</div>
	</body>
</html>

<?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php'; ?>
