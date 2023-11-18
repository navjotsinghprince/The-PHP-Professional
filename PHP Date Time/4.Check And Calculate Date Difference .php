<?php
#================[CHECK DATE VAILD OR NOT, AND CALCULATE DATE DIFFERENCE ]====================

//checkdate(month,day,year)  if date is valid return true ,else false return
echo checkdate(2, 15, 2014) . "<br>"; //if valid date then return 1
echo checkdate(2, 29, 2015) . "<br>"; //invaild date return 0  coz 2014 is a leap year

$date1 =date_create("2013-03-15");
$date2 =date_create("2013-04-18");

$diff = date_diff($date1, $date2); //It will show a difference of 34 days.

echo $diff->days . "days"; //print object's value