<?php
	$username = "al089314";
	$password = "Funkychicken21*";

	$connection = mysql_connect("sulley.cah.ucf.edu" , "$username" , "$password") or die(mysql_error());  //(host,username,password,) Connects to mysql server. Throws error if it cannot connect. 
	mysql_select_db("al089314" , $connection); //(nameOfDatabase , mysql connection variable)
?>