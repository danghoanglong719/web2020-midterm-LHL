<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hóa Đơn</title>
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
 </style>   
<body>

<?php
        include_once 'ketnoi.php';
       // $result = mysqli_query($conn , "SELECT * FROM hanghoa,hoadon WHERE hanghoa.MaHH = hoadon.MaHH");
       // $result1 = mysqli_query($conn , "SELECT * FROM hoadon");
        if(isset($_GET['HoaDon']))
        {  
            $id = $_GET['HoaDon'];
            $result = mysqli_query($conn , "SELECT * FROM account11 where MaHD = '$id' ");
        }

?>
            <h1 class="" style="text-align:center;">Bảng Hóa Đơn</h1>
            <div style="border:1px solid black;width:300px;margin-bottom:30px;">
                <h5>ToTal :</h5>
                <span></span>

            </div>
            <div style="margin-bottom:30px;">
            <label for="">Tra Cứu :</label>
                <form action="" method="post">
                <input type="text" placeholder="Search.." name="search">
                <input type="submit" name="submit" value="Tìm Kiếm">
                </form>

            </div>
<div class="exam1">
        <table style="width:100%">
            <tr>
                <th>Mã HĐ</th>
                <th>Mã HH</th>
                <th>Tên HH</th>
                <th>Ngày Lập </th>
                <th>Mã KH</th>
                <th>Giá Tiền</th>
            </tr>
         
            <?php
                 while ($row = mysqli_fetch_array($result)){              
                    ?>
            <tr>
                             <td><?=$row['MaHD']?></td>
                            <td><?= $row['MaHH'] ?></td>
                             <td><?=$row['TenHH']?></td>
                             <td><?=date('d/m/y H:i ,$row["hh/ H:i"] ')?></td>
                             <td><?=$row['MaKH']?></td>
                             <td><?=$row['TongTien']?></td>
            </tr>
          
          <?php } ?>
       
        </table>  
    </div>
   
</body>
</html>