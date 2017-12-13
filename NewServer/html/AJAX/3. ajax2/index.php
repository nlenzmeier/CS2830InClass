<!DOCTYPE html>
<html>
<head>
	<title>AJAX Example 2: Eistein Quotes</title>
	<style>
		body {
			font-family: arial, helvetica, sans-serif;
			font-size: 12pt;
		}
		
		h1 {
			font-size: 1.2em;
		}
		
		#infoBox {
			border: 1px solid black;
			padding: 15px;
			width: 350px;
			min-height: 150px;
		}
		
		#stateIndicator {
			position: relative;
			width: 450px;
			border: 1px solid black;
			margin-top: 10px;
			padding: 15px;
			background-color: #ccffcc;
		}
		
		#indicator {
			position: absolute;
			left: 150px;
			top: 150px;
		}
		
		.state {
			float: left;
			border: 1px solid black;
			padding: 4px;
		}
		
		.clear {
			clear: both;
			
		}
	</style>

	<script>
		function updateInfo(infoId){
			var xmlHttp = new XMLHttpRequest();
			
			xmlHttp.onreadystatechange = function(){
			
			var rs = xmlHttp.readyState;
			var indObj = document.getElementById('s' + rs);
			
			indObj.innerHTML = rs;
			
			if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
				elemObj = document.getElementById('infoBox');
				
				elemObj.innerHTML = xmlHttp.responseText;
			}
		};
		var rz = xmlHttp.readyState;
		var indObj = document.getElementById('s' + rs);
		
		indObj.innerHTML = rs;
		
		var reqURL = "updateInfo.php?infoId=" + infoId;
		
		xmlHttp.open("GET", reqURL, true);
		xmlHttp.send();
		
	}
	
		function clearSates(){
			for(var i = 0; i< 5; i++){
				var indObj = document.getElementById('s' + i);
				indObj.innerHTML = '*';
			}
		}
	
	</script>
</head>
<body>
	<h1>Einstein Quotes</h1>
	
	<input type="button" value="Quote 1" onclick="updateInfo('quote1');">
	<input type="button" value="Quote 2" onclick="updateInfo('quote2');">
	<input type="button" value="Quote 3" onclick="updateInfo('quote3');">
	<input type="button" value="Quote 4" onclick="updateInfo('quote4');">
	<input type="button" value="Quote 5" onclick="updateInfo('quote5');">
	
	<div id="infoBox">Click one of the buttons above to get an Einstein quote.</div>
	
	<div id="stateIndicator">
		<div>
		Ready state values:<br>
		0: request not initialized<br>
		1: server connection established<br>
		2: request received<br>
		3: processing request<br>
		4: request finished and response is ready<br>
		<br>
		<br>
		<br>
		</div>
		<div id="indicator">
			<div id="s0" class="state">*</div>
			<div id="s1" class="state">*</div>
			<div id="s2" class="state">*</div>
			<div id="s3" class="state">*</div>
			<div id="s4" class="state">*</div>
			<input type="button" value="Clear" onclick="clearStates();">
			<div class="clear"></div>
		</div>
		
	</div>
</body>
</html>
