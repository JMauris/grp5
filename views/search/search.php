<?php include_once ROOT_DIR.'global/header.php'; include_once ROOT_DIR.'languages/common.php';?>

<br><br>
	<table>
		<tr>
			<td>
				<?php echo $msg;?>
				<h1>Welcome <?php echo ' '.$user->getFirstname().' '.$user->getLastname();?></h1>
			</td>
		</tr>
	</table>
<br/><br/><br/><br/>


<?php include_once ROOT_DIR.'global/footer.php'; ?>
