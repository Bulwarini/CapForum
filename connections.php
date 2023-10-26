<?php
$servername = "localhost";
$username = "mysql";
$password = "";
$dbname = "reglog";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>