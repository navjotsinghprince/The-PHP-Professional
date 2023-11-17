<?php 
//The SQL query must be quoted in PHP
//string values inside the SQL query must be quoted
//Numeric values must not be quoted
//The word NULL must not be quoted

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb_procedural";

 //Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
  //Check connection
  if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
  }


$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('navjot', 'singh', 'navjotsingh@gmail.com')";

  if(mysqli_query($conn, $sql)) {  //query fire
    echo "New record inserted successfully";
  }else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

mysqli_close($conn);
?>




