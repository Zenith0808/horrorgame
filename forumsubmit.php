<?php
/*// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Retrieve form data
 
  $date = date('Y-m-d H:i:s'); // Use current date and time
  $comment = $_POST['comment'];
  $user = $_POST['user'];

  // Connect to database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "mahasonadb";
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Sanitize form data

  $comment = mysqli_real_escape_string($conn, $comment);
  $user = mysqli_real_escape_string($conn, $user);


  // Prepare and execute SQL INSERT statement
  $sql = "INSERT INTO forum (userName, date, comment) VALUES ('$user','$date', '$comment')";

  if (mysqli_query($conn, $sql)) {
    // Display success message
    //header('Location: forum.php');
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  // Close database connection
  mysqli_close($conn);
}*/
?>

<?php
// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the email from the form
    $user = $_POST['user'];
    $comment = $_POST['comment'];
    $date = date('Y-m-d');

    
    // Connect to the database
    $conn = mysqli_connect('localhost', 'root', '', 'mahasonadb');
    
    // Check connection
    if (!$conn) {
        die('Connection failed: ' . mysqli_connect_error());
    }

    // Insert the email into the subscribe-emails table
    $sql = "INSERT INTO `forum`(`userName`, `date`, `comment`, `Likes`, `dislikes`) VALUES ('$user','$date','$comment',0,0)";
    
	if ($conn->query($sql) === TRUE) {

		echo " <script>alert('Thank you for commenting!')</script>";
        
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }
    header ('Location: forum.php');
    // Close the database connection
    mysqli_close($conn);
}
?>