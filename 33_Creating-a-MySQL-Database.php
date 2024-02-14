<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create a connection
$conn = new mysqli($servername, $username, $password);
// Check the connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create a database query
$sql = "CREATE DATABASE cwhDB";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
?>