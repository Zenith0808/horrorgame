<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <title>Mahasona: 3D horror game</title> 
    <link rel="icon" type="image/x-icon" href="/images/logo.png">

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



    <link rel="stylesheet" href="css/forum.css">

	
	<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">

	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	
	<link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">
	<link rel="stylesheet" href="css/Admin.css">
	<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
		<style>
			.tooltip{
				background-color: red;
			}
			.posts{
				width: 500px !important;
				margin: 2em 0em 2em 4em;
				background-color: rgb(253, 233, 233);
			}
			
		</style>

</head>
<?php
	session_start();

	if (!isset($_SESSION['username']) ) {
		header('Location: index.php');
		exit;
	}	

	$conn = mysqli_connect("localhost", "root", "", "Mahasonadb");

	// check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
}
		$sql = "SELECT * FROM posts";
        $result = mysqli_query($conn, $sql);
include "usercontrol.php"; 
?>

<body>

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
										<li class="active"><a href="forum.html" class="scroll">POSTS & FORUM</a></li>
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
												<h3 style="font-size:5em">Dashboard</h3>
												<p>Manage posts and forum</p>
				
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
    <!--==========Main secitio==========-->
	<div class="container grid">
				
				<div class="" data-aos="fade-up" data-aos-duration="3000">
					<h2 class="txt_newPosts">Edit Posts &nbsp <span id="createpost" data-toggle="tooltip" title="create new posts" style="cursor:pointer;"class= "glyphicon glyphicon-plus"></span>  </h2>
					<div class="postContent">
						<div class="splide" role="group" aria-label="Splide Basic HTML Example" >
							<div class="splide__track Crd">
								  <ul class="splide__list">
									
									<?php if (mysqli_num_rows($result) > 0) {
                                            // output data of each row
                                            while($row = mysqli_fetch_assoc($result)) {
                                                // store the data in variables
                                                $id= $row["id"];
                                                $title = $row["title"];
                                                $description = $row["content"];
                                                $created_by = $row["created_by"];
                                                $date = $row["date"]; 
                                                
									?>
									  <li class="splide__slide crd_li"> 
										<div class="card">
											<div class="profile">
												<div class="profile_img" >
													<i class="ri-user-3-fill"></i>
												</div>
												<div class="post_details"><p class="post_userName"><?php echo $created_by ?><br><span class="post_publicDate"><?php echo $date ?></span></div>
											</div>
											<div class="card-body">
											  <h5 class="card-title"><?php echo $title ?></h5>
											  <p class="card-text"><?php echo $description ?></p>
											  
											  <div class="post_feedBacks">
												<div class="Edit">
													<button class="btn_editPosts" id="editpost" data-toggle="tooltip">
														Edit&nbsp;
														<i class="ri-edit-2-fill"></i>
													</button>
												</div>
												<div class="Edit">
													<button class="btn_editPosts" onclick="deletedata(<?php echo $id?>)">
														Delete&nbsp;
														<i class="ri-edit-2-fill"></i>
													</button>
												</div>
											  </div>
											  
											</div>
										  </div>
									  </li>
											<?php }}?>
								  </ul>
							</div>
						  </div>
					</div>
					
				</div>
			</div>

	<!--Create new posts-->
	<li class="splide__slide crd_li " id ="posts" style ="display:none"> 
	<form action="createpost.php" method="post">
		<div class="card posts">

			<p class="post_userName">Create Post</p>
		
			<div class="profile">
				<div class="profile_img" >
					<i class="ri-user-3-fill"></i>
				</div>
				<div class="post_details"><p class="post_userName">admin name: <input type="text" name="User" disabled readonly value="<?php echo $_SESSION['username'] ?>" >
				<br><span class="post_publicDate">date here</span>
				</div>				
			</div>
			<div class="card-body">
				<h5 class="card-title">Title &nbsp: <input type="text" name="title" placeholder="enter title here" /></h5>
				<p class="card-text">Content: </p><textarea name="content" placeholder="enter description here" ></textarea>
				<div class="post_feedBacks">
					<div class="Edit">
						<button class="btn_editPosts" type="submit">
						Submit&nbsp;
						</button>
					</div>
					<div class="Edit">
						<button class="btn_editPosts" type="reset">
							Reset&nbsp;
							<i class="ri-edit-2-fill"></i>
						</button>
					</div>
				</div>							  
			</div>
		</div>
	</form>
	</li>

