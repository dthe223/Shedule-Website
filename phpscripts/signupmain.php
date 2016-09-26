<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'members');
define('DB_USER', 'root');
define('DB_PASSWORD', 'pass123');

$conn = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db = mysql_select_db(DB_NAME,$conn) or die("Failed to connect to MySQL: " . mysql_error());
echo 'Connected successfully';

mysql_select_db(DB_NAME);

function newuser()
{
	$username = $_Post['username'];
	$password = $_Post['password'];
	$query = "INSERT INTO users VALUES ('$username','$password')";
	$data = mysql_query($query) or die(mysql_error());
	if ($data)
		echo "Your registration is complete!";
}

function signup()
{
	if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['ver_password')) 
	{
		$query = mysql_query("SELECT * FROM users WHERE userName = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error());
		
		if (!row = mysql_fetch_array($query) or die(mysql_error()))
			newuser();

		else
			echo "This account is already registered.";
	}
}

if (isset($_POST['submit']))
	signup();

mysql_close($conn);
?>
