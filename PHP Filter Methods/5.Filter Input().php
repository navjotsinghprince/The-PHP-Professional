<?php
//filter_input(type,variable,filter,options)

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Filter Input</title>
</head>

<body>
	<h2>Filter input Method Validation </h2>
	<form method="get" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
		<!-- E-mail: <input type="text" name="email" autocomplete="off"> -->
		Marks: <input type="text" name="marks" autocomplete="off">
		<input type="submit" name="submit" value="Submit">
	</form>
	<br>

	<?php
	if (isset($_REQUEST["submit"])) {
		//echo filter_input(INPUT_GET,"email",FILTER_VALIDATE_EMAIL);

		$options = array(
			"options" => array(
				"min_range" => 1,
				"max_range" => 100
			)
		);

		if (filter_input(INPUT_GET, "marks", FILTER_VALIDATE_INT, $options)) {
			echo "marks is valid";
		} else {
			echo "marks is not valid";
		}
	}
	?>
</body>

</html>