<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Retrive data</title>
	<style type="text/css" media="screen">
		*{
			font-weight: 500;
			font-family: calibri;
		}
	th{
		color:red;
	}
	table,tr,td{
		border:2px solid black;
		border-collapse: collapse;
		font-size: 20px;
		color: blue;
		padding: 5px;
	}
	</style>
</head>
<body>
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

$sql = "SELECT id, firstname, lastname FROM MyGuests LIMIT 10";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    echo "<table style='border: solid 1px black;'>
    <tr>
    <th>Serial No</th>
    <th>ID</th>
    <th>Name</th>
    </tr>";
    // output data of each row
    $i=1;
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>".$i."</td>
        <td>".$row["id"]."</td>
        <td>".$row["firstname"]." ".$row["lastname"]."</td>
        </tr>";
        $i++;
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?> 


</body>
</html>
