<?php
$conn = new mysqli("localhost", "root", "", "");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT
    LENGTH('Hello PHP') AS length_result,
    CONCAT('Hello', ' ', 'World') AS concat_result,
    CONCAT_WS('-', '2026', '08', '13') AS concat_ws_result,
    TRIM('  Hello  ') AS trim_result,
    RTRIM('Hello  ') AS rtrim_result,
    LTRIM('  Hello') AS ltrim_result,
    LPAD('123', 6, '0') AS lpad_result,
    RPAD('123', 6, '0') AS rpad_result,
    LOCATE('PHP', 'Welcome to PHP') AS locate_result";

$result = $conn->query($sql);
$row = $result->fetch_assoc();

echo "1. LENGTH(): " . $row["length_result"] . "<br>";
echo "2. CONCAT(): " . $row["concat_result"] . "<br>";
echo "3. CONCAT_WS(): " . $row["concat_ws_result"] . "<br>";
echo "4. TRIM(): [" . $row["trim_result"] . "]<br>";
echo "   RTRIM(): [" . $row["rtrim_result"] . "]<br>";
echo "   LTRIM(): [" . $row["ltrim_result"] . "]<br>";
echo "5. LPAD(): " . $row["lpad_result"] . "<br>";
echo "   RPAD(): " . $row["rpad_result"] . "<br>";
echo "6. LOCATE(): " . $row["locate_result"];

$conn->close();
?>