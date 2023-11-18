<?php
if (isset($_FILES['image'])) {
	echo "<pre>";
	print_r($_FILES);
	echo "</pre>";

	$filename = $_FILES['image']['name'];
	$filetype = $_FILES['image']['type'];
	$file_tmpname = $_FILES['image']['tmp_name'];
	$filesize = $_FILES['image']['size'];

	move_uploaded_file($file_tmpname, "Image-Containter-Folder/" . $filename);
	echo "file was successfully uploaded";
} else {
	echo "file could not be uploaded";
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>file upload php</title>
	<style type="text/css" media="screen">
		form {
			border: 1px solid black;
			width: 50%;
			margin: 10% auto;
		}

		form * {
			margin: 10px;
		}
	</style>
</head>

<body>
	<form action="" method="post" accept-charset="utf-8" enctype="multipart/form-data">
		<input type="file" name="image"><br>
		<input type="submit" name="upload" value="UPLOAD">
	</form>
</body>

</html>