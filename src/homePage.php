<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/924dff9382.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="blockHeader">
        <div class="bglogo"><a href="home.html"><img class="logo" src="image/img_logo/logo_white.png" alt=""></a></div>
        <div class="blockSearch">
            <form method="post">
                <input type="text" name="noidung" placeholder="Tìm kiếm bài thuốc...">
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
                    $sql = "SELECT * FROM baithuoc WHERE tenbaithuoc LIKE '%$noidung%'";
                    $result = mysqli_query($conn, $sql);
                    ?><?php //echo "Hiện thị thông tin tìm kiếm:"; ?>
                    <div class="headerSearch">
                        <div class="blockHeaderSearch">
                            <div style="color: white">Hiện thị thông tin tìm kiếm:</div>
                        <button class="btnTwo" type="button" onclick="window.location.href = 'homePage.php'">
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
                            <a style="text-decoration: none; color: green;" href="subPage.php?sid=<?php echo $row['id'];?>">
                                <img style="width: 100px; height: 100px" style src="image/img_chinh_sua/img_bai_thuoc/<?php echo $row['hinhanh'];?>" alt="">
                                <p style="width: 100px; font-size: 10px"><?php echo $row['tenbaithuoc'];?></p>
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
        <h2>TRA CỨU BÀI THUỐC</h2>
        <p><a href="home.html">Trang chủ</a><i class="fa-solid fa-circle-chevron-right"></i><a href="tracuu.html">Tra cứu</a><i class="fa-solid fa-circle-chevron-right"></i><a href="homePage.php">Tra cứu bài thuốc</a></p>
    </div>
    <div class="blockMain lineBlockMain">
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
        $lietke_sql = "SELECT * FROM baithuoc ORDER BY hinhanh, tenbaithuoc LIMIT $offset, $itemsPerPage";
        $result = mysqli_query($conn, $lietke_sql);
        
        while ($r = mysqli_fetch_assoc($result)){
            ?>
            <div class="blockMedicine">
                <a style="text-decoration: none; color: green;" href="subPage.php?sid=<?php echo $r['id'];?>">
                    <img style="width: 200px; height: 200px" src="image/img_chinh_sua/img_bai_thuoc/<?php echo $r['hinhanh'];?>" alt="">
                    <p style="width: 200px"><?php echo $r['tenbaithuoc'];?></p>
                </a>
            </div>
            <?php
        }
        
        // Query to count the total number of medicines
        $countSql = "SELECT COUNT(*) AS total FROM baithuoc";
        $countResult = mysqli_query($conn, $countSql);
        $totalItems = mysqli_fetch_assoc($countResult)['total'];
        
        // Calculate the total number of pages
        $totalPages = ceil($totalItems / $itemsPerPage);
        
        // Generate the pagination links
        $pagination = '';
        for ($i = 1; $i <= $totalPages; $i++) {
            $active = ($i == $page) ? 'active' : '';
            $pagination .= "<a href='homePage.php?page=$i' class='$active'>$i</a>";
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