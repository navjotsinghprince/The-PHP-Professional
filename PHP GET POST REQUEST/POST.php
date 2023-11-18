<?php 
/*
Super Global Variables are bulit in variables that are always availables in all scopes
PHP $_POST is a PHP super global variables which is used to collect form data after submitting an html form with method=post.
$_POST is also widely used to pass variables...  
echo"<pre>"; 
echo print_r($_POST);
echo"</pre>"; 
echo $_POST['name']; //Access values :)
*/
?>
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
	<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
	USERNAME:<input type="text" name="uname" id=""><br>
	PASSWORD<input type="password" name="upass" id=""><br>
	<input type="submit" value="SUBMIT">
	</form>
	<?php
	 if($_SERVER["REQUEST_METHOD"]=="POST"){
	   //collect values of input fields
	   $username=$_POST["uname"];
	   $password=$_POST["upass"];
	   
	   echo "USERNAME IS : ".$username."<br>";
	   echo "PASSWORD IS : ".$password."<br>";
	}


	?>
</body>
</html>