<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="mydb_procedural";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

print_r($conn);
//echo $conn->client_info;

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
    echo "Connected successfully";
}

//mysqli_close($conn);  //to close connection
?>