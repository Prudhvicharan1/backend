<?php
$servername = "localhost"; // Assuming MySQL is running on the same machine
$username = "root"; // Default MySQL username in XAMPP
$password = ""; // Default MySQL password in XAMPP is empty by default
$database = "login"; // Replace with your actual database name

// Create connection
$connection = new mysqli($servername, $username, $password, $database);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

echo "Connected successfully";
?>
