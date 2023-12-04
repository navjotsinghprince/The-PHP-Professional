<?php
//This class is in namespace.
namespace pro\version_1\command\myname3;  //First way to declare namespace

class Product
{
	public function Myfunc()
	{
		echo "Message:- Product Class\n";
	}

	public function __construct()
	{

		$test = new \test\Product(); //we can make object of "\test\Product" and call its methods

		$test->Myfunc();
	}
}

function wow()
{
	echo "Wow From product file\n";
}
