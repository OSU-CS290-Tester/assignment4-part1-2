<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

if (!isset($_SESSION['username'])) {
	header('Location: login.php');
	exit();
}

echo "Welcome to content2, $_SESSION[username]. ";
echo "We're learning PHP.";
echo "<br>Click <a href='content1.php'>here</a> to return.";
?> 
