<?php
	include_once("check_login.php");
    include_once("connectdb.php");
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการออเดอร์ : อนุสรา แสนขรยาง (นุช)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        body { background-color: #f4f7f6; }
        .sidebar { min-height: 100vh; background: #212529; color: white; }
        .sidebar .nav-link { color: rgba(255,255,255,0.8); margin-bottom: 5px; }
        .sidebar .nav-link:hover, .sidebar .nav-link.active { color: white; background: rgba(255,255,255,0.1); border-radius: 8px; }
        .main-content { padding: 30px; }
        .card { border: none; border-radius: 15px; box-shadow: 0 4px 10px rgba(0,0,0,0.05); }
        .status-pill { width: 100px; display: inline-block; text-align: center; }
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
                <li class="nav-item"><a class="nav-link" href="index2.php"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="products.php"><i class="bi bi-box-seam"></i> จัดการสินค้า</a></li>
                <li class="nav-item"><a class="nav-link active" href="orders.php"><i class="bi bi-cart3"></i> จัดการออเดอร์</a></li>
                <li class="nav-item"><a class="nav-link" href="customers.php"><i class="bi bi-people"></i> จัดการลูกค้า</a></li>
                <hr>
                <li class="nav-item"><a class="nav-link text-danger" href="logout.php"><i class="bi bi-box-arrow-right"></i> ออกจากระบบ</a></li>
            </ul>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">จัดการออเดอร์</h1>
                <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Export PDF</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Export Excel</button>
                </div>
            </div>

            <div class="card p-4">
                <div class="row mb-3">
                    <div class="col-md-8">
                        <h5 class="mb-0">รายการสั่งซื้อล่าสุด</h5>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group">
                            <span class="input-group-text bg-white"><i class="bi bi-search"></i></span>
                            <input type="text" class="form-control" placeholder="ค้นหาเลขที่ออเดอร์...">
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>เลขที่ออเดอร์</th>
                                <th>ชื่อลูกค้า</th>
                                <th>วันที่สั่งซื้อ</th>
                                <th>ยอดรวม</th>
                                <th>สถานะ</th>
                                <th class="text-center">จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-bold text-primary">#ORD-67001</td>
                                <td>คุณสมชาย ใจดี</td>
                                <td>03 ก.พ. 2567 | 10:30</td>
                                <td>฿1,250.00</td>
                                <td><span class="badge rounded-pill bg-warning text-dark status-pill">รอชำระเงิน</span></td>
                                <td class="text-center">
                                    <a href="order_detail.php?id=1" class="btn btn-sm btn-info text-white"><i class="bi bi-eye-fill"></i> ดูรายละเอียด</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-primary">#ORD-67002</td>
                                <td>คุณสมหญิง รักดี</td>
                                <td>03 ก.พ. 2567 | 09:15</td>
                                <td>฿450.00</td>
                                <td><span class="badge rounded-pill bg-success status-pill">ชำระแล้ว</span></td>
                                <td class="text-center">
                                    <a href="order_detail.php?id=2" class="btn btn-sm btn-info text-white"><i class="bi bi-eye-fill"></i> ดูรายละเอียด</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>