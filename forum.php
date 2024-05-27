<!DOCTYPE html>
<html lang="en">
<?php
  session_start(); // Start the session
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasona: Discussions</title> 
	<link rel="icon" type="image/x-icon" href="../Horrorgame3D/images/logo.png">

    <meta name="keywords" content="3d, 3dgame, game, horror+game, horror, mahasona, github" />

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
	<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    
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


<!--forum css-->
    <link rel="stylesheet" href="css/forum.css">
	<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	
<!--Comment section css-->
	<link rel="stylesheet" href="css/Comment_Secssion.css">
	
</head>
<body>
	<?php
		session_start();
		// Set the current page URL in a session variable
		$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
		include 'usercontrol.php'; ?>

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
										<li class="active"><a href="forum.php" >FORUM</a></li>
										<li><a href="download.php">DOWNLOADS</a></li>
										<li><a href="https://forms.office.com/pages/responsepage.aspx?id=ZayGlNM5JU2XfHbZwxwARiUAoxkPXMdMigbTjnuA_35UNUEyUkI4RDZITFE5MFNHUFgxVzNGMzY0US4u">FEEDBACK</a></li>
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
											<div class="banner_text" data-aos="fade-up" data-aos-duration="3000">
												<h2 >DISCUSSIONS & POSTS</h2>
												<p>Explore the forum below and find answers to all of your questions.</p>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>     
				</div>
			</div> 
		</div>
	</div>
	<!-- //banner -->
	
	<!--Posts section -->
	<?php include "posts.php"?>
	<!--End of posts section -->


	<!--==========comment section==========-->
	<?php  include "forum_main.php" ?>
	
    <!--==========Content section==========-->
    <div class="container grid" style="margin-top: 0em;" data-aos="fade-up" data-aos-duration="2000">
		<div class="">
			<div class="">
				<h2 class="txt_submission">BE AN EXCLUSIVE 50 ZONES MEMBER AND RECEIVE
					NEWS AND UPDATES TO YOUR EMAIL</h2>
			</div>
		</div>
    </div>
	<br>
    <!--==========New post section==========-->
    

	
    <!-- footer -->
	<?php include 'footer.php'; ?>



	<script src="js/forum.js"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  







	<script src="js/jarallax.js"></script>
	<!-- <script src="js/SmoothScroll.min.js"></script> -->
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script src="js/responsiveslides.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOut' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- Tabs-JavaScript -->
	<script src="js/jquery.filterizr.js"></script>
		<script src="js/controls.js"></script>
		<script type="text/javascript">
			$(function() {
				$('.filtr-container').filterizr();
			});
		</script>
	<!-- //Tabs-JavaScript -->
	<!-- PopUp-Box-JavaScript -->
		<script src="js/jquery.chocolat.js"></script>
		<script type="text/javascript">
			$(function() {
				$('.filtr-item a').Chocolat();
			});
		</script>
	<!-- //PopUp-Box-JavaScript -->
</body>	
</html>

</body>
</html>