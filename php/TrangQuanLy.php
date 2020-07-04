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
        include_once 'ketnoi.php';
        $result = mysqli_query($conn , "SELECT * FROM hanghoa");
     

    
        
     
?>



        <h1 class="" style="text-align:center;">Bảng Quản Lý</h1>

<div class="exam1">
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
                             <td> <a href="./TrangQuanLy.php?edit=<?=$row['MaHH'] ?>">Sửa</a></td>
                         </div>
                <?php } ?>
    
        </table>
    </div>
    <?php

if(isset($_GET['delete'])){
    $product_id = $_GET['delete'];
    $result = mysqli_query($conn , "DELETE FROM `hanghoa` WHERE MaHH='$product_id'");
    if($result==true)
    {
        echo "thanh cong";
        header("location:TrangQuanLy.php");
    }
    else {
        echo "that bai";}
}
?>       
<?php
include_once 'ketnoi.php';

if(isset($_POST['sub']) && isset($_GET['edit']))
{
    $edit = $_POST['change'];
    $Ma = $_POST['Ma'];
    $price = $_POST['price'];
    $img = $_POST['img'];
    $id= $_GET['edit'];
    $result = mysqli_query($conn , "UPDATE   hanghoa  SET TenHH ='$edit' , MaLoai = '$Ma' , DonGia = '$price', Hinh = '$img' where  MaHH ='$id'");

    if($result==true)
    {
        echo "thanh cong";
        header("location:TrangQuanLy.php");
    }
    else {
        echo "that bai";}
}


?>
<div>
        <form action="" method="POST" style="margin-top:20px;">
        <label for="">MaLoai</label>
        <input type="text" name="Ma" value=""required>
        <br>
        <label for="">TênHH</label>
        <input type="text" name="change" value=""required>
        <br>
        <label for="">ĐơnGia</label>
        <input type="text" name="price" value=""required>
        <br>
        <label for="">HinhAnh</label>
        <input type="text" name="img" value="">
        <br>
        <input type="submit" name="sub">

</form>
</div>

        

</div>
</body>
</html>
