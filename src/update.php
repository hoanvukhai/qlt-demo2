<?php
//nhan du lieu tu form
$tbt = $_POST['tenbaithuoc'];
$ha = $_POST['hinhanh'];
$tp = $_POST['thanhphan'];
$dbc = $_POST['dangbaoche'];
$cd = $_POST['chidinh'];
$ld = $_POST['lieudung'];
$id = $_POST['sid'];

//ket noi csdl 
require_once 'ketnoi.php';

//viet lenh sql de them du lieu
$updatesql = "UPDATE baithuoc SET tenbaithuoc='$tbt', hinhanh='$ha', thanhphan='$tp', dangbaoche='$dbc', chidinh='$cd', lieudung='$ld' WHERE id=$id";
//echo $updatesql; exit;

//thuc thi cau lenh them
if (mysqli_query($conn, $updatesql)
){
    //in thong bao thanh cong
    //tro ve trang liet ke
    header("Location: admin.php");
}

?>