<?php
session_start();

// Kiểm tra xem người dùng đã đăng nhập chưa
if(!isset($_SESSION['username'])) {
    header("Location: dangnhap.php"); // Chuyển hướng đến trang đăng nhập nếu chưa đăng nhập
    exit();
}

// Kiểm tra phân quyền người dùng (thay thế bằng logic phân quyền thực tế)
if($_SESSION['username'] !== 'admin') {
    echo "Bạn không có quyền truy cập vào trang này!";
    exit();
}

// Xử lý các hoạt động chỉ dành cho admin
// ...

// Đăng xuất
if(isset($_GET['logout'])) {
    session_destroy();
    header("Location: dangnhap.php");
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liet ke bai thuoc</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
html, body {
    margin: 0;
    padding: 0;
}
.form-container {

}

.dot-container-one {
    text-align: center;
}

.dot-one {
    width: 200px;
    border-radius: 5px;
    display: inline-block;
    cursor: pointer;
    padding: 5px;
}

.dot-one.active-one {
    background-color: lightblue;
    color: #157EFB;
}
</style>
</head>
<body>
    <form action="" class="form-container">
    <div style="display: flex; justify-content: space-between; width: 80%; margin: auto; font-size: 20px">
    <h1>Xin chào, <?php echo $_SESSION['username']; ?>!</h1>
    <a href="?logout=true">Đăng xuất</a>  
    </div>
    <div class="dot-container-one">

    

    <span class="dot-one">Sửa bài thuốc</span>
    <span class="dot-one">Sửa dược liệu</span>
    <span class="dot-one">Sửa tên bệnh</span>
    <span class="dot-one">Sửa thông tin bệnh</span>


    </div>
    
    <div class="slideshow-container-one">
    <div class="slide-one">


    <div class="">
    <h2>Form Sửa bài thuốc</h2>
    <a href="them.html" class="btn btn-primary">Thêm bài thuốc</a>
  <table class="table table-bordered table-sm">
    <thead>
      <tr>
        <th>ID</th>
        <th>Tên bài thuốc</th>
        <th>Hình ảnh</th>
        <th>Thành phần</th>
        <th>Dạng bào chế</th>
        <th>Chỉ định</th>
        <th>Liều dùng</th>
        <th>Thao tác</th>
      </tr>
    </thead>
    <tbody>
    <?php
    require_once 'ketnoi.php';
    $lietke_sql="SELECT * FROM baithuoc order by id, hinhanh, tenbaithuoc, thanhphan, dangbaoche, chidinh, lieudung";
    $result = mysqli_query($conn, $lietke_sql);
    while ($r = mysqli_fetch_assoc($result)){
    ?>
        <tr>
        <td><?php echo $r['id'];?></td>
        <td><?php echo $r['tenbaithuoc'];?></td>
        <td><img style="width: 100px" src="image/img_chinh_sua/img_bai_thuoc/<?php echo $r['hinhanh'];?>" alt=""></td>
        <td><?php echo $r['thanhphan'];?></td>
        <td><?php echo $r['dangbaoche'];?></td>
        <td><?php echo $r['chidinh'];?></td>
        <td><?php echo $r['lieudung'];?></td>
        <td><a href="edit.php?sid=<?php echo $r['id'];?>" class="btn btn-primary">Sửa</a>
        <a onclick="return confirm('Bạn có muốn xóa sinh viên này không')" href="xoa.php?sid=<?php echo $r['id'];?>" class="btn btn-danger">Xóa</a></td>
      </tr>
    <?php
    }
    ?>
    </tbody>
    </table>

    </div>

</div>



<!-- -----------------------------------------------tracuuvithuoc----------------------------------------------------- -->

<div class="slide-one">


<div class="">
<h2>Form Sửa Dược Liệu</h2>
<a href="themduoclieu.html" class="btn btn-primary">Thêm dược liệu</a>
<table class="table table-bordered table-sm">
<thead>
  <tr>
    <th>ID</th>
    <th>Tên dược liệu</th>
    <th>Hình ảnh</th>
    <th>Tên tiếng việt</th>
    <th>Tên Khoa học</th>
    <th>Họ</th>
    <th>Mô tả</th>
    <th>Phân bố</th>
    <th>Bộ phận dùng</th>
    <th>Công dụng</th>
    <th>Thao tác</th>
  </tr>
</thead>
<tbody>
<?php
require_once 'ketnoi.php';
$lietke_sql="SELECT * FROM duoclieu order by id, tenduoclieu, anhduoclieu, tentiengviet, tenkhoahoc, ho, mota, phanbo, bophandung, congdung";
$result = mysqli_query($conn, $lietke_sql);
while ($r = mysqli_fetch_assoc($result)){
?>
    <tr>
    <td><?php echo $r['id'];?></td>
    <td><?php echo $r['tenduoclieu'];?></td>
    <td><img style="width: 100px" src="image/img_chinh_sua/img_duoc_lieu/<?php echo $r['anhduoclieu'];?>" alt=""></td>
    <td><?php echo $r['tentiengviet'];?></td>
    <td><?php echo $r['tenkhoahoc'];?></td>
    <td><?php echo $r['ho'];?></td>
    <td><?php echo $r['mota'];?></td>
    <td><?php echo $r['phanbo'];?></td>
    <td><?php echo $r['bophandung'];?></td>
    <td><?php echo $r['congdung'];?></td>
    <td><a href="editduoclieu.php?sid=<?php echo $r['id'];?>" class="btn btn-primary">Sửa</a>
    <a onclick="return confirm('Bạn có muốn xóa sinh viên này không')" href="xoaduoclieu.php?sid=<?php echo $r['id'];?>" class="btn btn-danger">Xóa</a></td>
  </tr>
<?php
}
?>
</tbody>
</table>

</div>

</div>


<!-- -----------------------------------------------tracuubenh----------------------------------------------------- -->

<div class="slide-one">


<div class="container">
<h2>Form Sửa Dược Liệu</h2>
<a href="thembenh.html" class="btn btn-primary">Thêm bệnh</a>
<table class="table table-borderless">
<thead>
  <tr>
    <th>ID</th>
    <th>Tên bệnh</th>
    <th>Hình ảnh</th>
  </tr>
</thead>
<tbody>
<?php
require_once 'ketnoi.php';
$lietke_sql="SELECT * FROM benh order by id, tenbenh, anhbenh";
$result = mysqli_query($conn, $lietke_sql);
while ($r = mysqli_fetch_assoc($result)){
?>
    <tr>
    <td><?php echo $r['id'];?></td>
    <td><?php echo $r['tenbenh'];?></td>
    <td><img style="width: 100px" src="image/img_chinh_sua/img_benh/<?php echo $r['anhbenh'];?>" alt=""></td>
    <td><a href="editbenh.php?sid=<?php echo $r['id'];?>" class="btn btn-primary">Sửa</a>
    <a onclick="return confirm('Bạn có muốn xóa sinh viên này không')" href="xoabenh.php?sid=<?php echo $r['id'];?>" class="btn btn-danger">Xóa</a></td>
  </tr>
<?php
}
?>
</tbody>
</table>

</div>

</div>

<!-- -----------------------------------------------thongtinbenh----------------------------------------------------- -->


<div class="slide-one">


  <div class="container">
    <h2>Form Sửa Dược Liệu</h2>
    <a href="themthongtinbenh.html" class="btn btn-primary">Sửa dược liệu</a>
    <div style="display: flex">
      <table class="table table-borderless" style="border-right: 1px solid gray">
      <thead>
        <tr>
          <th>ID bệnh</th>
          <th>ID bài thuốc</th>
          <th>Xóa</th>
        </tr>
      </thead>
      <tbody>
      <?php
      require_once 'ketnoi.php';
      $lietke_sql="SELECT * FROM benh_baithuoc order by id_benh, id_baithuoc";
      $result = mysqli_query($conn, $lietke_sql);
      while ($r = mysqli_fetch_assoc($result)){
      ?>
          <tr>
          <td><?php echo $r['id_benh'];?></td>
          <td><?php echo $r['id_baithuoc'];?></td>
          <td><a onclick="return confirm('Bạn có muốn xóa sinh viên này không')" href="xoabenhbaithuoc.php?sid=<?php echo $r['id'];?>" class="btn btn-danger">Xóa</a></td>
        </tr>
      <?php
      }
      ?>
      </tbody>
      </table>

      <table class="table table-borderless">
      <thead>
        <tr>
          <th>ID bệnh</th>
          <th>ID dược liệu</th>
          <th>Xóa</th>
        </tr>
      </thead>
      <tbody>
      <?php
      require_once 'ketnoi.php';
      $lietke_sql="SELECT * FROM benh_duoclieu order by id_benh, id_duoclieu";
      $result = mysqli_query($conn, $lietke_sql);
      while ($r = mysqli_fetch_assoc($result)){
      ?>
          <tr>
          <td><?php echo $r['id_benh'];?></td>
          <td><?php echo $r['id_duoclieu'];?></td>
          <td><a onclick="return confirm('Bạn có muốn xóa sinh viên này không')" href="xoabenhduoclieu.php?sid=<?php echo $r['id'];?>" class="btn btn-danger">Xóa</a></td>
        </tr>
      <?php
      }
      ?>
      </tbody>
      </table>
    </div>

  </div>

</div>



</div>
</form>
<script>
        var slidesOne = document.getElementsByClassName("slide-one");
        var dotsOne = document.getElementsByClassName("dot-one");
        var currentSlideOne = 0;

        showSlideOne(currentSlideOne);

        function showSlideOne(n) {
        for (var i = 0; i < slidesOne.length; i++) {
            slidesOne[i].style.display = "none";
        }
        for (var i = 0; i < dotsOne.length; i++) {
            dotsOne[i].className = dotsOne[i].className.replace(" active-one", "");
        }
        slidesOne[n].style.display = "block";
        dotsOne[n].className += " active-one";
        }

        function nextSlideOne() {
        currentSlideOne++;
        if (currentSlideOne >= slidesOne.length) {
            currentSlideOne = 0;
        }
        showSlideOne(currentSlideOne);
        }

        function previousSlideOne() {
        currentSlideOne--;
        if (currentSlideOne < 0) {
            currentSlideOne = slidesOne.length - 1;
        }
        showSlideOne(currentSlideOne);
        }

        for (var i = 0; i < dotsOne.length; i++) {
        dotsOne[i].addEventListener("click", function () {
            var dotIndexOne = Array.prototype.indexOf.call(dotsOne, this);
            showSlideOne(dotIndexOne);
        });
        }
</script>
</body>
</html>

