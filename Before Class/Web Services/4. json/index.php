<!DOCTYPE html>
<html>
<head>
	<title>jQuery AJAX - responseJSON</title>
    <script src="../jquery-1.11.2.min.js"></script>
	<script>
	
	// Reference: http://api.jquery.com/jQuery.getJSON/
	
        function getContent() {
            
            
            
            
            
            document.getElementById("contentBox").innerHTML = "Loading...";
            
            var xmlHttp = new XMLHttpRequest();
            
            xmlHttp.onload = function() {
                if (xmlHttp.status == 200) {
                    var contentBox = document.getElementById("contentBox");
                    //contentBox.innerHTML = xmlHttp.responseText;
                    
                    var response = xmlHttp.responseText;
                    
                    console.dir(response);
                    
                    response = JSON.parse(response);
                    
                    console.dir(response);
                    
                    contentBox.innerHTML = response.name + " has a pet " + response.pet;
                }
            };
            
            xmlHttp.open("GET", "json.php", true);
            xmlHttp.send();
            
        }
	
	</script>
</head>
<body>
	<h1>My Content</h1>
	<div id="contentBox">Hello World</div>
	<hr>
	<button type="button" onclick="getContent()">Get Content</button>
</body>
</html>