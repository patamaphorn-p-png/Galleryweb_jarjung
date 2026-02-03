<?php
session_start();

// ตรวจสอบว่ามีการล็อกอินหรือยัง
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // ถ้ายังไม่ได้ล็อกอิน ส่งกลับไปหน้า login
    exit;
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>Dashboard | JAR'JUNG Pizza</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="dashboard">
    <h1>🍕 ยินดีต้อนรับสู่ JAR'JUNG Pizza</h1>
    <p>คุณเข้าสู่ระบบเรียบร้อยแล้ว!</p>

    <h2>เมนูยอดนิยม</h2>
    <ul>
      <li>Meat Lovers Pizza</li>
      <li>Triple Truffle Pizza</li>
      <li>Spicy Hot Chilly Pizza</li>
    </ul>

    <h2>โปรโมชั่นพิเศษ</h2>
    <p>ซื้อ 1 แถม 1 ทุกวันศุกร์ 🎉</p>
    <form action="logout.php" method="post">
  <button type="submit">ออกจากระบบ</button>
</form>

    <a href="logout.php">ออกจากระบบ</a>
  </div>
</body>
</html>
