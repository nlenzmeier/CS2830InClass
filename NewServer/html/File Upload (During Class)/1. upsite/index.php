<!DOCTYPE html>
<html>
<head>
    <title>Single File Upload</title>
</head>
<body>
	<!--
        References
            http://www.w3schools.com/php/php_file_upload.asp
            http://php.net/manual/en/features.file-upload.post-method.php
    -->
    <!-- <form action="simpleHandler.php" method="POST" enctype="multipart/form-data"> -->
    <form action="uploadHandler.php" method="POST" enctype="multipart/form-data">
    	<input type="file" name="file1">
    	<input type="submit" value="Upload">
    	
    </form>
    
</body>
</html>