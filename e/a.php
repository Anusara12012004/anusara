<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ฟอร์มสมัครสมาชิก (Premium UI)</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            /* พื้นหลังไล่เฉดสี */
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px 0;
        }

        /* สไตล์กระจกฝ้า (Glassmorphism) */
        .glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.5);
            overflow: hidden;
        }

        .card-header-custom {
            background: linear-gradient(to right, #4facfe 0%, #00f2fe 100%);
            color: white;
            padding: 30px 20px;
            text-align: center;
            border-bottom: none;
        }

        .btn-custom-primary {
            background: linear-gradient(to right, #667eea, #764ba2);
            border: none;
            color: white;
            transition: transform 0.2s;
        }
        .btn-custom-primary:hover {
            transform: translateY(-2px);
            color: white;
            box-shadow: 0 5px 15px rgba(118, 75, 162, 0.4);
        }

        .member-card {
            border-left: 5px solid; /* สีจะเปลี่ยนตาม PHP */
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
        }
        
        /* ตกแต่ง Input Color ให้สวยขึ้น */
        .form-control-color {
            width: 100%;
            max-width: 100%;
        }
    </style>
</head>

<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-8">
            
            <div class="card glass-card">
                <div class="card-header-custom">
                    <h2 class="fw-bold mb-1"><i class="bi bi-person-badge-fill"></i> สมัครสมาชิก</h2>
                    <p class="mb-0 opacity-75">อนุสรา แสนขรยาง(นุช) -- Gemini Style</p>
                </div>
                
                <div class="card-body p-4">
                    <form method="post" action="">
                        
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="fullname" id="fullname" placeholder="ชื่อ-นามสกุล" required autofocus>
                            <label for="fullname"><i class="bi bi-person"></i> ชื่อ-นามสกุล</label>
                        </div>

                        <div class="row g-2 mb-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="เบอร์โทร" required>
                                    <label for="phone"><i class="bi bi-telephone"></i> เบอร์โทร</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control" name="height" id="height" step="5" min="100" max="220" placeholder="ส่วนสูง" required>
                                    <label for="height"><i class="bi bi-rulers"></i> ความสูง (ซม.)</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-floating mb-3">
                            <select name="major" id="major" class="form-select">
                                <option value="การบัญชี">การบัญชี</option>
                                <option value="การจัดการ">การจัดการ</option>
                                <option value="การตลาด">การตลาด</option>
                                <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                            </select>
                            <label for="major"><i class="bi bi-mortarboard"></i> สาขาวิชา</label>
                        </div>

                        <div class="mb-4">
                            <label for="color" class="form-label text-muted small ms-1">สีประจำตัวที่คุณชอบ</label>
                            <input type="color" class="form-control form-control-color w-100" name="color" id="color" value="#a855f7" title="Choose your color" style="height: 40px;">
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" name="Submit" class="btn btn-custom-primary btn-lg py-3 rounded-pill fw-bold">
                                สมัครสมาชิกทันที
                            </button>
                        </div>

                        <div class="d-flex justify-content-between mt-3 text-center">
                            <button type="reset" class="btn btn-sm btn-outline-secondary rounded-pill px-3">ล้างค่า</button>
                            <div>
                                <button type="button" class="btn btn-sm btn-outline-info rounded-pill px-3" onclick="window.location='https://msu.ac.th';">ไปเว็บ MSU</button>
                                <button type="button" class="btn btn-sm btn-outline-dark rounded-pill px-3" onclick="window.print();"><i class="bi bi-printer"></i> พิมพ์</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

            <?php
            if (isset($_POST['Submit'])){
                $fullname = htmlspecialchars($_POST['fullname']);
                $phone = htmlspecialchars($_POST['phone']);
                $height = htmlspecialchars($_POST['height']);
                $color = htmlspecialchars($_POST['color']);
                $major = htmlspecialchars($_POST['major']);
				
				include_once("connect.php");
	
				$sql = "insert into register (r_id, r_name, r_phone, r_height, r_color, r_major) 
        values (null,'$fullname','$phone','$height', '$color', '$major');";

				mysqli_query($conn, $sql) or die ("insert ไม่ได้");
				
				echo "<script>";
				echo "alert('เพิ่มข้อมูลสำเร็จ');";
				echo "</script>";
				
				
            ?>
                <div class="member-card p-4 mt-4 animate__animated animate__fadeInUp" style="border-left-color: <?php echo $color; ?>;">
                    <div class="d-flex align-items-center mb-3">
                        <div class="rounded-circle d-flex align-items-center justify-content-center text-white me-3" 
                             style="width: 60px; height: 60px; background-color: <?php echo $color; ?>; font-size: 24px;">
                             <i class="bi bi-person-fill"></i>
                        </div>
                        <div>
                            <h5 class="mb-0 fw-bold"><?php echo $fullname; ?></h5>
                            <span class="badge bg-secondary"><?php echo $major; ?></span>
                        </div>
                    </div>
                    <hr>
                    <div class="row text-secondary">
                        <div class="col-6">
                            <small>เบอร์โทรศัพท์</small><br>
                            <span class="text-dark fw-bold"><?php echo $phone; ?></span>
                        </div>
                        <div class="col-6">
                            <small>ส่วนสูง</small><br>
                            <span class="text-dark fw-bold"><?php echo $height; ?> ซม.</span>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>