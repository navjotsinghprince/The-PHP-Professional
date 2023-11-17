<?php
include '1.Connection.php';

 try {
    // sql to delete a record
    $sql = "DELETE FROM peoples WHERE id=3";

    // use exec() because no results are returned
    
    $conn->exec($sql);
    echo "Record deleted successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
$conn = null;
?>