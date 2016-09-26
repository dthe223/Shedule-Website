<?php

	define('DB_SERVER', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', 'pass123');
	define('DB_NAME', 'members');

	class membership{

		function signup($uname, $pword, $vpword){
			if ($pword != $vpword){
				return "Passwords do not match.";	
			}
			$connection = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME) or die("Could not connect to database.");
			$query = "SELECT * FROM users WHERE username = ?";
			if($sta = $connection->prepare($query)){
				$sta->bind_param('s', $uname);
				$sta->execute();
				if($sta->fetch()){
					$sta->close();
					return "This account is already registered.";
				}
				else {
					$query = "INSERT INTO users (username,password,public) VALUES (?,?,1)";
					$sta = $connection->prepare($query);
					$sta->bind_param('ss', $uname, $pword);
					$sta->execute();
					return "Successfully registered!";
				}
				
			}

		}

		function login($uname, $pword){
			$connection = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME) or die("Could not connect to database.");
			$query = "SELECT * FROM users WHERE username = ? AND password = ? LIMIT 1";
			if($sta = $connection->prepare($query)){
				$sta->bind_param('ss', $uname, $pword);
				$sta->execute();
				if($sta->fetch()){
					$sta->close();
					$_SESSION['username'] = $uname;
					header('location: home.html');
					return True;
				} else return False;
			}
		}

		function logout(){
			if(isset($_SESSION['username'])){
				unset($_SESSION['username']);
				session_destroy();
				header('location: index.html');
			}
		}

		function lookup($uname){
			$connection = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME) or die("Could not connect to databse.");
			$query = "SELECT * FROM users WHERE username = ? LIMIT 1";
			if($sta = $connection->prepare($query)){
				$sta-> bind_param('s', $uname);
				$sta->execute();
				$result = $sta->get_result();
				$row = mysqli_fetch_array($result, MYSQLI_NUM);
				if ($row[0] == NULL)
					return "This is a dumb language";
				$query = "SELECT * FROM events WHERE user_id = ? LIMIT 1";
				if($sta = $connection->prepare($query)){
					$sta-> bind_param('s', $row[0]);
					$sta-> execute();
					$result = $sta->get_result();
					$rows = mysqli_fetch_array($result, MYSQLI_ASSOC);
					if($rows[0] == NULL)
						return NULL;
					return $rows;
					}
				 return NULL;
			}
		}
	}
