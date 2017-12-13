<!DOCTYPE html>
	
	<!-- 
Nicolle Lenzmeier
	nalyv2
	14209824
	October 28, 2016
 -->
 
<html>
<head>
	<title>Challenge 9</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="jquery-1.11.2.min.js"></script>
    
	
	<script>
        
        /* Reference: 
        	1) http://api.jquery.com/category/ajax/
        	2) http://api.jquery.com/jQuery.get/
        */
        
		// function getContent() {
//            
// 			$("#contentBox").html("Loading...");
// 			
// 			$.get("response.php", function(data){
// 				$("#contentBox").html(data);
// 			});   
// 		}
// 		
// 		function getXMLDinos(){
// 			$("#contentBox").html("Loading...");
// 			
// 			$.get("2response.php", function(data){
// 				$("#contentBox").html(data);
// 			});
// 		}
// 		
// 		function getJSONDinos(){
// 			$("#contentBox").html("Loading...");
// 			
// 			$.get("3response.php", function(data){
// 				$("#contentBox").html(data);
// 			});
// 		}
		
		
		 function getContent() {
            // Loading feedback
            document.getElementById("contentBox").innerHTML = "Loading...";
            
            
            var xmlHttp = new XMLHttpRequest();
            var output = '';
            
            xmlHttp.onload = function() {
                if (xmlHttp.status == 200) {
                    var contentBox = document.getElementById("contentBox");
                    
                    // Get the response text
                    var response = xmlHttp.responseText;
                    
                    response = JSON.parse(response);
                    for(i=0; i< response.length; i++){
                    	output+="<li>" + response[i].name + "was a" + response[i].diet + "</li>";
                    }
                	var divObj = document.getElementById("contentBox");
                	divObj.innerHTML = "<ul>" + output + "</ul>";
                    
                }
            };
            
            xmlHttp.open("GET", "http://ec2-54-162-120-82.compute-1.amazonaws.com/Challenge9/webService.php?content=data&format=json", true);
            xmlHttp.send();
            
        }
        
        function getXML() {
		var xmlHttp = new XMLHttpRequest();
		
		xmlHttp.onload = function() {
			if (xmlHttp.status == 200) {
				
				var xmlDoc = xmlHttp.responseXML;
				var output = '';
				
				dinoTitles = xmlDoc.getElementsByTagName('name');
				dinoPeriods = xmlDoc.getElementsByTagName('period');
				
				
			
				
				for(i=0; i< dinoTitles.length; i++){
                    output+="<li>" + dinoTitles[i].childNodes[0].nodeValue + "lived during the " + dinoPeriods[i].childNodes[0].nodeValue + "</li>";
                }
				
				var divObj = document.getElementById('contentBox');
				
				divObj.innerHTML = "<ul>" + output + "</ul>";
			}
		}
		
		xmlHttp.open("GET", "http://ec2-54-162-120-82.compute-1.amazonaws.com/Challenge9/webService.php?content=data&format=xml", true);
		xmlHttp.send();
	}
		
		function getHome(){
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
       		
       		xmlHttp.open("GET", "http://ec2-54-162-120-82.compute-1.amazonaws.com/Challenge9/webService.php?content=home", true);
       		
       		xmlHttp.send();
       		
       	}
		
		
		
	</script>
</head>
<body>

	<div id="style">
	<h1>Dinosaur Web Application</h1>
	
	<div id="formbox">
	<button type="button" onclick="getHome()">Home</button>
	<button type="button" onclick="getXML()">XML Dinos</button>
	<button type="button" onclick="getContent()">JSON Dinos</button>

 
 
 	<!-- THIS DOES THE SAME THING AS ABOVE!!!! 
 	<input type="button" value="Home" onclick="getContent()">
	<input type="button" value="XML Dinos" onclick="getXMLDinos()">
	<input type="button" value="JSON Dinos" onclick="getJSONDinos()">
 -->
	
	<p id="contentBox"></p>
	</div>
	</div>
</body>
</html>