<!DOCTYPE html>
<html>
<body>
<h2>Calculator Using User Defined Function</h2>

<form method="post">
    Enter First Number:
    <input type="number" name="num1" step="any" required><br><br>

    Enter Second Number:
    <input type="number" name="num2" step="any" required><br><br>

    Select Operation:
    <select name="operation">
        <option value="add">Addition</option>
        <option value="sub">Subtraction</option>
        <option value="mul">Multiplication</option>
        <option value="div">Division</option>
    </select><br><br>

    <input type="submit" value="Calculate">
</form>

<?php
function calculator($a, $b, $operation) {
    switch ($operation) {
        case "add":
            return $a + $b;
        case "sub":
            return $a - $b;
        case "mul":
            return $a * $b;
        case "div":
            return ($b != 0) ? $a / $b : "Cannot divide by zero";
        default:
            return "Invalid operation";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];

    echo "<h3>Result: " . calculator($num1, $num2, $operation) . "</h3>";
}
?>
</body>
</html>