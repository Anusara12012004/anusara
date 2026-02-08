<?php
session_start();
include_once("connectdb.php");

$error_msg = ""; // ตัวแปรสำหรับเก็บข้อความแจ้งเตือน

if (isset($_POST['Submit'])) {
    $user = $_POST['auser'];
    $pwd  = $_POST['apwd'];

    $sql = "SELECT * FROM admin WHERE a_username = ? LIMIT 1";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $user);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $data = mysqli_fetch_array($result);

    if ($data && password_verify($pwd, $data['a_password'])) {
        $_SESSION['aid'] = $data['a_id'];
        $_SESSION['aname'] = $data['a_name'];
        header("Location: index2.php");
        exit();
    } else {
        $error_msg = "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
    }
}
?>

<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login : ธิดารัตน์ บุญสุภา (ฟิล์ม)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            background: white;
        }
    </style>
</head>

<body>

<div class="login-card">
    <div class="text-center mb-4">
        <h4 class="fw-bold text-primary">เข้าสู่ระบบหลังบ้าน</h4>
        <p class="text-muted small">ธิดารัตน์ บุญสุภา (ฟิล์ม)</p>
    </div>

    <?php if ($error_msg): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?php echo $error_msg; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <form method="post" action="">
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="auser" class="form-control" placeholder="กรอกชื่อผู้ใช้" autofocus required>
        </div>
        
        <div class="mb-4">
            <label class="form-label">Password</label>
            <input type="password" name="apwd" class="form-control" placeholder="กรอกรหัสผ่าน" required>
        </div>

        <button type="submit" name="Submit" class="btn btn-primary w-100 py-2 mb-3">
            Login
        </button>
        
        <div class="text-center">
            <a href="index.php" class="text-decoration-none small text-secondary">กลับหน้าหลัก</a>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>