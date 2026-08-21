<?php
$value = "100";

echo "Original Value: $value<br>";
echo "Original Type: " . gettype($value) . "<br><br>";

settype($value, "integer");
echo "After settype(integer): $value<br>";
echo "Type: " . gettype($value) . "<br><br>";

settype($value, "string");
echo "After settype(string): $value<br>";
echo "Type: " . gettype($value) . "<br><br>";

settype($value, "float");
echo "After settype(float): $value<br>";
echo "Type: " . gettype($value) . "<br>";
?>