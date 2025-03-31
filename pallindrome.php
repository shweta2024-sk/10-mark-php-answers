<form method="post" action="pallindrome.php">
  Enter a string: <input type="text" name="inputString">
  <input type="submit" value="Check Palindrome">
</form>
<?php // pallindrome.php
function isPalindrome($string) {
  $string = str_replace(' ', '', strtolower($string)); // Remove spaces and lowercase
  $reversedString = strrev($string);
  return $string == $reversedString;
}

if (isset($_POST['inputString'])) {
  $string = $_POST['inputString'];
  if (isPalindrome($string)) {
    echo $string . " is a palindrome.";
  } else {
    echo $string . " is not a palindrome.";
  }
}
?>