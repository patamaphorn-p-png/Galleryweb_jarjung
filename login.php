<?php
session_start();
include 'db.php'; // เชื่อมต่อฐานข้อมูล

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            $_SESSION['user_id'] = $id;
            header("Location: dashboard.php");
            exit;
        } else {
            $error = "❌ รหัสผ่านไม่ถูกต้อง";
        }
    } else {
        $error = "❌ ไม่พบชื่อผู้ใช้นี้";
    }
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>เข้าสู่ระบบ | JAR'JUNG Pizza</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="login-page">
  <div class="login-box">
    <h2>🍕 เข้าสู่ระบบ JAR'JUNG</h2>
    <?php if(isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form action="login.php" method="POST">
      <label>ชื่อผู้ใช้</label>
      <input type="text" name="username" required>
      
      <label>รหัสผ่าน</label>
      <input type="password" name="password" required>
      
      <button type="submit">เข้าสู่ระบบ</button>
    </form>
    <p>ยังไม่มีบัญชี? <a href="register.php">สมัครสมาชิก</a></p>
  </div>
</body>
</html>
