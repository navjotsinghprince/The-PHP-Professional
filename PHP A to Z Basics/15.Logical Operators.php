<?php
echo "<pre>";
//&& and operator //true=1 consider false= " ";
//(1st condition &&  2nd condtion) both conditions true than result true
//(1st condition &&  2nd condtion) one condition true than result false
//(1st condition &&  2nd condtion) both conditions false than result false
$a = 18;
$b = "20";

if ($b === 20 and $a >= 10) {  //also check data type value
	echo 'If it is true';
} else {
	echo 'Else block it is false && and operator' . "<hr>";
}

// || or operator
//(1st condition ||  2nd condtion) both conditions true than result true
//(1st condition ||  2nd condtion) one condition true than result true
//(1st condition ||  2nd condtion) both conditions false than result false
$x = 18;
$y = "18";
if ($y === 18 or $x <= 10) {  //$y also check data type value
	echo 'If it is true';
} else {
	echo 'Else it is false' . "<hr>";
}



// !not Operator not equal to
// It will change the true condition into false.
// It will change the false condition into true.

$prince = 22;
if ($prince !== 0) {   //This condition became true! If prince is 0, then 0 == 0 is true.
	echo "prince you are in true condition block" . "<hr>";
} else {
	echo "prince you are in false condition block";
}

$var = "99";
$res = ("99" != 99);
echo "testing" . var_dump($res) . "\n";   //false, it is assuming both values are equal

echo var_dump(("99" !== 99)) . "<hr>";    //true, means string not equal to int, !==(also checking data type)
