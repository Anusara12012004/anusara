<?php
	include_once("check_login.php");
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard : ธิดารัตน์ บุญสุภา (ฟิล์ม)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        body {
            background-color: #f4f7f6;
        }
        .sidebar {
            min-height: 100vh;
            background: #212529;
            color: white;
        }
        .sidebar .nav-link {
            color: rgba(255,255,255,0.8);
            margin-bottom: 5px;
            transition: 0.3s;
        }
        .sidebar .nav-link:hover, .sidebar .nav-link.active {
            color: white;
            background: rgba(255,255,255,0.1);
            border-radius: 8px;
        }
        .sidebar .nav-link i {
            margin-right: 10px;
        }
        .main-content {
            padding: 30px;
        }
        .admin-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        }
    </style>
</head>

<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse p-3">
            <div class="text-center mb-4">
                <i class="bi bi-person-circle fs-1 text-primary"></i>
                <h6 class="mt-2 mb-0"><?php echo $_SESSION['aname']; ?></h6>
                <small class="text-muted">Administrator</small>
            </div>
            <hr>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="index2.php">
                        <i class="bi bi-speedometer2"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="products.php">
                        <i class="bi bi-box-seam"></i> จัดการสินค้า
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="orders.php">
                        <i class="bi bi-cart3"></i> จัดการออเดอร์
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="customers.php">
                        <i class="bi bi-people"></i> จัดการลูกค้า
                    </a>
                </li>
                <hr>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="logout.php" onclick="return confirm('ยืนยันการออกจากระบบ?')">
                        <i class="bi bi-box-arrow-right"></i> ออกจากระบบ
                    </a>
                </li>
            </ul>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <span class="badge bg-primary p-2">ยินดีต้อนรับคุณ: <?php echo $_SESSION['aname']; ?></span>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card admin-card bg-white p-3">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 bg-primary-subtle text-primary p-3 rounded-3">
                                <i class="bi bi-box-seam fs-3"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-0 text-muted">สินค้าทั้งหมด</h6>
                                <h3 class="mb-0 fw-bold">120</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card admin-card bg-white p-3">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 bg-success-subtle text-success p-3 rounded-3">
                                <i class="bi bi-currency-dollar fs-3"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-0 text-muted">ยอดขายวันนี้</h6>
                                <h3 class="mb-0 fw-bold">฿12,500</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card admin-card bg-white p-3">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 bg-warning-subtle text-warning p-3 rounded-3">
                                <i class="bi bi-clock-history fs-3"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-0 text-muted">ออเดอร์ค้างส่ง</h6>
                                <h3 class="mb-0 fw-bold">5</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card admin-card p-4 bg-white mt-2">
                <h5>ยินดีต้อนรับสู่ระบบจัดการหลังบ้าน</h5>
                <p class="text-muted">กรุณาเลือกเมนูทางด้านซ้ายเพื่อจัดการข้อมูลในระบบ</p>
            </div>
            
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>