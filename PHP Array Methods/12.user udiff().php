<?php

//This function is also used to extract different values from an array.
$a = array('a' => 'ram', 'b' => 'sham', 'c' => 'sita', 'd' => 'gita', 'e' => 'hello');
$b = array('a' => 'ram', 'b' => 'smith', 'd' => 'gita');
$c = array('a' => 'ram', 'b' => 'black', 'c' => 'gita');

function compare($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}

function comparevalue($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}

//it will return different values
//$newarr = array_udiff($a,$b,$c,"compare");

//It will return different key
//$newarr=array_diff_ukey($a,$b,$c,"compare");

//It will return both key or value
$newarr = array_udiff_uassoc($a, $b, $c, "compare", "comparevalue");

echo "<pre>";
print_r($newarr);
echo "</pre>";
echo "<hr>";
