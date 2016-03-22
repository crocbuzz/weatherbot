<?php 
include("includes/functions.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
			<title>WeatherBot</title>		
			
		<link rel="stylesheet" href="css/reset.css" />	
		<link rel="stylesheet" href="css/pure.min.css">
		<link rel="stylesheet" href="css/grids-responsive.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/animations.css">	
		<link rel="stylesheet" href="css/styles.css" />
	</head>

	<body>
		<div id="wrapper">
			<div id="header"><h1>Weather Bot</h1></div>
			<div id="nav">
				<ul>
					<li><a href="#">Refresh</a></li>
					<li><a href="#">Weather</a></li>
					<li><a href="#">Themes</a></li>
					<li><a href="#">Settings</a></li>
				</ul>
			</div>
			
			<div class="pure-g">
				<div class="pure-u-1">
					<h1></h1>
					<div id="selector">	
						<select class="pure-input-rounded">
							<option>Miami</option>
							<option>Orlando</option>
							<option>Tampa</option>
							<option>Destin</option>
							<option>Pensacola</option>
						</select>
					</div>
				</div>
			</div>
			
			
			<div class="pure-g">
                <div class="pure-u-1 pure-u-md-1-2">
                    <div id="image">
                        <img src="img/sunny.png" alt="sunny" />
                    </div>
                </div>
                <div class="pure-u-1 pure-u-md-1-2">
                    <div id="stats">
                        <p>
                            These are some stats<br>
                            Some more stats<br>
                            Even more stats<br>
                            The last stat
                        </p>
                    </div>
                </div>
			</div>
			
	
	
		
		
		
		</div>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>
		<script type="text/javascript" src="js/scripts.js"></script>
	</body>
</html>