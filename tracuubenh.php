<?php
// Kết nối cơ sở dữ liệu
require_once 'ketnoi.php';

// Lấy ID bệnh từ tham số truyền vào
$benh_id = $_GET['sid'];

// Truy vấn thông tin bệnh
$benh_sql = "SELECT * FROM benh WHERE id = '$benh_id'";
$benh_result = mysqli_query($conn, $benh_sql);
$benh = mysqli_fetch_assoc($benh_result);

// Truy vấn thông tin bài thuốc
$baithuoc_sql = "SELECT * FROM benh_baithuoc INNER JOIN baithuoc ON benh_baithuoc.id_baithuoc = baithuoc.id WHERE benh_baithuoc.id_benh = '$benh_id'";
$baithuoc_result = mysqli_query($conn, $baithuoc_sql);

// Truy vấn thông tin dược liệu
$duoclieu_sql = "SELECT * FROM benh_duoclieu INNER JOIN duoclieu ON benh_duoclieu.id_duoclieu = duoclieu.id WHERE benh_duoclieu.id_benh = '$benh_id'";
$duoclieu_result = mysqli_query($conn, $duoclieu_sql);

// Đóng kết nối cơ sở dữ liệu
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thông tin bệnh</title>
  <script src="https://kit.fontawesome.com/924dff9382.js" crossorigin="anonymous"></script>

  <style>
        html, body {
            margin: 0;
            padding: 0;
            font-family: Tahoma, 'Segoe UI', Geneva, Verdana, sans-serif;
        }
        .blockHeader {
            background-image: url(image/img_bg/bg_benh_image.jpg);
            background-size: cover;
            background-position: center 40%;
            height: 400px;
        }
        .bglogo {
            display: grid;
            grid-template-columns: 200px 900px; /*Make the grid smaller than the container*/
            justify-content: space-evenly;
        }
        .logo { 
            width: 200px;
        }
        .bglogo h1 {
            padding-top: 50px;
            color: green;
        }
        .menuSP {
            background-color: green;
            opacity: 0.7;
        }
        .menuSP ul li {
            display: inline;
        }
        .menuSP li :hover{
            background-color: lightgreen;
            color: green;
        }
        .menuSP ul {
            width: 80%;
            margin: auto;
            padding: 15px 0px;
            margin-top: 0;
        }
        .menuSP ul li a{
            text-decoration: none;
            list-style: none;
            color: white;
            padding: 15px 10px;
        }
        .fa-circle-chevron-right  {
            color: green;
            margin: 0 20px;
        }
        .menuHeader {
            background-color: rgb(225, 255, 225);
            opacity: 0.7;
            height: 150px;
        }
        .menuHeader h2 {
            margin-top: 0;
            margin: auto;
            width: 80%;
            color: green;
            padding-top: 20px;
            padding-bottom: 30px;
        }
        .menuHeader p {
            margin: auto;
            width: 80%;
        }
        .menuHeader p a { 
            text-decoration: none;
            color: green;
        }
        .blockMain{
            width: 80%;
            margin: auto;
            display: grid;
            grid-template-columns: 75% 25%;
        }
        .blockOther {

        }
        .tracuubaithuoc {
        background-image: url(image/img_bg/bgcon_bai_thuoc.jpg);
        background-size: cover;
        height: 150px;
        }
        .tracuubaithuoc a {
        text-decoration: none;
        color: white;
        font-size: 20px;
        display: block;
        height: 100%;
        width: 100%;
        position: relative;
        }
        .tracuubaithuoc a p {
        background: rgba(0, 128, 0, 0.7);
        text-align: center;
        padding: 30px 10px;
        left: 15%;
        top: 10%;
        width: 60%;
        position: absolute;
        }
        .tracuuduoclieu {
        background-image: url(image/img_bg/bgcon_duoc_lieu.jpg);
        background-size: cover;
        height: 150px;
        }
        .tracuuduoclieu a {
        text-decoration: none;
        color: white;
        font-size: 20px;
        display: block;
        height: 100%;
        width: 100%;
        position: relative;
        }
        .tracuuduoclieu a p {
        background: rgba(0, 128, 0, 0.7);
        text-align: center;
        padding: 30px 10px;
        left: 15%;
        top: 10%;
        width: 60%;
        position: absolute;
        }
        .tracuutheobenh {
        background-image: url(image/img_bg/bgcon_benh.jpg);
        background-size: cover;
        height: 150px;
        }
        .tracuutheobenh a {
        text-decoration: none;
        color: white;
        font-size: 20px;
        display: block;
        height: 100%;
        width: 100%;
        position: relative;
        }
        .tracuutheobenh a p {
        background: rgba(0, 128, 0, 0.7);
        text-align: center;
        padding: 30px 10px;
        left: 15%;
        top: 10%;
        width: 60%;
        position: absolute;
        }
        .bgcon {
        margin-top: 20px;
        }
        footer {
        background-image: url(image/img_bg/bg_footer.png);
        background-size: cover;
        height: 300px; 
        background-position: center center;
        }
        footer > div {
        background-color: rgba(0, 100, 0, 0.7);
        height: 250px;
        display: grid;
        grid-template-columns: 35% 15% 15% 35%;
        padding-top: 25px;
        padding-bottom: 25px;
        }
        footer ul {
        margin: 0;
        color: white;
        }
        footer ul li {

        }
        footer ul li a {
        text-decoration: none;
        color: white;
        }
        .aboutFooter {
        list-style: none;
        margin: auto;
        margin-top: 0px;
        }
        .aboutFooter img{
        width: 100px;
        }
        .aboutFooter p {
        font-size: 10px;
        width: 250px;
        }
        .aboutFooter li {
        display: flex;

        }
        .menuFooter {
        margin-top: 10px;
        }
        .menuFooter li {
        margin-top: 30px;
        }
        .addressSocial {
        list-style: none;
        margin: auto;
        }
        .address {
        display: flex;
        }
        footer .fa-solid {
        color: white;
        }
        .iconaddress {
        padding: 10px;
        font-size: 20px;
        margin-bottom: 10px;
        background-color: rgba(0, 70, 0, 0.5);
        margin-right: 10px;
        }
        .iconSocial {
        width: 150px;
        }
        .zaloIconFooter {
        width: 16px;
        }
        .iconSocial span {
        }

  </style>
