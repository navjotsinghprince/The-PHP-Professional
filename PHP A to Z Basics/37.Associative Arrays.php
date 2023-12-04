<?php
echo "<pre></pre>";
//Associative arrays are arrays that use named keys that you assign to them.

//we can also use key as numaric like: $arr[456] => "prince";
//we can also use mix value keys like: $arr[456] => "prince"; $arr["name"] => "Prince Ferzozepuria";
//On Testing Purpose we can use print_r($arr);

//==================================first way creation=====================================================
$CoronaVirus = array("China" => 81000, "USA" => 33000, "Spain" => 22320, "Itly" => 43000); //
echo "Death Counting is  : 
"  . $CoronaVirus['China'] .
    -" " . $CoronaVirus['USA'] .
    " " . $CoronaVirus['Spain'] .
    " " . $CoronaVirus["Itly"] .
    "<hr>";


//===================================second way creation=======================================================
$telecom["Jio"] = "1.50 gb per day";
$telecom["Airtel"] = "1.25 gb per day";   //airtel is key
$telecom["Idea"] = "1.25 gb per day";    //1.25 gb per is its value
$telecom["Bsnl"] = "500mb per day";
$telecom["Vodafone"] = "1.75 gb per day";

echo "<pre>";
print_r($telecom);
echo "</pre>";
//Loop Through an Associative Array Like: foreach loop

echo "<b>KEY" . " = " . "VALUE PAIRS <br>";

//The "for each" loop will iterate through each value in the array,
//and in each iteration, the value of the array will be stored in the variable named $value.
foreach ($telecom as $key => $value) {
    echo "Key= {$key} | Value= {$value}<br>";
}
echo "</b>";
