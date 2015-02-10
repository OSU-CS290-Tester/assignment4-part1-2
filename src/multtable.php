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
echo "Multtable.php"."<br>";
//multiplicand = y axis, multiplier = x axis
$minCand = $_GET["min-multiplicand"];
$maxCand = $_GET["max-multiplicand"];
$minLier = $_GET["min-multiplier"];
$maxLier = $_GET["max-multiplier"];
$firstCand = $minCand - 1;
$firstLier = $minLier - 1;

if($minCand > $maxCand){
	echo "Minimum multiplicand is larger than maximum multiplicand";
}

?>

</body>
</html>