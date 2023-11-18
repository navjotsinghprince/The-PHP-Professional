<?php
#=====================[SET AND SHOW PAST TIME DATE]===========================
//mktime(hours,mintues,second,month,day,year) === we can set past time dates on mktime and show
echo date("l", mktime(0, 0, 0, 10, 15, 2004)) . "<br>"; //that day on friday
echo date("l d-m-Y h:i:sa", mktime(0, 0, 0, 12, 22, 2004)) . "<br>"; //show full format
echo date("l d-m-Y h:i:sa", gmmktime(0, 0, 0, 12, 22, 2004)) . "<br>"; //show time GMT according



#=====================[SET AND SHOW FUTURE AND PAST TIME DATE BOTH]=============================
/* date_create(time,timezone);  It means determining which country's time zone to apply. */
/* date_format(object,format);  Specially used to Show future or Past date */

#Set and show future date and time
$dateobj = date_create("2099-03-15 04:25:00");   //Set future Date and Time
echo date_format($dateobj, "l d-m-Y h:i:sa") . "<br>"; //show future date and time , On this date, day will be Sunday.

#Set and show past date and time
$dateobj2 = date_create("1947-08-15 04:25:00", timezone_open("Asia/Kolkata")); //year month date 
echo date_format($dateobj2, "l d-m-Y H:i:sa") . "<br>"; //On this date, day will be wednesday

#====================[SET TIME ON EXSISTIG DATE]=======================
$date = date_create("2015-06-17");
$ndate =date_time_set($date,13,34,45);  
echo date_format($ndate,"d-m-y h:m:s");