</head>
<body>
  <div class="blockHeader">
      <div class="bglogo">
          <a href="home.html"><img class="logo" src="image/img_logo/logo.png" alt=""></a>
          <h1>TRA CỨU THEO BỆNH</h1>
      </div>
      <div class="menuSP">
          <ul>
              <li><a href="home.html">TRANG CHỦ</a></li>
              <li><a href="gioithieu.html">GIỚI THIỆU</a></li>
              <li><a href="tracuu.html">TRA CỨU</a></li>
              <li><a href="">TIN TỨC</a></li>
              <li><a href="">VIDEO</a></li>
          </ul>
      </div>
      <div class="menuHeader">
      <h2>TRA CỨU THEO BỆNH</h2>
      <p><a href="home.html">Trang chủ</a><i class="fa-solid fa-circle-chevron-right"></i><a href="tracuu.html">Tra cứu</a><i class="fa-solid fa-circle-chevron-right"></i><a href="homePage.php">Tra cứu bài thuốc</a></p>
      </div>
  </div>
  <div class="blockMain">
    <div>
      <h3>Tên bệnh: <?php echo $benh['tenbenh']; ?></h3>
      
      <h2>Danh sách bài thuốc</h2>
      <ul>
        <?php while ($row = mysqli_fetch_assoc($baithuoc_result)) : ?>
          <li><?php echo $row['tenbaithuoc']; ?></li>
        <?php endwhile; ?>
      </ul>
      
      <h2>Danh sách dược liệu</h2>
      <ul>
        <?php while ($row = mysqli_fetch_assoc($duoclieu_result)) : ?>
          <li><?php echo $row['tenduoclieu']; ?></li>
        <?php endwhile; ?>
      </ul>
    </div>

    <div class="blockOther">
        <div>
            <div class="tracuubaithuoc bgcon"><a href=""><p>Tra cứu bài thuốc</p></a></div>
            <div class="tracuuduoclieu bgcon"><a href=""><p>Tra cứu dược liệu</p></a></div>
            <div class="tracuutheobenh bgcon"><a href=""><p>Tra cứu theo bệnh</p></a></div>
        </div>
        <div></div>
    </div>
  </div>
  <footer>
        <div>
            <ul class="aboutFooter">
                <li><div><a href=""><img src="image/img_logo/logo_white.png" alt=""></a></div><div style="margin-top: 50px;">Medicinal Search</div></li>
                <li><p>Chúng tôi là một đội ngũ đam mê y khoa và lập trình. Chúng tôi muốn phát triển một phần mềm giúp mọi người tra cứu đông y một cách dễ dàng. Phần mềm cung cấp thông tin và kiến thức về Đông y, giúp người dùng tra cứu các bài thuốc, dược liệu và phương pháp điều trị. Mục tiêu của chúng tôi là giúp mọi người tìm hiểu và áp dụng Đông y để cải thiện sức khỏe và tăng cường chất lượng cuộc sống.</p></li>
            </ul>
            <ul class="menuFooter">
                <li><a href="">Trang chủ</a></li>
                <li><a href="">Giới thiệu</a></li>
                <li><a href="">Tin tức</a></li>
                <li><a href="">Video</a></li>
            </ul>
            <ul class="menuFooter">
                <li><a href="">Tra cứu bài thuốc</a></li>
                <li><a href="">Tra cứu dược liệu</a></li>
                <li><a href="">Tra cứu bệnh</a></li>
            </ul>
            <ul class="addressSocial">
                <li class="address">
                    <i class="fa-solid fa-house-chimney iconaddress"></i>
                    <p>Số 123, đường 456, quận 789</p>
                </li>
                <li class="address">
                    <i class="fa-solid fa-phone iconaddress"></i>
                    <p>(0+)123.456.789</p>
                </li>
                <li class="address">
                    <i class="fa-solid fa-envelope iconaddress"></i>
                    <p>email@gmail.com</p>
                </li>
                <li class="iconSocial">
                    <hr>
                    <span>Social: </span>
                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-youtube"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-tiktok"></i></a>
                    <a href=""><i class="fa-brands fa-x-twitter"></i></a><br>
                    <hr>
                    <span>Chat: </span>
                    <a href=""><i class="fa-brands fa-facebook-messenger"></i></a>
                    <a href=""><i class="fa-brands fa-telegram"></i></a>
                    <a href=""><i class="fa-brands fa-discord"></i></a>
                    <a href=""><img  class="zaloIconFooter" src="image/img_logo/zalo.png" alt=""></a>
                    <hr>
                </li>
            </ul>
        </div>
    </footer>
</body>
</html>