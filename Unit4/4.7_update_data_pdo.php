<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=php_practical", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id = 1;
    $name = "Updated Name";
    $email = "updated@example.com";

    $stmt = $pdo->prepare("UPDATE users SET name = :name, email = :email WHERE id = :id");
    $stmt->execute([
        ":name" => $name,
        ":email" => $email,
        ":id" => $id
    ]);

    echo "Record updated successfully using PDO.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>