<?php 
//This is called using a session variable($_SESSION) across multiple pages.
session_start(); 
if(isset($_SESSION['uname'])){
echo "Welcome :".$_SESSION['uname']." your password is :".$_SESSION['pass'];
}else{
	echo "<script> location.href = 'login.php'</script>";
}
if (isset($_REQUEST['logout'])){
	session_unset();
	session_destroy();
	echo "<script> location.href = 'welcome.php'</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>logout</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="" method="post" accept-charset="utf-8">
		<input type="submit" name="logout" value="LOGOUT">
	</form>
</body>
</html>