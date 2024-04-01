<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .product-name {
            font-size: 1em;
            color: black;
            transition: color 0.3s ease;
        }

        .product-price {
            font-size: 1.2em;
            color: black;
            transition: color 0.3s ease;
        }

        .product-container:hover .product-name,
        .product-container:hover .product-price {
            color: #191970;
            /* Change color on hover */
        }

        .custom-button {
            display: inline-block;
            padding: 10px 20px;
            /* Điều chỉnh padding cho nút */
            background-image: linear-gradient(135deg, #f7a167, #f78ca7);
            /* Gradient từ màu cam đến vàng */
            color: #FFF;
            /* Màu chữ trắng */
            font-weight: bold;
            text-decoration: none;
            /* Loại bỏ gạch chân mặc định của liên kết */
            border-radius: 20px;
            /* Góc bo tròn */
        }

        .custom-button:hover {
            background-image: linear-gradient(135deg, #7FFFD4, orange);
            /* Đảo ngược gradient khi hover */
        }

        .newest {
            display: inline-block;
            /* Hiển thị theo chiều ngang */
            background-color: #1E90FF;
            /* Màu nền là màu xanh */
            padding: 10px;
            /* Tùy chỉnh padding nếu cần */
            margin-top: -8px;
            color: white;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            border-radius: 5px;
        }

        .newest,
        h1 {
            display: inline-block;
            vertical-align: top;
            /* Để cả hai thẻ nằm trên cùng một dòng */
        }

        .btn-custom {
            display: inline-block;
            background: linear-gradient(135deg, orange, yellow);
            /* Màu nền pha màu cam vàng */
            padding: 10px 20px;
            /* Điều chỉnh padding cho nút */
            border-radius: 20px;
            /* Góc bo tròn */
            text-decoration: none;
            /* Loại bỏ gạch chân mặc định của liên kết */
        }

        .btn-custom:hover {
            background: linear-gradient(135deg, yellow, orange);
            /* Đảo ngược màu nền khi rê chuột qua */
            transition: background 0.3s ease;
        }

        .bold-text {
            font-weight: bold;
            /* Đặt chữ trong thẻ span là đậm */
        }

        .product-card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Hiệu ứng box-shadow */
            transition: box-shadow 0.3s ease;
            /* Hiệu ứng chuyển động khi hover */
        }

        .product-card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            /* Hiệu ứng box-shadow khi hover */
        }

        .image-container {
            overflow: hidden;
        }

        .image-container img {
            transition: transform 0.6s ease;
            /* Hiệu ứng chuyển động và kiểu chuyển động */
        }

        .zoom-effect {
            transition: transform 4.6s ease;
            /* Thời gian chuyển động và kiểu chuyển động */
        }

        .image-container:hover .zoom-effect {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            /* Hiệu ứng box-shadow khi hover */
        }

        .view.overlay {
            position: relative;
        }

        .mask {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            background-color: rgba(255, 255, 255, 0.5);
            /* Màu nền overlay */
        }

        .view.overlay:hover .image-container img {
            transform: scale(1.3);
            /* Phóng to hình ảnh khi hover */
        }

        .mask {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            /* Hiệu ứng box-shadow */
        }
        /* CSS cho hiệu ứng loading */
        .loader {
  border: 16px solid #f3f3f3; /* Light grey */
  border-top: 16px solid #3498db; /* Blue */
  border-radius: 50%;
  width: 120px;
  height: 120px;
  animation: spin 1s linear infinite; /* Giữ animation ở 2s cho mượt mà */
  position: fixed;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  z-index: 1000;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}


/* Ẩn loader khi trang đã tải xong */
.hidden {
  display: none;
}
/* CSS để làm mờ nội dung */
.content-hidden {
  opacity: 0.5; /* Làm mờ nội dung */
  pointer-events: none; /* Ngăn chặn tương tác */
}

/* CSS cho khi nội dung đã sẵn sàng */
.content-visible {
  opacity: 1; /* Làm nội dung trở nên rõ ràng */
  transition: opacity 0.5s ease; /* Hiệu ứng chuyển đổi mượt mà */
}
@keyframes slideInRight {
  from {
    transform: translateX(50px);
    opacity: 0;
  }
  to {
    transform: translateX(0);
    opacity: 1;
  }
}

.product-animation {
  opacity: 0; /* Khởi đầu sản phẩm ẩn */
  animation-fill-mode: forwards; /* Giữ trạng thái cuối cùng của animation */
}


    </style>
 
 <script>
document.addEventListener('DOMContentLoaded', function() {
  const loader = document.getElementById('loader');
  const content = document.getElementById('page-content');

  // Ẩn loader sau 1 giây và hiển thị nội dung
  setTimeout(function() {
    loader.style.display = 'none'; // Ẩn loader
    content.classList.remove('content-hidden'); // Loại bỏ làm mờ nội dung
    content.classList.add('content-visible'); // Làm cho nội dung hiện hữu
  }, 1000); // Điều chỉnh thời gian tại đây
});
 

