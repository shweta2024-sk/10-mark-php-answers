<form method="post" action="reverse_string.php">
  Enter a string: <input type="text" name="inputString">
  <input type="submit" value="Reverse">
</form>
<?php // reverse_string.php
if (isset($_POST['inputString'])) {
  $string = $_POST['inputString'];
  $reversedString = strrev($string);

  echo "Original string: " . $string . "<br>";
  echo "Reversed string: " . $reversedString;
}
?>