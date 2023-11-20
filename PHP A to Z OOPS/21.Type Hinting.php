<?php
echo "<pre></pre>";
//Type Declaration(Type Hinting)
/*We will impose a value restriction right at the beginning of the function, meaning the value must be of the type we require.
  If we need an integer, it should be an integer; if a string, then a string./

//Data Types:- int,float,string,array,boolean,class,object,interface

// function sum($v){
// return $v+1;
// }
//echo sum("prince");  //The function will run with an error.  : A non-numeric value encountered 


#------------------------------------
/*
function sum(int $v){
	return $v+1;
	}
//echo sum("Prince"); //Now, the code inside the function will not run 

//Argument 1 passed to Fruits() must be of the type array,
function Fruits(array $names){
	foreach ($names as $value) {
		echo $value."<br>";
	}
}

$test=["prince","navi","raman","sukh"];
//$test="Apple"; //Warning: Invalid argument supplied for foreach
Fruits($test); 
*/

#===========================================================
/*class hello{
	public function sayhello(){
		echo "hello Everyone";
	}
}

class bye{
	public function saybye(){
		echo "Bye Everyone";
	}
}

//Now, the object that comes in should only be an instance of the Hello class.
function wow(hello $c){
	$c->sayhello();
}

$obj=new bye();
wow($obj);

*/
#==========================================================
class School
{
    //The type hint specifies that the argument object must be an instance of the Student class.
    public function Getnames(Student $names)
    {
        //call a function of $stu object
        foreach ($names->Names() as $value) {
            echo $value . "<br>";
        }
    }
}

class Student
{
    public function Names()
    {
        return ['ram', 'sham', 'sita'];
    }
}

class library
{
    #code...
}


$sch = new School();
$stu = new Student();
$lib = new library();

//$sch->Getnames($lib); //error call to undefined 
$sch->Getnames($stu);
