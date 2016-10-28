<?php include_once ROOT_DIR.'global/header.php'; $tourArray=$_SESSION['tour']; include_once ROOT_DIR.'languages/common.php';?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>search path</title>
		<link rel="stylesheet" type="text/css" href="/<?php echo SITE_NAME; ?>/public/css/main.css">
		<style type="text/css">
			select{
				width: 150px;
			}

			#filter{
				width: 400px;
			}

			table {
				margin: 0 auto;
			}
		</style>
	</head>
	<body>
		<div style="height: 600px;">
			<h1><?php echo $lang['SEARCH']; ?></h1>
			<br>
				<table>
					<tr>
						<td><?php echo $lang['REGION']; ?></td>
						<td>
							<select name="region">
								<option value="all"><?php echo $lang['ALL']; ?></option>
								<option value="1">Center</option>
								<option value="2">Upper</option>
								<option value="3">Lower</option>
								<option value="4">Outside</option>
								<option value="5">Wallis</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><?php echo $lang['DIFFICULTY']; ?>:</td>
						<td>
							<select name="difficulty">
								<option value="all"><?php echo $lang['ALL']; ?></option>
								<option value="1">*</option>
								<option value="2">**</option>
								<option value="3">***</option>
								<option value="4">****</option>
								<option value="5">*****</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><?php echo $lang['SORT_HIKE']; ?></td>
						<td>
							<select name="difficulty">
								<option value="all"><?php echo $lang['ALL']; ?></option>
								<option value="1"><?php echo $lang['SNOWSHOE']; ?></option>
								<option value="2"><?php echo $lang['SKI_TOUR']; ?></option>
								<option value="3"><?php echo $lang['HIKINGS']; ?></option>
								<option value="4">Via Ferrata</option>
								<option value="5">Bike - MTB</option>
								<option value="6"><?php echo $lang['OTHERS']; ?></option>
								<option value="7"><?php echo $lang['WINTER_HIKES']; ?></option>
								<option value="8"><?php echo $lang['ALP_HIKES']; ?></option>
								<option value="9"><?php echo $lang['MULTI_D_HIKE']; ?></option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Hikings:</td>
						<td>
							<input id="filter" placeholder="<?php echo $lang['PLACEHOLDER']; ?>" data-type="search">
						</td>
					</tr>
					<tr>
						<td>
							<button><?php echo $lang['SEARCH']; ?></button>
						</td>
					</tr>
				</table>
		</div>
	</body>
</html>
<?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php'; ?>
