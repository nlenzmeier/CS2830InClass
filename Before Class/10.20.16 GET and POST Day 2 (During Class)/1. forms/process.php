<?php

	/* GET is used for ...
	
		1) Requesting something 
		2) Navigation
		
		
		POST is used for ... 
			
			1) submitting data
			2) actions
			3) login
			4) file upload
			
			... and many more 	
	*/
	
	if($_SERVER['REQUEST_METHOD'] === 'POST') {
		
		print "<br>The server request method is POST!<br><br>"; 
		
		foreach ($_POST as $key => $value) {
			print "$key = $value<br>"; 
			
		}
	
	}
	
	if($_SERVER['REQUEST_METHOD'] === 'GET') {
		
		print "<br>The server request method is GET!<br><br>"; 
		
		foreach ($_GET as $key => $value) {
			
			print "$key = $value<br>"; 
			
		}
	
	
	}
	
	
	

?>