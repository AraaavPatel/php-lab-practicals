<?php
$conn = new mysqli("localhost", "root", "", "php_practical");

if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$name = "Arav Patel";
$username = "arav";
$email = "arav@example.com";
$password = password_hash("12345", PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO users (name, username, email, password) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $username, $email, $password);

if ($stmt->execute()) echo "Data inserted successfully using MySQLi.";
else echo "Error: " . $stmt->error;

$stmt->close();
$conn->close();
?>