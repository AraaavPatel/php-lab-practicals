<!DOCTYPE html>
<html>
<body>
<h2>Enter Array Values</h2>
<form method="post">
    Enter values separated by comma:<br>
    <input type="text" name="values">
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST["values"];
    $array = explode(",", $input);

    echo "<h3>Array Values:</h3>";
    foreach ($array as $value) {
        echo trim($value) . "<br>";
    }
}
?>
</body>
</html>