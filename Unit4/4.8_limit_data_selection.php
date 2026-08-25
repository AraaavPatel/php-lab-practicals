<?php
$conn = new mysqli("localhost", "root", "", "php_practical");

if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$limit = 5;
$sql = "SELECT id, name, username, email FROM users LIMIT $limit";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . "<br>";
        echo "Name: " . htmlspecialchars($row["name"]) . "<br>";
        echo "Username: " . htmlspecialchars($row["username"]) . "<br>";
        echo "Email: " . htmlspecialchars($row["email"]) . "<br><hr>";
    }
} else {
    echo "No records found.";
}

$conn->close();
?>