<?php
//A class can have both static and non-static properties.
//Static properties can be called directly - without creating an instance of a class.
class pi {
  public static $value = 3.14159;
  public function staticValue() {
    return self::$value;
  }
}

echo "<pre></pre>";

echo "first result is : ".pi::$value;  // Get static property without create object
$pi = new pi();
echo $pi->staticValue();              // Get static property with create object
echo "<hr>";


//-------------------------------------------------------------
//To call a static property from a child class, use the parent keyword inside the child class
class baseclass {
  public static $value=3.14159;
}

class childclass extends baseclass  {
  public function xStatic() {
    return parent::$value;  //use parent keyword to access parent class static property
  }
}

// Get value of static property directly via child class
echo"first value ".childclass::$value."<br>";

// Or Get value of static property via xStatic() method
$x = new childclass();
echo "second value ".$x->xStatic();
?>
