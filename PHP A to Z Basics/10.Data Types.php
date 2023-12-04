<?php
//Variables can store data of different types, and different data types can do different things.
$a;                 //null  Error:Undefined variable
$b = "";              //empty string     
$str = "Prince";     //string data type
$str2 = '23443';    //also string type
$num = 45858;       //integer
$float = -870.36;  //float type
$boolean = true;   //boolean type true or false
$null = null;      //null nothing anything
$arrayName = array("programmer", "hacker", "coder");   //array type  multliple

class device
{
    public $model;

    public function device()
    {
        $this->model = "Nokia";
    }
}
// create an object
$myobj = new device();
// show object properties
//echo $myobj->model;

//The PHP var_dump() function returns the data type and value:
echo var_dump($a) . "<br>";
echo var_dump($b) . "<br>";
echo var_dump($str) . "<br>";
echo var_dump($str2) . "<br>";
echo var_dump($num) . "<br>";
echo var_dump($float) . "<br>";
echo var_dump($boolean) . "<br>";
echo var_dump($null) . "<br>";
echo var_dump($arrayName) . "<br>";
echo var_dump($myobj) . "<br>";

//Tip: If a variable is created without a value, it is automatically assigned a value of NULL.
