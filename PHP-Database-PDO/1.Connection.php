<?php
$servername = "localhost";
$username = "root";
$password = "";
$mydatabase = "mydb_pdo";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$mydatabase", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    echo "<hr>";

    //$conn = null; //close the connection
?>