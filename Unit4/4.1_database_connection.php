<?php
$conn = new mysqli("localhost", "root", "", "php_practical");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Database connection established successfully.";

$conn->close();
?>