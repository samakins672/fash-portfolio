<?php
require '../config/db.php';

$conn = mysqli_connect("localhost", DB_USERNAME, DB_PASSWORD, "fash_shot_it");

if (!$conn) {
  die("Error: Failed to connect to database!");
}

?>