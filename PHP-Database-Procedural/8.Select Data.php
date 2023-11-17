<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb_procedural";

echo "<pre></pre>";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// ---------------------------------------------
$sql = "SELECT id, firstname, lastname, email,reg_date FROM MyGuests";
$result = mysqli_query($conn, $sql);  

if (mysqli_num_rows($result) > 0) {  //means suppose 16rows > 0
   echo "<table border='1' cellpadding='5' cellspacing='0'>
        <tr>
        <th>ID</th>
        <th>FIRST NAME</th>
        <th>LAST NAME</th>
        <th>EMAIL</th>
        <th>REGISTER DATE</th>
        </tr>";
    while($row = mysqli_fetch_assoc($result)) {  // get output data of each row as associative array
        echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['firstname']}</td>
        <td>{$row['lastname']}</td>
        <td>{$row['email']}</td>
        <td>{$row['reg_date']}</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 No Records Found";
}

mysqli_close($conn);
?>