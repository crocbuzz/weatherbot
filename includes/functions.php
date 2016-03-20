<?php

$orlandofeed = file_get_contents("http://api.wunderground.com/api/67841e7ca89044b1/conditions/q/FL/Orlando.xml");
$tampafeed = file_get_contents("http://api.wunderground.com/api/67841e7ca89044b1/conditions/q/FL/Tampa.xml");
$miamifeed = file_get_contents("http://api.wunderground.com/api/67841e7ca89044b1/conditions/q/FL/Miami.xml");

$orlandoxml = simplexml_load_string($orlandofeed);
$tampaxml = simplexml_load_string($tampafeed);
$miamixml = simplexml_load_string($miamifeed);

$orlandoxml->asXML('data/Orlando.xml');
$tampaxml->asXML('data/Tampa.xml');
$miamixml->asXML('data/Miami.xml');


function fetch($x) {
	$temp = simplexml_load_file('data/' . $x . '.xml')->current_observation->temp_f . "&deg;F";
	$weather = simplexml_load_file('data/' . $x . '.xml')->current_observation->weather;

	echo "$temp<br>$weather";

	$file = fopen("city.txt", "w+");
	fwrite($file, "$x");
	fclose($file);
}


?>