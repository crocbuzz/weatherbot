<?php

	$xyz;
	$flag = false;
	$ip = $_SERVER['REMOTE_ADDR'];

	//$select_query = "SELECT * FROM weatherbot WHERE ipaddress='$ip'";
	//echo $select_query;
	//$select_result = $connection->query($select_query);
	
	$insert_query = "INSERT INTO weatherbot (id,ipaddress) VALUES(NULL,'$ip')";
	//echo $insert_query;
	
	$select_query = "SELECT * FROM weatherbot";
	$result = $connection->query($select_query);
	
    if($connection->error) {
        print "Query failed: ".$connection->error;
    }
		

		while($users = $result->fetch_object()) {
		
			$a = $users->ipaddress;
			
			if ($a == $ip) {
				$flag = true;
			} else {
				$flag = false;
			}	
		}

	if ($flag == false){
		$insert_result = $connection->query($insert_query);
		if ($connection->error){
			print("Query Failed".$connection->error);
		}
		$xyz = "Your IP address has been logged.";
	} else {
		$xyz =  "Welcome back!";	
	}
	
	$connection->close();

?>