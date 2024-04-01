<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* CSS cho hiệu ứng loading */
        .loader {
            border: 16px solid #f3f3f3;
            /* Light grey */
            border-top: 16px solid #3498db;
            /* Blue */
            border-radius: 50%;
            width: 120px;
            height: 120px;
            animation: spin 2s linear infinite;
            /* Giữ animation ở 2s cho mượt mà */
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            z-index: 1000;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Ẩn loader khi trang đã tải xong */
        .hidden {
            display: none;
        }

        /* CSS để làm mờ nội dung */
        .content-hidden {
            opacity: 0.5;
            /* Làm mờ nội dung */
            pointer-events: none;
            /* Ngăn chặn tương tác */
        }

        /* CSS cho khi nội dung đã sẵn sàng */
        .content-visible {
            opacity: 1;
            /* Làm nội dung trở nên rõ ràng */
            transition: opacity 0.5s ease;
            /* Hiệu ứng chuyển đổi mượt mà */
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
            opacity: 0;
            /* Khởi đầu sản phẩm ẩn */
            animation-fill-mode: forwards;
            /* Giữ trạng thái cuối cùng của animation */
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const loader = document.getElementById('loader');
            const content = document.getElementById('page-content');

            // Ẩn loader sau 1 giây và hiển thị nội dung
            setTimeout(function () {
                loader.style.display = 'none'; // Ẩn loader
                content.classList.remove('content-hidden'); // Loại bỏ làm mờ nội dung
                content.classList.add('content-visible'); // Làm cho nội dung hiện hữu
            }, 1000); // Điều chỉnh thời gian tại đây
        });


    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const products = document.querySelectorAll('.product-animation');
            let delay = 0.1; // Bắt đầu với delay là 0.1 giây
            products.forEach((product, index) => {
                // Tăng delay cho mỗi sản phẩm để tạo hiệu ứng lần lượt
                product.style.animation = `slideInRight 0.3s ease ${delay}s forwards`;
                delay += 0.1; // Mỗi sản phẩm tiếp theo sẽ chậm hơn 0.1 giây
            });
        });
    </script>
    <script type="text/javascript">
        function chonsize(a) {
            document.getElementById("size").value = a;
        }
    </script>
</head>

<body class="content-hidden" id="page-content">
    <div class="loader" id="loader"></div>
    <section>
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3 class="mb-5 font-weight-bold">CHI TIẾT SẢN PHẨM</h3>
            </div>
        </div>
        <article class="col-12">
            <div class="container-fliud">
                <div class="wrapper row">
                    <form action="index.php?action=themgiohang&themgiohang" method="post">
                        <div class="preview col-md-6">
                            <div class="tab-content">
                                <?php
                                if (isset ($_GET['id'])) {
                                    $id = $_GET['id'];
                                    $hh = new hanghoa();
                                    $sanpham = $hh->getHangHoaId($id);
                                    $tenhh = $sanpham['tenhh'];
                                    $mota = $sanpham['mota'];
                                    $dongia = $sanpham['dongia'];

                                }
                                ?>
                                <?php
                                $hinh = $hh->getHangHoaImage($id);
                                $set = $hinh->fetch();
                                ?>
                                <div class="tab-pane active" id=""><img
                                        src="Content/imagetourdien/<?php echo $set['hinh'] ?>" alt="" width="200px"
                                        height="350px"></div>
                            </div>
                            <ul class="preview-thumbnail nav nav-tabs">
                                <?php
                                while ($img = $hinh->fetch()):
                                    ?>
                                    <li class="active"><a href="#<?php echo $img['hinh']; ?>" data-toggle="tab">
                                            <img src="<?php echo 'Content/imagetourdien/' . $img['hinh']; ?>"
                                                alt="Học thiết kế web bán hàng Online"></a>
                                    </li>
                                    <?php
                                endwhile;
                                ?>
                            </ul>
                        </div>
                        <div class="details col-md-6">
                            <input type="hidden" name="mahh" value="" />
                            <h3 class="product-title">
                                <?php echo $tenhh; ?>
                            </h3>
                            <div class="rating">
                                <div class="stars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                            <div class=" text-center">
                                <p class="product-description  ">
                                    <?php echo $mota; ?>
                                </p>
                            </div>
                            <h4 class="price">Giá bán:
                                <?php echo number_format($dongia); ?> đ
                            </h4>
                            <br>
                            <br><br> Số Lượng: <input type="number" name="qty" min="0" value="<?php  echo $item['soluong']; ?>" /><br />
                            </h5>
                            <div class="action mt-5">
                                <a href="index.php?action=themgiohang&mahh=<?php echo $id; ?>&tenhh=<?php echo urlencode($tenhh); ?>&dongia=<?php echo $dongia; ?>&hinh=<?php echo urlencode($set['hinh']); ?>&qty=1"
                                    class="add-to-cart btn btn-default">Thêm Giỏ Hàng</a>
                                <a href="" target="_blank"> <button class="like btn btn-default" type="button"><span
                                class="fa fa-heart"></span></button> </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </article>
        <p class="float-left"><b>BÌnh luận </b></p>
        <hr>
        </div>
        <form action="index.php?action=binhluan" method="post">
            <div class="row">
                <input type="hidden" name="txtmahh" value=" <?php echo $id; ?>" />
                <img src="Content/imagetourdien/people.png" width="50px" height="50px" ; />
                <textarea class="input-field" type="text" name="comment" rows="2" cols="70" id="comment"
                    placeholder="Thêm bình luận">  </textarea>
                <input type="submit" class="btn btn-primary" id="submitButton" style="float: right;"
                    value="Bình Luận" />
            </div>
        </form>
        <div class="row">
            <p class="float-left"><b>Các bình luận</b></p>
            <hr>
            <?php
            $kh = new user();
            $noidung = $kh->selectComment($id);
            while ($set = $noidung->fetch()):
                ?>
                <span>
                    <?php echo $set['username']; ?>:
                </span>
                <span>
                    <?php echo $set['content']; ?>
                </span>
                <?php
            endwhile;
            ?>
        </div>
        <div class="row">
            <br />
        </div>
    </section>
</body>

</html>