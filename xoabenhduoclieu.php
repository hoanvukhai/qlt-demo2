<?php
$svid = $_GET['sid'];
require_once 'ketnoi.php';
$xoa_sql = "DELETE FROM benh_duoclieu WHERE id=$svid";

mysqli_query($conn, $xoa_sql);
header("Location: admin.php");
?>