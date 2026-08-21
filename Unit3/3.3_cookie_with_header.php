<?php
setcookie("user", "Arav", time() + 86400, "/");

if (isset($_COOKIE["user"])) {
    header("Location: welcome.php");
    exit();
}

echo "Cookie has been created. Refresh the page to use the cookie.";
?>