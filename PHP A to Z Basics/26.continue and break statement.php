<?php
echo "<h3>" . "This Is Continue Statement" . "</h3>";
//The continue statement "jumps over" only one iteration in the loop. 
for ($i = 1; $i <= 10; $i++) {

  if ($i == 2) {
    echo "Skipped Value is: " . $i . "<br>";
    continue;
  }
  if ($i == 4) {
    echo "Skipped Value is: " . $i . "<br>";
    continue;
  }
  echo $i . "</br>";
}
echo "<hr>";
?>



<?php
echo "<h3>" . "This Is Break Statement" . "</h3>";
//The break statement "jumps out" of a loop.

for ($i = 1; $i <= 10; $i++) {
  if ($i == 4 or $i == 10) {
    echo "!Boom broken" . "<br>";
    break;
  }
  echo $i . "</br>";
}
echo "<hr>";
?>
