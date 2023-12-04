<?php
/*
OverView
d=(01 to 31)
j=(1 to 31)
S=(st,nd,rd,urth) 

MONTH HAS FOUR VALUES
F=(january)
m=(01)
M=(jan)
n=(1)

YEAR HAS 2 VALUES
Y=(2019)
y=(19)

WEEK HAS FOUR VALUES
D=(mon)
l=(monday)
N=(1) start from sunday(1) to monday(7)
w=(2) start from sunday(0) to saturday(6)

*/

echo "Today date is : " . date("d") . "<br>";  //d=(01 to 31)
echo "Today date is : " . date("j") . "<br>";  //j=(1 to 31)
echo "Today date is : " . date("jS") . "<br><br>"; //S=(st,nd,rd,urth) 

echo "Today month is : " . date("F") . "<br>"; //F=(january)
echo "Today month is : " . date("m") . "<br>"; //m=(01)
echo "Today month is : " . date("M") . "<br>"; //M=(jan)
echo "Today month is : " . date("n") . "<br><br>"; //n=(1)

echo "Today year is : " . date("Y") . "<br>"; //Y=(2019)
echo "Today year is : " . date("y") . "<br><br>"; //y=(19)

echo "Today week is : " . date("D") . "<br>";  //D=(mon)
echo "Today week is : " . date("l") . "<br>"; //l=(monday)
echo "Today week is : " . date("N") . "<br>";  //N=(1) start from sunday(1) to monday(7)
echo "Today week is : " . date("w") . "<br><br>"; //w=(2) start from sunday(0) to saturday(6)

echo "total monthly days are: " . date("t") . "<br>";
echo "The day of year is : " . date("z") . "<br>";
echo "The day of week is : " . date("W") . "<br>";
echo "Is this leap year? : " . date("L") . "<br>";
echo "The full date is  : " . date("d-m-Y") . "<br>";
