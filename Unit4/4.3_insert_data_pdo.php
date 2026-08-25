<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=php_practical", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO users (name, username, email, password) VALUES (:name, :username, :email, :password)";
    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ":name" => "Arav Patel",
        ":username" => "arav_pdo",
        ":email" => "aravpdo@example.com",
        ":password" => password_hash("12345", PASSWORD_DEFAULT)
    ]);

    echo "Data inserted successfully using PDO.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>