<?php
session_start();

$_SESSION["username"] = "Arav";
$_SESSION["email"] = "arav@example.com";

echo "Session created successfully.<br>";
echo "Username: " . $_SESSION["username"] . "<br>";
echo "Email: " . $_SESSION["email"];
?>