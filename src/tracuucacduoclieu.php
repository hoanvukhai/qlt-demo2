<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/924dff9382.js" crossorigin="anonymous"></script>
    <style>
    .html, body {
    margin: 0;
    padding: 0;
    font-family: Tahoma, 'Segoe UI', Geneva, Verdana, sans-serif;
    }
    .blockHeader{
    background-image:url(image/img_bg/bg_img_menu_dl.jpg);
    background-size: cover;
    background-position: center 70%;
    height: 300px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
    }
    .bglogo img {
    margin-left: 25%;
    }
    .blockSearch {
        width: 170%;
        margin: auto;
    }
    .blockSearch input[type="text"] {
    padding: 15px 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-right: 0;
    opacity: 0.8;
    width: 500px;
    padding-bottom: 10px;
    color: lightgreen;
    font-size: 20px;
    }
    input[type="text"]::placeholder {
        color: lightgreen;
        font-size: 20px;
    }
    .btnOne {
    padding: 5px 10px;
    border-radius: 5px;
    border: none;
    cursor: pointer;
    opacity: 0.8;
    width: 520px;
    background-color: green;
    color: white;
    padding: 10px 0;

    }
    .btnTwo {
    padding: 5px 10px;
    border: none;
    cursor: pointer;
    background-color: lightgreen;
    color: white;
    opacity: 0.8;
    width: 115px;
    padding: 10px 0;
    border-radius: 0 10px 0 0;
    }


    .bglogo {
        width: 80%;
        margin: auto;   
    }
    .logo {
        width: 200px;
        opacity: 0.8;
    }
    .menuCon {
    background-color: rgb(200, 255, 200);
    color: green;
    margin: 0;
    padding: 20px 0;
    }
    .menuCon h2{
        width: 80%;
        margin: auto;
        margin-bottom: 20px;
    }
    .menuCon p {
        width: 80%;
        margin: auto;
    }
    .menuCon p a {
        text-decoration: none;
        color: green;
    }
    .fa-circle-chevron-right {
        margin: 0 30px;
    }
    .blockMain {
        width: 80%;
        margin: auto;
        display: grid;
        grid-template-columns: 75% 25%;
        gap: 30px;
        margin-bottom: 50px;
    }
    .blockAllMedicine {
        display: grid;
        grid-template-areas: '... ... ... ...';
        height: 700px;
    }
    .blockMedicine {
        margin-top: 50px;
    }

    .blockSearchImg {

    }
    .blockSearchAllMedicine{
        position: fixed;


    }
    .bgBlockSearchAllMedicine {
        display: grid;
        grid-template-areas: '... ... ... ... ...';
        gap: 0px;
        background-color: rgb(225, 255, 225);
        padding: 20px;
        position: fixed;
        left: 350px;
        width: 700px;
        border-radius: 0 0 10px 10px;
    }
    .headerSearch {
        background-color: rgba(128, 128, 128, 0.5);
        position: fixed;  
        width: 100%;
        height: 100%;
        top: 0;

    }
    .blockHeaderSearch {
        background-color: rgba(0, 128, 0, 0.5);
        top: 285px;
        position: fixed;
        left: 350px;
        display: flex;
        justify-content: space-between;
        width: 740px;
        border-radius: 10px 10px 0 0;
    }
    .blockHeaderSearch div {
        padding: 5px;
    }
    .menuHome ul li {
        display: inline;
    }
    .menuHome li :hover{
        background-color: lightgreen;
    }
    .menuHome ul {
        background-color: green;
        padding: 15px 0px;
        margin-top: 0;
    }
    .menuHome ul li a{
        text-decoration: none;
        list-style: none;
        color: white;
        background-color: green;
        padding: 15px 10px;
    }
    .first {
        margin-left: 10%;
    }
    .sticky-menu {
        display: none;
        position: fixed;
        top: 0;
        width: 100%;
        opacity: 0.7;
    }
    .pagination {
    display: inline-block;
  }
  
  .pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
  }
  
  .pagination .active {
    background-color: #4CAF50;
    color: white;
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
        <div class="bglogo"><a href="home.html"><img class="logo" src="image/img_logo/logo_white.png" alt=""></a></div>
        <div class="blockSearch">
            <form method="post">
                <input type="text" name="noidung" placeholder="Tìm kiếm bài thuốc dược liệu...">
                <div>
                    <button class="btnOne" type="submit" name="btn" >Tìm kiếm</button>
                    <!-- <button class="btnTwo" type="button" onclick="window.location.href = 'homePage.php'">
                        <i class="fa-solid fa-tent-arrow-turn-left"></i>
                    </button> -->
                </div>
            </form>
        </div>
    </div>
    <div class="menuHome">
        <ul class="sticky-menu">
        <li class="first"><a href="home.html">TRANG CHỦ</a></li>
        <li><a href="gioithieu.html">GIỚI THIỆU</a></li>
        <li><a href="tracuu.html">TRA CỨU</a></li>
        <li><a href="#about">TIN TỨC</a></li>
        <li><a href="#about">VIDEO</a></li>
        </ul>
    </div>
    <div class="blockSearchImg" id="searchForm">
        <div class="blockSearchAllMedicine">
            <?php
                include "ketnoi.php";
                if (isset($_POST['btn'])) {
                    $noidung = $_POST['noidung'];
                    $sql = "SELECT * FROM duoclieu WHERE tenduoclieu LIKE '%$noidung%'";
                    $result = mysqli_query($conn, $sql);
                    ?><?php //echo "Hiện thị thông tin tìm kiếm:"; ?>
                    <div class="headerSearch">
                        <div class="blockHeaderSearch">
                            <div style="color: white">Hiện thị thông tin tìm kiếm:</div>
                        <button class="btnTwo" type="button" onclick="window.location.href = 'tracuucacduoclieu.php'">
                            <i class="fa-solid fa-tent-arrow-turn-left"></i>
                        </button>
                        </div>    
                    </div>
                    <div class="bgBlockSearchAllMedicine">
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <div class="blockMedicine">                
                            <a style="text-decoration: none; color: green;" href="tracuuduoclieu.php?sid=<?php echo $row['id'];?>">
                                <img style="width: 100px; height: 100px" style src="image/img_chinh_sua/img_duoc_lieu/<?php echo $row['anhduoclieu'];?>" alt="">
                                <p style="width: 100px; font-size: 10px"><?php echo $row['tenduoclieu'];?></p>
                            </a>
                            </div>
                        <?php
                        }
                    } else {
                        echo "Không tìm thấy kết quả.";
                    }

                }
            ?>
            </div>

        </div>
    </div>
    <div class="menuCon">
        <h2>TRA CỨU DƯỢC LIỆU</h2>
        <p><a href="home.html">Trang chủ</a><i class="fa-solid fa-circle-chevron-right"></i><a href="tracuu.html">Tra cứu</a><i class="fa-solid fa-circle-chevron-right"></i><a href="tracuucacduoclieu.php">Tra cứu dược liệu</a></p>
    </div>
    <div class="blockMain">
    <div>
        <div class="blockAllMedicine">
        <?php
        require_once 'ketnoi.php';
        
        // Number of items per page
        $itemsPerPage = 8;
        
        // Get the current page from the URL parameter
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        
        // Calculate the offset for the SQL query
        $offset = ($page - 1) * $itemsPerPage;
        
        // Query to fetch a specific page of medicines
        $lietke_sql = "SELECT * FROM duoclieu ORDER BY anhduoclieu, tenduoclieu LIMIT $offset, $itemsPerPage";
        $result = mysqli_query($conn, $lietke_sql);
        
        while ($r = mysqli_fetch_assoc($result)){
            ?>
            <div class="blockMedicine">
                <a style="text-decoration: none; color: green;" href="tracuuduoclieu.php?sid=<?php echo $r['id'];?>">
                    <img style="width: 200px; height: 200px" src="image/img_chinh_sua/img_duoc_lieu/<?php echo $r['anhduoclieu'];?>" alt="">
                    <p style="width: 200px"><?php echo $r['tenduoclieu'];?></p>
                </a>
            </div>
            <?php
        }
        
        // Query to count the total number of medicines
        $countSql = "SELECT COUNT(*) AS total FROM duoclieu";
        $countResult = mysqli_query($conn, $countSql);
        $totalItems = mysqli_fetch_assoc($countResult)['total'];
        
        // Calculate the total number of pages
        $totalPages = ceil($totalItems / $itemsPerPage);
        
        // Generate the pagination links
        $pagination = '';
        for ($i = 1; $i <= $totalPages; $i++) {
            $active = ($i == $page) ? 'active' : '';
            $pagination .= "<a href='tracuucacduoclieu.php?page=$i' class='$active'>$i</a>";
        }
        ?>
        </div>

        <!-- Display the pagination links -->
        <div class="pagination"><?php echo $pagination; ?></div>
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
<script src="script.js"></script>
</body>
</html>