<?php
$id = $_GET['sid'];
require_once 'ketnoi.php';
$edit_sql = "SELECT * FROM duoclieu WHERE id=$id";

$result = mysqli_query($conn, $edit_sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Them thuoc</title>
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
        <h1>Form sửa thông tin dược liệu</h1>
        <form action="updateduoclieu.php" method="post">
            <input type="hidden" name="sid" value="<?php echo $id;?>">
            <div class="form-group">
                <label for="tenduoclieu">Tên dươc liệu</label>
                <input type="text" id="tenduoclieu" class="form-control" name="tenduoclieu" value="<?php echo $row['tenduoclieu']?>">
            </div>
            <div class="form-group">
                <label for="anhduoclieu">Ảnh</label>
                
                <br>Chọn lại tệp: <input type="file" name="anhduoclieu" id="anhduoclieu"/><span><br>Tệp cũ: <?php echo $row['anhduoclieu']?></span>
            </div>
            <div class="form-group">
                <label for="tentiengviet">Tên tiếng việt</label>
                <input type="text" id="tentiengviet" class="form-control" name="tentiengviet" value="<?php echo $row['tentiengviet']?>">
            </div>
            <div class="form-group">
                <label for="tenkhoahoc">Tên khoa học</label>
                <input type="text" id="tenkhoahoc" class="form-control" name="tenkhoahoc" value="<?php echo $row['tenkhoahoc']?>">
            </div>
            <div class="form-group">
                <label for="ho">HỌ</label>
                <input type="text" id="ho" class="form-control" name="ho" value="<?php echo $row['ho']?>">
            </div>
            <div class="form-group">
                <label for="mota">Mô tả</label>
                <input type="text" id="mota" class="form-control" name="mota" value="<?php echo $row['mota']?>">
            </div>
            <div class="form-group">
                <label for="phanbo">Phân bố</label>
                <input type="text" id="phanbo" class="form-control" name="phanbo" value="<?php echo $row['phanbo']?>">
            </div>
            <div class="form-group">
                <label for="bophandung">Bộ phận dùng</label>
                <input type="text" id="bophandung" class="form-control" name="bophandung" value="<?php echo $row['bophandung']?>">
            </div>
            <div class="form-group">
                <label for="congdung">Công dụng</label>
                <input type="text" id="congdung" class="form-control" name="congdung" value="<?php echo $row['congdung']?>">
            </div>

            <button class="btn btn-success">Cập nhật dược liệu</button>
        </form>
    </div>
</body>
</html>