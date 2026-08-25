<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=php_practical", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id = 1;
    $stmt = $pdo->prepare("DELETE FROM users WHERE id = :id");
    $stmt->execute([":id" => $id]);

    echo "Record deleted successfully using PDO.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>