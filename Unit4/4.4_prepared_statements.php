<?php
$conn = new mysqli("localhost", "root", "", "php_practical");

if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$username = "prepared_user";
$email = "prepared@example.com";
$name = "Prepared User";
$password = password_hash("12345", PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO users (name, username, email, password) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $username, $email, $password);

if ($stmt->execute()) echo "Prepared statement executed successfully.";
else echo "Error: " . $stmt->error;

$stmt->close();
$conn->close();
?>