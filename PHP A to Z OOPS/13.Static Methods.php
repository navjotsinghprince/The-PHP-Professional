<?php
//When we create a function or variable in a class, they are related to the objects created from that class.
//But static variables and functions are only related to the class.
//Static methods can be called directly - without creating an instance of a class.
//A class can have both static and non-static methods. 
//A static method can be accessed from a method in the same class using the self keyword and double colon (::)

//-------------------------------------------------------------------
echo "<pre></pre>";

class greeting
{
  public static $name = "Navjot Singh";
  public static function welcome()
  {
    echo "I am static function and access me without creating a object";
  }
}

//Access using scope resolution operator ::
echo greeting::$name;
greeting::welcome();   //Call static method without creating object

echo "<hr>";


//-------------------------------------------------------------------------
#Let's create a class that will keep track of how many objects have been created:
#static variable and static function only access with self:: keyword
class checker
{
  public static $objectcount = 0;

  public function getcount()
  {
    return self::$objectcount;
  }
  public function __construct()
  {
    self::$objectcount++;
  }
}

$a = new checker();
$b = new checker();
$c = new checker();
$d = new checker();
$e = new checker();
echo "total object counting is : " . checker::getcount();
echo "<hr>";

//------------------------------------------------------------------------
//To call a static method from a child class, use the parent keyword inside the child class. Here, the static method can be public or protected.

class domain
{
  protected static function getWebsiteName()
  {
    return "<a href='https://navjotsinghprince.github.io/'>My Website</a>";
  }
}

class mydomain extends domain
{
  public $websiteName;
  public function __construct()
  {
    $this->websiteName = parent::getWebsiteName();  //yahe pe ayega My Website
  }
}

$domainname = new mydomain;
echo $domainname->websiteName;
