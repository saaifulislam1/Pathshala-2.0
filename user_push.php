<?php


$name1=$_GET['name_key1'];
$author1=$_GET['auth_key1'];
$language1=$_GET['lang_key1'];
$rel1=$_GET['rel_key1'];



require_once('config.php');   


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO user_request (BOOK_NAME,AUTHOR_NAME,LANGUAGE,REALESED_YEAR)
VALUES ( '$name1', '$author1','$language1','$rel1')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>