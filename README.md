# Phần mềm quản lý và tra cứu thuốc đông y

## Mục Lục
1. [Giới thiệu](#giới-thiệu)
2. [Tính năng](#tính-năng)
3. [Cài đặt](#cài-đặt)
4. [Sử dụng](#sử-dụng)

## Giới thiệu
Phần mềm quản lý và tra cứu thuốc đông y được phát triển nhằm hỗ trợ việc quản lý và tra cứu thông tin về các loại thuốc đông y, bệnh và dược liệu. Phần mềm cung cấp các chức năng quản lý hồ sơ, tìm kiếm và hiển thị thông tin chi tiết giúp người dùng dễ dàng theo dõi và tra cứu.

## Tính năng
- Xác thực người dùng (quản trị và người dùng thường)
- Thao tác CRUD (Create, Read, Update, Delete) để quản lý thông tin thuốc, bệnh và dược liệu
- Thiết kế giao diện đáp ứng trên nhiều thiết bị
- Tính năng tìm kiếm thông tin thuốc, bệnh và dược liệu

## Cài đặt
### Yêu cầu trước
- PHP 7.x trở lên, MySQL
- Hoặc XAMPP (phpMyAdmin)

### Các bước
1. Clone repository:
    ```bash
    git clone https://github.com/hoanvukhai/qlt-demo2.git
    ```
2. Điều hướng đến thư mục dự án:
    ```bash
    cd qlt-demo2
    ```
3. Nhập cơ sở dữ liệu:
    ```sql
    Mở xampp và chạy. Vào phpMyAdmin nhập file qlt.sql
    ```
4. Cấu hình kết nối cơ sở dữ liệu trong `ketnoi.php`:
    ```php
    $servername = "your_servername";
    $username = "your_username";
    $password = "your_password";
    $dbname = "your_database_name";
    ```
5. Chạy mã nguồn PHP bằng máy chủ tích hợp:
    ```bash
    php -S localhost:8888
    ```

## Sử dụng
### Truy cập ứng dụng
- Mở trình duyệt web của bạn và truy cập `http://localhost:8888`.

### Xác thực người dùng
- Đăng nhập quản trị: `/admin.php`
- Đăng nhập người dùng: `/dangnhap.php`

### Quản lý hồ sơ
- Thêm hồ sơ mới: `/them.php`
- Sửa hồ sơ: `/edit.php`
- Xóa hồ sơ: `/xoa.php`

### Trang người dùng
- Trang chủ: `/home.html` or `index.html`
- Tra cứu bài thuốc: `/homePage.php`
- Tra cứu theo bệnh: `/tracuucacbenh.php`
- Tra cứu dược liệu: `/tracuucacduoclieu.php`
- Và các trang phụ khác
