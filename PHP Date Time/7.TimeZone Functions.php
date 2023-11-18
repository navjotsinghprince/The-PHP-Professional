<?php
//date_default_timezone_get()  Get server default time zone
//date_default_timezone_set("Asia/Kolkata")  set own time zone in existing server

/* timezone_open() Once the timezone is set, it is used to specify or interpret 
   dates consistently within that timezone when opening or working with date-related operations. */
$tz = timezone_open("Asia/Kolkata");
echo timezone_name_get($tz) . "<br>";

timezone_location_get();   //get logitute and lattitute , return as array

$timezones = timezone_identifiers_list();  //get timezone list like asia,africa 
echo "Timezones:\n";
foreach ($timezones as $timezone) {
    echo "$timezone\n";
}