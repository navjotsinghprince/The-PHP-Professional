<?php
//Properties and methods can have access modifiers which control where they can be accessed.
// public - the property or method can be accessed from everywhere. This is default
// protected - the property or method can be accessed within the class and by classes derived from that class
// private - the property or method can ONLY be accessed within the class..not accessable in another class they will not be access inherited calss

class test
{
  public $a = "I am Public Property";
  private $b = "I am Private Property";
  protected $c = "I am Protected Property";

  public function iampublic()
  {
    echo "This is Public Method<br>";
  }

  private function iamprivate()
  {
    echo "This is private Method<br>";
  }

  protected function iamprotected()
  {
    echo "This is protected Method<br>";
  }

  public function AccessAll()
  {
    echo "<h4>Here is Access All ProPerties and Methods</h4>";
    echo $this->a . "<br>";
    echo $this->b . "<br>";
    echo $this->c . "<br>";
    echo $this->iampublic();
    echo $this->iamprivate();
    echo $this->iamprotected();
  }
}

$myobj = new test;
echo "<pre>";
//print_r($myobj);
//echo "<pre>";

/*Access Properties Direct Outside*/
echo $myobj->a . " Single Property Test<br>";
//echo $myobj->b."<br>";    //Uncaught Error: Cannot access private property test::$b
//echo $myobj->c."<br>";     Uncaught Error: Cannot access protected property test::$b

/*Access Methods Direct Outside*/
echo $myobj->iampublic() . "<hr>";
//echo $myobj->iamprivate()."<br>";    //Uncaught Error: Call to private method test::iamprivate() from context
//echo $myobj->iamprotected()."<br>";  //Uncaught Error: Call to protected method test::iamprotected() from context ''

$myobj->AccessAll(); //access all provate and protected properties and methods
echo "<hr>";


#===================================MORE UNDERSTANDING==============================
class super //superclass
{
  public $a = "i am public variable<br>";
  private $b = " I m private variable<br>";
  protected $c = "I m protected variable<br>";

  public function mepublic()
  {
    echo "hello i m public function<br>";
  }
  private function meprivate()
  {
    echo "hello i m private function<br><br>";
  }

  protected function meprotected()
  {
    echo "hello i m protected function<br>";
  }
}

class sub extends super //subclass
{ 
  public function check()
  {
    echo $this->a;
    //echo $this->b; //ERROR private variable and methods can't be access in sub class
    echo $this->c;

    $this->mepublic();
    //$this->meprivate();  //ERROR private variable and methods can't be access in sub class
    $this->meprotected();
  }
}

$obj = new sub;
$obj->check();
