<?php
	require 'phpscipts/groups.php';
	$group = new grouptEdit();
	if ($_POST && !empty($_POST['gname']) && !empty($_POST['user1_id']) || !empty($_POST['user2_id']) || !empty($_POST['user3_id']) || !empty($_POST['user4_id']) || !empty($_POST['user5_id']) || !empty($_POST['user6_id']) || !empty($_POST['user7_id'])) {
		$resp = $groupEdit->add();
	}
?>


<?php
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'pass123');
define('DB_NAME', 'members');

class groupEdit
{
	function add($gname,$user1,$user2,$user3,$user4,$user5,$user6,$user7, $_SESSION['user_id'])
	{
		$conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME) or die("Could not connect to database.");
		$query = 'INSERT INTO groups (user1_id,user2_id,user3_id,user4_id,user5_id,user6_id,user7_id,user8_id,name) VALUES (?,?,?,?,?,?,?,?,?))';
		if ($sta = $conn->prepare($query)) {
			$sta->bind_param('sssssssss', $user1, $user2, $user3, $user4, $user5, $user6, $user7, $user8, $gname);
			$sta->execute();
		}
		return "Group Added.";
	}

	
	function remove($_SESSION['user_id'],$gname)
	{
		$conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME) or die("Could not connect to database.");
		$query = 'DELETE FROM events WHERE user_id = ? AND name = ?';
		if ($sta = $conn->prepare($query)) {
			$sta->bind_param('is', $user_id, $gname);
			$sta->execute();
		}
		return 'Remove Successfully!';
	}
}*/
?>

