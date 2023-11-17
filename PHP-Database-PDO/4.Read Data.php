<?php
include '1.Connection.php';
echo "<table style='border: solid 1px black;'>";
echo "<tr>
<th>Id</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Email</th>
</tr>";

//Simple mySQL query
$sql = "SELECT * FROM peoples";

//now, result name variable contains rows
$result = $conn->query($sql);

//execute if result row greater than 0 
if ($result->rowcount() > 0) {

	//The fetch function will fetch each row as an associative array and pass it to the variable $row each time.
	//Once all rows have been fetched, it will return false, causing the loop to stop.

	while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
		echo "<tr>";
		echo "<td>" . $row['id'] . "</td>";
		echo "<td>" . $row['firstname'] . "</td>";
		echo "<td>" . $row['lastname'] . "</td>";
		echo "<td>" . $row['email'] . "</td>";
	}

	echo "</table>";
}
