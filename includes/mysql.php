<?php
	
	if(isset($_GET['submit'])){
		$search = $_GET['search'];

	//Checking to see if data exists. If it doesn't, it creates it.
		$sql = "SELECT * FROM weatherbot WHERE date='.date(YYYY-MM-DD).' LIMIT 1";
		$result = mysql_query($sql, $connection);
		if (mysql_num_rows($result) == 1){
			echo "Weather data already exists for today.";
		} else {
			$sql = "INSERT INTO weatherbot (date) VALUES(date(YYYY-MM-DD))";
			mysql_query($sql,$connection);
			echo "Weather data saved successfully.";
			//header("Refresh: 5; url=page_index.php");
		}
	}

?>
