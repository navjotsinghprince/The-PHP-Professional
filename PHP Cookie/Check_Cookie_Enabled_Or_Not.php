<?php
setcookie("test_mycookie", "test", time() + 3600, '/');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Check cookies are enabled or not</title>
</head>

<body>
</body>

</html>

<?php
if (count($_COOKIE) > 0) {
	echo "Cookies are enabled.";
} else {
	echo "Cookies are disabled.";
}
?>