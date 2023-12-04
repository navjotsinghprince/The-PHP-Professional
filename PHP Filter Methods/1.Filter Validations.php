<?php
//Complex Validations using filters Useually works with forms
//syntax:- filter(variable_value,filtername,options/flag)
echo "<pre></pre>";
$var = 99;

echo var_dump(filter_var($var, FILTER_VALIDATE_INT)) . "<br>";
echo var_dump(filter_var("383", FILTER_VALIDATE_INT)) . "<br>";
echo var_dump(filter_var(TRUE, FILTER_VALIDATE_INT)) . "<br>";
echo var_dump(filter_var(FALSE, FILTER_VALIDATE_INT)) . "<br>";
echo var_dump(filter_var(0, FILTER_VALIDATE_INT)) . "<br>";
echo var_dump(filter_var(1, FILTER_VALIDATE_INT)) . "<br>";
echo var_dump(filter_var(20.2, FILTER_VALIDATE_INT)) . "<br>";
echo var_dump(filter_var("true", FILTER_VALIDATE_INT)) . "<br>";
echo var_dump(filter_var(NULL, FILTER_VALIDATE_INT)) . "<br>";
echo var_dump(filter_var("", FILTER_VALIDATE_INT)) . "<br>";
echo "<br>";


//use filter with range
$options = array(
	"options" => array(
		"min_range" => 10,
		"max_range" => 50
	)
);
$var = 99;
if (filter_var($var, FILTER_VALIDATE_INT, $options)) {
	echo "$var is an integar and within a range";
} else {
	echo "$var is not an integar and not within a range";
}
echo "<hr>";


//FILTER VARIABLE TO FLOAT DATATYPE
$num = 20.88;
echo var_dump(filter_var($num, FILTER_VALIDATE_FLOAT)) . "<br>";
echo var_dump(filter_var("383", FILTER_VALIDATE_FLOAT)) . "<br>";
echo var_dump(filter_var(TRUE, FILTER_VALIDATE_FLOAT)) . "<br>";
echo var_dump(filter_var(FALSE, FILTER_VALIDATE_FLOAT)) . "<br>";
echo var_dump(filter_var(0, FILTER_VALIDATE_FLOAT)) . "<br>";
echo var_dump(filter_var(1, FILTER_VALIDATE_FLOAT)) . "<br>";
echo var_dump(filter_var(20.2, FILTER_VALIDATE_FLOAT)) . "<br>";
echo var_dump(filter_var("true", FILTER_VALIDATE_FLOAT)) . "<br>";
echo var_dump(filter_var(NULL, FILTER_VALIDATE_FLOAT)) . "<br>";
echo var_dump(filter_var("", FILTER_VALIDATE_FLOAT)) . "<br>";
echo "<br>";

//use filter with range
$options = array(
	"options" => array(
		"min_range" => 10,
		"max_range" => 50
	)
);

if (filter_var($num, FILTER_VALIDATE_FLOAT, $options)) {
	echo "$num is an integar and within a range";
} else {
	echo "$num is not an integar and not within a range";
}
echo "<hr>";


//FILTER VARIABLE TO BOOLEAN DATATYPE
echo var_dump(filter_var(TRUE, FILTER_VALIDATE_BOOLEAN)) . "<br>";
echo var_dump(filter_var(FALSE, FILTER_VALIDATE_BOOLEAN)) . "<br>";

echo var_dump(filter_var("true", FILTER_VALIDATE_BOOLEAN)) . "<br>";
echo var_dump(filter_var("false", FILTER_VALIDATE_BOOLEAN)) . "<br>";

echo var_dump(filter_var(1, FILTER_VALIDATE_BOOLEAN)) . "<br>";
echo var_dump(filter_var(0, FILTER_VALIDATE_BOOLEAN)) . "<br>";

echo var_dump(filter_var("yes", FILTER_VALIDATE_BOOLEAN)) . "<br>";
echo var_dump(filter_var("no", FILTER_VALIDATE_BOOLEAN)) . "<br>";

echo var_dump(filter_var("on", FILTER_VALIDATE_BOOLEAN)) . "<br>";
echo var_dump(filter_var("off", FILTER_VALIDATE_BOOLEAN)) . "<br><br>";


echo var_dump(filter_var("wow", FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE)) . "<br>";
echo var_dump(filter_var(20.2, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE)) . "<br>";
echo var_dump(filter_var(NULL, FILTER_VALIDATE_BOOLEAN)) . "<br>";
echo var_dump(filter_var("", FILTER_VALIDATE_BOOLEAN)) . "<br>";
echo "<br>";
echo "<hr>";



//FILTER EMAIL ADDRESS
$email = "hello@navjotsingh.net";
echo var_dump(filter_var($email, FILTER_VALIDATE_EMAIL)) . "<br>";
echo var_dump(filter_var(12345, FILTER_VALIDATE_EMAIL)) . "<br>";
echo "<br>";
echo "<hr>";



//FILTER URL ADDRESS
$url1 = "https://www.navjotsinghprince.com";
$url2 = "https://navjotsinghprince.com";
$url3 = "https://www.navjotsinghprince.com/test/page.php";
$url4 = "https://www.navjotsinghprince.com/test/page.php?id=1";
$url5 = "https://n avjotsinghprince#.com";

echo var_dump(filter_var($url1, FILTER_VALIDATE_URL)) . "<br>";
echo var_dump(filter_var($url2, FILTER_VALIDATE_URL)) . "<br>";
echo var_dump(filter_var($url3, FILTER_VALIDATE_URL)) . "<br>";
echo var_dump(filter_var($url4, FILTER_VALIDATE_URL)) . "<br>";
echo var_dump(filter_var($url5, FILTER_VALIDATE_URL)) . "<br><br>";

echo var_dump(filter_var($url1, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED)) . "<br>";
echo var_dump(filter_var($url3, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED)) . "<br><br>";

echo var_dump(filter_var($url1, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)) . "<br>";
echo var_dump(filter_var($url4, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)) . "<br>";
echo "<br>";
echo "<hr>";


$ip = "192.168.100.800";
echo var_dump(filter_var($ip, FILTER_VALIDATE_IP)) . "<br>";
echo var_dump(filter_var($ip, FILTER_VALIDATE_IP)) . "<br>";

if (filter_var($ip, FILTER_VALIDATE_IP)) {   //hope it will work on internet connection
	echo "This is valid ip address";
}
echo "<br>";
echo "<hr>";


$mac = "FA-F9-DD-B2-5E";
echo var_dump(filter_var($mac, FILTER_VALIDATE_MAC)) . "<br>";
echo var_dump(filter_var($mac, FILTER_VALIDATE_MAC)) . "<br>";
echo "<br>";
echo "<hr>";
