<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "mahasonadb");

// check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// get the ID of the row to delete from the AJAX request
$id = $_POST['id'];

// prepare the SQL query to delete the row
$sql = "DELETE FROM posts WHERE id = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $id);

// execute the query
if (mysqli_stmt_execute($stmt)) {
  // return success message
  echo "Row deleted successfully";
} else {
  // return error message
  echo "Error deleting row: " . mysqli_error($conn);
}

// close the statement and the connection
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
