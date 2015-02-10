<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Multtable PHP Practice</title>
</head>
<body>	
<?php
echo "<h2>Multtable.php</h2>"."<br>";
//multiplicand = y axis, multiplier = x axis
$minCand = $_GET["min-multiplicand"];
$maxCand = $_GET["max-multiplicand"];
$minLier = $_GET["min-multiplier"];
$maxLier = $_GET["max-multiplier"];
$firstCand = $minCand - 1;
$firstLier = $minLier - 1;
$valid = true;

//I originally had these as else if statements, but I realized each one needs
//to trigger so they are all separate if statements.
if($minCand > $maxCand) {
	echo "<br>";
	echo "Minimum multiplicand is larger than maximum multiplicand.";
	$valid = false;
}
if ($minLier > $maxLier) {
	echo "<br>";
	echo "Minimum multiplier is larger than maximum multiplicand.";
	$valid = false;
}
//Chech that each number is inputted.
if (!$minCand) {
	echo "<br>";
	echo "Missing parameter minimum multiplicand";
	$valid = false;
}
if (!$maxCand) {
	echo "<br>";
	echo "Missing parameter maximum multiplicand";
	$valid = false;
}
if (!$minLier) {
	echo "<br>";
	echo "Missing parameter minimum multiplier";
	$valid = false;
}
if (!$maxLier) {
	echo "<br>";
	echo "Missing parameter maximum multiplier";
	$valid = false;
}

//check that the inputs are numbers
if (!is_numeric($minCand)) {
	echo "<br>";
	echo "Minimum Multiplicand must be an integer";
	$valid = false;
}
if (!is_numeric($maxCand)) {
	echo "<br>";
	echo "Maximum Multiplicand must be an integer";
	$valid = false;
}
if (!is_numeric($minLier)) {
	echo "<br>";
	echo "Minimum Multiplier must be an integer";
	$valid = false;
}
if (!is_numeric($maxLier)) {
	echo "<br>";
	echo "Maxiumum Multiplier must be an integer";
	$valid = false;
}

if ($valid) {
	echo "<h3>Table</h3>";
	echo "<table border>";

	for($i = $minCand-1; $i <= $maxCand; $i++) {
		echo "<tr>";
		for($j = $minLier-1; $j <= $maxLier; $j++) {
			if(($i == $minCand-1) and ($j == $minLier-1)) {
				echo "<td></td>";
			} else if ($i == $minCand-1) {
				echo "<td>" . $j . "</td>";
			} else if ($j == $minLier-1) {
				echo "<td>" . $i . "</td>";
			} else {
				echo "<td>" . $i * $j . "</td>";
			}
		}
		echo "</tr>";
	}
	echo "</table>";
}


?>

</body>
</html>