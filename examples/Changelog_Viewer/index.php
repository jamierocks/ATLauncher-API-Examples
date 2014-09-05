<html>
	<head>
		<title>Changelog Viewer API Example</title>
	</head>
	<body>
		<form action="viewer.php" method="POST" enctype="multipart/form-data">
			Pack (safeName): <input type="text" name="safeName"><br><br>
			Version (0-whatever in order of latest-oldest):<input type="text" name="version"><br><br>
			<input type="submit" value="Submit">
		</form>
	</body>
</html>