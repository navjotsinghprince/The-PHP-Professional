<?php

$version = 1.3;

switch ($version) {
  case 1.1:
    echo "Application VERSION IS 1.1";
    break;

  case 1.2:
    echo "Application VERSION IS 1.2";
    break;

  case 1.3:
    echo "Application VERSION IS 1.3";
    break;

  case 1.4:
    echo "Application VERSION IS 1.4";
    break;

  case 1.5:
    echo "Application VERSION IS 1.5";
    break;

  default:
    echo "Please select correct verion";
    break;
}
echo "<br><hr>";
?>

<?php
$Mobname = "nokia";

switch ($Mobname) {
  case 'blackberry':
    echo "you should purchase Blackberry";
    break;
  case 'apple':
    echo "you sholud purchase Apple";
    break;
  case 'microsoft':
    echo "you sholud purchase Microsoft";
    break;

  default:
    echo "Your PHone Model is : " . $Mobname . " could not found !";
    break;
}
echo "<br><hr>";
?>


<?php

//Conditional case
$age = 18;
switch (true) {  //swich on
  case ($age >= 18 && $age <= 25):
    echo "you are eligible for job";
    break;

  case ($age <= 18):
    echo "you are not  eligible for job";
    break;

  default:
    echo "enter valid age";
    break;
}
echo "<br><hr>";
?>

<?php
$day = 3;
switch ($day) {

  case 0:
  case 1:
  case 2:  //It will work the same for both  Case 0, Case 1 and Case 2.
    echo "today is sunday";
    break;
    // case 1:  echo"today is monday";
    // break;
    // case 2:  echo"today is tuesday";
    // break;
  case 3:
    echo "today is wednesday";
    break;

  case 4:
    echo "today is thursday";
    break;

  case 5:
    echo "today is friday";
    break;

  case 6:
    echo "today is saturday";
    break;

  default:
    echo "invalid selection";
}

?>
