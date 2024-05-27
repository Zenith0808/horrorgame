<?php
// Start the session
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session
session_destroy();

header("Location: ".$_SERVER['HTTP_REFERER']);
// Redirect to the login page
//header('Location: ' . $_SESSION['current_page']);
exit();
?>