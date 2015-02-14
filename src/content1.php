<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

if (isset($_POST['username'])) {
	$_SESSION['username'] = $_POST['username'];
}

elseif (!isset($_SESSION['username'])) {
	header('Location: login.php');
	exit();
}

if(!isset($_SESSION['visits'])) {
		$_SESSION['visits'] = 0;
}

echo "Hello, $_SESSION[username].  You have previously visited ";
echo "this page $_SESSION[visits] times.";
++$_SESSION['visits'];
echo '<br><br>Click here to log out:<a href="login.php?logout=true">here</a>';
echo '<br><br>Click <a href="content2.php">here</a>';
echo ' to visit the next page.';

?>