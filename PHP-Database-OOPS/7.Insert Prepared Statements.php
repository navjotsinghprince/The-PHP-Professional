<?php 
//Prepared statements are very useful against SQL injections.

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

// prepare and bind
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

// set parameters and execute
$firstname = "john";
$lastname = "cena";
$email = "johncena@example.com";
$stmt->execute();

$firstname = "lovepreet";
$lastname = "kaur";
$email = "lovepreetkaur@example.com";
$stmt->execute();

$firstname = "rimcy";
$lastname = "arora";
$email = "rimcyarora@example.com";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?>

