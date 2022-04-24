<link rel="icon" type="image/x-icon" href="favicon.ico">
<?php

include 'config.php';

$id = $_GET['id']; //This is here with getting the URL information from the userdeletion.php process.

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


  // This is the SQL code below to delete the user from 
  // with searching for its identification number
$sql = "DELETE FROM users WHERE id=$id";

if ($conn->query($sql) === TRUE) { //The if statement here executes the deletion process when selected and the else is there to test reasons why it did not execute properly.
    header('Location: userdeletion.php');
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close(); //This will close the users database.

?>