<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    /* Định dạng bảng */
    .table-bordered {
      font-size: 10px; /* Đặt kích thước phông chữ là 20px */
      width: 100%; /* Đảm bảo bảng nằm trên toàn bộ chiều rộng của container */
      margin-left: 180px; /* Căn giữa bảng sang phải */
      font-size: 15px;
    }
    .table-bordered td:nth-child(1) {
      width: 70px;  
   
    }

    .table-bordered td:nth-child(2) {
      width: 250px;  
      font-weight: bold;
      color: red;
   
    }
 
    .table-bordered td:nth-child(3),.table-bordered td:nth-child(4),.table-bordered td:nth-child(5) {
      width: 90px;  
      font-weight: bold;
      text-align: center;
   
    }
    .table-bordered td:nth-child(6) {
      width: 110px;  
       
   
    }
    .table-bordered td:nth-child(7) {
      max-width: 200px;  
      overflow: hidden; 
      text-overflow: ellipsis;  
      font-weight: bold;
      
    }
    .table-bordered td:nth-child(8)  {
      width:  120px;  
      text-align: center;
      font-weight: bold;
   
    }
    .table-bordered td:nth-child(9) {
      width:  50px;  
   
    }
   
 

  </style>
</head>
<body>
  <div class="row "> 
    <div class="col-12 mt-5  " style="margin-left: 600px; ">
      <h1 style="font-size:30px" ><b>DANH SÁCH HÀNG HÓA</b></h1>
    </div>
  </div>
  <div class="col-12  " style="margin-left:150px;">
    <a class="btn btn-warning" href="index.php?action=addsanpham"><h4>Thêm sản phẩm</h4></a>
  </div>
  <div class="row mt-3">
    <table class="table-bordered">
      <thead>
      <tr class="table-primary">
          <th>Mã hàng</th>  
          <th>Tên hàng</th>
          <th>Mã loại</th>
          <th>Đặc biệt</th>
          <th>Số lượt xem</th>
          <th>Ngày lập</th>
          <th>Mô tả</th>  
          <th>Số Lượng Tồn</th>
          <th>Hình ảnh</th> <!-- Thêm cột hiển thị hình ảnh -->
          <th>Cập nhật</th>
         
        </tr>
      </thead>
      <tbody>
        <?php
          $hh = new hanghoa();
          $hang = $hh->getHangHoa();
          while ($set = $hang->fetch()):
        ?>
        <tr>
        <td><?php echo $set['mahh'];?> </td>
          <td><?php echo $set['tenhh'];?></td>
          <td><?php echo $set['maloai'];?></td>
          <td><?php echo $set['dacbiet'];?></td>
          <td><?php echo $set['soluotxem'];?></td>
          <td><?php echo $set['ngaylap'];?></td>
          <td><?php echo $set['mota'];?></td>
          <td><?php echo $set['soluongton'];?> </td>
          <td><img src="../Content/imagetourdien/<?php echo $set['hinh'];?>" style="width:70px;" alt="Hình ảnh hàng hóa"></td>
          <td>
            <a class="btn btn-info" href="index.php?action=hanghoa&act=update_hanghoa&id=<?php echo $set['mahh'];?>">Sửa</a>
            <a class="btn btn-danger" href="index.php?action=hanghoa&act=delete_hanghoa&id=<?php echo $set['mahh'];?>">Xóa</a>
          </td>
          
        </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
</body>
</html>
