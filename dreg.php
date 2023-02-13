<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connection_error) {
	die("Connection failed: " . $conn->connection_error);
	}
	echo "Connection successfully";
?>	