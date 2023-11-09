<?php
//nhan du lieu tu form
$tb = $_POST['tenbenh'];
$ab = $_POST['anhbenh'];
$id = $_POST['sid'];

//ket noi csdl 
require_once 'ketnoi.php';

//viet lenh sql de them du lieu
$updatesql = "UPDATE benh SET tenbenh='$tb', anhbenh='$ab' WHERE id=$id";
//echo $updatesql; exit;

//thuc thi cau lenh them
if (mysqli_query($conn, $updatesql)
){
    //in thong bao thanh cong
    //tro ve trang liet ke
    header("Location: admin.php");
}

?>