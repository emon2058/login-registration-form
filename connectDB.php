<!doctype html>
<html>
<head>
<title>Connect MYSQL</title>
</head>
<body>

<?php
    $host="localhost";
	$dbUser="emon";
	$dbPass="emon2058";
	$dbName="practice";
	
	$connect=mysqli_connect($host,$dbUser,$dbPass,$dbName);
	
	if($connect==false){

		echo"Not connected".mysqli_error($connect);
	}
	
?>

</body>
</html>