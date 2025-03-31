<?php
$rows = 4;
$char = 'A';

for ($i = 1; $i <= $rows; $i++) {
  for ($j = 1; $j <= $i; $j++) {
    echo $char . " ";
    $char++;
  }
  echo "<br>";
}
?>