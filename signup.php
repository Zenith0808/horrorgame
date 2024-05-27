<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasona - Login</title>
    <link rel="stylesheet" href="css/AdminLogIn.css"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">

    <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Metal+Mania">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans">
	<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/images/logo.png">

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


	<section class="login">
		<div class="login_box">
			<div class="left">
				<div class="top_link"><a href="javascript:window.history.back()"><img src="https://drive.google.com/u/0/uc?id=16U__U5dJdaTfNGobB_OpwAJ73vM50rPV&export=download" alt="">Return home</a></div>
				<div class="contact">
              
					<form name="form1" class="box" method="post">
                        
						<h3>SIGN UP</h3>
            <?php
               session_start(); 
               // Set the current page URL in a session variable
               $_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
                
                // Check if the user is already logged in
                if (isset($_SESSION['username'])) {
                  header('Location:index.php'); // Redirect to home page
                  exit();
                }

                if (isset($_POST['submit'])) {
                  // Connect to the database
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $dbname = "mahasonadb";

                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  $uname = $_POST['username'];
                  $pass = $_POST['password'];

                  $sql = "INSERT INTO `users`(`username`, `password`, `type`) VALUES ('$uname','$pass','user')";
                  
                    if ($conn->query($sql) === TRUE) {
                        echo " <script>alert('Succesfully signed up!')</script>";
                    } else {
                        $message = "Error: " . $sql . "<br>" . $conn->error;
                    }

                    // Close the database connection
                    mysqli_close($conn);
                }
                  
              ?>
            
						<input type="text" name="username" placeholder="username" >
                        <i class="typcn typcn-eye" id="eye"></i>
                        <input type="password" name="password" placeholder="Passsword" id="pwd" autocomplete="off">
                        <label>
                            <input type="checkbox">
                            <span></span>
                            <small class="rmb">Remember me</small>
                          </label>
                          <a href="#" class="forgetpass">Forget Password?</a>
            <input type="submit" name = "submit" value="Signup" class="btn1">
					</form>
         
				</div>
			</div>
			<div class="right">
				<div class="right-text">
					<h2>MAHASONA 2.5</h2>
					<h5>3D Game</h5>
				</div>
				<div class="right-inductor"></div>
			</div>
		</div>
	</section>


    <script>
        var pwd = document.getElementById('pwd');
        var eye = document.getElementById('eye');

        eye.addEventListener('click',togglePass);

        function togglePass(){

             eye.classList.toggle('active');

            (pwd.type == 'password') ? pwd.type = 'text' : pwd.type = 'password';
        }

        // Form Validation

function checkStuff() {
  var email = document.form1.email;
  var password = document.form1.password;
  var msg = document.getElementById('msg');
  var eContainer = document.getElementById('e_container');
  
  if (email.value == "") {
    e_container.style.display = 'block';
    msg.style.display = 'flex';
    msg.innerHTML = " <i class=\"ri-error-warning-fill\"></i> Please enter your email ";
    email.focus();
    return false;
  } else {
    msg.innerHTML = "";
  }
  
   if (password.value == "") {
    e_container.style.display = 'block';
    msg.style.display = 'flex';
    msg.innerHTML = "<i class=\"ri-error-warning-fill\"></i> Please enter your password";
    password.focus();
    return false;
  } else {
    msg.innerHTML = "";
  }
   var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if (!re.test(email.value)) {
    e_container.style.display = 'block';
    msg.style.display = 'flex';
    msg.innerHTML = "<i class=\"ri-error-warning-fill\"></i> Please enter a valid email";
    email.focus();
    return false;
  } else {
    msg.innerHTML = "";
  }
}

    </script>
</body>
</html>