<?php
$conn = mysqli_connect("localhost", "root", "", "fash_shot_it");

if (!$conn) {
  die("Error: Failed to connect to database!");
}

// This function will return a random
// string of specified length
function random_strings($length_of_string)
{
  // String of all alphanumeric character
  $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

  // Shuffle the $str_result and returns substring
  // of specified length
  return substr(
    str_shuffle($str_result),
    0,
    $length_of_string
  );
}
?>