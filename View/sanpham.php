  <!-- quảng cáo -->
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
  
    .text-center {
            text-align: center; /* Căn giữa nội dung */
        }

        .marquee {
            overflow: hidden; /* Ẩn nội dung vượt ra khỏi khung */
            white-space: nowrap; /* Không để nội dung xuống dòng */
            animation: marquee 5s linear infinite; /* Chạy ngang qua trong 5s và lặp vô hạn */
        }

        @keyframes marquee {
            0% { transform: translateX(100%); } /* Bắt đầu từ bên phải */
            100% { transform: translateX(-100%); } /* Di chuyển về bên trái */
        }
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
  animation: spin 2s linear infinite; /* Giữ animation ở 2s cho mượt mà */
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
@keyframes slideInDown {
  from {
    transform: translateY(-20px);
    opacity: 0;
  }
  to {
    transform: translateY(0);
    opacity: 1;
  }
}

.product-animation {
  opacity: 0; /* Bắt đầu với sản phẩm ẩn */
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
  let delay = 0;
  products.forEach((product, index) => {
    product.style.animation = `slideInDown 1s ease ${delay}s`;
    delay += 0.3; // Tăng delay cho sản phẩm tiếp theo, ví dụ 0.2s
    product.style.opacity = 1; // Đặt opacity sau khi animation hoàn tất
  });
});
 

</script>
    
  </head>
  <body class="content-hidden" id="page-content">

 
  <?php 
    include_once"Model/page.php"
    
    ?>
  <!-- end quảng cáo -->
  <!-- phân trang-->
  <?php
   //b1 xác định tổng sản phẩm 
   $hh=new hanghoa();
   $result=$hh->getHangHoaAll();//trả về bảng 14 sản phẩm
   $count=$result->rowCount();
   //bước 2 cho giới hạn,mỗi trang bao nhiêu sản phẩm
   $limit=8;
   //bước 3 tính tra có bao nhiêu page
   $trang = new page();
   //lấy số trang
   $page = $trang->findPage($count, $limit);  //trả về trang 2
   //lấy start
   $start=$trang->findStart($limit);
   //khởi gán trang hiện tại
   $current_page = isset($_GET['page']) ? $_GET['page'] : 1;  // Add a semicolon at the end

   ?>

  <!-- end số lượt xem san phẩm -->
  <!-- sản phẩm-->

  <!-- Cấm cờ để sử dụng 1 thiết kế mà cho 2 model khác nhau xử lí -->
  <?php
$ac = 1;
if (isset($_GET['action']) && $_GET['action'] == 'sanpham') {
    if (isset($_GET['act'])) {
        if ($_GET['act'] == 'sanphamkhuyenmai') {
            $ac = 2;
        } elseif ($_GET['act'] == 'timkiem') {
            $ac = 3;
        } else {
            $ac = 1;
        }
    }
}
?>

<div class="container">
<div class="loader" id="loader"></div>

  
    <div class="mt-5  text-center">
            <h1 class=" "><b>  SẢN PHẨM PHONG FOOD XIN KÍNH CHÀO QUÝ KHÁCH!</b></h1>
        </div>
<?php
  
  include_once"View/menuimage.php"
  ?>
   
  <!--Section: Examples-->
  <section id="examples" class=" ">

      <!-- Heading -->
      <div class="row">
          <div class="col   ">
              <!-- Hiển thị tiêu đề -->
              <?php
                if ($ac == 1) {
                    echo '<h4 class="mb-5 mt-5 font-weight-bold text-center">TẤT CẢ SẢN PHẨM</h4>';
                }
                if ($ac == 2) {
                    echo '<h4 class="mb-5 mt-5 font-weight-bold  text-center">TẤT CẢ SẢN PHẨM SALE</h4>';
                }
                if($ac==3){
                    echo '<h4 class="mb-5 mt-5 font-weight-bold text-center">KẾT QUẢ TÌM KIẾM </h4>';
                }
                ?>
              <!-- Kết thúc hiển thị tiêu đề -->
          </div>

      </div>
      <!--Grid row-->
      <div class="row">
          <?php
            $hh = new hanghoa();
            if ($ac == 1) {
               // $result = $hh->getHangHoaAll(); // Lấy về tất cả sản phẩm
               $result=$hh->getHangHoaAllPage( $start,$limit );
            }
            if ($ac == 2) {
                $result = $hh->getHangHoaAllSale(); // Lấy về tất cả sản phẩm slae
            }
            if($ac==3){
                if(isset($_POST['txtsearch']))
                {
                    $tk=$_POST['txtsearch'];
                    $result=$hh->timkiemSP($tk);
                }
            }
            // lấy từng sản phẩm đổ lên view
            while ($set = $result->fetch()) :
            ?>

              <!--Grid column-->
              <div class="col-lg-3 col-md-4 mb-5 text-center product-animation">
              <div class="view overlay">
                                <div class="image-container">
                                    <img src="Content\imagetourdien\<?php echo $set['hinh']; ?>" class="card-img-top"
                                        alt="">
                                </div>
                                <div class="mask rgba-white-slight"></div>
                            </div>

                  <!-- Phần hiển thị thông tin sản phẩm -->
                  <?php
                    if ($ac == 1) {
                        echo '<h5 class="my-4 font-weight-bold" style="color: red;">' . number_format($set['dongia']) . '<sup><u>đ</u></sup></br></h5>';
                    }
                    if ($ac == 2 ) {
                        echo '<h5 class="my-4 font-weight-bold">
                        <font color="red">' . $set['giamgia'] . '<sup><u>đ</u></sup></font>
                        <strike>' . $set['dongia'] . '</strike><sup><u>đ</u></sup>
                    </h5>';
                    }
                    if ($ac == 3 ) {
                        echo '<h5 class="my-4 font-weight-bold" style="color: red;">' . number_format($set['dongia']) . '<sup><u>đ</u></sup></br></h5>';
                
                    }
                     
                    ?>
                  <!-- Hết phần hiển thị thông tin sản phẩm -->
                  <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh']; ?>" class="product-name">
                    <span class="bold-text"><?php echo $set['tenhh']  ?>  </span></br>
                 </a>
                 <a href="index.php?action=giohang&luachon=luachon&mahh=<?=$set['mahh']?>&soluong=1&tenhh=<?=$set['tenhh']?>&dongia=<?=$set['dongia']?>&hinh=<?=$set['hinh']?>" class="custom-button" id="may4" value="lap 4">Thêm giỏ hàng</a>                     
                  <h5>Số lượt xem: <?php echo $set['soluotxem']; ?></h5>

              </div>
          <?php
            endwhile;
            ?>
      </div>

      <!--Grid row-->

  </section>


  <!-- end sản phẩm mới nhất -->
<?php
if($ac==1):
?>
  <div class="col-md-8 div col-md-offset-6">
				<ul class="pagination">
					<?php
                  if($current_page>1 && $page>1){
                    echo'<li><a href="index.php?action=sanpham&page='.($current_page-1).'">prev</a></li>';
                  }                  
                   for ($i = 1; $i <= $page; $i++):
                    ?>
				    <li ><a href="index.php?action=sanpham&page=<?php echo $i;?>">
                  <?php 
                  echo $i;
                  ?>
                </a>
            </li>
            <?php 
             endfor;
             if($current_page<$page && $page>1)
             {
                echo'<li><a href="index.php?action=sanpham&page='.($current_page+1).'"> Next</a></li>';
              }

           ?>
	 </ul>
</div> 
</div>
<?php
endif;
?>
</body>
  </html>