<?php
// Nhận dữ liệu từ form
$tenbenh = $_POST['id'];
$baithuoc = $_POST['id_baithuoc'];
$duoclieu = $_POST['id_duoclieu'];

// Kết nối cơ sở dữ liệu
require_once 'ketnoi.php';

// Kiểm tra xem bệnh có tồn tại trong cơ sở dữ liệu hay không
$kiemtra_sql = "SELECT id FROM benh WHERE id = '$tenbenh'";
$kiemtra_result = mysqli_query($conn, $kiemtra_sql);

if (mysqli_num_rows($kiemtra_result) > 0) {
    // Bệnh đã tồn tại, cập nhật thông tin
    $capnhat_sql = "UPDATE benh SET id = '$tenbenh' WHERE id = '$tenbenh'";
    mysqli_query($conn, $capnhat_sql);

    // Lấy id của bệnh đã tồn tại
    $benh_id = $tenbenh;
} else {
    // Bệnh chưa tồn tại, thêm mới
    $them_sql = "INSERT INTO benh (id) VALUES ('$tenbenh')";
    mysqli_query($conn, $them_sql);

    // Lấy id của bệnh vừa thêm
    $benh_id = mysqli_insert_id($conn);
}

// Thêm bài thuốc vào bảng benh_baithuoc
$them_baithuoc_sql = "INSERT INTO benh_baithuoc (id_benh, id_baithuoc) VALUES ('$benh_id', '$baithuoc')";
mysqli_query($conn, $them_baithuoc_sql);

// Thêm dược liệu vào bảng benh_duoclieu
$them_duoclieu_sql = "INSERT INTO benh_duoclieu (id_benh, id_duoclieu) VALUES ('$benh_id', '$duoclieu')";
mysqli_query($conn, $them_duoclieu_sql);

// Chuyển hướng về trang liệt kê
header("Location: admin.php");
?>