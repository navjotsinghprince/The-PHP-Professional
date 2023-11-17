<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb_oops";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//sql query string
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Navjot', 'Singh', 'fzr@navjotsinghprince.com')";

//fire query
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>