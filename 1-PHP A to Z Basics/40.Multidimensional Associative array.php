<?php
echo "<pre></pre>";

$peoples = array(
  //Key Value Paires
  /*first*/
  "key1" =>  array("id" => 1, "name" => "Prince", "profession" => "Programmer", "salery" => 75000), //Values
  /*key*/      "key2" =>  array("id" => 2, "name" => "john", "profession" => "Manager", "salery" => 150000),
  /*key*/      "key3" =>  array("id" => 3, "name" => "smith", "profession" => "Hacker", "salery" => 85000),
  /*key*/      "key4" =>  array("id" => 4, "name" => "elen", "profession" => "Coder", "salery" => 50000),
  /*key*/      "key5" =>  array("id" => 5, "name" => "peter", "profession" => "Designer", "salery" => 5000),
  /*key*/      "key6" =>  array("id" => 6, "name" => "tipsy", "profession" => "Student", "salery" => 0)
);


// echo $peoples["key1"]["id"]."<br>";
// echo $peoples["key1"]["name"]."<br>";
// echo $peoples["key1"]["profession"]."<br>";
// echo $peoples["key1"]["salery"]."<br>";

// echo $peoples["key1"]["name"]."<br>";
// echo $peoples["key2"]["name"]."<br>";
// echo $peoples["key3"]["name"]."<br>";
// echo $peoples["key4"]["name"]."<br>";

echo "<style>
    table{
      border: 2px solid blue;
      font-size: 19px;
      font-family: calibri;
      font-weight: 600;
    }
    th{
      color: rgb(236, 22, 150);
    }
</style>";
echo "<table border='2px' cellpadding='6px' cellspacing='0'>";
echo "<tr>
     <th>ID</th>
      <th>NAME</th>
       <th>PROFESSION</th>
        <th>SALERY</th>
        </tr>
";


foreach ($peoples as $Key => $v1) {
  echo "<tr>";
  foreach ($v1 as $key => $value) {
    echo "<td>$key $value</td>";
  }
  echo "</tr>";
}
echo "</table>";
