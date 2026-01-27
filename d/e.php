<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Job Application - Anusara </title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Prompt', sans-serif;
            background-color: #f0f2f5;
            background-image: radial-gradient(#dfe6e9 1px, transparent 1px);
            background-size: 20px 20px;
        }
        .main-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            overflow: hidden;
        }
        .header-bg {
            background: linear-gradient(120deg, #1e3c72 0%, #2a5298 100%);
            color: white;
            padding: 40px 20px;
            position: relative;
        }
        .company-logo {
            font-size: 2.5rem;
            font-weight: 700;
            letter-spacing: -1px;
        }
        .form-section-title {
            color: #1e3c72;
            border-bottom: 2px solid #e9ecef;
            padding-bottom: 10px;
            margin-bottom: 20px;
            margin-top: 20px;
            font-weight: 600;
        }
        .btn-submit {
            background-color: #1e3c72;
            border: none;
            padding: 12px 30px;
        }
        .btn-submit:hover {
            background-color: #162d55;
        }
        /* Styling for the Result Card */
        .result-card {
            border-top: 4px solid #1e3c72;
            background: #fff;
        }
    </style>
</head>

<body>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            
            <form method="post" action="f.php">
                <div class="card main-card">
                    
                    <div class="header-bg text-center">
                        <div class="company-logo"><i class="bi bi-cpu-fill"></i> บริษัท อนุสรา</div>
                        <p class="mb-0 opacity-75">แบบฟอร์มรับสมัครพนักงานใหม่ ประจำปี 2567</p>
                    </div>

                    <div class="card-body p-4 p-md-5">
                        
                        <h5 class="form-section-title"><i class="bi bi-briefcase"></i> ตำแหน่งที่ต้องการสมัคร</h5>
                        <div class="form-floating mb-3">
                            <select name="position" id="position" class="form-select" required>
                                <option value="" selected disabled>-- กรุณาเลือกตำแหน่ง --</option>
                                <option value="Software Engineer (Full Stack)">Software Engineer (Full Stack)</option>
                                <option value="UX/UI Designer">UX/UI Designer</option>
                                <option value="Digital Marketing Specialist">Digital Marketing Specialist</option>
                                <option value="Human Resource Officer">Human Resource Officer</option>
                                <option value="Project Manager">Project Manager</option>
                            </select>
                            <label for="position">เลือกตำแหน่งงาน</label>
                        </div>

                        <h5 class="form-section-title"><i class="bi bi-person-lines-fill"></i> ข้อมูลส่วนตัว</h5>
                        
                        <div class="row g-3 mb-3">
                            <div class="col-md-3">
                                <div class="form-floating">
                                    <select name="prefix" class="form-select" required>
                                        <option value="นาย">นาย</option>
                                        <option value="นาง">นาง</option>
                                        <option value="นางสาว">นางสาว</option>
                                    </select>
                                    <label>คำนำหน้า</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-floating">
                                    <input type="text" name="fullname" class="form-control" placeholder="ชื่อ-สกุล" required>
                                    <label>ชื่อ-นามสกุล</label>
                                </div>
                            </div>
                        </div>

                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="date" name="dob" class="form-control" required>
                                    <label>วันเดือนปีเกิด</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select name="education" class="form-select" required>
                                        <option value="" selected disabled>-- เลือกระดับการศึกษา --</option>
                                        <option value="มัธยมศึกษาตอนปลาย / ปวช.">มัธยมศึกษาตอนปลาย / ปวช.</option>
                                        <option value="อนุปริญญา / ปวส.">อนุปริญญา / ปวส.</option>
                                        <option value="ปริญญาตรี">ปริญญาตรี</option>
                                        <option value="ปริญญาโท">ปริญญาโท</option>
                                        <option value="ปริญญาเอก">ปริญญาเอก</option>
                                    </select>
                                    <label>ระดับการศึกษาสูงสุด</label>
                                </div>
                            </div>
                        </div>

                        <h5 class="form-section-title"><i class="bi bi-stars"></i> คุณสมบัติและประสบการณ์</h5>

                        <div class="mb-3">
                            <label class="form-label text-muted">ความสามารถพิเศษ / ทักษะ</label>
                            <textarea name="skills" class="form-control" rows="3" placeholder="เช่น ภาษาอังกฤษ, เขียนโปรแกรม PHP, ตัดต่อวิดีโอ..."></textarea>
                        </div>

                        <div class="mb-4">
                            <label class="form-label text-muted">ประสบการณ์ทำงาน (โดยสังเขป)</label>
                            <textarea name="experience" class="form-control" rows="4" placeholder="ระบุตำแหน่ง, บริษัท, และระยะเวลาทำงานที่ผ่านมา (ถ้ามี)"></textarea>
                        </div>

                        <hr class="my-4">

                        <div class="d-flex justify-content-end gap-2">
                            <button type="reset" class="btn btn-light border">ล้างข้อมูล</button>
                            <button type="submit" name="submit_app" class="btn btn-submit text-white shadow-sm">
                                <i class="bi bi-send-fill"></i> ส่งใบสมัคร
                            </button>
                        </div>

                    </div>
                </div>
            </form>

            <?php
            if (isset($_POST['submit_app'])) {
                // รับค่าจากฟอร์ม
                $position = htmlspecialchars($_POST['position']);
                $prefix = $_POST['prefix'];
                $fullname = htmlspecialchars($_POST['fullname']);
                $dob = $_POST['dob'];
                $education = $_POST['education'];
                $skills = nl2br(htmlspecialchars($_POST['skills'])); // nl2br เพื่อเว้นบรรทัด
                $experience = nl2br(htmlspecialchars($_POST['experience']));
                
                // คำนวณอายุ (Optional)
                $birthDate = new DateTime($dob);
                $today = new DateTime('today');
                $age = $birthDate->diff($today)->y;
            ?>
            
            <div class="card result-card shadow mt-4 animate__animated animate__fadeIn">
                <div class="card-body p-4">
                    <div class="text-center mb-4">
                        <i class="bi bi-check-circle-fill text-success" style="font-size: 3rem;"></i>
                        <h3 class="mt-2 text-success">บันทึกข้อมูลการสมัครเรียบร้อย</h3>
                        <p class="text-muted">ทางบริษัท TechFlow Solutions ได้รับข้อมูลของคุณแล้ว</p>
                    </div>
                    
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody>
                                <tr class="table-primary">
                                    <th width="30%">ตำแหน่งที่สมัคร</th>
                                    <td class="fw-bold text-primary"><?php echo $position; ?></td>
                                </tr>
                                <tr>
                                    <th>ชื่อ-นามสกุล</th>
                                    <td><?php echo $prefix . " " . $fullname; ?> (อายุ <?php echo $age; ?> ปี)</td>
                                </tr>
                                <tr>
                                    <th>ระดับการศึกษา</th>
                                    <td><?php echo $education; ?></td>
                                </tr>
                                <tr>
                                    <th>วันเดือนปีเกิด</th>
                                    <td><?php echo date("d/m/Y", strtotime($dob)); ?></td>
                                </tr>
                                <tr>
                                    <th>ความสามารถพิเศษ</th>
                                    <td><?php echo empty($skills) ? "-" : $skills; ?></td>
                                </tr>
                                <tr>
                                    <th>ประสบการณ์ทำงาน</th>
                                    <td><?php echo empty($experience) ? "ไม่มีประสบการณ์" : $experience; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="text-center mt-3 d-print-none">
                         <button class="btn btn-outline-secondary btn-sm" onclick="window.print()">
                            <i class="bi bi-printer"></i> พิมพ์ใบสมัคร
                        </button>
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