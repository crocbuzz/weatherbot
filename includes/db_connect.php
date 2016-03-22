<?php
	$username = "root";
	$password = "";

	$connection = mysqli_connect("localhost" , "$username" , "$password", 'weatherbot') or die(mysqli_error($connection));  //(host,username,password,) Connects to mysql server. Throws error if it cannot connect.
?>