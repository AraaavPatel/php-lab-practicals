<?php
$conn = new mysqli("localhost", "root", "", "");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT
    HOUR('14:35:42') AS hour_result,
    MINUTE('14:35:42') AS minute_result,
    SECOND('14:35:42') AS second_result,
    DATE_FORMAT('2026-08-13 14:35:42', '%d-%m-%Y %H:%i:%s') AS date_format_result,
    DATE_SUB('2026-08-13', INTERVAL 7 DAY) AS date_sub_result";

$result = $conn->query($sql);
$row = $result->fetch_assoc();

echo "1. HOUR(): " . $row["hour_result"] . "<br>";
echo "2. MINUTE(): " . $row["minute_result"] . "<br>";
echo "3. SECOND(): " . $row["second_result"] . "<br>";
echo "4. DATE_FORMAT(): " . $row["date_format_result"] . "<br>";
echo "5. DATE_SUB(): " . $row["date_sub_result"];

$conn->close();
?>