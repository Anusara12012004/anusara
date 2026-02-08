<?php
	include_once("check_login.php");
    include_once("connectdb.php"); // เชื่อมต่อฐานข้อมูลเพื่อดึงข้อมูลสินค้า
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการสินค้า : ธิดารัตน์ บุญสุภา (ฟิล์ม)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        body { background-color: #f4f7f6; }
        .sidebar { min-height: 100vh; background: #212529; color: white; }
        .sidebar .nav-link { color: rgba(255,255,255,0.8); margin-bottom: 5px; }
        .sidebar .nav-link:hover, .sidebar .nav-link.active { color: white; background: rgba(255,255,255,0.1); border-radius: 8px; }
        .main-content { padding: 30px; }
        .product-img { width: 50px; height: 50px; object-fit: cover; border-radius: 5px; }
        .card { border: none; border-radius: 15px; box-shadow: 0 4px 10px rgba(0,0,0,0.05); }
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
                <li class="nav-item"><a class="nav-link active" href="products.php"><i class="bi bi-box-seam"></i> จัดการสินค้า</a></li>
                <li class="nav-item"><a class="nav-link" href="orders.php"><i class="bi bi-cart3"></i> จัดการออเดอร์</a></li>
                <li class="nav-item"><a class="nav-link" href="customers.php"><i class="bi bi-people"></i> จัดการลูกค้า</a></li>
                <hr>
                <li class="nav-item"><a class="nav-link text-danger" href="logout.php"><i class="bi bi-box-arrow-right"></i> ออกจากระบบ</a></li>
            </ul>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">จัดการสินค้า</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <a href="product_add.php" class="btn btn-success"><i class="bi bi-plus-circle me-1"></i> เพิ่มสินค้าใหม่</a>
                </div>
            </div>

            <div class="card p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="mb-0">รายการสินค้าทั้งหมด</h5>
                    <div class="col-md-4">
                        <input type="text" class="form-control form-control-sm" placeholder="ค้นหาชื่อสินค้า...">
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>รหัสสินค้า</th>
                                <th>รูปภาพ</th>
                                <th>ชื่อสินค้า</th>
                                <th>ราคา</th>
                                <th>คงเหลือ</th>
                                <th class="text-center">จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>P001</td>
                                <td><img src="https://via.placeholder.com/50" class="product-img" alt="product"></td>
                                <td>กระเป๋าแฟชั่น (ตัวอย่าง)</td>
                                <td>฿990.00</td>
                                <td><span class="badge bg-success">15 ชิ้น</span></td>
                                <td class="text-center">
                                    <div class="btn-group btn-group-sm">
                                        <a href="product_edit.php?id=1" class="btn btn-outline-primary" title="แก้ไข"><i class="bi bi-pencil"></i></a>
                                        <a href="product_delete.php?id=1" class="btn btn-outline-danger" title="ลบ" onclick="return confirm('ยืนยันการลบสินค้า?')"><i class="bi bi-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</div>

<script src="