<?php
session_start();

// Kiểm tra xem người dùng đã đăng nhập chưa
if(isset($_SESSION['username'])) {
    header("Location: admin.php"); // Chuyển hướng đến trang admin nếu đã đăng nhập
    exit();
}

// Xử lý đăng nhập khi người dùng nhấn nút "Đăng nhập"
if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Kiểm tra thông tin đăng nhập (thay thế bằng logic xác thực người dùng thực tế)
    if($username === 'admin' && $password === '123456') {
        $_SESSION['username'] = $username;
        header("Location: admin.php"); // Chuyển hướng đến trang admin nếu đăng nhập thành công
        exit();
    } else {
        $error = "Tên đăng nhập hoặc mật khẩu không đúng!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <style>
        body {
            background-image: url(image/img_bg/bg_dangnhap.jpeg);
            background-size: cover;
            font-family: Arial, sans-serif;
        }
        
        .blockMain {
            background-color: rgba(255, 255, 255, 0.8);
            width: 500px;
            height: 400px;
            margin: auto;
            margin-top: 10%;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }
        
        .formDN {
        }
        
        h2 {
            margin-bottom: 50px;
            color: green;
            text-align: center;
        }
        
        label {
            display: block;
            margin-bottom: 10px;
            color: green;
            
        }
        
        input[type="text"],
        input[type="password"] {
            width: 95%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color: #45a049;
            
        }
        
        .error {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="blockMain">
        <div class="formDN">
            <h2>Đăng nhập</h2>
            <?php if(isset($error)) { echo '<p class="error">'.$error.'</p>'; } ?>
            <form method="POST" action="dangnhap.php">
                <label for="username">Tên đăng nhập:</label>
                <input type="text" id="username" name="username" required>
                <div style="margin: 20px 0;"></div>
                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="password" required>
                <div style="margin: 50px 0;"></div>
                <input type="submit" name="login" value="Đăng nhập">
            </form>
        </div>
    </div>
</body>
</html>
