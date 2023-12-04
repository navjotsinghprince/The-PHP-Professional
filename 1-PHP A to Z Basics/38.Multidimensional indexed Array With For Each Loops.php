<?php
#Multidimensional indexed array

echo "<pre></pre>";

$people=array(                                          
	array(1,"Prince","programmer",75000),
	array(2,"john","manager",150000),
	array(3,"smith","hacker",85000),
	array(4,"elen","coder",50000),
	array(5,"peter","designer",35000),
	array(6,"tipsy","student",0)
);

//array foreach loop through
echo "<table border='2px' cellpadding='7px' cellspacing='0'>";
echo "<tr>";
echo "<th>SerialNo.</th>";
echo "<th>Name</th>";
echo "<th>Destigination</th>";
echo "<th>Salery</th>";
echo "</tr>";

foreach ($people as $key => $index) { 
	 echo "<tr>";                              //row printing start
    foreach ($index as $key => $value) {  
		  echo "<td>".$value."</td>";        //coloumn printing start
	  }
    echo "</tr>";
}

echo "</table>";
?>
