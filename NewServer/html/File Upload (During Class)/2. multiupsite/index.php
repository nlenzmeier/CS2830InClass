<!DOCTYPE html>
<html>
<head>
	<title>Multiple File Upload</title>
</head>
<body>
	<h1>Upload Form Test</h1>
	<p>Select one or more files and then click the Upload button.</p>

	<form action="uploadHandler.php" method="POST" enctype="multipart/form-data">
		<p>
			<label>File:</label>
			
			<input type="file" name="files[]" multiple>
		</p>
		
		<input name="submit" type="submit" value="Upload">
	</form>
	
</body>
</html>