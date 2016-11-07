<?php include_once ROOT_DIR.'global/header.php'; include_once ROOT_DIR.'languages/common.php';
		//Collect data from controller

?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="/<?php echo SITE_NAME; ?>/public/css/main.css">
		<style type="text/css">
			
		</style>
	</head>
	<body>
		<div class="wrapper">

			<h1><?php echo $lang['MON_CAS']; ?></h1>
			<form id="MyChoiceForm" action="<?php echo URL_DIR.'mychoice/myregister';?>" method="post">

					<table>
					<tr>
						<button id="submit1" style="width: 10%;" type="submit" name="register">Register</button>
					</tr>
					</table>
			</form>

      <form id="MyChoiceForm" action="<?php echo URL_DIR.'mychoice/myfavoris';?>" method="post">

          <table>
          <tr>
            <button id="submit1" style="width: 10%;" type="submit" name="favoris">Favoris</button>
          </tr>
          </table>
      </form>
      <form id="MyChoiceForm" style="padding-bottom: 2%;" action="<?php echo URL_DIR.'mychoice/mynotice';?>" method="post">

          <table>
          <tr>
            <button id="submit1" style="width: 10%;" type="submit" name="notice">Notice</button>
          </tr>
          </table>
      </form>

		<div class="push"></div>
			</div>
		<div><?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php';?></div>
	</body>
</html>
