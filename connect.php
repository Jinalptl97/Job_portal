<?php
$servername = "localhost";
$username = "root";
$password = "";
$databaseName = 'recruitment_system';
// Create connection
$conn = mysqli_connect($servername, $username, $password,$databaseName);

// Check connection
if (!$conn) 
{
  die("Connection failed: " . mysqli_error());
}
echo "Connected successfully";
?>