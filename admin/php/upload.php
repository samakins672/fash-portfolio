<?php
session_start();
include('config.php');

$created_by = $_SESSION['fash_admin_id'];
$files = array_filter($_FILES['pictures']['name']);

// Count # of uploaded files in array
$total = count($files);
$item = 0;

if (isset($_POST['upload-mine'])) {
  $collection = $_POST['collection'];
  $tags = $_POST['tag'];

  if ($collection == '0') {
    $name = $_POST['name'];
    $description = $_POST['description'];

    mysqli_query($conn, "INSERT INTO collection (name,	description,	created_by) 
      VALUES ('$name',	'$description',	$created_by)");

    $collection = mysqli_insert_id($conn);
  }

  $query1 = "INSERT INTO collection_pictures (collection,	tags,	created_by,	link) 
      VALUES ('$collection',	'$tags',	'$created_by', ";

  $filePath = "../../assets/images/collections/";
  
} elseif (isset($_POST['upload-client'])) {
  $client = $_POST['client'];
  $event = $_POST['event'];
  $tags = $_POST['tag'];
  $drive_link = ($_POST['drive_link'] == '') ? NULL : $_POST['drive_link'];
  
  if ($client == '0') {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $organisation = $_POST['organisation'];

    mysqli_query($conn, "INSERT INTO client (name,	phone,	email,	organisation,	created_by) 
      VALUES ('$name',	'$number',	'$email',	'$organisation',	'$created_by')");

    $client = mysqli_insert_id($conn);
  }
  
  // Generate a unique ID and check if it exists in the database
  do {
    $event_link = random_strings(8);
    $result = mysqli_query($conn, "SELECT COUNT(*) AS count FROM event WHERE event_link = '$event_link'");
    $row = mysqli_fetch_assoc($result);
    $count = $row['count'];
  } while ($count > 0);
  
  mysqli_query($conn, "INSERT INTO event (name,	client,	event_link, tags, drive_link,	created_by) 
      VALUES ('$event',	'$client',	'$event_link',	'$tags', '$drive_link',	'$created_by')");

  $event_id = mysqli_insert_id($conn);

  $query1 = "INSERT INTO client_pictures (event,	link) 
      VALUES ('$event_id', ";

  $filePath = "../../assets/images/clients/";
}

// Loop through each file
for ($i = 0; $i < $total; $i++) {

  //Get the temp file path
  $tmpFilePath = $_FILES['pictures']['tmp_name'][$i];

  //Make sure we have a file path
  if ($tmpFilePath != "") {
    //Get file extension
    $ext = pathinfo($files[$i], PATHINFO_EXTENSION);
    //Setup our new file path
    $filename = uniqid() . '_'. time() .'.' . $ext;
    $newFilePath = $filePath.$filename;

    $query = $query1. "'$filename')";

    // Upload the file into the temp dir
    if (move_uploaded_file($tmpFilePath, $newFilePath)) {

      //Handle other code here
      mysqli_query($conn, $query);

      $item += 1;
    }
  }
}

if ($item > 0) {
  if (isset($_POST['upload-client'])) {
    header("Location: ../index.php?event_uploaded=$event_link");
  } else {
    header("Location: ../index.php?upload_successful=$item");
  }
} else {
  header('Location: ../index.php?upload_failed');
}

?>