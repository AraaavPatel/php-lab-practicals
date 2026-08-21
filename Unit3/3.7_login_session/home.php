<?php
session_start();

if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {
    header("Location: login.php");
    exit();
}
?>
<h2>Home Page</h2>
<p>Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</p>
<a href="logout.php">Logout</a>