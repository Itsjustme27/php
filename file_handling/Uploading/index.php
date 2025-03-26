<!DOCTYPE html>
<html>
	<head>
		<title>Uploading a file</title>
	</head>
	<body>
		<h1>Uploading  a file</h1>
		<form action="upload_manager.php" method="post" enctype="multipart/form-data">
			<input type="file" name="file" required><br><br>
			<button type="submit">Upload</button>
		</form>
	</body>
</html>
