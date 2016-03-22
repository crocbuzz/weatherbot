$(document).ready(function () {
    var selected = $("select option:selected").text();
    $.ajax({
        url: 'data/' + selected + '.xml',
        success: function(xml) {
            var weather = $(xml).find('weather').text();
            var temperature_string = $(xml).find('temperature_string').text();
            var relative_humidity = $(xml).find('relative_humidity').text();
            var wind_string = $(xml).find('wind_string').text();

            $("#weather").html(weather);
            $("#temperature").html(temperature_string);
            $("#humidity").html(relative_humidity);
            $("#wind").html(wind_string);
        },
        error: function() {
            alert("it didn't work");
        }
    });
});



$("select").change(function() {
    var selected = $("select option:selected").text();
    $.ajax({
		url: 'data/' + selected + '.xml',
		success: function(xml) {
			var weather = $(xml).find('weather').text();
			var temperature_string = $(xml).find('temperature_string').text();
			var relative_humidity = $(xml).find('relative_humidity').text();
			var wind_string = $(xml).find('wind_string').text();

            $("#weather").html(weather);
            $("#temperature").html(temperature_string);
            $("#humidity").html(relative_humidity);
            $("#wind").html(wind_string);
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



