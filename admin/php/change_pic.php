<?php
include('config.php');
session_start();
$id = $_SESSION['fash_admin_id'];

if (isset($_POST['change_pic'])) {
  $picture_id = $_POST['picture_id'];
  $picture = $_FILES['picture']['name'];
  $tempname = $_FILES['picture']['tmp_name'];
  $extension = pathinfo($picture, PATHINFO_EXTENSION);
  $picture = "image_" . $picture_id . "." . $extension;
  $destination = "../../assets/images/footer/{$picture}";

  $last_picture = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM landing_pictures WHERE id = $picture_id"))['link'];
  unlink("../../assets/images/footer/{$last_picture}");
  
  if (move_uploaded_file($tempname, $destination)) {
    mysqli_query($conn, "UPDATE landing_pictures SET link = '$picture' WHERE id = $picture_id");

    header('Location: ../index.php?change_pic=success');
    exit();
  } else {
    header('Location: ../index.php?change_pic=err');
    exit();
  }

}

mysqli_close($conn);

?>