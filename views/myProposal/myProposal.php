<?php include_once ROOT_DIR.'global/header.php';?>

<html>
	<head>
		<title>My proposal</title>
		<link rel="stylesheet" type="text/css" href="/<?php echo SITE_NAME; ?>/public/css/main.css">

		<style>
			#left {
				text-align: center;
			    float:left;
			    width:43%;
			    height: 40%;
			    background-color : transparent;
			    overflow-y : scroll;
			}

			p {
			    margin: 0;
			    padding: 0;
			}

			button {
				width: 100%;
				text-align: left;
			}

			#top {
				float: top;
				height: 6%;
				background-color : transparent;
				padding-bottom: 5%;
			}

			#table3 {
				float: left;
				width: 47%;

				padding-left: 3%;
			}
		</style>
	</head>
	<body>
		<div class="wrapper">
			<h1>My proposal</h1>
			<table>
				<tr>
					<td style="text-align: center;"><h2>My Favorites</h2></td>
					<td style="text-align: center;"><h2>My Opinions</h2></td>
				</tr>

				<tr>
				<td style="width: 50%; padding-left: 2%; padding-bottom: 2%; padding-top: 2%;">
				<a href="http://localhost/cas_montana/views/proposal/proposal_detail.php">
					<button id="0">
						<p>Name</p>
						<p>Description..........................</p>
					</button>
				</a>
				<a href="http://localhost/cas_montana/views/proposal/proposal_detail.php">
					<button id="1">
						<p>Name</p>
						<p>Description..........................</p>
					</button>
				</a>
				<a href="http://localhost/cas_montana/views/proposal/proposal_detail.php">
					<button id="0">
						<p>Name</p>
						<p>Description..........................</p>
					</button>
				</a>
				<a href="http://localhost/cas_montana/views/proposal/proposal_detail.php">
					<button id="1">
						<p>Name</p>
						<p>Description..........................</p>
					</button>
				</a>
				</td>
				<td></td>
				<tr>
				</table>
				</div>

			<div class="push"></div>
			</div>

			<?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php';?>
		</body>
	</html>
