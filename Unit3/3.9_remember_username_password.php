<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (isset($_POST["remember"])) {
        setcookie("remember_username", $username, time() + (86400 * 30), "/");
        setcookie("remember_password", $password, time() + (86400 * 30), "/");
    }

    echo "Login submitted.";
}

$username = $_COOKIE["remember_username"] ?? "";
$password = $_COOKIE["remember_password"] ?? "";
?>
<form method="post">
    Username:
    <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>" required><br><br>

    Password:
    <input type="password" name="password" value="<?php echo htmlspecialchars($password); ?>" required><br><br>

    <label>
        <input type="checkbox" name="remember"> Remember Me
    </label><br><br>

    <input type="submit" value="Login">
</form>