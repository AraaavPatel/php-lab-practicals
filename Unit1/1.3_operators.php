<?php
$a = 20;
$b = 10;

echo "<h3>Arithmetic Operators</h3>";
echo "Addition: " . ($a + $b) . "<br>";
echo "Subtraction: " . ($a - $b) . "<br>";
echo "Multiplication: " . ($a * $b) . "<br>";
echo "Division: " . ($a / $b) . "<br>";
echo "Modulus: " . ($a % $b) . "<br>";

echo "<h3>Assignment Operators</h3>";
$c = $a;
echo "c = a: $c<br>";
$c += $b;
echo "c += b: $c<br>";

echo "<h3>Comparison Operators</h3>";
var_dump($a == $b); echo " : Equal<br>";
var_dump($a != $b); echo " : Not Equal<br>";
var_dump($a > $b); echo " : Greater Than<br>";
var_dump($a < $b); echo " : Less Than<br>";

echo "<h3>Logical Operators</h3>";
$x = true;
$y = false;
var_dump($x && $y); echo " : AND<br>";
var_dump($x || $y); echo " : OR<br>";
var_dump(!$x); echo " : NOT<br>";
?>