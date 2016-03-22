/*
JQUERY4U = {
	multiply: function(x,y) {
		return (x * y);
	}
}
//function call
console.log(JQUERY4U.multiply(2,2));
*/

$("select").change(function() {
	$.ajax({
		url: "data/Orlando.xml", 
		success: function(xml) {
			var weather = $(xml).find('weather').text();
			var temperature_string = $(xml).find('temperature_string').text();
			var relative_humidity = $(xml).find('relative_humidity').text();
			var wind_string = $(xml).find('wind_string').text();
			alert(data);
		},
		error: function() {
			alert("it didn't work");
		}
	});
});


$("#header").click(function() {
    $("#nav").slideToggle("slow", function() {
        // Animation Complete
    });
});



