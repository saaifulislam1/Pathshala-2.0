<?php

$id=$_GET['id_key'];
$name=$_GET['name_key'];
$author=$_GET['auth_key'];
$language=$_GET['lang_key'];
$rel=$_GET['rel_key'];
$shelf=$_GET['shelf_key'];


require_once('config.php');  


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO all_books (ID, BOOK_NAME,AUTHOR_NAME,LANGUAGE,REALESED_YEAR, SHELF_NO)
VALUES ('$id', '$name', '$author','$language','$rel','$shelf')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>