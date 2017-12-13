<!DOCTYPE html>
<html>
<head>
	<title>Quote Request Using jQuery</title>
	<script src="../jquery-1.11.2.min.js"></script>
	<script>
	function getContent() {
		/*
			quoteService.php provides 3 functions:
				1. getQuote: gets a quote
				2. countQuotes: counts the # of quotes
				3. getRandom: gets a random quote
			
			We will use a JavaScript object, options, to communicate what function we'd like to request.
		*/
		
		var options;
		
		options = {
			"action": "countQuotes"
		};
		
		options = {
			"action": "getQuote"
		};
		
		options = {
			"action": "getQuote", 
			"num" : 3
		};
		
		options = {
			"action": "getRandom"
		};
		
		$.get("quoteService.php", options, function(data) { 
			$('#contentBox').html(data);
		});
		
        
	}
	</script>
</head>
<body>
	<h1>Einstein Quotes</h1>
	<div id="contentBox"></div>
	<button type="button" onclick="getContent()">Get Content</button>
</body>
</html>