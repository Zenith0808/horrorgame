<div class="footer">
		<div class="container">
			<div class="footer-top">
				<div class="col-md-4 amet-sed"> 
					<div class="footer-title">
						<h3>About Us <img src="images/df2.png" style="width: 30px;"></h3>
					</div> 
					<p>Deadfire Studios is a game development and software solutions company that creates
						 a wide range of high-quality products, from video games to web applications.
						  Our experienced team collaborates to bring innovative ideas to life and delivers 
						  engaging and unique experiences to their users.</p>
				</div>
				
				<div class="col-md-4 amet-sed amet-medium">
					</div>
				<div class="col-md-4 amet-sed ">
					<div class="footer-title">
						<h3>Follow Us</h3>
					</div> 
					<div class="agileinfo-social-grids">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
						</ul>
					</div>
					<br>
					<div class="footer-title">
						<h3>Subscribe</h3>
					</div>
					<div class="support">
						<form action="index.php" method="post">
							<input type="email" name="email" placeholder="Enter email">
							<input type="submit" value="Subscribe" class="botton">
						</form>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	
	<!-- copyright -->
	<div class="copyright" id="footer">
		<div class="container">
			<p class="footer-class">© 2023 <a href="dfs/index.html">Deadfire Studios</a> <img src="images/df2.png" style="height: 18px;"> All Rights Reserved </p>
		</div>
	</div>
	<!-- //copyright -->
	<?php
// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the email from the form
    $email = $_POST['email'];

    // Connect to the database
    $conn = mysqli_connect('localhost', 'root', '', 'mahasonadb');

    // Check connection
    if (!$conn) {
        die('Connection failed: ' . mysqli_connect_error());
    }

    // Insert the email into the subscribe-emails table
    $sql = "INSERT INTO `subscribe-emails` (`email`) VALUES ('$email')";
    
	if ($conn->query($sql) === TRUE) {
        $message = "Thank you for subscribing!";
		echo " <script>alert('Thank you for subscribing!')</script>";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
