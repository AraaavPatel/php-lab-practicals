<!DOCTYPE html>
<html>
<body>
<h2>Sort an Array</h2>
<form method="post">
    Enter numbers separated by comma:<br>
    <input type="text" name="numbers">
    <input type="submit" value="Sort">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numbers = array_map('trim', explode(",", $_POST["numbers"]));
    sort($numbers);

    echo "<h3>Sorted Array:</h3>";
    print_r($numbers);
}
?>
</body>
</html>