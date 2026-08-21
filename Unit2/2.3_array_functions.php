<?php
// 1. array_change_key_case()
$var = array("Name" => "Arav", "AGE" => 20);
echo "<h3>1. array_change_key_case()</h3>";
print_r(array_change_key_case($var, CASE_LOWER));
echo "<br>";
print_r(array_change_key_case($var, CASE_UPPER));

// 2. array_chunk()
$months = array(
    "January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"
);
echo "<h3>2. array_chunk()</h3>";
print_r(array_chunk($months, 3));

// 3. array_count_values()
$values = array("Apple", "Banana", "Apple", "Mango", "Banana", "Apple");
echo "<h3>3. array_count_values()</h3>";
print_r(array_count_values($values));

// 4. array_pop()
$array = array("A", "B", "C");
echo "<h3>4. array_pop()</h3>";
echo "Removed: " . array_pop($array);
echo "<br>";
print_r($array);

// 5. array_push()
$array = array("A", "B");
echo "<h3>5. array_push()</h3>";
array_push($array, "C", "D");
print_r($array);

// 6. array_unshift()
$array = array("B", "C");
echo "<h3>6. array_unshift()</h3>";
array_unshift($array, "A");
print_r($array);

// 7. array_shift()
$array = array("A", "B", "C");
echo "<h3>7. array_shift()</h3>";
echo "Removed: " . array_shift($array);
echo "<br>";
print_r($array);
?>