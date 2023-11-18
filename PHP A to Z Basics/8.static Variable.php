<?php
//Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.
//To do this, use the static keyword when you first declare the variable:

//The variable will not be deleted even after the completion of the function execution.
function myfun()
{
    static $a = 0;
    echo $a . "\n";
    $a++;
}
myfun();
myfun();
myfun();
myfun();
myfun();
myfun();
