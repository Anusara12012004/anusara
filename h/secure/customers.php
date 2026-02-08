<?php
	include_once("check_login.php");
    include_once("connectdb.php");
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการลูกค้า : อนุสรา แสนขรยาง (นุช)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        body { background-color: #f4f7f6; }
        .sidebar { min-height: 100vh; background: #212529; color: white; }
        .sidebar .nav-link { color: rgba(255,255,255,0.8); margin-bottom: 5px; }
        .sidebar .nav-link:hover, .sidebar .nav-link.active { color: white; background: rgba(255,255,255,0.1); border-radius: 8px; }
        .main-content { padding: 30px; }
        .card { border: none; border-radius: 15px; box-shadow: 0 4px 10px rgba(0,0,0,0.05); }
        .customer-avatar { width: 35px; height: 35px; background: #e9ecef; display: flex; align-items: center; justify-content: center; border-radius: 50%; color: #6c757d; }
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
                <li class="nav-item"><a class="nav-link" href="orders.php"><i class="bi bi-cart3"></i> จัดการออเดอร์</a></li>
                <li class="nav-item"><a class="nav-link active" href="customers.php"><i class="bi bi-people"></i> จัดการลูกค้า</a></li>
                <hr>
                <li class="nav-item"><a class="nav-link text-danger" href="logout.php"><i class="bi bi-box-arrow-right"></i> ออกจากระบบ</a></li>
            </ul>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">จัดการลูกค้า</h1>
                <button class="btn btn-primary btn-sm"><i class="bi bi-person-plus-fill me-1"></i> เพิ่มลูกค้าใหม่</button>
            </div>

            <div class="card p-4">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <h5 class="mb-0">รายชื่อสมาชิกในระบบ</h5>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-sm" placeholder="ค้นหาชื่อ, อีเมล หรือเบอร์โทรศัพท์...">
                            <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th style="width: 50px;">#</th>
                                <th>ชื่อ-นามสกุล</th>
                                <th>อีเมล</th>
                                <th>เบอร์โทรศัพท์</th>
                                <th>วันที่สมัคร</th>
                                <th class="text-center">จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><div class="customer-avatar"><i class="bi bi-person"></i></div></td>
                                <td>
                                    <div class="fw-bold">คุณสมชาย ใจดี</div>
                                    <small class="text-muted">ID: CUS-001</small>
                                </td>
                                <td>somchai@email.com</td>
                                <td>081-234-5678</td>
                                <td>01 ก.พ. 2567</td>
                                <td class="text-center">
                                    <div class="btn-group btn-group-sm">
                                        <button class="btn btn-outline-primary" title="แก้ไขข้อมูล"><i class="bi bi-pencil-square"></i></button>
                                        <button class="btn btn-outline-danger" title="ระงับบัญชี"><i class="bi bi-slash-circle"></i></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <nav class="mt-3">
                    <ul class="pagination pagination-sm justify-content-center">
                        <li class="page-item disabled"><a class="page-link" href="#">ก่อนหน้า</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">ถัดไป</a></li>
                    </ul>
                </nav>
            </div>
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>