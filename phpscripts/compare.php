<?php

	define('DB_SERVER', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', 'pass123');
	define('DB_NAME', 'members');


class compare{
	function compare_day($day, $user_id_1, $user_id_2){	// Compare two entire days of events, return..?
		$connection = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME) or die("Could not connect to database.");
		$query = "SELECT start, end FROM events WHERE day = $day AND user_id = $user_id_1";
		mysqli_select_db(DB_NAME);
		$response_1 = mysqli_query($query, $connection);
		$query = "SELECT start, end FROM events WHERE day = $day AND user_id = $user_id_2";
		$response_2 = mysqli_query($query, $connection);
		if($response_1 == NULL && $response_2 == NULL)
			return NULL;
		if($response_1 == NULL)
			return $response_2;
		if($response_2 == NULL)
			return $response_1;

		$data1 = $response_1->fetch_array(MYSQLI_ASSOC);
		$data2 = $response_2->fetch_array(MYSQLI_ASSOC);
		$final_schedule = array();
		foreach($data1 as $val1){
			foreach($data2 as $val2){
				if($val2['start'] > $val1['start'] && $val2['end'] < $val1['end']){
					$final_schedule = array_merge($final_schedule, $val1);
					continue;
				}
				if($val1['start'] > $val2['start'] && $val1['end'] < $val2['end']){
					$final_schedule = array_merge($final_schedule, $val2);
					continue;
				}


			}
		}

	}
}
