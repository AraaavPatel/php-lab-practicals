<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    setcookie("username", $username, time() + 86400, "/");
    echo "Cookie created successfully.";
}
?>
<form method="post">
    Username: <input type="text" name="username" required>
    <input type="submit" value="Create Cookie">
</form>