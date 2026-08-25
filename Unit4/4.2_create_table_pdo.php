<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=php_practical", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        username VARCHAR(50) UNIQUE NOT NULL,
        email VARCHAR(100) NOT NULL,
        password VARCHAR(255) NOT NULL
    )";

    $pdo->exec($sql);
    echo "Table created successfully using PDO.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>