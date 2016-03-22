<?php

	//Checking to see if data exists. If it doesn't, it creates it.
		$ip = $_SERVER['REMOTE_ADDR'];

		$sql = "SELECT * FROM weatherbot WHERE ipaddress='" . $ip . "'";
		$result = mysqli_query($connection, $sql);
        $users = mysqli_fetch_all($result);
		if (in_array($ip, $users)){
			$xyz =  "Welcome back!";
		} else {
			$sql = "INSERT INTO weatherbot (ipaddress) VALUES(" . $ip . ")";
			mysqli_query($connection, $sql);
			$xyz = "Your IP address has been logged.";
		}

?>
