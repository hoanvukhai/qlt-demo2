<?php
//nhan du lieu tu form
$tbt = $_POST['tenbaithuoc'];
$ha = $_POST['hinhanh'];
$tp = $_POST['thanhphan'];
$dbc = $_POST['dangbaoche'];
$cd = $_POST['chidinh'];
$ld = $_POST['lieudung'];

//ket noi csdl 
require_once 'ketnoi.php';

//viet lenh sql de them du lieu
$themsql = "INSERT INTO baithuoc
(tenbaithuoc, hinhanh, thanhphan, dangbaoche, chidinh, lieudung) VALUES 
('$tbt', '$ha', '$tp', '$dbc', '$cd', '$ld')";
//echo $themsql; exit;

//thuc thi cau lenh them
if (mysqli_query($conn, $themsql)
){
    //in thong bao thanh cong
    //tro ve trang liet ke
    header("Location: admin.php");
}

?>