<?php
session_start();

session_start();

function checkCart($id)
{
    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
        foreach ($_SESSION['cart'] as $item) {
            if ($item['mahh'] == $id) {
                return false; // Sản phẩm đã có trong giỏ hàng
            }
        }
    }
    return true; // Sản phẩm chưa có trong giỏ hàng
}

if (isset($_GET['action']) && $_GET['action'] == "themgiohang" && isset($_GET['mahh'])) {
    // Lấy thông tin sản phẩm từ URL
    $id = $_GET['mahh'];
    $soluong = isset($_GET['qty']) ? intval($_GET['qty']) : 1;
    $tenhh = $_GET['tenhh'];
    $dongia = $_GET['dongia'];
    $hinh = $_GET['hinh'];

    // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
    if (checkCart($id)) {
        // Nếu chưa có, thêm sản phẩm vào giỏ hàng
        $_SESSION['cart'][] = array(
            'mahh' => $id,
            'soluong' => $soluong,
            'tenhh' => $tenhh,
            'dongia' => $dongia,
            'hinh' => $hinh
        );
    } else {
        // Nếu đã có, cập nhật số lượng sản phẩm
        foreach ($_SESSION['cart'] as &$item) {
            if ($item['mahh'] == $id) {
                $item['soluong'] += $soluong;
                break;
            }
        }
    }

    // Điều hướng người dùng về trang giỏ hàng sau khi thêm sản phẩm
    header('Location: index.php?action=giohang&page=cart');
    exit();
}

?>
