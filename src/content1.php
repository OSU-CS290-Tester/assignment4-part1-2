<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

if (isset($_POST['username'])) {
	//borrowed from Josh. Checks posted string length to verify
	//That a name has been entered. If nothing is there it redirects to login.
	$nameCount = strlen($_POST['username']);
	if($nameCount < 1) {
		echo 'A username must be entered.';
		echo '<br>Click <a href="login.php">here</a>'; 
		echo ' to return to the login screen';
		exit();
	} else {
		$_SESSION['username'] = $_POST['username'];
	}
}

//If no session username has been initialized redirect to login.
elseif (!isset($_SESSION['username'])) {
	header('Location: login.php');
	exit();
}

//If no session visits have been set start at 0.
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