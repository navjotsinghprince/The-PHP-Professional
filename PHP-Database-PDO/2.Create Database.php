<?php  
include '1.Connection.php';
try {
    
    $sql = "CREATE DATABASE mydb_pdo";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Database created successfully<br>";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }


$conn = null;


?>

