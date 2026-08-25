<?php
$q = $_GET["q"] ?? "";

if ($q != "") {
    echo "Server received: " . htmlspecialchars($q);
}
?>