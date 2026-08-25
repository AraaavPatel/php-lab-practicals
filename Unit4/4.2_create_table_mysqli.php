<?php
$conn = new mysqli("localhost", "root", "", "php_practical");

if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    username VARCHAR(50) UNIQUE NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully using MySQLi.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>