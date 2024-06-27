<?php
//nhan du lieu tu form
$tdl = $_POST['tenduoclieu'];
$adl = $_POST['anhduoclieu'];
$ttv = $_POST['tentiengviet'];
$tkh = $_POST['tenkhoahoc'];
$ho = $_POST['ho'];
$mt = $_POST['mota'];
$pb = $_POST['phanbo'];
$bpd = $_POST['bophandung'];
$cd = $_POST['congdung'];

//ket noi csdl 
require_once 'ketnoi.php';

//viet lenh sql de them du lieu
$themtsql = "INSERT INTO duoclieu
(tenduoclieu, anhduoclieu, tentiengviet, tenkhoahoc, ho, mota, phanbo, bophandung, congdung) VALUES 
('$tdl', '$adl', '$ttv', '$tkh', '$ho', '$mt', '$pb', '$bpd', '$cd')";
//echo $themsql; exit;

//thuc thi cau lenh them
if (mysqli_query($conn, $themtsql)
){
    //in thong bao thanh cong
    //tro ve trang liet ke

    header("Location: admin.php");
}

?>

