<?php
$servername = "localhost";
$username = "root";
$password = "31052002";
$database = "project1";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>