<?php
$page = $_GET["page"] ?? "home";

switch ($page) {
    case "home":
        echo "<h2>Home</h2><p>Welcome to our website.</p>";
        break;

    case "products":
        echo "<h2>Products</h2><p>Laptop, Mobile, Keyboard and Mouse.</p>";
        break;

    case "about":
        echo "<h2>About</h2><p>This is the About section.</p>";
        break;

    case "contact":
        echo "<h2>Contact</h2><p>Email: contact@example.com</p>";
        break;

    default:
        echo "<p>Page not found.</p>";
}
?>