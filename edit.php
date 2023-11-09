<?php
$id = $_GET['sid'];
require_once 'ketnoi.php';
$edit_sql = "SELECT * FROM baithuoc WHERE id=$id";

$result = mysqli_query($conn, $edit_sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Them bai thuoc</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Form sửa bài thuốc</h1>
        <form action="update.php" method="post">
            <input type="hidden" name="sid" value="<?php echo $id;?>">
            <div class="form-group">
                <label for="tenbaithuoc">Tên bài thuốc</label>
                <input type="text" id="tenbaithuoc" class="form-control" name="tenbaithuoc" value="<?php echo $row['tenbaithuoc']?>">
            </div>
            <div class="form-group">
                <label for="hinhanh">Ảnh</label>
                <!-- <input type="file" name="hinhanh" id="hinhanh" value=""> -->
                <br>Chọn lại tệp : <input type="file" name="hinhanh" id="hinhanh"/><span><br>Tệp cũ: <?php echo $row['hinhanh']?></span>
            </div>
            <div class="form-group">
                <label for="thanhphan">Thành phần</label>
                <input type="text" id="thanhphan" class="form-control" name="thanhphan" value="<?php echo $row['thanhphan']?>">
            </div>
            <div class="form-group">
                <label for="dangbaoche">Dạng bào chế</label>
                <input type="text" id="dangbaoche" class="form-control" name="dangbaoche" value="<?php echo $row['dangbaoche']?>">
            </div>
            <div class="form-group">
                <label for="chidinh">Chỉ định</label>
                <input type="text" id="chidinh" class="form-control" name="chidinh" value="<?php echo $row['chidinh']?>">
            </div>
            <div class="form-group">
                <label for="lieudung">Liều dùng</label>
                <input type="text" id="lieudung" class="form-control" name="lieudung" value="<?php echo $row['lieudung']?>">
            </div>

            <button class="btn btn-success">Cập nhật bài thuốc</button>
        </form>
    </div>
</body>
</html>