<?php echo "<pre></pre>";
//count() = return size of array 
//sizeof() = return size of array same working

$food = array('orange', 'banana', 'apple', 'apple', 57, 88);
$color = array('red', 'green', 'blue', 'yellow', 'pink', 'black');
$students = array(
    'first' => array('prince', '22year', 'boy'),
    'second' => array('raman', '19year', 'girl'),
    'third' => array('anu', '21year', 'girl'),
    'fourth' => array('sukh', '23year', 'girl')
);

echo count($food) . "<br>";  //6
echo sizeof($color) . "<br>"; //6
echo count($students) . "<hr>";  //4

echo count($students, 1) . "<br>";        //16, It will count all values
echo count($students['first']) . "<br>";  //3,  count total values of 'first' key.

echo "<pre>";
//counts each value in the array to check if any value is repeated, such as 'apple' appearing twice(like 2).
print_r(array_count_values($food));
echo "</pre>";
