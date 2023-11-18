<?php
//Constants are like variables except that once they are defined they cannot be changed or undefined.
//Note: Unlike variables, constants are automatically global across the entire script.

//define(name, value, case-insensitive)
//Parameters:
//name: Specifies the name of the constant
//value: Specifies the value of the constant
//case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false


define('Prince', "this is constant variable value", "true");
echo prince . "<br>";


define("arrmobiles", ["next-bit-robin", "nokia", "sony"], true);
echo "<ul>";
echo "<li>" . arrmobiles[0] . "</li>";
echo "<li>" . arrmobiles[1] . "</li>";
echo "<li>" . arrmobiles[2] . "</li>";
echo "</ul>";


//Constants are Global
define("consglobal", "Constants are automatically global and can be used across the entire script.", "true");


#You can also create a constant by using the const keyword.
const APP_URL = "https://navjotsinghprince.com/";

function mytest()
{
    echo consglobal . "</br>";
    echo APP_URL;
}
mytest();
