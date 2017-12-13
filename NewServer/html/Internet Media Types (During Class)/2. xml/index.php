<?php
	
	header("Content-type: text/xml");
	
	$handle = fopen("movies.xml", "r");
	
	$bufferLen = 8192;
	
	while($buffer = fread($handle, $bufferLen)){
		print $buffer;
	}
	
	fclose($handle);

?>
