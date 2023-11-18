<?php
//$_SERVER variable is a PHP super global variables which  
//holds the information about headers,paths,and the script locations


echo "<pre>";
echo print_r($_SERVER);
echo "</pre>";
echo "<hr>";

//It is also used to view and submit data on the same page for printing and submitting purposes.
echo $_SERVER["PHP_SELF"] . "<br>";
echo $_SERVER["QUERY_STRING"] . "<br>";
