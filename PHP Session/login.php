<?php 
session_start();
if(!isset($_SESSION['uname'])){
	//If not set, then set the session variable

		if(isset($_REQUEST['username']) && isset($_REQUEST['password'])){
		$uname =$_REQUEST['username'];
		$upass =$_REQUEST['password'];

		$_SESSION['uname'] = $uname; //set values to session variables
		$_SESSION['pass'] = $upass;

		echo "<script> location.href = 'welcome.php'</script>";
		}
 
}else{
  echo "<script> location.href = 'welcome.php'</script>";
 }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login Page With Sessions </title>
	<style type="text/css" media="screen">
		form{
			border: 1px solid black;
			width: 50%;
			margin: 10% auto;
		}
		form *{
			margin: 10px;
		}
	</style>
</head>
<body>
	<form action="" method="post" accept-charset="utf-8">
	    <input type="text" name="username" value="" placeholder="enter username"><br>
		<input type="text" name="password" value="" placeholder="enter password"><br>
		<input type="submit" name="login" value="LOGIN">
	</form>
</body>
</html>