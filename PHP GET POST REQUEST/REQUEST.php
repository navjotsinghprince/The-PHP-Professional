<?php 
/*
Super Global Variables are bulit in variables that are always availables in all scopes
PHP $_REQUEST is a PHP super global variable which is used to collect form data after submitting an html form with method=post or method=get..It can hold both methods 

echo "<pre>"; 
echo print_r($_REQUEST); 
echo "</pre>"; 
echo "<hr>";

echo $_REQUEST['fname']; //Access Values
*/
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
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
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>POST SuperGlobal Variable Example</title>
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
	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post"  accept-charset="utf-8">
	USERNAME:<input type="text" name="uname" id=""><br>
	PASSWORD<input type="password" name="upass" id=""><br>
	<input type="submit" value="SUBMIT" name="submit">
	</form>
	<?php
	   //collect values of input fields
	   if(isset($_REQUEST["submit"])){
	   
	   $username=$_REQUEST["uname"];
	   $password=$_REQUEST["upass"];
	   
	   echo "USERNAME IS : ".$username."<br>";
	   echo "PASSWORD IS : ".$password."<br>";
	}

?>
</body>
</html>
