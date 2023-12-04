<?php
//Creates an array containing range of elements
//range(start,end,step);  //"Step" means by which number for increment.
$new = range(1, 20, 1);
//$new =range(1,100,10);
//$new =range(0,100,10);


echo "<pre>";
print_r($new);
echo "</pre>";
echo "<hr>";

//$new =range('a','z');
$new = range('Z', 'A');
foreach ($new as $letter) {
    echo $letter . "<br>";
}
