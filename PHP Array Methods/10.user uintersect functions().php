<?php
// The array_intersect function also same works as intersect function, 
// but we need to create our own function and pass it as a parameter.

//return 0= means values from both arrays match somewhere.
//return 1= means the value of 'a' is greater than that of 'b'.
//return -1 = It means the value of 'a' is smaller than that of 'b'.

$a = array('a' => 'ram', 'b' => 'sham', 'c' => 'sita', 'd' => 'gita');
$b = array('a' => 'ram', 'b' => 'smith', 'c' => 'gita');
$c = array('a' => 'ram', 'b' => 'black', 'c' => 'gita');

function compare($a, $b)
{
	if ($a === $b) {
		return 0;
	}
	return ($a > $b) ? 1 : -1;
}

function myfunc_key($a, $b)
{
	if ($a === $b) {
		return 0;
	}
	return ($a > $b) ? 1 : -1;
}

function myfunc_value($a, $b)
{
	if ($a === $b) {
		return 0;
	}
	return ($a > $b) ? 1 : -1;
}



//$newarr = array_uintersect($a,$b,$c,"compare");         //only value match
//$newarr = array_intersect_ukey($a,$b,$c,"compare");     //only key match
//$newarr = array_intersect_uassoc($a,$b,$c,"compare");   //both match key and values


$newarr = array_uintersect_uassoc($a, $b, $c, "myfunc_key", "myfunc_value"); //both match key and values

echo "<pre>";
print_r($newarr);
echo "</pre>";
echo "<hr>";
