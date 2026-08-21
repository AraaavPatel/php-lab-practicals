<?php
$conn = new mysqli("localhost", "root", "", "");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT
    DAYOFWEEK('2026-08-13') AS dayofweek_result,
    WEEKDAY('2026-08-13') AS weekday_result,
    DAYOFMONTH('2026-08-13') AS dayofmonth_result,
    DAYOFYEAR('2026-08-13') AS dayofyear_result,
    DAYNAME('2026-08-13') AS dayname_result";

$result = $conn->query($sql);
$row = $result->fetch_assoc();

echo "1. DAYOFWEEK(): " . $row["dayofweek_result"] . "<br>";
echo "2. WEEKDAY(): " . $row["weekday_result"] . "<br>";
echo "3. DAYOFMONTH(): " . $row["dayofmonth_result"] . "<br>";
echo "4. DAYOFYEAR(): " . $row["dayofyear_result"] . "<br>";
echo "5. DAYNAME(): " . $row["dayname_result"];

$conn->close();
?>