<!--edit post-->
<li class="splide__slide crd_li " id ="editposts" style ="display:none"> 
	<form action="#" method="post">
		<div class="card posts">

			<p class="post_userName">Edit Post</p>
		
			<div class="profile">
				<div class="profile_img" >
					<i class="ri-user-3-fill"></i>
				</div>
				<div class="post_details"><p class="post_userName">admin name: <input type="text" name="User" disabled readonly value="<?php echo $_SESSION['username'] ?>" >
				<br><span class="post_publicDate">date here</span>
				</div>				
			</div>
			<div class="card-body">
				<h5 class="card-title">Title &nbsp: <input type="text" name="title" placeholder="enter title here" /></h5>
				<p class="card-text">Content: <input type="text" name="content" placeholder="enter description here" /></p>
				<div class="post_feedBacks">
					<div class="Edit">
						<button class="btn_editPosts" type="submit">
						Submit&nbsp;
						</button>
					</div>
					<div class="Edit">
						<button class="btn_editPosts" type="reset">
							Reset&nbsp;
							<i class="ri-edit-2-fill"></i>
						</button>
					</div>
				</div>							  
			</div>
		</div>
	</form>
	</li>


	<div class="about" id="about"> 
		<div class="container grid postSection">
			<h2 class="txt_newPosts">Add new contents</h2>
				<div class="d">
					<table class="table_content">
						  <tr class="table_content_tr" data-aos="fade-up" data-aos-duration="2500">
							<td class="td_img"><img src="/images/112.jpg" alt="" class="img_tableUser"></td>
							<td><p class="td_title">Community content</p><span class="td_subDescription"> Describe your forum category. Engage your audience...</span></td>

							<td><button class="btn_veiw"><i class="ri-eye-fill icon_posts"></i></button></td>
							<td><button class="btn_Comments"><i class="ri-message-2-fill icon_posts"></i></button></td>
							<td><button class="btn_Addnew"><i class="ri-add-circle-fill icon_posts"></i></button></td>
						  </tr>
							
					  </table>
				</div>
			</div>


			
			
		</div>
	</div>
    <!--==========Content section==========-->
    
    <!--==========New post section==========-->
    
    <!--==========footer section=========-->
	<?php include "footer.php"?>

	<script src="js/forum.js"></script>
<script>


  function deletedata(id) {
    if (confirm("Are you sure you want to delete this row?")) {
      // send an AJAX request to the PHP script
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "deletepost.php");
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onload = function() {
        if (xhr.status === 200) {
          // refresh the page to show the updated data
          location.reload();
        } else {
          alert("Error: " + xhr.responseText);
        }
      };
      xhr.send("id=" + id);
    }
  }


// check if the URL contains a success flag
var urlParams = new URLSearchParams(window.location.search);
  var success = urlParams.get('success');
  
  if (success == "true") {
    // show the alert box
    alert("Form submission successful!");
  }

//to show create post
$(document).ready(function() {
  $('#createpost').click(function() {
    $('#posts').toggle();
  });
});

//to show edit post
$(document).ready(function() {
  $('#editpost').click(function() {
    $('#editposts').toggle();
  });
});

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

(function () {
		'use strict'
		const forms = document.querySelectorAll('.requires-validation')
		Array.from(forms)
		  .forEach(function (form) {
			form.addEventListener('submit', function (event) {
			  if (!form.checkValidity()) {
				event.preventDefault()
				event.stopPropagation()
			  }
		
			  form.classList.add('was-validated')
			}, false)
		  })
		})()


		function checkStuff() {
			var title = document.form.title;
			var subTitle = document.form.subTitle;
			var des = document.form.txtA_description;
			var errorTitle = document.getElementById('title_feedback');
			var errorSubTitle = document.getElementById('subTitle_feedback');
			var errordesc = document.getElementById('desc_feedback');
	
			if (title.value == "") {
				errorTitle.style.visibility = 'visible';
				errorTitle.innerHTML = "<i class=\"ri-error-warning-fill\"></i> Title cannot be empty";
				title.focus();
				return false;
			} else {
				errorTitle.innerHTML = "";
			}

			if (subTitle.value == "") {
				errorSubTitle.style.visibility = 'visible';
				errorSubTitle.innerHTML = " <span class=\"innerHtmlSpan\"><i class=\"ri-error-warning-fill\"></i>  Sub Title cannot be empty</span>";
				subTitle.focus();
				return false;
			} else {
				errorSubTitle.innerHTML = "";
			}

			if (des.value == "") {
				errordesc.style.visibility = 'visible';
				errordesc.innerHTML = " <span class=\"innerHtmlSpan\"><i class=\"ri-error-warning-fill\"></i> Description cannot be empty</span>";
				des.focus();
				return false;
			} else {
				errordesc.innerHTML = "";
			}
				
			
   var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			if (!re.test(email.value)) {
				errorTitle.style.visibility = 'visible';
				errorTitle.innerHTML = " <span class=\"innerHtmlSpan \"><i class=\"ri-error-warning-fill\"></i> Please enter valid title </span>";
				title.focus();
				return false;
			} else {
				msg.innerHTML = "";
			}
}

	  function showPrompt() {
  var promptText = '<form><label for="name">Name:</label><input type="text" id="name" name="name"><br><label for="email">Email:</label><input type="email" id="email" name="email"></form>';
  var userInput = prompt(promptText);
  if (userInput) {
    var form = document.createElement('form');
    form.innerHTML = userInput;
    document.body.appendChild(form);
    form.submit();
  }
}

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

</script>
	
		
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

<?php 
	//$sql2 = "INSERT INTO `posts`(`id`, `title`, `content`, `likes`, `created_by`, `date`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','','')"
	
	$stmt = $mysqli->prepare("INSERT INTO posts (`title`, `content`,`created_by`, `date`) VALUES (?, ?, ?)");

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  	$title2 = $_POST['title'];
  	$content2 = $_POST['content'];
	$today = date("Y-m-d");
  	// do something with the form data here
	

	// bind the parameters to the statement
	$stmt->bind_param("sss", $title, $content, $_SESSION['username'], $today);
	
	// execute the statement
	$stmt->execute();
	
	// check for errors
	if ($stmt->errno) {
	  echo "Failed to insert row into MySQL: " . $stmt->error;
	}
	
	// close the statement and connection
	$stmt->close();
	$mysqli->close();
	}
?>


</body>
</html>