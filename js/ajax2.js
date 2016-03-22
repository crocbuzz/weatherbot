function loadXMLDoc(url){

    var nhl = document.getElementById("nhl").value;
    var httpRequest;
    var output, xmldoc, teamSearch, i;
    if (window.XMLHttpRequest) {
        // code for modern browsers
        httpRequest = new XMLHttpRequest();
    } else { // code for older IE
        httpRequest = new ActiveXObject("Microsoft.XMLHTTP");
    }

    httpRequest.onreadystatechange = function () {
        if (httpRequest.readyState === 4 && httpRequest.status === 200) {
            output = "<table border='1'><tr><th>Team</th><th>Wins</th><th>Losses</th><th>Overtime</th><th>Goals For</th><th>Goals Against</th><th>Conference</th><th>Division</th></tr>";
            xmldoc = httpRequest.responseXML.documentElement.getElementsByTagName("team-standing");
            
            var xmlEnd = xmldoc.length;

            for (i = 0; i < xmlEnd; i++) {
                
                var nhlteam = xmldoc[i].getAttribute("name");
                var name = xmldoc[i].getAttribute("name");
                var wins = xmldoc[i].getAttribute("wins");
                var losses = xmldoc[i].getAttribute("losses");
                var overtime = xmldoc[i].getAttribute("overtime");
                var ptsfor = xmldoc[i].getAttribute("goalsFor");
                var ptsagt = xmldoc[i].getAttribute("goalsAgainst");
                var conference = xmldoc[i].getAttribute("conference-name");
				var division = xmldoc[i].getAttribute("division-name");
                    
            
                if (nhl == nhlteam){
				
                output = output + "<tr>";
                
                    try {
                        output = output + "<td>" + name + "</td>";
                        output = output + "<td>" + wins + "</td>";
                        output = output + "<td>" + losses + "</td>";
                        output = output + "<td>" + overtime + "</td>";
                        output = output + "<td>" + ptsfor + "</td>";
                        output = output + "<td>" + ptsagt + "</td>";
                        output = output + "<td>" + conference + "</td>";
						output = output + "<td>" + division + "</td>";
                        
                    } catch (error) {
                        output = output + "<td> No Data Found </td>";
                    }

                    output = output + "</tr>";
                }
                
            }
		
            
            output = output + "</table>";
            
            document.getElementById('Team').innerHTML = output;
        }
	}
    httpRequest.open("GET", url, true);
    httpRequest.send();
}

