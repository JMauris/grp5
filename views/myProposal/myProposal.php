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
				background: transparent;
				padding-left: 3%;
			}
		</style>
	</head>
	<body>
		<div class="wrapper">
			<h1>My proposal</h1>
			
			<div id="top">
				<h2 style="float: left;">My Favorites</h2>
				<h2 style="float: right;">My Opinions</h2>
			</div>
			
			<div id="table3">	
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
				
				</div>
			
			<div class="push"></div>
			</div>
			
			<?php unset($_SESSION['msg']); include_once ROOT_DIR.'global/footer.php';?>
		</body>
	</html>