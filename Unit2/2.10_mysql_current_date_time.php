<?php
$conn = new mysqli("localhost", "root", "", "");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT
    CURDATE() AS curdate_result,
    CURRENT_DATE() AS current_date_result,
    CURTIME() AS curtime_result,
    CURRENT_TIME() AS current_time_result,
    UNIX_TIMESTAMP() AS unix_timestamp_result,
    FROM_UNIXTIME(UNIX_TIMESTAMP()) AS from_unix_result";

$result = $conn->query($sql);
$row = $result->fetch_assoc();

echo "1. CURDATE(): " . $row["curdate_result"] . "<br>";
echo "   CURRENT_DATE(): " . $row["current_date_result"] . "<br>";
echo "2. CURTIME(): " . $row["curtime_result"] . "<br>";
echo "   CURRENT_TIME(): " . $row["current_time_result"] . "<br>";
echo "3. UNIX_TIMESTAMP(): " . $row["unix_timestamp_result"] . "<br>";
echo "4. FROM_UNIXTIME(): " . $row["from_unix_result"];

$conn->close();
?>