<?php
$marks = 83;

if ($marks>=80 && $marks<=100) {
  echo " Congratulations ! you are in merit list";
  echo "<hr>";

}elseif ($marks>=60 && $marks<80) {
  echo "you are in first division";

}elseif ($marks>=45 && $marks<60) {
  echo "you are in second division";

}elseif ($marks>=33 && $marks<45) {
  echo "you are in third division";

}elseif ($marks<33) {
  echo "you are fail";
}
else {
  echo "PLEASE ENTER CORRECT VALUE";
}

 ?>
