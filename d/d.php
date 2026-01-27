<!doctype html>
<html lang="th">

<head>
<meta charset="utf-8">
<title>ฟอร์มสมัครสมาชิก — อนุสรา แสนขรยาง</title>

<!-- Bootstrap 5.3 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
        background: linear-gradient(135deg, #6a11cb, #2575fc);
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 30px;
        font-family: 'Prompt', sans-serif;
        color: #fff;
    }

    .glass-card {
        backdrop-filter: blur(18px);
        background: rgba(255, 255, 255, 0.15);
        border-radius: 20px;
        padding: 30px;
        width: 650px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.25);
        border: 1px solid rgba(255, 255, 255, 0.3);
        animation: fadeIn 0.8s ease;
    }

    .glass-card h2 {
        font-weight: 600;
        text-shadow: 0 2px 3px rgba(0,0,0,0.3);
    }

    /* ปุ่มสวยพิเศษ */
    .btn-modern {
        border-radius: 50px;
        padding: 10px 20px;
        transition: 0.3s;
    }

    .btn-modern:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    }

    /* ฟอร์มสวย */
    .form-control,
    .form-select {
        border-radius: 10px;
        padding: 10px 14px;
        border: none;
        box-shadow: 0 0 8px rgba(255,255,255,0.1);
    }

    /* Fade in animation */
    @keyframes fadeIn {
        from {opacity: 0; transform: translateY(20px);}
        to   {opacity: 1; transform: translateY(0);}
    }
</style>
</head>

<body>

<div class="glass-card">
    <h2 class="text-center mb-4">ฟอร์มสมัครสมาชิก</h2>

    <form method="post" action="">
        
        <div class="mb-3">
            <label class="form-label">ชื่อ-นามสกุล</label>
            <input type="text" name="fullname" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">เบอร์โทร</label>
            <input type="text" name="phone" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">ความสูง (ซม.)</label>
            <input type="number" name="height" class="form-control" step="5" min="100" max="220" required>
        </div>

        <div class="mb-3">
            <label class="form-label">สีที่ชอบ</label>
            <input type="color" name="color" class="form-control form-control-color" value="#ff0000">
        </div>

        <div class="mb-3">
            <label class="form-label">สาขาวิชา</label>
            <select name="major" class="form-select">
                <option value="การบัญชี">การบัญชี</option>
                <option value="การจัดการ">การจัดการ</option>
                <option value="การตลาด">การตลาด</option>
                <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
            </select>
        </div>

        <div class="d-flex justify-content-between mt-4">
            <button type="submit" name="Submit" class="btn btn-success btn-modern">สมัครสมาชิก</button>
            <button type="reset" class="btn btn-warning btn-modern">ล้างข้อมูล</button>
            <button type="button" class="btn btn-info btn-modern text-white"
                onMouseOver="window.location='https://msu.ac.th';">ไปเว็บ MSU</button>
            <button type="button" class="btn btn-secondary btn-modern" onclick="window.print();">พิมพ์</button>
        </div>

    </form>

    <hr class="border-light">

    <!-- PHP แสดงข้อมูล -->
    <?php
    if (isset($_POST['Submit'])) {
        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];
        $height = $_POST['height'];
        $color = $_POST['color'];
        $major = $_POST['major'];

        echo "<div class='alert alert-light text-dark mt-3 rounded-4'>";
        echo "<h5 class='fw-bold'>ข้อมูลที่ส่งมา</h5>";
        echo "ชื่อ-สกุล: $fullname<br>";
        echo "เบอร์โทร: $phone<br>";
        echo "ความสูง: $height ซม.<br>";
        echo "สีที่ชอบ: <span style='color:$color'>$color</span> ";
        echo "<div style='width:50px;height:20px;background:$color;border-radius:5px;display:inline-block'></div><br>";
        echo "สาขาวิชา: $major<br>";
        echo "</div>";
    }
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
