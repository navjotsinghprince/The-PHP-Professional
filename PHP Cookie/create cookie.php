<?php
echo "<pre></pre>";
$cookie_name = "user";
$cookie_value = "my name is prince and we are learning cookie consept";

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
//use - subtract for delete cookie 

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Create Cookie</title>
</head>

<body>

	<?php
	if (!isset($_COOKIE[$cookie_name])) {
		echo "cookie is not set";
	} else {
		echo $_COOKIE[$cookie_name];
	}
	echo "<pre>";
	print_r($_COOKIE);
	echo "</pre>";
	?>

</body>

</html>