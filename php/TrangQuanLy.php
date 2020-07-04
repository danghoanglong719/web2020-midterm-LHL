<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <title>Quản Lý</title>
</head>
<style>
    .exam1,{
            margin:50px auto;
            padding:10px;
            text-align:center;
            border:2px solid black;
        }
        table, th, td ,a{
        border: 1px solid black;
        text-decoration:none;
        text-align:center;
        }
        .img{
            width:70px;
            height:70px;
            border:1px solid black;
        }
 </style>   
<style>
 </style>   
<body>
<?php
        include_once './ketnoi.php';
        $result = mysqli_query($conn , "SELECT * FROM hanghoa");
     

    
        
     
?>



        <h1 class="" style="text-align:center;">Bảng Quản Lý</h1>

<div class="exam1">
<<<<<<< HEAD:ĐE2_LHL/TrangQuanLy.php
=======
    <!-- Tab links -->
    <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'hanghoa')">HÀNG HÓA</button>
        <button class="tablinks" onclick="openCity(event, 'loai')">LOẠI</button>
        <button class="tablinks" onclick="openCity(event, 'khachhang')">KHÁCH HÀNG</button>
        <button class="tablinks" onclick="openCity(event, 'hoadon')">HÓA ĐƠN</button>
        <button class="tablinks" onclick="openCity(event, 'chitiethd')">CHI TIẾT HÓA ĐƠN</button>
    </div>

    <!-- Tab content -->
    <div id="hanghoa" class="tabcontent">
>>>>>>> 414e7da16f09e4ece3cf4d4f80389c27508c41b1:php/TrangQuanLy.php
        <table style="width:100%">
            <tr>
                <th>Mã Sản Phẩm</th>
                <th>Mã Loại</th>
                <th>Tên Sản Phẩm</th>
                <th>Đơn giá</th>
                <th>Hình</th>
                <th>THÊM</th>
                <th>XÓA</th>
                <th>SỬA</th>
            </tr>  
               
            <?php
                 while ($row = mysqli_fetch_array($result)){              
                    ?>
                     
                   
                         <tr>
                            <td><?= $row['MaHH'] ?></td>
                             <td><?=$row['MaLoai']?></td>
                             <td><?=$row['TenHH']?></td>
                             <td><?=$row['DonGia']?></td>
                            <td> <img src="../Hinh/<?=$row['Hinh']?>" class="img"/> </td>                  
                             <td> <a href="">Thêm</a></td>
                             <td> <a href="./TrangQuanLy.php?delete=<?=$row['MaHH'] ?>">Xóa</a></td>
                             <td> <a href="">Sửa</a></td>
                         </div>
                <?php } ?>
    
        </table>
    </div>
    <?php

<<<<<<< HEAD:ĐE2_LHL/TrangQuanLy.php
if(isset($_GET['delete'])){
    $product_id = $_GET['delete'];
    $result = mysqli_query($conn , "DELETE FROM `hanghoa` WHERE MaHH='$product_id'");
    if($result==true)
    {
        echo "thanh cong";
    }
    else {
        echo "that bai";}
}
?>

=======
    <div id="loai" class="tabcontent">
        <table style="width:100%">
            <tr>
                <th>Mã Loại</th>
                <th>Tên Loại</th>
                <th>Mô tả</th>
                <th>THÊM</th>
                <th>XÓA</th>
                <th>SỬA</th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <th><a href=""> </a></th>
                <th><a href=""> </a></th>
                <th><a href=""> </a></th>
            </tr>
            <tr></tr>
        </table>
    </div>

    <div id="khachhang" class="tabcontent">
        <table style="width:100%">
            <tr>
                <th>Mã KH</th>
                <th>Họ Tên</th>
                <th>Điện thoại</th>
                <th>Email</th>
                <th>THÊM</th>
                <th>XÓA</th>
                <th>SỬA</th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <th><a href=""> </a></th>
                <th><a href=""> </a></th>
                <th><a href=""> </a></th>
            </tr>
            <tr></tr>
        </table>
    </div>
    <div id="hoadon" class="tabcontent">
        <table style="width:100%">
            <tr>
                <th>Mã Hóa Đơn</th>
                <th>Ngày Lập</th>
                <th>Mã Khách Hàng</th>
                <th>Tổng Tiền</th>
                <th>THÊM</th>
                <th>XÓA</th>
                <th>SỬA</th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <th><a href=""> </a></th>
                <th><a href=""> </a></th>
                <th><a href=""> </a></th>
            </tr>
            <tr></tr>
        </table>
    </div>

    <div id="chitiethd" class="tabcontent">
        <table style="width:100%">
            <tr>
                <th>Mã CTHD</th>
                <th>Mã Hóa Đơn</th>
                <th>Mã Hàng Hóa</th>
                <th>Số Lượng</th>
                <th>THÊM</th>
                <th>XÓA</th>
                <th>SỬA</th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <th><a href=""> </a></th>
                <th><a href=""> </a></th>
                <th><a href=""> </a></th>
            </tr>
            <tr></tr>
        </table>
    </div>
>>>>>>> 414e7da16f09e4ece3cf4d4f80389c27508c41b1:php/TrangQuanLy.php
</div>
</body>
</html>
