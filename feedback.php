<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasona: 3D horror game</title>
    <link rel="icon" type="image/x-icon" href="../Horrorgame3D/images/logo.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta property="og:image" content="../Horrorgame3D/images/114.png"/>

<meta name="keywords" content="3d, 3dgame, game, horror+game, horror, mahasona, github" />

<script src="https://kit.fontawesome.com/a8f0a69681.js" crossorigin="anonymous"></script>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<!-- portfolio -->	
	<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="all">
<!-- //portfolio -->	
<!-- font -->
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Metal+Mania">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans">
	<link rel="stylesheet" href="css/forum.css">
    
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script> 
<!--feedback styles-->
<style>
	html, body {
	min-height: 100%;
	}
	body, div, form, input, p { 
	padding: 0;
	margin: 0;
	outline: none;
	font-family: Roboto, Arial, sans-serif;
	font-size: 14px;
	color: #FF9800;
	line-height: 22px;
	}
	h1 {
	font-weight: 400;
	}
	h4 {
	margin: 15px 0 4px;
	}
	.testbox {
	display: flex;
	justify-content: center;
	align-items: center;
	height: inherit;
	padding: 3px;
	}
	form {
	width: 100%;
	padding: 20px;
	background: #1f0000;
	box-shadow: 0 2px 5px #070707; 
	}
	.textarea input {
	width: calc(100% - 10px);
	padding: 5px;
	border: 1px solid #070707;
	border-radius: 3px;
	vertical-align: middle;
	}
	.email {
	display: block;
	width: 45%;
	}
	input:hover, textarea:hover {
	outline: none;
	border: 1px solid #FF9800;
	}
	th, td {
	width: 15%;
	padding: 15px 0;
	border-bottom: 1px solid #070707;
	text-align: center;
	vertical-align: unset;
	line-height: 18px;
	font-weight: 400;
	word-break: break-all;
	}
	.first-col {
	width: 16%;
	text-align: left;
	}
	table {
	width: 100%;
	}
	textarea {
	width: calc(100% - 6px);
	}
	.btn-block {
	margin-top: 20px;
	text-align: center;
	}
	button {
	width: 150px;
	padding: 10px;
	border: none;
	-webkit-border-radius: 5px; 
	-moz-border-radius: 5px; 
	border-radius: 5px; 
	background-color: #bb0404;
	font-size: 16px;
	color: #0a0a0a;
	cursor: pointer;
	}
	button:hover {
	background-color: #FF9800;
	}
	@media (min-width: 568px) {
	th, td {
	word-break: keep-all;
	}
	}
  </style>
  <!--feedback styles-->
