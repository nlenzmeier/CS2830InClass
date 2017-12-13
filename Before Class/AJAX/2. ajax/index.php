<!DOCTYPE html>
<html>
<head>
	<title>AJAX Example 1: Eistein Quotes</title>
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
			min-height: 200px;
		}
	</style>

	<script>

	
	
	</script>
</head>
<body>
	<h1>Einstein Quotes</h1>
	
	<input type="button" value="Quote 1" onclick="updateInfo('quote1')">
	<input type="button" value="Quote 2" onclick="updateInfo('quote2')">
	<input type="button" value="Quote 3" onclick="updateInfo('quote3')">
	<input type="button" value="Quote 4" onclick="updateInfo('quote4')">
	<input type="button" value="Quote 5" onclick="updateInfo('quote5')">
	
	<div id="infoBox">Click one of the buttons above to get an Einstein quote.</div>
</body>
</html>
