<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>test get.php</title>
</head>
<body>
<?php
$name=$_GET["myname"];
$work=$_GET["mywork"];

echo "MY Name is :".$name."<br>";
echo "MY Work is :".$work;
?>
</body>
</html>