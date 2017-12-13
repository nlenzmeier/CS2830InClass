<?php
	//set MIME type
	header('Content-type: image/jpeg');
	
	$handle = fopen('cool.gif', 'rb');
	
	//8 kilobytes
	$bufferLen = 8192;

	//reading picture and print in browser
	while($buffer = fread($handle, $bufferLen)){
		print $buffer;
	}
	
	//closes our files
	fclose($handle);
?>