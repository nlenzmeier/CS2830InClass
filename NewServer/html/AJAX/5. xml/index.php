<!DOCTYPE html>
<html>
<head>
	<title>AJAX - Response as XML</title>
	<script>
	function getMovies() {
		var xmlHttp = new XMLHttpRequest();
		
		xmlHttp.onload = function() {
			if (xmlHttp.status == 200) {
				
				var xmlDoc = xmlHttp.responseXML;
				
				var output = '';
				
				movieTitles = xmlDoc.getElementsByTagName('title');
				
				console.dir(movieTitles);
				
				for(var i=0; i < movieTitles.length; i++){
					output += movieTitles[i].childNodes[0].nodeValue + "<br>";
				}
				
				var divObj = document.getElementById('movieBox');
				
				divObj.innerHTML = output;
			}
		}
		
		xmlHttp.open("GET", "movies.xml", true);
		xmlHttp.send();
	}
	</script>
</head>
<body>
	<h1>My Movies</h1>
	<div id="movieBox"></div>
	<button type="button" onclick="getMovies()">Get Movie Titles</button>
</body>
</html>
