<?php
	/* Created by Mr. Wergeles on November 9, 2016 */ 
   
   $dbhot = 'localhost';
   $dbuser = 'root';
   $dbpass = 'nicolle';
   $dbname = 'CS2830';
   
   require_once "../db.conf";
   
   $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
   
   if($mysqli -> connect_error){
   		die('Connection Error (' . $mysqli -> connect_errno . ') ' . $mysqli -> connect_error);
   }
   else {
   		//echo 'Connection Successful!';
   		print "Connected! Status: " . $mysqli -> host_info . "\n";
   }

	$query = "select name, quantity, cost from foodStock where cost > 10";
	
	$result = $mysqli-> query($query);
	
	echo "<br>\n";
	
	print_r($result);
	
	print "<br><br>\n\n";
	
	//$row = $result -> fetch_assoc();
	
	//print_r($row);
	
	print "<br><br>\n\n";
	
	while($row = $result->fetch_assoc() ){
		//print_r($row);
		print "I have " . $row['quantity'] . ' ' .$row['name'] . ' for $' . $row['cost'];
		print "<br>\n";
	}
	
	$result -> close();
	
	$mysqli -> close();

?>