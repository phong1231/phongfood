
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
.btn-order {
  display: block; /* Cho phép nút chiếm toàn bộ chiều rộng của thẻ cha */
  width: 100%; /* Chiều rộng tối đa */
  background-color: chocolate;
  color: white; /* Màu chữ trắng */
  padding: 10px 20px; /* Padding để tăng kích thước của nút */
  border: none; /* Loại bỏ đường viền */
  cursor: pointer; /* Thêm hiệu ứng con trỏ */
  border-radius: 5px; /* Làm tròn góc */
  font-size: 12px; /* Tăng kích thước font */
  text-decoration: none; /* Loại bỏ gạch chân */
  transition: all 0.3s ease; /* Hiệu ứng chuyển đổi mượt mà cho tất cả các thuộc tính */
  margin-bottom: 20px; /* Khoảng cách với các phần tử dưới nó */
  font-weight: bold;
}

.btn-order:hover {
  background-color: #FFF; /* Thay đổi màu nền thành trắng khi hover */
  color: #000 ; /* Thay đổi màu chữ thành màu cam */
  border: 2px solid red; /* Thêm viền màu đỏ */
}
.total{
  font-family: Arial, Helvetica, sans-serif;
  font-weight:bold;
  font-size: 19px;
}
.form-control[type="number"] {
  font-size: 14px; /* Tăng kích thước font lên 16px */
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
    product.style.animation = `slideInRight 0.3s ease ${delay}s forwards`;
    delay += 0.1; // Mỗi sản phẩm tiếp theo sẽ chậm hơn 0.1 giây
  });
});
</script>
</head>
<body class="content-hidden" id="page-content">
  
<div class="loader" id="loader">

</div>
</tr>
<div class="table-responsive  ">
  <?php
    if(isset($_SESSION['cart'])&& count($_SESSION['cart'])>0)
    {
  ?>
  <div class="card-header mt-3  ">
  <h2 style="color: red;">THÔNG TIN GIỎ HÀNG</h2>
 </div>  
   
      <table class="table table-bordered product-animation">
        <thead>
        
          <tr class="table-success">
            <th>Số TT</th>
            <th>Thông Tin Sản Phẩm</th>
            <th> Giá</th>
            <th>Số lượng</th>
            <th colspan="2">Thành tiền</th>
          </tr>
        </thead>
        <tbody>

          <?php
            $j=0;
            $tongTen = 0;
            foreach ($_SESSION['cart'] as $key => $item) {
              $j++;
          ?>
            <tr>
              <form action="?action=giohang&method=updateQtyCart" method="post">
              <td><?php echo $j;?></td>
              <td><img width="50px" height="50px" src="Content\imagetourdien\<?php echo $item['hinh'];?>">
              <?php echo $item['tenhh'];?></td>
              <input type="hidden" name="idHh" value="<?=$item['mahh']?>">
              <td>Đơn Giá: <?php echo number_format($item['dongia']);?></td>
              <td>
                <input class="form-control  " type="number" name="qty" min="1" value="<?php $tongTen += $item['soluong'] * $item['dongia']; echo $item['soluong'];?>" /><br />    
               </td>
               <td>
                Thành Tiền <?php echo number_format($item['soluong'] * $item['dongia']);?> <sup><u>đ</u></sup></p>
           </td>
              <td><a href="index.php?action=giohang&method=delete_giohang&id=<?php echo $key;?>"><button type="button" class="btn btn-danger">Xóa</button></a>

                <button type="submit" class="btn btn-secondary">Cập nhật</button>
              </td>
            </form>
          <?php
            }
          ?>
          <tr>

            <td >
              
            </td>
            <td colspan="2">
              <h3 class="text-danger total" >Tổng Tiền</h3></td>
            <td >
               
            </td>
            <td>
            <b>
               
            </td>
            <td class="text-danger total "  >  
              <?php
                  echo number_format($tongTen);
              ?> 
              <sup><u>đ</u></sup></b></td>
            </tr>
        </tbody>
      </table>
       <div class="row">
        <div class="col-12">
         <a href="index.php?action=thanhtoan&tongtien=<?=$tongTen?>" class="btn btn-order">Đặt Hàng</a> 
   
        </div>
       </div>
 <?php
    }
    else
    {
      echo '<script> alert("Giỏ hàng bạn chưa có hàng");</script>';
      echo '<meta http-equiv="refresh" content="0;url=./index.php?action=home"/>';
    }
?>
</div>
</div>
</body>
</html>