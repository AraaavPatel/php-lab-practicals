<?php
// Numeric Array
$days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
echo "<h3>Numeric Array</h3>";
print_r($days);

// Associative Array
$months = array(
    "January" => 31, "February" => 28, "March" => 31,
    "April" => 30, "May" => 31, "June" => 30,
    "July" => 31, "August" => 31, "September" => 30,
    "October" => 31, "November" => 30, "December" => 31
);
echo "<h3>Associative Array</h3>";
print_r($months);

// Multidimensional Array
$laptops = array(
    "Dell" => array(
        array("model" => "Inspiron 15", "price" => 55000),
        array("model" => "Vostro 15", "price" => 60000)
    ),
    "HP" => array(
        array("model" => "Pavilion 15", "price" => 58000),
        array("model" => "Victus 15", "price" => 70000)
    )
);
echo "<h3>Multidimensional Array</h3>";
print_r($laptops);
?>