</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const products = document.querySelectorAll('.product-animation');
  let delay = 0.1; // Bắt đầu với delay là 0.1 giây
  products.forEach((product, index) => {
    // Tăng delay cho mỗi sản phẩm để tạo hiệu ứng lần lượt
    product.style.animation = `slideInRight 0.5s ease ${delay}s forwards`;
    delay += 0.1; // Mỗi sản phẩm tiếp theo sẽ chậm hơn 0.1 giây
  });
});
</script>

</head>

<body class="content-hidden" id="page-content">

    <div class="container">
    <div class="loader" id="loader"></div>

        <?php
        include_once "View/menuimage.php" ?>
        <!-- Section: Examples -->
        <section id="examples" class="text-center">
            <!-- Heading -->
            <div class="row ">
                <div class="col-lg-8 mt-5 text-right ">
                    <h1 class="mb-5 font-weight-bold">NỔI BẬT HÔM NAY</h1>
                    <p class="newest">MỚI NHẤT</p>
                </div>
                <div class="col-lg-4 text-right mt-4">
                    <a href="index.php?action=sanpham" class="btn-custom">
                        <h3 class="font" style="color :#000">Xem chi tiết</h3>
                    </a>
                </div>
            </div>
            <!-- Grid row -->
            <div class="row">
                <?php
                $hh = new hanghoa();
                $result = $hh->getHangHoaNew(); // 1 bảng chứa 8 sản phẩm
                //Lấy từng sản phẩm dùng vòng lập
                while ($set = $result->fetch()):
                    ?>
                    <!-- Grid column -->
                    <!-- Grid column -->
                    <div class="col-lg-3 col-md-4 mb-5 product-animation">

                        <div class="card product-card">
                            <div class="view overlay">
                                <div class="image-container">
                                    <img src="Content\imagetourdien\<?php echo $set['hinh']; ?>" class="card-img-top"
                                        alt="">
                                </div>
                                <div class="mask rgba-white-slight"></div>
                            </div>
                            <div class="card-body text-center">
                                <h5 class="my-4 font-weight-bold product-price">
                                    <span>
                                        <?php echo $set['dongia']; ?><sup><u>đ</u></sup>
                                    </span>
                                </h5>
                                <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh']; ?>"
                                    class="product-name">
                                    <span class="bold-text">
                                        <?php echo $set['tenhh'] ?>
                                    </span>
                                </a>
                                <br>
                                <a href="index.php?action=giohang&luachon=luachon&mahh=<?= $set['mahh'] ?>&soluong=1&tenhh=<?= $set['tenhh'] ?>&dongia=<?= $set['dongia'] ?>&hinh=<?= $set['hinh'] ?>"
                                    class="custom-button" id="may4" value="lap 4">Thêm giỏ hàng</a>
                                <h5>Số lượt xem:
                                    <?php echo $set['soluotxem']; ?>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
                ?>
            </div>
            <!-- Grid row -->
        </section>
        <!-- End sản phẩm mới nhất -->
        <!-- Sản phẩm khuyến mãi -->
        <section id="examples" class="text-center">
            <!-- Heading -->
            <div class="row ">
                <div class="col-lg-8 mt-5 text-right ">
                    <h1 class="mb-5 font-weight-bold">SẢN PHẨM GIẢM GIÁ</h1>
                    <p class="newest">SP GIẢM</p>
                </div>
                <div class="col-lg-4 text-right mt-4">
                    <a href="index.php?action=sanpham&act=sanphamkhuyenmai" class="btn-custom">
                        <h3 class="font" style="color: #000;">Xem chi tiết</h3>
                    </a>
                </div>
            </div>
            <!-- Grid row -->
            <div class="row">
                <?php
                $result = $hh->getHangHoaSale(); // 1 bảng chứa 8 sản phẩm
                //Lấy từng sản phẩm dùng vòng lập
                while ($set = $result->fetch()):
                    ?>
                    <!-- Grid column -->
                    <div class="col-lg-3 col-md-4 mb-5 product-animation">
                        <div class="card product-card">
                            <div class="view overlay">
                                <div class="image-container " action="">
                                    <img  src="Content\imagetourdien\<?php echo $set['hinh']; ?>" class="card-img-top"
                                        alt="">
                                </div>
                                <div class="mask rgba-white-slight"></div>
                            </div>
                            <div class="card-body text-center">
                                <h5 class="my-4 font-weight-bold">
                                    <font color="red">
                                        <?php echo $set['giamgia']; ?><sup><u>đ</u></sup>
                                    </font>
                                    <strike>
                                        <?php echo $set['dongia'] ?>
                                    </strike><sup><u>đ</u></sup>
                                </h5>
                                <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh']; ?>"
                                    class="product-name">
                                    <span class="bold-text">
                                        <?php echo $set['tenhh'] ?>
                                    </span>
                                </a>
                                <br>
                                <a href="index.php?action=giohang&luachon=luachon&mahh=<?= $set['mahh'] ?>&soluong=1&tenhh=<?= $set['tenhh'] ?>&dongia=<?= $set['dongia'] ?>&hinh=<?= $set['hinh'] ?>"
                                    class="custom-button" id="may4" value="lap 4">Thêm giỏ hàng</a>
                                <h5>Số lượt xem:
                                    <?php echo $set['soluotxem']; ?>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
                ?>
            </div>
        </section>
    </div>
    <!-- End sản phẩm khuyến mãi -->
</body>

</html>