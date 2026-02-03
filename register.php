<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // เข้ารหัสรหัสผ่าน
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // ตรวจสอบชื่อผู้ใช้ซ้ำ
    $stmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $error = "ชื่อผู้ใช้นี้มีอยู่แล้ว กรุณาเลือกชื่ออื่น";
    } else {
        // บันทึกข้อมูลผู้ใช้ใหม่
        $stmt = $conn->prepare("INSERT INTO users (username, password, email) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $hashed_password, $email);
        if ($stmt->execute()) {
            header("Location: login.php");
            exit;
        } else {
            $error = "เกิดข้อผิดพลาดในการสมัครสมาชิก";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>สมัครสมาชิก | JAR'JUNG Pizza</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="login-page">
  <div class="login-box">
    <h2>🍕 สมัครสมาชิก JAR'JUNG</h2>
    <?php if(isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form action="register.php" method="POST">
      <label>ชื่อผู้ใช้</label>
      <input type="text" name="username" required>

      <label>อีเมล</label>
      <input type="email" name="email" required>

      <label>รหัสผ่าน</label>
      <input type="password" name="password" required>

      <button type="submit">สมัครสมาชิก</button>
    </form>
    <p>มีบัญชีอยู่แล้ว? <a href="login.php">เข้าสู่ระบบ</a></p>
  </div>
</body>
</html>
