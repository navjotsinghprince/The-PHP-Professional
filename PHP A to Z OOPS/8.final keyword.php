<?php
//The final keyword can be used to prevent class inheritance or to prevent method overriding.
//A class with the final keyword cannot be inherited.
//A method with the final keyword in its declaration cannot be overridden.


final class Fruit
{           //final class will not be inherit             
  public $name = "navjot";

  //Simple Final Method
  final public function test()
  {
    echo "This is Final class function\n";
  }
}

$F = new Fruit;
$F->test();


#===================CANNOT OVERRIDE EXAMPLE=============================
class demo
{
  public $name = "Navjot Singh";
  final public function myFunc()
  {
    echo "This is Super class function";
  }
}

class demo2 extends demo
{
  public function myFunc() //It Shows Error: Method 'demo2::myFunc()' cannot override final method 
  {
    echo "This is Child class function";
  }
}


$o = new demo2;
$o->myFunc();
