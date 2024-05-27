<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="en"> 
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-EHSV0SJ9KK"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-EHSV0SJ9KK');
</script>

<title>Mahasona: 3D horror game</title> 
<link rel="icon" type="image/x-icon" href="../Horrorgame3D/images/logo.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta property="og:image" content="../Horrorgame3D/images/114.png"/>

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
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Sinhala:wght@800&display=swap" rel="stylesheet">

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


</head>
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
										<li class="active"><a href="index.php">HOME</a></li>
										<li><a href="forum.php" >FORUM</a></li>
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
											<div class="banner_text">
												<h3>Mahasona</h3>
												<p>Dare To Enter The Realm of The Unknown</p>
												<div class="w3-button">
													<a href="#" data-toggle="modal" data-target="#myModal">Explore</a>
												</div>
											</div>
										</li>
										<li>
											<div class="banner_text" style="font-family: 'Sinhalafont' !important;">
												<h3>මහසෝනා</h3>
												<p>නොදන්නා ක්ෂේත්‍රයට ඇතුළු වීමට නිර්භීත වන්න</p>
												<div class="w3-button">
													<a href="#" data-toggle="modal" data-target="#myModal">Explore</a>
												</div>
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
	<!-- about -->
	<div class="about" id="about"> 
		<div class="container">
			<div class="about-w3lsrow"> 
				<div class="col-md-7 col-sm-7 w3about-img " id="img2"> 
					<div class="w3about-text"> 
						<h5 class="w3l-subtitle">3D Horror Game</h5>
						<p>Guarded by the historical terrifying demon - 'Mahasona', players
							 must outwit the demon and solve puzzles to uncover 
							 the mysteries of the haunted place along with 
							 stunning graphics and immersive gameplay.</p>
						<div class="dev-btn3">
							<a href="../MahasonaWeb/index.html" target="_blank" >Play online</a>
						</div>
					</div>
				</div> 
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about --> 
	
	<!-- portfolio -->
	<div class="portfolio jarallax" id="gallery">
		<div class="container">
			<div class="agileits-title"> 
				<h3 class="glow">GAME EXPERIENCE</h3> 
			</div>
			<ul class="simplefilter w3layouts agileits">
				<li class="active w3layouts agileits" data-filter="all">All</li>
				<li class="w3layouts agileits" data-filter="1">Level 01</li>
				<li class="w3layouts agileits" data-filter="2">Level 02</li>
				<li class="w3layouts agileits" data-filter="3">Screenshots</li>
				<li class="w3layouts agileits" data-filter="4" id="walk">Walkthrough</li>
				<li class="w3layouts agileits" data-filter="5">Scenes</li>
			</ul>

			<div class="filtr-container w3layouts agileits">

				<div class="filtr-item w3layouts agileits portfolio-t" data-category="1, 5" data-sort="Busy streets">
					<a href="images/sc1.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/sc1.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="2, 5" data-sort="Luminous night">
					<a href="images/sc22.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/sc2.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="1, 4" data-sort="City wonders">
					<a href="images/sc3.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/sc3.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="3" data-sort="In production">
					<a href="images/sc4.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/sc4.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="3, 4" data-sort="Industrial site">
					<a href="images/sc5.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/sc5.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="2, 4" data-sort="Peaceful lake">
					<a href="images/sc6.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/sc6.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="1, 5" data-sort="City lights">
					<a href="images/sc7.jpeg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/sc7.jpeg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="2, 4" data-sort="Dreamhouse">
					<a href="images/sc8.jpeg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/sc8.jpeg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="2, 4" data-sort="Dreamhouse">
					<a href="images/sc9.jpeg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/sc9.jpeg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							
						</figure>
					</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //portfolio -->
	<!-- modal -->
	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
					<center><h4 class="modal-title">Mahasona<span> 3D</span></h4></center>
				</div> 
				<div class="modal-body">
					<div class="agileits-w3layouts-info">
						<img src="images/modal1.png" alt="" />
						<p></p>Mahasona is a spine-chilling horror game where players must navigate a 
						haunted place that's guarded by the demon Mahasona. The player's objective 
						is to escape the place without getting killed by Mahasona, who will do everything 
						in its power to stop them. The game is set in a mysterious world full of dark 
						secrets and unknown dangers. Players must use their wits and resourcefulness to 
						evade the demon, solve puzzles, and uncover clues that will help them escape. With a 
						terrifying atmosphere, challenging gameplay, and an immersive storyline, Mahasona will 
						keep players on the edge of their seats and leave them feeling haunted long after the game
						 is over.</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->

	<!-- team -->
	<div class="team jarallax" id="team">
		<div class="container">
			<div class="agileits-title"> 
				<h3>THE DEV TEAM </h3> 
			</div>
			<div class="col-md-3 agileits-team-grid">
					<div class="team-info">
						<img src="images/mirada.jpg" alt="">
						<div class="team-caption"> 
							<h4>Mirada Gunasekara</h4>
							<p>QA engineer/ Game Developer</p>
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			<div class="col-md-3 agileits-team-grid">
				<div class="team-info">
					<img src="images/prv.jpg" alt="">
					<div class="team-caption"> 
						<h4>Praveen Dev</h4>
						<p>Project Manager & UI/UX developer</p>
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-3 agileits-team-grid">
				<div class="team-info">
					<img src="images/laksh.jpg" alt="">
					<div class="team-caption"> 
						<h4>Kavindu Lakshitha</h4>
						<p>Game/Unity developer</p>
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-md-3 agileits-team-grid">
				<div class="team-info hi">
					<img src="images/gishen.jpg" alt="">
					<div class="team-caption"> 
						<h4>Gishen Boraluwa</h4>
						<p>Web Developer/ QA Engineer</p>
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-3 agileits-team-grid">
				<div class="team-info hi">
					<img src="images/uma.jpg" alt="">
					<div class="team-caption"> 
						<h4>Umaya Weerasinghe</h4>
						<p>Web developer/ Graphics designer</p>
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="agileits-team-grids">
				<div class="col-md-3 agileits-team-grid">
					<div class="team-info">
						<img src="images/shakini.jpg" alt="">
						<div class="team-caption"> 
							<h4>Rashmi Shakini</h4>
							<p>QA Engineer/Sound Engineer</p>
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="col-md-3 agileits-team-grid">
					<div class="team-info">
						<img src="images/sasini.jpg" alt="">
						<div class="team-caption"> 
							<h4>Sasini De Silva</h4>
							<p>Web developer/ Sounds engineer</p>
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileits-team-grid">
					<div class="team-info">
						<img src="images/dfs.jpg" alt="">
						<div class="team-caption"> 
							<h4>DEATH FIRE</h4>
							<p>STUDIOS</p>
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
				

			</div>
		</div>
	</div>
	<!-- //team -->
	
	
	<!-- footer -->
	<?php include 'footer.php'; ?>
	
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
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
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
