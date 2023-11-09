<?php
$id = $_GET['sid'];
require_once 'ketnoi.php';
$edit_sql = "SELECT * FROM benh WHERE id=$id";

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
        <h1>Form sửa bệnh</h1>
        <form action="updatebenh.php" method="post">
            <input type="hidden" name="sid" value="<?php echo $id;?>">
            <div class="form-group">
                <label for="tenbenh">Tên bài thuốc</label>
                <input type="text" id="tenbenh" class="form-control" name="tenbenh" value="<?php echo $row['tenbenh']?>">
            </div>
            <div class="form-group">
                <label for="anhbenh">Ảnh</label>
                <!-- <input type="file" name="hinhanh" id="hinhanh" value=""> -->
                <br>Chọn lại tệp : <input type="file" name="anhbenh" id="anhbenh"/><span><br>Tệp cũ: <?php echo $row['anhbenh']?></span>
            </div>
            <button class="btn btn-success">Cập nhật bài thuốc</button>
        </form>
    </div>
</body>
</html>