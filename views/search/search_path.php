<?php include_once ROOT_DIR.'global/header.php';

$genre=$_SESSION['genretour'];

$region=$_SESSION['region'];

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
			
			table {
				margin: 0 auto;
			}
			
		</style>
	</head>
	<body>
	<div class="wrapper">
		<div style= "padding-bottom: 2%;">
			<h1><?php echo $lang['SEARCH']; ?></h1>
			<br>
			<form method= "post" action="<?php echo URL_DIR.'search/search_result';?>" >
				<table>
					<tr>
						<td><?php echo $lang['REGION']; ?></td>
						<td>

							<select name="selected_region">
							<?php foreach( $region as $cle => $element)

					 		{?>
					 		<option value=<?php echo $cle?>><?php echo ' '.$region[$cle]->getRegion_fr();?></option>
					 		<?php }?>
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
							<?php foreach( $genre as $cle => $element)

<<<<<<< HEAD
					 					{?>
					 				<option value=<?php echo $cle?>><?php echo ' '.$genre[$cle]->getGenreTour_fr();?></option>
					 					<?php }?>
=======
					 		{?>
					 		<option value=<?php echo $cle?>><?php echo ' '.$genre[$cle]->getGenreTour_fr();?></option>
					 		<?php }?>
					 		
>>>>>>> origin/master
							</select>
						</td>
					</tr>
					<tr>
						<td>Hikings:</td>
						<td>
							<input style="width: 400px;" placeholder="<?php echo $lang['PLACEHOLDER']; ?>" data-type="search">
						</td>
					</tr>
					<tr>
						<td>
							<button id="submit1" style = "width: 100%;" type="submit" value="submit me!">Submit me!</button>
						</td>
					</tr>
				</table>
			</form>
		</div>
		<div class="push"></div>
		</div>
		<div class= "footer"><?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php';?></div>
	</body>
</html>