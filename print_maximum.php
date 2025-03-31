<?php
$num1 = 10;
$num2 = 25;
$num3 = 15;

$max = $num1; // Assume num1 is the maximum initially

if ($num2 > $max) {
  $max = $num2;
}

if ($num3 > $max) {
  $max = $num3;
}

echo "The maximum number is: " . $max;
?>