<?php
define("COLLEGE", "Marwadi University");

$name = "Arav Patel";
$semester = "Semester 4";
$rollNo = "12345";

$php = 85;
$java = 78;
$python = 90;
$dbms = 82;
$networking = 75;

$total = $php + $java + $python + $dbms + $networking;
$percentage = $total / 5;

echo "<h2>Previous Semester Result</h2>";
echo "College: " . COLLEGE . "<br>";
echo "Name: " . $name . "<br>";
echo "Roll No: " . $rollNo . "<br>";
echo "Semester: " . $semester . "<br><br>";
echo "PHP: $php<br>";
echo "Java: $java<br>";
echo "Python: $python<br>";
echo "DBMS: $dbms<br>";
echo "Networking: $networking<br><br>";
echo "Total Marks: $total<br>";
echo "Percentage: $percentage%";
?>