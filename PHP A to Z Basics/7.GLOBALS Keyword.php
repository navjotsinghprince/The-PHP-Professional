<?php
/*globals in an array called GlOBALS['index1'] = something;
the index holds the name of the variable
this array is also accessable from within functions and can be used to update global variable directly*/
$a = 5;
$b = 10;
function mytest()
{
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}
mytest();
echo $b;
