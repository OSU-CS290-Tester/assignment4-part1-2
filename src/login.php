<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

echo "<form action = 'content1.php' method = 'post'>";
echo "Enter your username: <input name = 'username' type = 'text'>";
echo "<input name = 'Login' type = 'submit' value = 'Login'>";
echo "</form>";

?>

