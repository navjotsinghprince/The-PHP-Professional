<?php
#Abstract classes and methods are those classes in which functions are declared but not implemented.
#Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.
#An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.

#NOTE: The child class method must be defined with the same name and it redeclares the parent abstract method
#NOTE: The child class method must be defined with the same or a less restricted access modifier
#NOTE: The number of required arguments must be the same. However, the child class may have optional arguments in addition

abstract class MySuperClass
{

  protected $a;
  protected $b;
  abstract public function add();  //function declare
  abstract public function hello();
}

class MysubClass extends MySuperClass
{
  function __construct($x, $y)
  {
    $this->a = $x;
    $this->b = $y;
  }

  public function add()
  {
    return ($this->a + $this->b);
  }

  //Comment this function
  public function hello()
  {
    echo "Comment out this function, and it will give an error, asking to implement it.";
  }
}


$test = new MysubClass(10, 30);
echo "The Result Is : " . $test->add();
