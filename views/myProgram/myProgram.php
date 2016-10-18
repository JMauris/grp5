<?php include_once ROOT_DIR.'global/header.php';?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>My Programm</title>
		<link rel="stylesheet" type="text/css" href="/<?php echo SITE_NAME; ?>/public/css/main.css">
		<style type="text/css">
		
			#table2 {
				margin: 0 auto;
				width: 100%;
			}
			
			#insideTable{
				background: transparent;
				padding: 0;
				margin: 0;
				width: 100%;
				text-align: left;
				float: top;
			}
			tr{
				text-align:left;
			}
			#tableDiv{
				width: 94%;
				height: 50%;
				background: transparent;
			}
			
		</style>
	</head>
	<body>
		<div class="wrapper">
			<h1>Overview of my programm</h1>
				
			<div id="tableDiv">
			
			<table id=table2>
			<tr>
				 	<td style="text-align: center;"><h2>My registrations</h2></td>
				 	<td style="text-align: center;"><h2>My favorites</h2></td>
			</tr>
			<tr>
			<td style="width: 50%; padding: 2%;">
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
					sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
					aliquyam erat, sed diam voluptua.
			</td>
			<td style="width: 50%; padding: 2%;">					
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
					sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
					aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
					duo dolores et ea rebum.
			</td>
			</tr>
			</table>
			
			</td>
			</tr>
			</table>
			</div>
			<div class="push"></div>
			</div>
			
			<?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php';?>
		</body>
	</html>
