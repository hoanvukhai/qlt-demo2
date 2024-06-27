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
$id = $_POST['sid'];

//ket noi csdl 
require_once 'ketnoi.php';

//viet lenh sql de them du lieu
$updatesql = "UPDATE duoclieu SET tenduoclieu='$tdl', anhduoclieu='$adl', tentiengviet='$ttv', tenkhoahoc='$tkh', ho='$ho', mota='$mt', phanbo='$pb', bophandung='$bpd', congdung='$cd' WHERE id=$id";
//echo $updatesql; exit;

//thuc thi cau lenh them
if (mysqli_query($conn, $updatesql)
){
    //in thong bao thanh cong
    //tro ve trang liet ke
    header("Location: admin.php");
}

?>