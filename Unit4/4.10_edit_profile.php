<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: 4.9_login_authentication/login.php");
    exit();
}

$conn = new mysqli("localhost", "root", "", "php_practical");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$id = $_SESSION["user_id"];
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    $stmt = $conn->prepare("UPDATE users SET name = ?, email = ? WHERE id = ?");
    $stmt->bind_param("ssi", $name, $email, $id);

    if ($stmt->execute()) {
        $message = "Profile updated successfully.";
    }
    $stmt->close();
}

$stmt = $conn->prepare("SELECT name, username, email FROM users WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$stmt->close();
$conn->close();
?>

<h2>Edit Profile</h2>
<?php echo "<p>$message</p>"; ?>

<form method="post">
    Name:
    <input type="text" name="name" value="<?php echo htmlspecialchars($user["name"]); ?>" required><br><br>

    Username:
    <input type="text" value="<?php echo htmlspecialchars($user["username"]); ?>" disabled><br><br>

    Email:
    <input type="email" name="email" value="<?php echo htmlspecialchars($user["email"]); ?>" required><br><br>

    <input type="submit" value="Update Profile">
</form>