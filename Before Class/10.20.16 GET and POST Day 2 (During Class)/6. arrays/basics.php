<!DOCTYPE html>
<html>
	<head>
		<title>PHP Arrays</title>
	</head>
	<body>
        <?php
        	$zoo = array("Monkey", "Tiger", "Crocs", "Penguins", "Pandas");
        	
        	echo $zoo[0] . "<br>";
        	echo $zoo[4] . "<br>";
        	
        	$zoo[5] = "Giraffe";
        	
        	echo $zoo[5] . "<br>";
        	
        	$zoo[] = "Lion";
        	
        	print_r($zoo);
        	
        	unset($zoo[0]);
        	
        	echo "<br>";
        	print_r($zoo);
        
        	$zoo = array_values($zoo);
        	
        	echo "<br>";
        	print_r($zoo);
        	
        	
        	print "<ul>\n";
        	for($i = 0; $i < count($zoo); $i++){
        		print "<li>$zoo[$i]</li>\n";        	
        	}
        	
        	print "</ul>\n";
        ?>
	</body>
</html>
