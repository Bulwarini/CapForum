<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "logowansko";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>