<!DOCTYPE html>
<html>
<head>
	<title>AJAX Intro</title>
	<script>
        
       	function getContent(){
       		//create an xmlHttpRequest object
       		var xmlHttp = new XMLHttpRequest();
       		
       		xmlHttp.onreadystatechange = function(){
       			if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
       				var response = xmlHttp.responseText;
       				
       				var contentBox = document.getElementById("contentBox");
       				
       				contentBox.innerHTML = response;
       			}
       		};
       		
       		document.getElementById('contentBox').innerHTML = "Loading...";
       		
       		xmlHttp.open("GET", "responder.php", true);
       		
       		xmlHttp.send();
       		
       	}
		
	</script>
</head>
<body>
	<h1>Content</h1>
	<p id="contentBox"></p>
	<button type="button" onclick="getContent()">Get Content</button>
</body>
</html>
