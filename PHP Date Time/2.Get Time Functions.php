<?php
echo "Current hour is : " . date("h") . "<br>"; //h(01 to 12) print format 01,02,03,04,05
echo "Current hour is : " . date("H") . "<br>"; //H=(00 to 23) 
echo "Current hour is : " . date("g") . "<br>"; //g=(1 to 12) print format 1,2,3,4,5,6,7
echo "Current hour is : " . date("G") . "<br><br>"; //G=(0 to 23)

echo "Current mintue is : " . date("i") . "<br><br>"; //i=(00 to 59)
echo "Current second is : " . date("s") . "<br><br>"; //s=(00 to 59)

echo "meridiem is : " . date("a") . "<br>"; //=a(am:pm)
echo "meridiem is : " . date("A") . "<br>"; //=A(AM:PM)

echo "full time is  : " . date("h:i:sa") . "<br>"; //11:41:14am
echo "full date & time is  : " . date("d-m-Y h:i:sa e") . "<br>"; //26-03-2020 11:41:14am Europe/Berlin

date_default_timezone_set("Asia/Kolkata");
echo "full date & time is  : " . date("d-m-Y h:i:sa e") . "<br>"; //26-03-2020 04:12:15pm Asia/Kolkata