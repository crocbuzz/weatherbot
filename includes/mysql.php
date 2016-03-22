<?php


		$ip = $_SERVER['REMOTE_ADDR'];

		$sql = "SELECT * FROM weatherbot WHERE ipaddress='" . $ip . "'";
		$result = mysqli_query($connection, $sql);
				
			if ($result != NULL) {
				$users = mysqli_fetch_assoc($result);
				if (is_array($users)) {
			        if (!in_array($ip, $users, true)) {
			            $users->users[] = $users;
			            $sql = "INSERT INTO weatherbot (ipaddress) VALUES(" . $ip . ")";
						mysqli_query($connection, $sql);
						$xyz = "Your IP address has been logged.";
			        } else {
				        $xyz =  "Welcome back!";
			        }
			    }
			} else {
				$sql = "INSERT INTO weatherbot (ipaddress) VALUES(" . $ip . ")";
				mysqli_query($connection, $sql);
				$xyz = "Your IP address has been logged.";
			}
				

?>