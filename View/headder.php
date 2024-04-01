<?php
ob_start();
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Your Website</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-3fV7MpDWs/Hw0ib8ztsFCMzvhraTEO0YbzLge4aOqSgV2zcKuXKPhRBfWBQ/voTz7KccE4MJi9v+m38gWT0ZAQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Link Bootstrap CSS -->
    <!-- Your Custom Styles -->
    <!-- Your Custom Styles -->
    <style>
        /* Content/style.css */
        /* Navbar styling */
        .navbar {
    background-color: #fff; /* Màu nền trắng */
    box-shadow: 0 8px 4px rgba(0, 0, 0, 0.1); /* Đổ bóng màu xám */
}

        .navbar-nav .nav-link {
            color: #000000;
            font-weight: bold;
            /* Make the font bold */
            transition: color 0.3s, transform 0.3s;
            /* Smooth color transition and font size change */
            font-size: 18px;
            /* Set the font size */
            margin-right: 15px;
            /* Set the right margin between navbar items */
            font-family: Arial, Helvetica, sans-serif;
        }

        .navbar-nav .nav-link:hover {
            color: rgb(8, 12, 116);
            /* Dark purple text color on hover */
            transform: scale(1.05);
            /* Slightly scale the text on hover */
            background: linear-gradient(45deg, #FFA500, #FFFF00); /* Gradient từ màu cam đến màu vàng */
   
        }

        .list-group-item {
            font-size: 16px;
            /* Set the font size for list-group items */
        }

        /* Add padding to the navbar items for better spacing */
        .navbar-nav>li {
            padding: 0 10px;
        }
        .carousel-item{
          
        }
       /* styles.css */

 .header-1 {
    background-image: linear-gradient(to right, #00CED1, #43CD80); /* Gradient từ màu xanh lá đến màu lục */
    padding: 10px;
    height: 80px;
    display: flex;
    justify-content: space-between;
    align-items: flex-start; /* Align items to the top */
}


.header-1 .logo img {
    height: 80px; /* Điều chỉnh chiều cao của hình logo */
    margin-left: 90px;
    width: 150px;
}
 

.lh {
    display: flex; /* Display as flex container */
    align-items: center; /* Align items vertically */
}

.lh p {
    margin-right: 10px; /* Add some spacing between the phone and email */
    font-weight: bold;
    font-size: 16px;

}
.vertical-line {
    height: 100%; /* Set the height to match the parent container */
    width: 1px; /* Set the width of the line */
    background-color: #000; /* Color of the line */
    margin: 0 10px; /* Adjust margin as needed */
}
.separator {
    margin: 0 10px; /* Adjust margin as needed */
    margin-top: -14px;
}
/* Các quy tắc CSS khác tùy thuộc vào yêu cầu của bạn */

    </style>
   

</head>

<body>
<div class="header-1">
    <a href="?" class="logo loadkkk">
        <img src="./Content/imagetourdien/LOGO2.png" alt="">
    </a>
     
    <div class="lh ml-auto">
    <p><i class="fas fa-phone"></i> Phone: 0777653007 </p>
    <span class="separator">|</span> <!-- Separator -->
    <p><i class="fas fa-envelope"></i> Email: Haquocphong04@gmail.com</p>
    <span class="separator">|</span>
</div>

</div>


    <!-- Bootstrap Navbar -->
    <nav class="navbar navbar-expand-lg " id="navbarTop">
        <a class="navbar-brand" href="#"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav mt-3">
                <li class="nav-item  ">
                    <a class="nav-link" href="?controller=home&action=home">Trang chủ<span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?controller=sanpham&action=sanpham">Cửa Hàng</a>
                </li>
                <li class="nav-item">
                 <a class="nav-link" href="?controller=about&action=about">Giới thiệu</a>
    </li>
                <li class="nav-item">
                    <a class="nav-link" href="?controller=contact&action=contact">Liên hệ</a>
                </li>
            </ul>
            <ul>
            <form class="form-inline " action="index.php?action=sanpham&act=timkiem" method="post">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                
                                   
                                            <input class="input-group-text form-control mt-4" type="text" name="txtsearch" id="btsearch" value="" placeholder="Tìm kiếm"/>

                                            <button class="btn btn-info mt-4" type="submit" id="btsearch">Tìm Kiếm</button>
                                        </div>

                                </form>
                            </ul>
             
                            <ul class="navbar-nav">
                            <li class="nav-item">
        <a href="index.php?action=giohang&page=cart" class="nav-link">
            <img src="./Content/imagetourdien/cartx2.png" width="30px" height="30px" style="margin-top:5px;" alt="">
            <span style="vertical-align: middle; margin-left: 2px; font-size: 14px;">Giỏ hàng</span>
        </a>
    </li>
    <?php
    if (!isset($_SESSION['tenkh'])) {
        echo '<li class="nav-item"><a href="index.php?action=dangky" class="nav-link mt-3"><i class="fas fa-user-plus"></i> Đăng Ký</a></li>';
        echo '<li class="nav-item"><a href="index.php?action=dangnhap" class="nav-link mt-3"><i class="fas fa-sign-in-alt"></i> Đăng Nhập</a></li>';
    } else {
        echo '<li class="nav-item mt-3 ml-5"> <!-- Added ml-auto class for right alignment -->
        <a href="index.php?action=dangxuat" class="nav-link"><i class="fas fa-sign-out-alt"></i> Đăng Xuất</a>
    </li>';
    }
    ?>

   

<?php
    if (isset($_SESSION['tenkh'])) {
        echo '<p style="color: red; margin-top: 25px; margin-left: 0px; font-weight: bold; font-size: 16px;">Chào ' . $_SESSION['tenkh'] . '</p>';
    }
    echo '<p style="color: red; margin-top: 20px; margin-left: 0px;"></p>';
?>

</ul>

        </div>
    </nav>
    <!-- Bootstrap Carousel -->
    <!-- Bootstrap Carousel with Navigation Arrows -->
    <div class="container mt-5">
        <div class="row">
            <!-- Danh mục sản phẩm bên trái -->
           
            <!-- 3 ảnh slide bên phải -->
            <div class="col-md-12 mt-5">
                <div id="carouselExample" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./Content/imagetourdien/anh11.jpg" class="d-block w-100" alt="Slide 1">
                        </div>
                        <div class="carousel-item">
                            <img src="./Content/imagetourdien/anh22.png" class="d-block w-100" alt="Slide 2">
                        </div>
                        <div class="carousel-item">
                            <img src="./Content/imagetourdien/anh33.jpg" class="d-block w-100" alt="Slide 3">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Link Bootstrap JS and Popper.js -->
</body>

</html>