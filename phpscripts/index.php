<?php
echo "Hello, my name is " . "Robotron 7000!<br>";
echo "<br>";
echo "<b> DAAAAAAAMN DANIEL!!!!!!!! </b>";
echo "<br>";
echo "<br>";
echo date('Y-m-d H:i:s');
echo "<br>";
//phpinfo();

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "pass123";

// Create connection
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

// Check connection
if (! $conn) 
	die("Could not connect: " . mysql_error());

echo "Connected successfully";


mysql_close($conn);
?>
