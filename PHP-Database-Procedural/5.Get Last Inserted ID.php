<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb_procedural";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('prince', 'ferozepuria', 'princeferozepuria@gmail.com')";

if (mysqli_query($conn, $sql)) {
    $last_id = mysqli_insert_id($conn);  //get last inserted id 
    
    echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>