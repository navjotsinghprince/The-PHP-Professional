<?php 
include '1.Connection.php';

try {
    $sql = "INSERT INTO peoples (firstname, lastname, email)
    VALUES ('navjot', 'Singh', 'navjotsingh@example.com')";
    
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>