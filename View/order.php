<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
 

<?php
if (!isset($_SESSION['makh'])):
    echo '<script> alert("Bạn chưa đăng nhập ");</script>';
    echo '<meta http-equiv="refresh" content="0;url=./index.php?action=dangnhap"/>';
else:
?>
<div class="table-responsive">
    <form action="" method="post">
        <table class="table table-bordered" border="0">
            <tr>
                <td colspan="4">
                    <h2 class="" style="color: red;">HÓA ĐƠN CỦA BẠN</h2>
                </td>
            </tr>
            <tr>
                <td colspan="2">Số Hóa đơn: <?= $_GET['idhd'] ?></td>
            </tr>
            <tr>
                <td colspan="2">Họ và tên: <?= $_SESSION['tenkh'] ?></td>
            </tr>
        </table>
        <!-- Thông tin sản phầm -->
        <table class="table table-bordered">
            <thead>
                <tr class="table-success">
                    <th>Số TT</th>
                    <th>Sản phẩm</th>
                    <th>Thông Tin Sản Phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $tongTen = 0;
                $stt = 1; // Khởi tạo biến đếm số thứ tự
                foreach ($show as $i) {
                    extract($i);
                    $tongTen += $thanhtien;
                    echo "
                        <tr>
                        <td>{$stt}</td> <!-- Hiển thị số thứ tự -->
                        <td>{$tenhh}</td>
                        <td>Sản Phẩm: <img width='50px' src='Content/imagetourdien/{$hinh}'> Đơn Giá: {$dongia} <br />
                        </td>
                        <td> Số Lượng: {$soluongmua}</td>
                        <td>" . number_format($thanhtien) . "</td>
                        </tr>
                    ";
                    $stt++; // Tăng số thứ tự sau mỗi lần lặp
                }
                ?>
                <tr>
                    <td colspan="2">
                        <h3 class="text-danger"><b>Tổng Tiền</b></h3>
                    </td>
                    <td></td>
                    <td></td>
                    <td class="text-danger">
                        <b><?= $tongTen ?><sup><u>đ</u></sup></b>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>
<?php endif; ?>
</body>
</html>