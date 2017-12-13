<!DOCTYPE html> 
<!-- Reference: 
		1) http://www.w3schools.com/js/js_object_prototypes.asp
		2) https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Object/prototype
--> 
<html>
<head>
	<title>Retrieve Data</title>
	<script src="../jquery-1.11.2.min.js"></script>
	<script>
		
        $(function(){
        	var advert = new Advertisement();
        	advert.Retrieved(onDataRecieved);
        });
	
		//advertisement class
		function Advertisement(){
			
		}
		
		//add retrieved method to all advertisements
		Advertisement.prototype.Retrieved = function(onSuccess){
			$.get('info.php', onSuccess);
		}
		
		//function to call when retrieve get done
		var onDataRecieved = function(data) {
			alert(data);	
		};
		
	</script>
</head>
<body>
This is a data retrieval example. An alert will pop up with the retrieved data.
</body>
</html>
