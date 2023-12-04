<?php
//Same works as abstract class
//Functions that should be used in a class are declared in an interface.
//We Can inherit multiple interface implement in single class
//You cannot define variables, whereas in an abstract class, it is possible to do so.
//Constructor functions are not allowed.
//Only public functions are declared; 

interface welcome
{
	public function msg();
}

interface userfunclists
{
	public function setter($uname, $upass);
}

class MyClass implements welcome, userfunclists
{
	protected $username = "PrinceFerozepuria";
	protected $password = 123456;

	public function setter($uname, $upass)
	{
		if (($uname == $this->username && $upass == $this->password) && ($uname !== "" && $upass !== "")) {
			echo $this->msg();
		}
	}

	public function msg()
	{
		return ("Your Login Data Successfully Activated");
	}
}

$o = new Myclass();
$o->setter("Prince", 12345);
