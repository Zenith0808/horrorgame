<?php 
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "Mahasonadb");

	// check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
    }
    
    
// prepare the SQL query with placeholders
$sql = "INSERT INTO posts (title, content,created_by, date) VALUES (?,?,?,?)";

$t = $_POST['title'];
$c = $_POST['content'];
$u = $_SESSION['username'];
$today = date("Y-m-d");

echo $t, $c, $u, $today; 
// create a new prepared statement
$stmt = $conn->prepare($sql);

// bind the variables to the placeholders
$stmt->bind_param("ssss", $t, $c, $u, $today);

// execute the query
if ($stmt->execute()) {
  echo "New record created successfully";
} else {
  echo "Error: ". $stmt->error;
}

// close the connection
$conn->close();
header("Location: admin.php?msg=success");
exit;
?>

