<?php
	
	date_default_timezone_set('America/Chicago');
	
	$message = empty($_GET['message']) ? '' : $_GET['message'];
	
	$result = $message . ' on ' . date('Y-m-d h:ia');
	
	print $result;
	
?>