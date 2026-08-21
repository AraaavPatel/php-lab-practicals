<!DOCTYPE html>
<html>
<body>
<h2>Merge Two Arrays</h2>

<form method="post">
    Enter First Array:<br>
    <input type="text" name="array1" placeholder="10,20,30">
    <br><br>
    Enter Second Array:<br>
    <input type="text" name="array2" placeholder="40,50,60">
    <br><br>
    <input type="submit" value="Merge Arrays">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input1 = $_POST["array1"];
    $input2 = $_POST["array2"];

    $array1 = explode(",", $input1);
    $array2 = explode(",", $input2);
    $mergedArray = array_merge($array1, $array2);

    echo "<h3>First Array:</h3>";
    foreach ($array1 as $value) echo trim($value) . " ";

    echo "<h3>Second Array:</h3>";
    foreach ($array2 as $value) echo trim($value) . " ";

    echo "<h3>Merged Array:</h3>";
    foreach ($mergedArray as $value) echo trim($value) . " ";
}
?>
</body>
</html>