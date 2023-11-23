<?php
echo "<pre></pre>";
//in_array(search_value,array,type) = search values from array and return 0 and 1
//if value found in array then return 1 else 0
//Note:If the type parameter is set to TRUE,the search is case senstive


echo "<h2>in_array() Example</h2>";
$people = array("Peter", "Joe", "Glen", "Cleveland", 23);

if (in_array("23", $people, TRUE)) {
    echo "Match Found<br>";
} else {
    echo "Match Not Found<br>";
}

if (in_array(23, $people, TRUE)) {
    echo "Match Found<br>";
} else {
    echo "Match Not Found<br>";
}

//Array search is also used to search within an array.
$a = array(
    array('value1', 'value2'),
    array('a', 'b'),
    'Prince'
);

if (in_array(array('a', 'b'), $a, true)) {
    echo "Find Successfully";
} else {
    echo "Can't Find";
}
echo "<hr>";

echo "<h2>array_search() Example</h2>";

//array_search(value,array,strict) function search an array for a value and returns the index or key.
$Corona_Virus = ["China", "Italy", "USA", "Spain", "Iran"];
echo array_search("Italy", $Corona_Virus, TRUE) . "<br>";  //return index number 1

$mob = array('nokia' => 10000, 'samsung' => 13000, 'redmi' => 14000, 'apple' => 60000);
echo array_search(13000, $mob) . "<br>";     //return key samsung
echo array_search("13000", $mob) . "<br>";   //return key samsung
//echo array_search("13000",$mob,TRUE)."<br>";  //does not return anything coz of strict mode
