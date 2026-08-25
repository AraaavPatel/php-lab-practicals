<?php
$conn = new mysqli("localhost", "root", "", "php_practical");

if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$id = 1;

$stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) echo "Record deleted successfully using MySQLi.";
else echo "Error: " . $stmt->error;

$stmt->close();
$conn->close();
?>