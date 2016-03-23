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
            
            switch (weather) {
	            case "Partly Cloudy":
	            	$("#image img").attr("src","img/cloudy.png");
	            	break;
	            case "Mostly Cloudy":
	            	$("#image img").attr("src","img/overcast.png");
	            	break;
	            case "Clear":
	            	$("#image img").attr("src","img/sunny.png");
	            	break;
	            case "Overcast":
	            	$("#image img").attr("src","img/overcast.png");
	            	break;
	            case "Rain":
	            	$("#image img").attr("src","img/rainy.png");
	            	break;
	            case "Snow":
	            	$("#image img").attr("src","img/snowy.png");
	            	break;
            }
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
            
            switch (weather) {
	            case "Partly Cloudy":
	            	$("#image img").attr("src","img/cloudy.png");
	            	break;
	            case "Mostly Cloudy":
	            	$("#image img").attr("src","img/overcast.png");
	            	break;
	            case "Clear":
	            	$("#image img").attr("src","img/sunny.png");
	            	break;
	            case "Overcast":
	            	$("#image img").attr("src","img/overcast.png");
	            	break;
	            case "Rain":
	            	$("#image img").attr("src","img/rainy.png");
	            	break;
	            case "Snow":
	            	$("#image img").attr("src","img/snowy.png");
	            	break;
            }

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



