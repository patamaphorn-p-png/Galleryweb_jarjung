<?php
session_start();          // เรียก session ที่กำลังใช้งาน
session_unset();          // ล้างตัวแปรทั้งหมดใน session
session_destroy();        // ทำลาย session

// ส่งผู้ใช้กลับไปยังหน้า login หรือหน้าแรก
header("Location: login.php");
exit;
?>
