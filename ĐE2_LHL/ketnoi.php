<?php
$host = "localhost";
$user = "root";
$password ="";
$database = "qlsanpham";
$conn = mysqli_connect($host , $user , $password , $database);
if (!$conn) {
    exit('Kết nối không thành công!');
}
// thành công
echo 'Kết nối thành công!';

?>