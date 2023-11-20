<?php
//PHP supports single inheritance, which means a class can inherit from only one class at a time. 
//But if a class needs multiple inheritance behaviors, then traits are used.
//To use trait in class simply use "trait" keyword that.

trait first //trait created
{
	public $realname = "Navjot";
	public function msg1()
	{
		echo "<h1>Hiii " . $this->realname . "</h1>";
	}
}

trait second
{
	public $nickname = "Prince";
	public function msg2()
	{
		echo "<h2>Hiii {$this->nickname}</h2>";
	}
}

class Myclass
{
	use first;
	use second;

	public function __construct()
	{
		$this->msg1();
		$this->msg2();
	}
}

$obj = new myclass();
