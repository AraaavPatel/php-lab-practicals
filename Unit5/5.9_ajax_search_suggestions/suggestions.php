<?php
$q = strtolower(trim($_GET["q"] ?? ""));

$items = array(
    "Apple", "Banana", "Mango", "Orange",
    "Pineapple", "Papaya", "Watermelon", "Strawberry",
    "Laptop", "Mobile", "Keyboard", "Mouse"
);

if ($q != "") {
    foreach ($items as $item) {
        if (strpos(strtolower($item), $q) !== false) {
            echo htmlspecialchars($item) . "<br>";
        }
    }
}
?>