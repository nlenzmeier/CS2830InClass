<?php
	foreach ($_FILES as $inputName => $fileArray){
		print"$inputName = $fileArray<br>\n";
		foreach($fileArray as $key => $value){
			print "- $key = $value<br>\n"; 
		}
	}
	
	if(!is_dir($target_dir) && !mkdir($target_dir) ){
		die("error creating folder $target_dir";
	}
	
	$result = move_uploaded_file($_FILES['file1']['tmp_name'], $target_dir.'upload.png');
	
	if($result){
		echo "file was moved successfully!";
	}
	else {
		echo "file no no";
	}
?>