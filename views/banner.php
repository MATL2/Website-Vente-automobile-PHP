<?php
	function writeBanner(){
		echo '<head>
				<meta charset="UTF-8">
				<title>Vroom Vroom - Vroom with a Vroom Vroom</title>
				<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
				<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
				<link rel="stylesheet" type="text/css" href="..\css\styles.css">
			</head>
			<header>
				<div class="container-fluid" id="banner">
					<div class="row">
						<div class="col-2" id="slidiv">
							<br>
							<a href="..\views\home.php"><img src="..\img\logo.PNG" alt="Vroom Vroom logo" id="logo"></a>
							<div id="overlay">
								<div id="hovertext"><a href="..\views\home.php" class="link"><h3>Homepage</h3></a></div>
							</div>
						</div>
						<div class="col-8">
							<h1 id="slogan">Vroom Vroom, Go Vroom With A Vroom Vroom</h1>
						</div>
					</div>
				</div>
			</header>';
	}
?>