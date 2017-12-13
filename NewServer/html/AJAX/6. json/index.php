<!DOCTYPE html>
<html>
<head>
	<title>AJAX - Response as JSON</title>
	<script>
	
        function getContent() {
            // Loading feedback
            document.getElementById("contentBox").innerHTML = "Loading...";
            
            
            var xmlHttp = new XMLHttpRequest();
            
            xmlHttp.onload = function() {
                if (xmlHttp.status == 200) {
                    var contentBox = document.getElementById("contentBox");
                    
                    // Get the response text
                    var response = xmlHttp.responseText;
                    
                    response = JSON.parse(response);
                    
                    contentBox.innerHTML = response.name + " has a pet " + response.pet + " and CS2830 is " + response.CS2830;
                    
                }
            };
            
            xmlHttp.open("GET", "json.php", true);
            xmlHttp.send();
            
        }
	
	</script>
</head>
<body>
	<h1>My Content</h1>
	<div id="contentBox"></div>
	<button type="button" onclick="getContent()">Get Content</button>
</body>
</html>