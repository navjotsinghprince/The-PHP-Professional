<?php
$date = date_create("2018-04-15");

date_add($date, date_interval_create_from_date_string("10 days")); //add 10 days 
echo "10 days added : " . date_format($date, 'd-m-Y') . "<br><hr>"; //return 25 instead of 15

$date = date_create("2018-04-15"); //for reduce days
date_sub($date, date_interval_create_from_date_string("10 days")); //return 5 instead of 15
echo "Reduce days : " . date_format($date, 'd-m-Y') . "<br><hr>";

$date = date_create("2018-04-30"); //for reduce days
date_modify($date, "-18 days");   //shorthand of both functions
echo date_format($date, 'd-m-Y');
