<?php
$id = $_GET['postid'];
$conn = new mysqli("localhost", "root", "", "Mahasonadb");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// increment likes count in database
$sql = "UPDATE posts SET likes = likes + 1 WHERE id = 1 "; // replace 1 with the actual post ID
if ($conn->query($sql) === TRUE) {
  echo "Post liked!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
