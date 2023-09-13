<?php
require '../config/db.php';

$conn = mysqli_connect("localhost", DB_USERNAME, DB_PASSWORD, "sannexng_fashshotit");

if (!$conn) {
  die("Error: Failed to connect to database!");
}

?>