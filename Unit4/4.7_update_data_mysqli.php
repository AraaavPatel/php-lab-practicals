<?php
$conn = new mysqli("localhost", "root", "", "php_practical");

if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$id = 1;
$name = "Updated Name";
$email = "updated@example.com";

$stmt = $conn->prepare("UPDATE users SET name = ?, email = ? WHERE id = ?");
$stmt->bind_param("ssi", $name, $email, $id);

if ($stmt->execute()) echo "Record updated successfully using MySQLi.";
else echo "Error: " . $stmt->error;

$stmt->close();
$conn->close();
?>