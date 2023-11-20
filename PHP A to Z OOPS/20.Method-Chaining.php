<?php
class chaining
{

    public function first()
    {
        echo "This is First Function\n";
        return $this;
    }

    public function second()
    {
        echo "This is second Function\n";
        return $this;
    }

    public function third()
    {
        echo "This is Third Function\n";
        return $this;
    }
}

$obj = new chaining();
// $obj->first();
// $obj->second();
// $obj->third();


//$obj->first()==here will be treat as "this"
$obj->first()->second()->third();


#Manually Testing 
//$info=$obj->first();
//print_r($info);
//echo var_dump($info);
