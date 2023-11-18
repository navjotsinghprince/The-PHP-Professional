<?php 
/*
Super Global Variables are bulit in variables that are always availables in all scopes
PHP $_GET is a PHP super global variables which is used to collect form data after submitting an html form with method=get
$_GET also collect data sent in the url bar..
echo"<pre>"; 
echo print_r($_GET);
echo"</pre>"; 
echo $_POST['name']; //Access values :)

*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GET Super Global Variable Example</title>
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
	<a href="test_get.php?myname=NavjotSingh&mywork=Programming" >Click To Send Data In PHP File</a>
</body>
</html>
