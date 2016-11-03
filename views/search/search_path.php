<?php include_once ROOT_DIR.'global/header.php';
$tourArray=$_SESSION['tour'];
include_once ROOT_DIR.'languages/common.php';
if(isset($_GET['lang'])){
$_SESSION['lang']=$_GET['lang'];}
else {
	$_SESSION['lang']='en';
}?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>search path</title>
		<link rel="stylesheet" type="text/css" href="/<?php echo SITE_NAME; ?>/public/css/main.css"><style type="text/css">
			select{
				width: 30%;
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
	<div class="wrapper">
		<div>
			<h1><?php echo $lang['SEARCH']; ?></h1>
			<br>
			<form action="<?php echo URL_DIR.'search/search_result';?>" method= "post">
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
             							 <option value="6">******</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><?php echo $lang['SORT_HIKE']; ?></td>
						<td>
							<select name="sort_hike">
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
							<button name="difficulty" value=5><?php echo $lang['SEARCH']; ?></button>
						</td>
					</tr>
					
				</table>
				
				</form>
		</div>
		</div>
	</body>
</html>
<?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php'; ?>
