<?php
/*
A destructor is called when the object is destructed or the script is stopped or exited.
if you create a __destruct() function, PHP will automatically call this function at the end of the script.
Notice that the destruct function starts with two underscores (__)!
The example below has a __construct() function that is automatically called when you create an object from a class, 
and a __destruct() function that is automatically called at the end of the script:
*/

class data
{
  public $name;
  public $age;
  private $city;
  protected $mob;


  public function __construct($n, $a, $c, $m)  //This is called(executed) when an object is being created.
  {
    $this->name = $n;
    $this->age = $a;
    $this->city = $c;
    $this->mob = $m;
  }

  public function myfunc()
  {
    echo "Some Other Operations Here....\n";
  }

  public function __destruct()  //This is called(executed) when the object is being destroyed.
  {
    echo $this->name . " ";
    echo $this->age . " ";
    echo $this->city . " ";
    echo $this->mob . " ";
  }
}

$o = new data("prince", 20, "fzr", "8360909354");  //passing values to constrcutor
$o->myfunc();
