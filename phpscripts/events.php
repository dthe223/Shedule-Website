<?php
/*	require 'phpscripts/events.php';
	$event = new eventEdit();
	if($_POST && !empty($_POST['ename']) && !empty($_POST['estarthr']) && !empty($_POST['estartmin']) && !empty($_POST['eendhr']) && !empty($_POST['eendmin']) && $mon || $tues||$wed||$thur||$fri||$sat||$sun) {
	$resp = $eventEdit->add($_POST['ename'], $_POST['estarthr'], $_POST['estartmin'], $_POST['startam'], $_POST['eendhr'], $_POST['eendmin'], $_POST['endam'], $_POST['mon'], $_POST['tues'], $_POST['wed'], $_POST['thur'], $_POST['fri'], $_POST['sat'], $_POST['sun']);
	}*/
?>


<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'pass123');
define('DB_NAME', 'members');

class eventEdit
{
	function add($ename,$estarthr,$estartmin,$startam,$eendhr,$eendmin,$endam,$mon,$tues,$wed,$thur,$fri,$sat,$sun)
	{
		$estart = $estarthr . $estartmin;
		$estart = (int)$estart;
		$eend = $eendhr . $eendmin;
		$eend = (int)$eend;
		if (!$startam)
			$estart += 1200;
		if (!$endam)
			$eend += 1200;
		if ($eend < $estart)
			$eend += 2400;
		$days = '';
		if ($mon)
			$days .= 'M';
		if ($tues)
			$days .= 'T';
		if ($wed)
			$days .= 'W';
		if ($thur)
			$days .= 'R';
		if ($fri)
			$days .= 'F';
		if ($sat)
			$days .= 'S';
		if ($sun)
			$days .= 'Y';

		$conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME) or die("Could not connect to database.");
		$query = 'INSERT INTO events (user_id, days, start, end, name) VALUES (?,?,?,?,?)';
		if ($sta = $conn->prepare($query)) {
			$sta->bind_param('isiis', 10, $days, $estart, $eend, $ename);
			$sta->execute();
		}
		return 'Added Successfully!';
	}

	
	function remove($user_in=1/*$_SESSION['user_id']*/,$ename)
	{
		$conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME) or die("Could not connect to database.");
		$query = 'DELETE FROM events WHERE user_id = ? AND name = ?';
		if ($sta = $conn->prepare($query)) {
			$sta->bind_param('is', $user_id, $ename);
			$sta->execute();
		}
		return 'Remove Successfully!';
	}
}
?>
