<?php
//nhan du lieu tu form
$tb = $_POST['tenbenh'];
$ab = $_POST['anhbenh'];


//ket noi csdl 
require_once 'ketnoi.php';

//viet lenh sql de them du lieu
$themsql = "INSERT INTO benh
(tenbenh, anhbenh) VALUES 
('$tb', '$ab')";
//echo $themsql; exit;

//thuc thi cau lenh them
if (mysqli_query($conn, $themsql)
){
    //in thong bao thanh cong
    //tro ve trang liet ke
    header("Location: admin.php");
}

?>