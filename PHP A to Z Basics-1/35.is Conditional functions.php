<?php
$br = "<br>";


echo "<h3>Check Value Integar or not</h3>";
echo var_dump(is_int(230)) . $br;
echo var_dump(is_int(2.30)) . $br;
echo var_dump(is_int("230")) . $br;
echo var_dump(is_int(TRUE)) . $br;
echo var_dump(is_int(NULL)) . $br;
echo var_dump(is_int("")) . $br;
echo var_dump(is_integer(230)) . $br; //same as int function
echo var_dump(is_long(230)) . $br;  //same as int function 
echo "<hr>";



echo "<h3>Check value float or not</h3>";
echo var_dump(is_float(230)) . $br;
echo var_dump(is_float(2.30)) . $br;
echo var_dump(is_float("230")) . $br;
echo var_dump(is_float(TRUE)) . $br;
echo var_dump(is_float(NULL)) . $br;
echo var_dump(is_float("")) . $br;
echo var_dump(is_double(4.74)) . $br; //same as float function
echo "<hr>";


echo "<h3>Check value numaric or not</h3>";
echo var_dump(is_numeric(230)) . $br;
echo var_dump(is_numeric(2.30)) . $br;
echo var_dump(is_numeric("230")) . $br;
echo var_dump(is_numeric(TRUE)) . $br;
echo var_dump(is_numeric(NULL)) . $br;
echo var_dump(is_numeric("")) . $br;
echo "<hr>";


echo "<h3>Check value string or not</h3>";
echo var_dump(is_string(230)) . $br;
echo var_dump(is_string(2.30)) . $br;
echo var_dump(is_string("230")) . $br;
echo var_dump(is_string(TRUE)) . $br;
echo var_dump(is_string(NULL)) . $br;
echo var_dump(is_string("")) . $br;
echo "<hr>";


echo "<h3>Check Value Boolean Or Not</h3>";
echo var_dump(is_bool(1)) . $br;
echo var_dump(is_bool(0)) . $br;
echo var_dump(is_bool("true")) . $br;
echo var_dump(is_bool("false")) . $br;
echo var_dump(is_bool(TRUE)) . $br;
echo var_dump(is_bool(FALSE)) . $br;
echo var_dump(is_bool(NULL)) . $br;
echo var_dump(is_bool("")) . $br;
echo "<hr>";


echo "<h3>Check value null or not</h3>";
echo var_dump(is_null(1)) . $br;
echo var_dump(is_null(0)) . $br;
echo var_dump(is_null("false")) . $br;
echo var_dump(is_null(TRUE)) . $br;
echo var_dump(is_null(FALSE)) . $br;
echo var_dump(is_null("NULL")) . $br;
echo var_dump(is_null(NULL)) . $br;
echo var_dump(is_null("")) . $br;
echo "<hr>";


echo "<h3>Check variable value array or not</h3>";
$var = [12, 23, 43];
echo var_dump(is_array($var)) . $br;
echo var_dump(is_array(1)) . $br;
echo var_dump(is_array(0)) . $br;
echo var_dump(is_array(TRUE)) . $br;
echo var_dump(is_array(FALSE)) . $br;
echo var_dump(is_array("NULL")) . $br;
echo var_dump(is_array(NULL)) . $br;
echo var_dump(is_array("")) . $br;
echo "<hr>";


echo "<h3>Check variable not in object,array, return false</h3>";
$arr = [27, 38, 39];
echo var_dump(is_scalar(230)) . $br;
echo var_dump(is_scalar(2.30)) . $br;
echo var_dump(is_scalar("230")) . $br;
echo var_dump(is_scalar(TRUE)) . $br;
echo var_dump(is_scalar("")) . $br;
echo var_dump(is_scalar(NULL)) . $br;
echo var_dump(is_scalar($arr)) . $br;
echo "<hr>";



echo "<h3>Check Variable Callable Or Not</h3>";
function test()
{
	echo "this is callable";
}
echo var_dump(is_callable("test")) . $br;
echo var_dump(is_callable("test1")) . $br;



echo "<h3>Check Values Countables Or Not</h3>";
$v = array("56", 67, 66);
if (is_countable($v)) {
	echo "values are countables";
}
echo "<hr>";


/* 
#Usage with if condition
if(is_int(0)){
echo "this is an integar";
}else{
echo "this is not an integar";
}
*/
