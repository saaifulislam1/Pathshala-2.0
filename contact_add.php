<?php
$name=$_GET['people_name'];
$email=$_GET['people_email'];
$message=$_GET['people_message'];

require_once('config.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO contact_information (NAME,EMAIL,MESSAGE)
VALUES ('$name', '$email','$message')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();





?>