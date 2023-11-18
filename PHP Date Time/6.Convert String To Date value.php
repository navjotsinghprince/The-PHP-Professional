<?php
echo strtotime("now") . "<hr>";
echo date("d-m-y", strtotime("now")) . "<br>";
echo date("d-m-y", strtotime("3 march 2004")) . "<br>";
echo date("d-m-y h:m", strtotime("+5 hours")) . "<br>"; //add 5 hours to current time
echo date("d-m-y h:m", strtotime("+5 week")) . "<hr>"; //add 5 week
echo date("d-m-y h:m:s", strtotime("+1 week 3days 7hours 5second")) . "<br>"; //1 month add,3 days add etc
echo date("d-m-y", strtotime("next monday")) . "<br>";
echo date("d-m-y", strtotime("last sunday")) . "<br>";
echo date("d-m-y", strtotime("first day of last month")) . "<br>";


#deprecated====================[CONVERT DATE VALUE TO STRING VALUE]====================
echo strftime("%B-%d-%Y %X,%Z")."<br>"; //search on google % format
echo strftime("%B-%d-%Y %X,%Z",mktime(10,40,25,12,22,2004));