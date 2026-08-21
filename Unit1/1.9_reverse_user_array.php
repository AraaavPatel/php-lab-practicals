<!DOCTYPE html>
<html>
<body>
<h2>Reverse Array</h2>
<form method="post">
    Enter values separated by comma:<br>
    <input type="text" name="values">
    <input type="submit" value="Reverse">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST["values"];
    $array = explode(",", $input);
    $reverseArray = array_reverse($array);

    echo "<h3>Original Array:</h3>";
    foreach ($array as $value) {
        echo trim($value) . " ";
    }

    echo "<h3>Reversed Array:</h3>";
    foreach ($reverseArray as $value) {
        echo trim($value) . " ";
    }
}
?>
</body>
</html>