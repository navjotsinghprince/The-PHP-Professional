<?php

function Myfunc()
{
  echo "<h1>i m anonymous function</h1>";
}

$anon = "Myfunc";

$anon();   //This is working as a function

echo $anon;  //This is working as a string database

//echo var_dump($anon);  //it shows string
