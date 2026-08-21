<?php
if (isset($_COOKIE["username"])) {
    echo "Cookie Value: " . $_COOKIE["username"];
} else {
    echo "Cookie is not set.";
}
?>