<?php
$servername = "103.21.58.83";
$username = "ieeeyi9s_app";
$password = "9f93557d309f655ff06f109a08dcf7c4";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>