</head>
<body>
	<?php include "usercontrol.php"; ?>
   <!-- banner -->
	<div class="banner">
		<div class="agileinfo-dot">
			<!--<div class="agileits-logo">
				<h1><a href="index.html">Horror <span>3D</span> Game</a></h1>
			</div>-->
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
									<ul class="nav navbar-nav" style="font-size:16px; font-family:'Josefin Sans'">
										<li><a href="index.php">HOME</a></li>
										<li><a href="forum.php" >FORUM</a></li>
										<li><a href="download.php">DOWNLOADS</a></li>
										<li class="active"><a href="feedback.php" class="scroll">FEEDBACK</a></li>
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
									<ul class="rslides callbacks callbacks1" id="slider4">
										<li>
											<div class="banner_text">
												<h2>Community content</h2>
												<p>Explore the forum below and find answers to all of your questions.</p>
											</div>
										</li>
									</ul>
								</div>
								<div class="clearfix"> </div>
								<script src="js/responsiveslides.min.js"></script>
								<script>
									// You can also use "$(window).load(function() {"
									$(function () {
									  // Slideshow 4
									  $("#slider4").responsiveSlides({
										auto: true,
										pager:true,
										nav:true,
										speed: 500,
										namespace: "callbacks",
										before: function () {
										  $('.events').append("<li>before event fired.</li>");
										},
										after: function () {
										  $('.events').append("<li>after event fired.</li>");
										}
									  });
								
									});
								 </script>
								<!--banner Slider starts Here-->
							</div>
                
						</div>
					</div>
                    
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->

	<!--feedback form-->
	<div class="testbox">
		<form action="/">
		  <h1>Customer Feedback Form</h1>
		  <p>Please take a few minutes to give us feedback about our game by filling in this short Customer Feedback Form. We are conducting this research in order to measure your level of satisfaction with the quality of our game. We thank you for your participation.</p>
		  <hr />
		  <h3>Overall experience with our game</h3>
		  <table>
			<tr>
			  <th class="first-col"></th>
			  <th>Very Good</th>
			  <th>Good</th>
			  <th>Fair</th>
			  <th>Poor</th>
			  <th>Very Poor</th>
			</tr>
			<tr>
			  <td class="first-col">How would you rate your overall experience with our game?</td>
			  <td><input type="radio" value="none" name="rate" /></td>
			  <td><input type="radio" value="none" name="rate" /></td>
			  <td><input type="radio" value="none" name="rate" /></td>
			  <td><input type="radio" value="none" name="rate" /></td>
			  <td><input type="radio" value="none" name="rate" /></td>
			</tr>
			<tr>
			  <td class="first-col">How satisfied are you with the graphics and visual design of the game??</td>
			  <td><input type="radio" value="none" name="satisfied" /></td>
			  <td><input type="radio" value="none" name="satisfied" /></td>
			  <td><input type="radio" value="none" name="satisfied" /></td>
			  <td><input type="radio" value="none" name="satisfied" /></td>
			  <td><input type="radio" value="none" name="satisfied" /></td>
			</tr>
			<tr>
			  <td class="first-col">How would you rate the story or narrative of the game?</td>
			  <td><input type="radio" value="none" name="prices" /></td>
			  <td><input type="radio" value="none" name="prices" /></td>
			  <td><input type="radio" value="none" name="prices" /></td>
			  <td><input type="radio" value="none" name="prices" /></td>
			  <td><input type="radio" value="none" name="prices" /></td>
			</tr>
			<tr>
			  <td class="first-col">How satisfied are you with the game's stability and lack of technical issues or bugs?</td>
			  <td><input type="radio" value="none" name="timeliness" /></td>
			  <td><input type="radio" value="none" name="timeliness" /></td>
			  <td><input type="radio" value="none" name="timeliness" /></td>
			  <td><input type="radio" value="none" name="timeliness" /></td>
			  <td><input type="radio" value="none" name="timeliness" /></td>
			</tr>
			<tr>
			  <td class="first-col">How satisfied with the game's performance on your device/console?</td>
			  <td><input type="radio" value="none" name="name" /></td>
			  <td><input type="radio" value="none" name="name" /></td>
			  <td><input type="radio" value="none" name="name" /></td>
			  <td><input type="radio" value="none" name="name" /></td>
			  <td><input type="radio" value="none" name="name" /></td>
			</tr>
			<tr>
			  <td class="first-col">How would you rate the controls and user interface?</td>
			  <td><input type="radio" value="none" name="recommend" /></td>
			  <td><input type="radio" value="none" name="recommend" /></td>
			  <td><input type="radio" value="none" name="recommend" /></td>
			  <td><input type="radio" value="none" name="recommend" /></td>
			  <td><input type="radio" value="none" name="recommend" /></td>
			</tr>
		  </table>
		  <h4>What should we change in order to live up to your expectations?</h4>
		  <textarea rows="5"></textarea>
		  <h4>Email</h4>
		  <small>Only if you want to hear more from us.</small>
		  <input class="email" type="text" name="name" />
		  <div class="btn-block">
			<button type="submit" href="/">Send Feedback</button>
		  </div>
		</form>
	  </div>
	<!--Feedback form-->
    <!-- footer -->
	<?php include 'footer.php'; ?>
	
</body>
</html>