<?php
$servername = "localhost";
$username = "root"; // ค่า default ของ XAMPP
$password = "";     // ค่า default ของ XAMPP
$dbname = "jarjung_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("การเชื่อมต่อล้มเหลว: " . $conn->connect_error);
}
?>
