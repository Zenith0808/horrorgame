<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Downloads</title>

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    
    <!-- css -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- font-awesome icons -->
	<link href="css/font-awesome.css" rel="stylesheet"> 

    <!-- font -->
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Metal+Mania">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Sinhala:wght@800&display=swap" rel="stylesheet">

</head>
<style>
	.downloader{
	color: #000;
    font-size: 1em;
    padding: .5em 1em;
    border: solid 2px #D20E13;
    text-decoration: none;
    border-radius: 30px;
    margin: 0;
    background:#D20E13;
	box-shadow: 1px 2px 16px #83060D;
}

.downloader:hover {
    color: #FFFFFF;
    background-color : #00000000 !important;
    border: solid 2px #FFFFFF;
	padding: .5em 2em;
	transition-duration : 0.8s;
}

</style>
<body>
    <?php
		session_start();
		//Top user login bar
		include 'usercontrol.php';
		?>
		
    <!-- banner -->
	<div class="banner">
		<div class="agileinfo-dot">
			<div class="header-top">
				<div class="container-fluid">
					<div class="header-top-info">
						<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
								<nav>
									<ul class="nav navbar-nav">
										<li><a href="index.php">HOME</a></li>
										<li><a href="forum.php" >FORUM</a></li>
										<li class="active"><a href="download.php">DOWNLOADS</a></li>
										<li><a href="https://forms.office.com/pages/responsepage.aspx?id=ZayGlNM5JU2XfHbZwxwARiUAoxkPXMdMigbTjnuA_35UNUEyUkI4RDZITFE5MFNHUFgxVzNGMzY0US4u" class="scroll">FEEDBACK</a></li>
										<li><a href="#footer" class="scroll">ABOUT</a></li>
									</ul>
								</nav>
							</div>
							<!-- /.navbar-collapse -->
						</nav>
					</div>
				</div>
			</div>
			<div class="w3layouts-banner-info">
				<div class="container">
					<div class="w3layouts-banner-slider">
						<div class="w3layouts-banner-top-slider">
							<div class="slider">
								<div class="callbacks_container">
								<div class="banner_text">
									<h3 style="font-size:6em">Download Version 1.0</h3>
										<p>Dare To Enter The Realm of The Unknown</p>
										<a href="test.zip" download><button class="downloader"download>Download v1.0</button></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<br>
<center><h1 class="glow">Game Screenshots</h1></center>
	<!--Footer-->
	<?php include 'slideshow.php';
	include 'footer.php'; ?>
	
	

</body>

</html>