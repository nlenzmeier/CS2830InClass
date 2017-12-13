<!DOCTYPE html>
<!-- this code will only work if the directory is open to the world, since you are uploading a file from the browser

to do this chmod 777 folderName -->
<html>
<head>
	<title>Handle File Upload</title>
</head>
<body>
    <h1>File Upload Test</h1>
<?php
	require_once "Upload.php";
	
	$target_dir = "uploads/";
	
	try {
		$upload = new Upload('file1');
		
		$origFileName = $upload->getOrigFileName();
		$fileExt = $upload->getFileExt();
		$fileSize = $upload->getFileSize();
		$mimeType = $upload->getMimeType();
		
		print "Original File Name: $origFIleName<br>\n";
		print "File Extension: $fileExt<br>\n";
		print "File Size: $fileSize<br>\n";
		print "Mime Type: $mimeType<br>\n";
		
		if(!is_dir($target_dir) && !mkdir($target_dir)){
			die("error creating folder $target_dir");
		}
		
		$destFilePath = $target_dir . 'test' . $fileExt;
		
		$upload -> moveFile($destFilePath);
		
		print "<a href='$destFilePath' target='_blank'>Click here to view uploaded file </a?><br>\n";
		
		if($fielExt == 'jpg' || $fileExt == 'gif' || $fileExt == 'png'){
			print "<p><img src='$destFilePath' alt='Uploud image'></p>\n";
		}
	}catch (UploadExceptionNoFile $e){
		print "No file was uploaded.<br>\n";
	}
	catch UploadExceptionNoFile $e){
		$code = $e->getCode();
		$message = $e->getMessage();
		print "Error: $message (code = $code) <br>\n";
	}

?>


</body>
</html>
