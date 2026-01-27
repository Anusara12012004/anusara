<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>สรุปข้อมูลการสมัคร - บริษัท อนุสรา</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #1e3c72;
            --secondary-color: #2a5298;
            --accent-color: #f8f9fa;
        }
        body {
            font-family: 'Prompt', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            padding: 40px 0;
        }
        .resume-card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            overflow: hidden;
            background: white;
            transition: transform 0.3s;
        }
        .header-section {
            background: linear-gradient(120deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 40px;
            position: relative;
        }
        .profile-icon {
            font-size: 80px;
            background: rgba(255,255,255,0.2);
            border-radius: 50%;
            width: 120px;
            height: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            border: 4px solid rgba(255,255,255,0.5);
        }
        .section-title {
            color: var(--primary-color);
            font-weight: 600;
            border-left: 5px solid var(--secondary-color);
            padding-left: 15px;
            margin-bottom: 20px;
            margin-top: 30px;
        }
        .info-label {
            color: #6c757d;
            font-size: 0.9rem;
            margin-bottom: 2px;
        }
        .info-value {
            color: #212529;
            font-weight: 500;
            font-size: 1.1rem;
        }
        .skill-badge {
            background-color: #eef2f7;
            color: var(--primary-color);
            padding: 8px 15px;
            border-radius: 50px;
            font-size: 0.9rem;
            display: inline-block;
            margin: 5px 3px;
            border: 1px solid #dee2e6;
        }
        .exp-box {
            background: #f8f9fa;
            border-left: 4px solid var(--secondary-color);
            padding: 15px;
            border-radius: 0 10px 10px 0;
        }
        /* Print Styles */
        @media print {
            body { background: white; padding: 0; }
            .resume-card { box-shadow: none; border-radius: 0; }
            .no-print { display: none !important; }
            .header-section { -webkit-print-color-adjust: exact; print-color-adjust: exact; }
        }
    </style>
</head>
<body>

<div class="container">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // รับค่าและ Clean Data
        $position   = htmlspecialchars($_POST['position'] ?? '-');
        $prefix     = htmlspecialchars($_POST['prefix'] ?? '');
        $fullname   = htmlspecialchars($_POST['fullname'] ?? '-');
        $dob        = $_POST['dob'] ?? '';
        $education  = htmlspecialchars($_POST['education'] ?? '-');
        $skills     = htmlspecialchars($_POST['skills'] ?? '');
        $experience = htmlspecialchars($_POST['experience'] ?? '');

        // คำนวณอายุ
        $age = "-";
        $dob_formatted = "-";
        if (!empty($dob)) {
            $birthDate = new DateTime($dob);
            $today = new DateTime('today');
            $age = $birthDate->diff($today)->y;
            
            // แปลงวันที่เป็นไทย
            $thai_months = [
                1=>"ม.ค.", 2=>"ก.พ.", 3=>"มี.ค.", 4=>"เม.ย.", 5=>"พ.ค.", 6=>"มิ.ย.",
                7=>"ก.ค.", 8=>"ส.ค.", 9=>"ก.ย.", 10=>"ต.ค.", 11=>"พ.ย.", 12=>"ธ.ค."
            ];
            $d = $birthDate->format('d');
            $m = $thai_months[(int)$birthDate->format('m')];
            $y = $birthDate->format('Y') + 543;
            $dob_formatted = "$d $m $y";
        }
    ?>

    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            
            <div class="alert alert-success d-flex align-items-center shadow-sm mb-4 animate__animated animate__fadeInDown" role="alert">
                <i class="bi bi-check-circle-fill flex-shrink-0 me-2" style="font-size: 1.5rem;"></i>
                <div>
                    <strong>บันทึกข้อมูลสำเร็จ!</strong> ทางฝ่ายบุคคลได้รับใบสมัครของคุณเรียบร้อยแล้ว
                </div>
            </div>

            <div class="card resume-card">
                
                <div class="header-section text-center">
                    <div class="profile-icon">
                        <i class="bi bi-person-fill"></i>
                    </div>
                    <h2 class="mb-1 fw-bold"><?php echo $prefix . $fullname; ?></h2>
                    <p class="mb-0 opacity-75"><i class="bi bi-briefcase me-2"></i>ผู้สมัครตำแหน่ง: <strong><?php echo $position; ?></strong></p>
                </div>

                <div class="card-body p-4 p-md-5">
                    
                    <h4 class="section-title"><i class="bi bi-person-vcard me-2"></i>ข้อมูลส่วนตัว</h4>
                    <div class="row g-4">
                        <div class="col-md-4 col-6">
                            <div class="info-label">อายุ</div>
                            <div class="info-value"><?php echo $age; ?> ปี</div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="info-label">วันเกิด</div>
                            <div class="info-value"><?php echo $dob_formatted; ?></div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="info-label">ระดับการศึกษาสูงสุด</div>
                            <div class="info-value text-primary"><?php echo $education; ?></div>
                        </div>
                    </div>

                    <hr class="my-4 text-muted opacity-25">

                    <h4 class="section-title"><i class="bi bi-stars me-2"></i>ทักษะและความสามารถ</h4>
                    <div>
                        <?php 
                        if (empty($skills)) {
                            echo '<span class="text-muted fst-italic">- ไม่ได้ระบุ -</span>';
                        } else {
                            // แยก Skill ด้วย comma หรือเว้นบรรทัด ถ้ามี
                            $skill_array = preg_split('/[,\n\r]+/', $skills);
                            foreach ($skill_array as $skill) {
                                $skill = trim($skill);
                                if (!empty($skill)) {
                                    echo "<span class='skill-badge'>$skill</span>";
                                }
                            }
                        }
                        ?>
                    </div>

                    <h4 class="section-title"><i class="bi bi-building-check me-2"></i>ประสบการณ์ทำงาน</h4>
                    <div class="exp-box">
                        <?php 
                        if (empty($experience)) {
                            echo '<span class="text-muted fst-italic">ไม่มีประสบการณ์ทำงานระบุไว้</span>';
                        } else {
                            echo nl2br($experience); 
                        }
                        ?>
                    </div>

                </div>

                <div class="card-footer bg-light p-4 text-center border-top-0 no-print">
                    <button onclick="window.print()" class="btn btn-dark px-4 me-2">
                        <i class="bi bi-printer-fill me-2"></i>พิมพ์ใบสมัคร
                    </button>
                    <a href="javascript:history.back()" class="btn btn-outline-secondary px-4">
                        <i class="bi bi-arrow-left me-2"></i>กลับหน้าหลัก
                    </a>
                </div>
            </div>

            <div class="text-center mt-4 text-muted fs-7 no-print">
                &copy; <?php echo date("Y"); ?> บริษัท อนุสรา จำกัด - ระบบรับสมัครงานออนไลน์
            </div>

        </div>
    </div>

    <?php 
    } else { 
    ?>
        <div class="text-center py-5">
            <h1 class="display-1 text-muted"><i class="bi bi-exclamation-circle"></i></h1>
            <h3>ไม่พบข้อมูลการสมัคร</h3>
            <p>กรุณากรอกข้อมูลจากหน้าแบบฟอร์มหลัก</p>
            <a href="index.html" class="btn btn-primary">ไปที่หน้าแบบฟอร์ม</a>
        </div>
    <?php 
    } 
    ?>
</div>

</body>
</html>