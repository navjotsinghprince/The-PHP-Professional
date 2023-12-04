<?php
/*PHP Variables Scope
In PHP, variables can be declared anywhere in the script.
The scope of a variable is the part of the script where the variable can be referenced/used.
PHP has three different variable scopes:
    local
    global
    static */

/*A global declared outside a function has a global scope and can only be accessed outside a function*/

$x = 5; // global scope

function myTest() {
    //using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
?> 

