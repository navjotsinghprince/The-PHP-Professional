         <?php
          $peoples = array(
            /*first*/
            "first" => array("id" => 1, "name" => "Prince", "profession" => "programmer", "salery" => 75000), //values
            /*key*/      "second" => array("id" => 2, "name" => "john", "profession" => "manager", "salery" => 150000),
            /*key*/      "third" => array("id" => 3, "name" => "smith", "profession" => "hacker", "salery" => 85000),
            /*key*/      "fourth" => array("id" => 4, "name" => "elen", "profession" => "coder", "salery" => 50000),
            /*key*/      "fifth" => array("id" => 5, "name" => "peter", "profession" => "designer", "salery" => 5000),
            /*key*/      "sixth" => array("id" => 6, "name" => "tipsy", "profession" => "student", "salery" => 0)
          );
          //echo "<pre>";
          //echo print_r($peoples);
          //echo "</pre>";
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

          foreach ($peoples as list("id" => $id, "name" => $name, "profession" => $profession, "salery" => $salery)) {
            echo "<tr>
     <td>$id</td>
     <td>$name</td>
     <td>$profession</td>
     <td>$salery</td>
  </tr>";
          }
          echo "</table>";
          ?>
