<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ระบบจัดการข้อมูลสินค้า - อนุสรา แสนขรยาง(นุช)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Sarabun', sans-serif; background-color: #f8f9fa; }
        .table-card { background: white; border-radius: 15px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); padding: 20px; }
        .product-img { width: 50px; height: 50px; object-fit: cover; border-radius: 5px; }
        .search-section { background: #ffffff; padding: 20px; border-radius: 15px; margin-bottom: 20px; border: 1px solid #dee2e6; }
    </style>
</head>
<body>

<div class="container my-5">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center mb-4 text-primary fw-bold">ข้อมูลการสั่งซื้อ Pop Supermarket</h2>
            <p class="text-center text-muted">ผู้ดูแลระบบ: อนุสรา แสนขรยาง (นุช)</p>

            <div class="search-section shadow-sm">
                <form method="GET" action="" class="row g-3">
                    <div class="col-md-8">
                        <label for="search" class="form-label fw-bold">ค้นหาชื่อสินค้า หรือ ประเทศ</label>
                        <input type="text" name="search" id="search" class="form-control" 
                               placeholder="พิมพ์คำที่ต้องการค้นหา..." 
                               value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
                    </div>
                    <div class="col-md-4 d-flex align-items-end gap-2">
                        <button type="submit" class="btn btn-primary w-100">ค้นหา</button>
                        <a href="index.php" class="btn btn-outline-secondary w-100">ล้างค่า</a>
                    </div>
                </form>
            </div>
            
            <div class="table-card">
                <div class="table-responsive">
                    <table class="table table-hover table-striped align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th class="text-center">Order ID</th>
                                <th>รูปสินค้า</th>
                                <th>ชื่อสินค้า</th>
                                <th>ประเภท</th>
                                <th>วันที่</th>
                                <th>ประเทศ</th>
                                <th class="text-end">จำนวนเงิน (บาท)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include_once("connect.php");

                                // รับค่าการค้นหา
                                $search = isset($_GET['search']) ? mysqli_real_escape_string($conn, $_GET['search']) : '';

                                // สร้างเงื่อนไข SQL
                                $sql = "SELECT * FROM popsupermarket";
                                if ($search != "") {
                                    $sql .= " WHERE p_product_name LIKE '%$search%' OR p_country LIKE '%$search%'";
                                }
                                $sql .= " ORDER BY p_date DESC";

                                $rs = mysqli_query($conn, $sql);
                                $total = 0;

                                if ($rs && mysqli_num_rows($rs) > 0) {
                                    while ($data = mysqli_fetch_array($rs)) {
                                        $total += $data['p_amount'];
                            ?>
                            <tr>
                                <td class="text-center"><?php echo $data['p_order_id']; ?></td>
                                <td>
                                    <img src="<?php echo $data['p_product_name']; ?>.jpg" 
                                         alt="product" 
                                         class="product-img img-thumbnail"
                                         onerror="this.src='https://via.placeholder.com/50?text=No+Img'">
                                </td>
                                <td><span class="fw-bold"><?php echo $data['p_product_name']; ?></span></td>
                                <td><span class="badge bg-info text-dark"><?php echo $data['p_category']; ?></span></td>
                                <td><?php echo date('d/m/Y', strtotime($data['p_date'])); ?></td>
                                <td><?php echo $data['p_country']; ?></td>
                                <td class="text-end fw-semibold"><?php echo number_format($data['p_amount'], 2); ?></td>
                            </tr>
                            <?php 
                                    } 
                                } else {
                                    echo "<tr><td colspan='7' class='text-center py-4 text-muted'>ไม่พบข้อมูลที่ตรงกับคำค้นหา: \"<b>$search</b>\"</td></tr>";
                                }
                            ?>
                        </tbody>
                        <tfoot class="table-light">
                            <tr class="table-secondary">
                                <td colspan="6" class="text-end fw-bold">ยอดรวมสุทธิ (จากรายการที่แสดง):</td>
                                <td class="text-end text-danger fw-bold fs-5">
                                    <?php echo number_format($total, 2); ?>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <p class="mt-3 text-end text-muted small">* ค้นหาจากชื่อสินค้าหรือชื่อประเทศ</p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>