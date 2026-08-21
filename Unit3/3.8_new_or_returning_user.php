<?php
if (isset($_COOKIE["visitor"])) {
    echo "Welcome back! You are a returning visitor.";
} else {
    setcookie("visitor", "visited", time() + (86400 * 30), "/");
    echo "Welcome! You are a new visitor.";
}
?>