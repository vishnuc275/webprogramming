<?php
$servername = "localhost";
$username = "20mca020";
$password = "2444";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"20mca020");

// Check connection
if (!$conn) {
  die("Connection failed : " .mysqli_connect_error());
}
echo "Connected successfully !!";
?>