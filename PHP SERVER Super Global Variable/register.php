<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>GET SERVER DETAILS</title>
	<style type="text/css" media="screen">
		form{
			margin:0 auto;
			padding: 20px;
			border: 1px solid black;
		}
		form *{
			margin:8px;
		}
	</style>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="get" accept-charset="utf-8">
		First name<input type="text" name="fname" value="" placeholder=""><br>
		age<input type="text" name="age" value="" placeholder=""><br>
		<input type="submit" name="save" value="save">
</form>

	<?php 
	if(isset($_GET['save'])){
		echo $_GET['fname']."<br>";
		echo $_GET['age']."<br>";
	}
	 ?>
</body>
</html>