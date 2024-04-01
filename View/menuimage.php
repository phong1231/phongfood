<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Your Website</title>
    <!-- Link Bootstrap CSS -->
   
    <!-- Your Custom Styles -->
    <style>
        

        .card-2 {
            display: inline-block;
            /* Add this to make cards inline */
            width: 150px;
            /* Decrease width for smaller cards */
            margin-right: 10px;
            /* Add some right margin for spacing */
            margin-bottom: 20px;
            border: 1px solid #ddd;
            /* Add border for the card */
            border-radius: 5px;
            /* Optional: Add border-radius for rounded corners */
            overflow: hidden;
            /* Hide overflowing content */
            background-color: #E6E6FA;
        }

        .card-2 img {
            width: 100%;
            height: auto;
        }

        .product a {
            color: black;
            text-decoration: none;
            font-size: 15px;
        }

        .image-container {
    position: relative;
    overflow: hidden;
}
.content{
    position: absolute;
    top:50%;
    left: 25%;
    transform:translate(-50%,-50%);
    font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
.image-container a {
    text-decoration: none;
}

.buy-now-button {
    position: absolute;
    top: 80%;
    left: 25%;
    transform: translate(-50%, -50%);
    background-color: #F08080;
    color: #fff;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 10%;
    overflow: hidden; /* hide overflowing content */
}
.buy-now-button:hover{
    color: black;
    background-color: coral;
}
 

    </style>
</head>

<body>
   
    <section class="popular-categories section-padding text-center">
        <div class="container wow animate__animated animate__fadeIn">   
            <div id="featuredCarousel" class="carousel slide mt-5" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card-2 card-header  ">
                            <figure>
                                <a href="index.php?action=sanpham&act=tensanpham&id="><img src="./Content/imagetourdien/14.jpg" alt="" /></a>
                            </figure>
                            <h6 class="product"><a href="">Green vegetables</a></h6>
                            <span>26 items</span>
                        </div>
                        <div class="card-2 card-header">
                            <figure>
                                <a href="index.php?action=sanpham"><img src="./Content/imagetourdien/1.jpg" alt="" /></a>
                            </figure>
                            <h6 class="product"><a href="">Strawberry</a></h6>
                            <span>28 items</span>
                        </div>
                        <div class="card-2 card-header">
                            <figure>
                                <a href=""><img src="./Content/imagetourdien/2.jpg" alt="" /></a>
                            </figure>
                            <h6 class="product"><a href="">Peach</a></h6>
                            <span>14 items</span>
                        </div>
                        <div class="card-2 card-header">
                            <figure>
                                <a href=""><img src="./Content/imagetourdien/3.jpg" alt="" /></a>
                            </figure>
                            <h6 class="product"><a href="">Blueberry</a></h6>
                            <span>54 items</span>
                        </div>
                        <div class="card-2 card-header">
                            <figure>
                                <a href=""><img src="./Content/imagetourdien/4.jpg" alt="" /></a>
                            </figure>
                            <h6 class="product"><a href="">Custard apple</a></h6>
                            <span>56 items</span>
                        </div>
                        <div class="card-2 card-header">
                            <figure>
                                <a href=""><img src="./Content/imagetourdien/5.jpg" alt="" /></a>
                            </figure>
                            <h6 class="product"><a href="">Ki Wi</a></h6>
                            <span>72 items</span>
                        </div>
                    </div>
                    <!-- Second Carousel Item -->
                    <div class="carousel-item">
                        <!-- Individual Cards -->
                        <div class="card-2 card-header">
                            <figure>
                                <a href=""><img src="./Content/imagetourdien/6.jpg" alt="" /></a>
                            </figure>
                            <h6 class="product"><a href="">Sapodilla</a></h6>
                            <span>36 items</span>
                        </div>
                        <div class="card-2 card-header">
                            <figure>
                                <a href=""><img src="./Content/imagetourdien/7.jpg" alt="" /></a>
                            </figure>
                            <h6 class="product"><a href="">Ki wi</a></h6>
                            <span>36 items</span>
                        </div>
                        <div class="card-2 card-header">
                            <figure>
                                <a href=""><img src="./Content/imagetourdien/8.jpg" alt="" /></a>
                            </figure>
                            <h6 class="product"><a href="">Red apple</a></h6>
                            <span>36 items</span>
                        </div>
                        <div class="card-2 card-header">
                            <figure>
                                <a href=""><img src="./Content/imagetourdien/9.jpg" alt="" /></a>
                            </figure>
                            <h6 class="product"><a href="">Sapodilla</a></h6>
                            <span>36 items</span>
                        </div>
                        <div class="card-2 card-header">
                            <figure>
                                <a href=""><img src="./Content/imagetourdien/10.jpg" alt="" /></a>
                            </figure>
                            <h6 class="product"><a href=""> Hamburger</a></h6>
                            <span>36 items</span>
                        </div>
                        <div class="card-2 card-header">
                            <figure>
                                <a href=""><img src="./Content/imagetourdien/11.jpg" alt="" /></a>
                            </figure>
                            <h6 class="product"><a href="">Snack</a></h6>
                            <span>36 items</span>
                        </div>
                    </div>
                </div>
                <!-- Carousel Navigation Arrows -->
                <a class="carousel-control-prev" href="#featuredCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#featuredCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <div class="container text-center">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="image-container">
                <img src="Content/imagetourdien/banner-1.png" alt="Banner 1" class="img-fluid banner">
                <h3 class="content">Sản phẩm  <br> tốt cho sức khỏe</h3>
                <a href="index.php?action=sanpham  " class="buy-now-button">CHI TIẾT</i></a>
            </div>
        </div>
        <div class="col-md-4 mx-auto">
            <div class="image-container">
                <img src="Content/imagetourdien/banner-2.png" alt="Banner 2" class="img-fluid banner">
                <h3 class="content">Top sản phẩm   <br> được giảm giá mạnh</h3>
                <a href="index.php?action=sanpham&act=sanphamkhuyenmai" class="buy-now-button">CHI TIẾT </a>
            </div>
        </div>
        <div class="col-md-4 mx-auto">
            <div class="image-container">
                <img src="Content/imagetourdien/banner-3.png" alt="Banner 3" class="img-fluid banner">
                <h3 class="content">Sản phẩm này<br> rất tốt cho sức khỏe</h3>
                <a href="index.php?action=sanpham  " class="buy-now-button ">CHI TIẾT</a>
            </div>
        </div>
    </div>
</div>
 
   
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Link Bootstrap JS and Popper.js -->
 
  
</body>

</html>