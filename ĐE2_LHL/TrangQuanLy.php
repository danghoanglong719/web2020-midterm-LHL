<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="TrangQuanLy.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    
    <title>Quản Lý</title>
</head>
<script type="text/javascript" src="../js/jquery/jquery-3.5.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<style>
 </style>   
<body>
        <h1 class="" style="text-align:center;">Bảng Quản Lý</h1>

<div class="exam1">
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
        <h3>HÀNG HÓA</h3>
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
            <tr>
                <td></td>
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

    <div id="loai" class="tabcontent">
        <h3>LOẠI</h3>
        <p></p>
    </div>

    <div id="khachhang" class="tabcontent">
        <h3>KHÁCH HÀNG</h3>
        <p></p>
    </div>
    <div id="hoadon" class="tabcontent">
        <h3>HÓA ĐƠN</h3>
        <p></p>
    </div>

    <div id="chitiethd" class="tabcontent">
        <h3>CHI TIẾT HÓA ĐƠN</h3>
        <p></p>
    </div>
</div>
</body>
</html>
<script>
function openCity(evt, category) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(category).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>