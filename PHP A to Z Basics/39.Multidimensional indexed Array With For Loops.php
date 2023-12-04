<?php
//testing purposes print array
//more readable form use pre tag before and after
// echo "<pre>";
// echo print_r($people);
// echo "</pre>";
// echo "<br>";
// echo "<hr>";

echo "<pre></pre>";

$people = array(
	array(1, "Prince", "programmer", 75000),
	array(2, "john", "manager", 150000),
	array(3, "smith", "hacker", 85000),
	array(4, "elen", "coder", 50000),
	array(5, "peter", "designer", 35000),
	array(6, "tipsy", "student", 0)
);

//Same as Nested array
// $people=[
// 	[1,"Prince","programmer",75000],
// 	[2,"john","manager",150000],
// 	[3,"smith","hacker",85000],
// 	[4,"peter","designer",35000]
// ];

//echo $people[0][0].$people[0][1].$people[0][2].$people[0][3]; //first row print
$rowlength = count($people);  // rows 6
$collength = count($people[0]);  //columns 4

for ($row = 0; $row < $rowlength; $row++) {
	for ($col = 0; $col < $collength; $col++) {
		echo $people[$row][$col];
	}
	echo "<br>";
}
echo "<hr>";

echo "<table border='2px' cellpadding='7px' cellspacing='0'>";
echo "<tr>";
echo "<th>SerialNo.</th>";
echo "<th>Name</th>";
echo "<th>Destigination</th>";
echo "<th>Salery</th>";
echo "</tr>";

for ($row = 0; $row < $rowlength; $row++) {
	echo "<tr>";
	for ($col = 0; $col < $collength; $col++) {
		echo "<td>" . $people[$row][$col] . "</td>";
	}
	echo "</tr>";
}
echo "</table>";
