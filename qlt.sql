-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 10, 2023 lúc 01:15 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlt`
--
CREATE DATABASE IF NOT EXISTS `qlt` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `qlt`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baithuoc`
--

CREATE TABLE `baithuoc` (
  `id` bigint(20) NOT NULL,
  `tenbaithuoc` varchar(200) NOT NULL,
  `hinhanh` varchar(100) NOT NULL,
  `thanhphan` varchar(1000) NOT NULL,
  `dangbaoche` varchar(1000) NOT NULL,
  `chidinh` varchar(1000) NOT NULL,
  `lieudung` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `baithuoc`
--

INSERT INTO `baithuoc` (`id`, `tenbaithuoc`, `hinhanh`, `thanhphan`, `dangbaoche`, `chidinh`, `lieudung`) VALUES
(11, 'Bổ trung dưỡng huyết thư cân phương ( Tâm đắc thần phương )', 'bo-trung-khi-huywt-thu-can-phuong-360x300.png', 'Bạch thược: 8g, Đương quy: 2g, Quế chi: 2g, Ngưu tất: 8g, Bạch truật: 12g, Tần giao: 8g, Đỗ trọng: 8g, Nhân sâm: 12g, Thục địa: 10g.', 'Dạng thuốc sắc.', 'Trị chân tay đau nhức, ngực bụng đau như dãn ra( do tà khí trúng thẳng vào lý )', 'Sắc uống.'),
(12, 'Bổ thận thang', 'bo-than-thang-360x299.jpg', '', '', '', ''),
(13, 'Tư âm bổ tủy đơn (Y thuần thặng nghĩa)', 'tu-am-bo-tuy-don-360x337.jpg', '', '', '', ''),
(14, 'Khung quy thược dược thang (Chứng trị chuẩn thằng)', 'khung20quy20thc6b0e1bba3c20dc6b0e1bba3c20thang-360x322.jpg', '', '', '', ''),
(15, 'Đương quy huyết kiện hoàn (Chứng trị chuẩn thằng)', 'duong-quy-360x313.jpg', '', '', '', ''),
(16, 'ĐIỀU KINH TÁN GIA XUYÊN SƠN GIÁP', 'dieu-kinh-tan-gia-xuyen-son-giap-360x297.jpg', '', '', '', ''),
(17, 'Chỉ xác tán ( Loại chứng phổ tế bản sự )', 'che1bb8920xc3a1c20tc3a1n-360x300.jpg', 'Bạch truật (20g), Hương phụ (sao) (40g), Chỉ xác (sao) (20g), Tân lang (8g).', 'Dạng thuốc tán ( bột )\r\n\r\n', 'Trị vùng dưới tim tức, đầy khó chịu, đau.\r\n\r\n', 'Ngày uống 2-3 lần, mỗi lần 4 – 8g.\r\n\r\n'),
(18, 'Mộc hương thuận khí thang (Vệ sinh bảo giám)', 'me1bb99c20hc6b0c6a1ng20thue1baadn20khc3ad20thang-360x221.jpg', '', '', '', ''),
(19, 'Hoàng liên tiểu bỉ hoàn ( Lý đông viên )', 'hoang-lien-tieu-bi-hoan-360x360.jpg', '', '', '', ''),
(20, 'Phong hỏa lưỡng tế thang (Biện chứng kỳ văn)', 'phong20he1bb8fa20lc6b0e1bba1ng20te1babf20thang-360x340.jpg', '', '', '', ''),
(21, 'Hoàng liên tiểu bỉ hoàn ( Thẩm thị tôn sinh)', 'u-360x314.jpg', '', '', '', ''),
(22, 'Lợi cách tán ( chứng trị chuẩn thẳng )', 'loi-cach-tan-360x300.jpg', '', '', '', ''),
(23, 'Thần hiệu việt đào tán ( Vệ sinh bảo giám )', 'the1baa7n20hie1bb87u20vie1bb87t20c491c3a0o20tc3a1n-360x299.jpg', '', '', '', ''),
(24, 'Ý dĩ phụ tử tán( kim quỹ yếu lược)', 'y-di-360x317.jpg', '', '', '', ''),
(25, 'Mộc phòng kỷ khử thạch cao gia phục linh mang tiêu thang ( kim quỹ yếu lược)', 'bai-thuoc-360x299.jpg', '', '', '', ''),
(26, 'Sài hồ thư can ẩm (Thống chỉ)', 'sc3a0i20he1bb9320thc6b020can20e1baa9m-360x299.jpg', '', '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `benh`
--

CREATE TABLE `benh` (
  `id` bigint(20) NOT NULL,
  `tenbenh` varchar(100) NOT NULL,
  `anhbenh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `benh`
--

INSERT INTO `benh` (`id`, `tenbenh`, `anhbenh`) VALUES
(11, 'An thần, gây ngủ, trấn kinh', 'cm1.jpg'),
(12, 'Bệnh cao huyết áp', 'huyet-ap-360x360.jpg'),
(13, 'Bệnh dạ dày', 'da-day-360x300.jpg'),
(14, 'Bệnh giun sán', 'giun-san.png'),
(15, 'Bệnh ho hen', 'ho-hen-360x360.jpg'),
(16, 'Bệnh lỵ', 'ly.jpg'),
(17, 'Bệnh mắt, tai, mũi, răng, họng', 'cm6.jpg'),
(18, 'Bệnh mụn nhọt mẩn ngứa', 'cm22.png'),
(19, 'Bệnh nam giới', 'benh-nam-gioi.jpg'),
(20, 'Bệnh ngoài da', 'benh-ngoai-da.jpg'),
(21, 'Bệnh phụ nữ', 'benh-phu-nu-360x360.jpg'),
(22, 'Bệnh tiểu đường', 'tieu-duong.jpg'),
(23, 'Bệnh tiêu hóa', 'cm16.jpg'),
(24, 'Bệnh tim mạch', 'tim-mach-1.png'),
(25, 'Bệnh về gan', 'gan-360x360.jpg'),
(26, 'Cầm máu', 'cm18.jpg'),
(27, 'Chữa cảm sốt', 'cm2.jpg'),
(28, 'Chữa đi lỏng đau bụng', 'dau-bung.jpg'),
(29, 'Chữa tê thấp, đau nhức', 'xuong-khop.jpg'),
(30, 'Đắp vết thương rắn rết cắn', 'cm9.jpg'),
(31, 'Lợi tiểu thông mật', 'cm19.png'),
(32, 'Nhuận tràng và tẩy', 'cm13.png'),
(33, 'Thuốc bổ nguồn gốc động vật', 'cm4.jpg'),
(34, 'Thuốc bổ nguồn gốc thảo mộc', 'cm5.jpg'),
(35, 'Thuốc có chất gây độc', 'cm15.jpg'),
(36, 'Thuốc có nguồn gốc khoáng vật', 'cm7.jpg'),
(37, 'Thuốc khác nguồn gốc động vật', 'cm8.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `benh_baithuoc`
--

CREATE TABLE `benh_baithuoc` (
  `id` bigint(20) NOT NULL,
  `id_benh` bigint(20) NOT NULL,
  `id_baithuoc` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `benh_baithuoc`
--

INSERT INTO `benh_baithuoc` (`id`, `id_benh`, `id_baithuoc`) VALUES
(10, 29, 11),
(11, 24, 17);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `benh_duoclieu`
--

CREATE TABLE `benh_duoclieu` (
  `id` bigint(20) NOT NULL,
  `id_benh` bigint(20) NOT NULL,
  `id_duoclieu` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `benh_duoclieu`
--

INSERT INTO `benh_duoclieu` (`id`, `id_benh`, `id_duoclieu`) VALUES
(5, 11, 7),
(6, 24, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `duoclieu`
--

CREATE TABLE `duoclieu` (
  `id` bigint(20) NOT NULL,
  `tenduoclieu` varchar(100) NOT NULL,
  `anhduoclieu` varchar(100) NOT NULL,
  `tentiengviet` varchar(100) NOT NULL,
  `tenkhoahoc` varchar(100) NOT NULL,
  `ho` varchar(100) NOT NULL,
  `mota` varchar(1000) NOT NULL,
  `phanbo` varchar(1000) NOT NULL,
  `bophandung` varchar(1000) NOT NULL,
  `congdung` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `duoclieu`
--

INSERT INTO `duoclieu` (`id`, `tenduoclieu`, `anhduoclieu`, `tentiengviet`, `tenkhoahoc`, `ho`, `mota`, `phanbo`, `bophandung`, `congdung`) VALUES
(4, 'Cao cẳng Bắc Bộ', 'cao-cang-bb-2-e1671503062152-247x360.jpg', 'Cao cẳng Bắc bộ, Xà bì Bắc bộ', 'Ophiopogon tonki-nensis Rodr.', 'Convallariaceae ( Hoàng Tinh).', 'Cây thân thảo, sống lâu năm. Thân rễ ngắn, rễ chùm mảnh, hình sợi. Lá tập trung ở gốc, phiến lá hình ngọn giáo ngược dài 15-21cm rộng 3-4cm, dày, gốc không cân, nhiều gân phụ, có gân ngang, cuống lá dài 15-20cm. Cụm hoa chùm, trục hoa dài 20-25cm, hoa xếp 2-7 cái trong mỗi lá bắc, lá bắc hình ngọn giáo, cao 8mm, cuống hoa dài 1cm. Nhị 6, bầu 3 ô, vòi nhụy hình trụ, đầu nhụy 3 thùy ngắn. Quả chụm 3, tròn, to 5m. Mùa ra hoa: Tháng 6-9. Mùa quả: Tháng 8-12.', 'Mọc ở nơi đất ẩm, nhiều mùn, dưới tán rừng lá rộng thường xanh, rừng trên núi đá. Ở Việt Nam, Cao cẳng Bắc Bộ phân bố ở các tỉnh Hà Giang, Lạng Sơn, Quảng Ninh, Thái Nguyên, Hòa Bình, Ninh Bình.\r\n\r\n', 'Rễ củ – Tuberculum ophiopogonis.', 'Ở Vân Nam (Trung Quốc) thân rễ dùng trị viêm niệu đạo, lao phổi, ho, khạc ra máu và viêm nhánh khí quản.\r\n\r\n'),
(5, 'Cao cẳng lá mác', 'la-mac-1-e1671527998657.jpg', 'Cao cẳng lá mác.', 'Ophiopogon dracaenoides (Baker)', 'Convallariaceae (Hoàng tinh).', 'Cây thân thảo, sống lâu năm. Thân rễ bò dài, phía ngọn chếch lên, dài đến 65cm, đường kính 3-5mm, có đốt, có rễ to. Lá xếp 4-7 cái thành túm, phiến lá xoan thon hay hình mác thon, phần gốc thon nhọn dần thành cuống, dài 5.5-14cm, rộng 1.8-3.5cm, mặt trên màu lục, mặt dưới màu lục tro, có nhiều gân phụ, cuống lá dài 2-7cm. Cụm hoa chùm cao 8-12c, có 10-20 hoa. Hoa có cuống dài 4-6mm, màu trắng. Bẹ hoa 6, hình ngọn giáo dạng trứng, dài 4-6mm, màu trắng. Nhị 6. Bầu trong 8 ô. Quả có cuống ngắn, hình trái xoan, dài 8-9, hạt hình bầu dục. Mùa ra hoa: Tháng 5-6. Mùa quả: Tháng 7-12.', 'Cao cẳng mọc ở nơi đất ẩm, nhiều mùn, dưới tán rừng lá rộng, rừng trẻ nứa. Ở Việt Nam, phân bố ở các tỉnh Tuyên Quang, Lạng Sơn, Hòa Bình, Ninh Bình, Đà Nẵng, Kon Tum, Gia Lai, Lâm Đồng.\r\n', 'Thân rễ- Rhizoma Ophiopogonis.\r\n\r\n', 'Dùng trị tim đập mạnh và loạn nhịp, bệnh về tim do phong thấp, lao phổi , viêm phế quản mạn tính, viêm nhánh phế quản.\r\n\r\n'),
(6, 'Cao cẳng trung gian', 'cao-cang-trung-gian-3-min-1-e1671699047513-360x317.jpg', '', '', '', '', '', '', ''),
(7, 'Sài hồ', 'sai-ho-2-360x300.jpg', '', '', '', '', '', '', ''),
(8, 'Dây lửa ít gân', 'duoc-lieu-2-min-360x300.jpg', '', '', '', '', '', '', ''),
(9, 'Trám hồng', '2-5-min-360x300.jpg', '', '', '', '', '', '', ''),
(10, 'Thiên danh tinh', 'anh-moi-02-360x360.jpg', '', '', '', '', '', '', ''),
(11, 'Nho biển', '2-2.png', '', '', '', '', '', '', ''),
(12, 'Su hào', 'su-hao-360x360.jpg', '', '', '', '', '', '', ''),
(13, 'Hương thảo', 'huong-thao-360x360.jpg', '', '', '', '', '', '', ''),
(14, 'Chanh trường', 'chanh-truong-4-360x360.jpg', '', '', '', '', '', '', ''),
(15, 'Sương sáo', 'xuong-sao-3-360x360.jpg', '', '', '', '', '', '', ''),
(16, 'Bản xé thơm', 'ban-xe-thom-5-360x333.jpg', '', '', '', '', '', '', ''),
(17, 'Bại tượng hoa trắng', 'bai-tuong-hoa-trang-1-360x333.jpg', '', '', '', '', '', '', ''),
(18, 'A kê', 'a-ke-2-360x360.jpg', '', '', '', '', '', '', ''),
(19, 'Áo cộc', 'ao-coc-5-360x345.jpg', '', '', '', '', '', '', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baithuoc`
--
ALTER TABLE `baithuoc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `benh`
--
ALTER TABLE `benh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `benh_baithuoc`
--
ALTER TABLE `benh_baithuoc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_baithuoc` (`id_baithuoc`),
  ADD KEY `fk_id_benh_baithuoc` (`id_benh`) USING BTREE;

--
-- Chỉ mục cho bảng `benh_duoclieu`
--
ALTER TABLE `benh_duoclieu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_benh_baithuoc` (`id_benh`),
  ADD KEY `fk_id_duoclieu` (`id_duoclieu`);

--
-- Chỉ mục cho bảng `duoclieu`
--
ALTER TABLE `duoclieu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baithuoc`
--
ALTER TABLE `baithuoc`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `benh`
--
ALTER TABLE `benh`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `benh_baithuoc`
--
ALTER TABLE `benh_baithuoc`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `benh_duoclieu`
--
ALTER TABLE `benh_duoclieu`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `duoclieu`
--
ALTER TABLE `duoclieu`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `benh_baithuoc`
--
ALTER TABLE `benh_baithuoc`
  ADD CONSTRAINT `fk_id_baithuoc` FOREIGN KEY (`id_baithuoc`) REFERENCES `baithuoc` (`id`),
  ADD CONSTRAINT `fk_id_benh` FOREIGN KEY (`id_benh`) REFERENCES `benh` (`id`);

--
-- Các ràng buộc cho bảng `benh_duoclieu`
--
ALTER TABLE `benh_duoclieu`
  ADD CONSTRAINT `fk_id_benh_baithuoc` FOREIGN KEY (`id_benh`) REFERENCES `benh` (`id`),
  ADD CONSTRAINT `fk_id_duoclieu` FOREIGN KEY (`id_duoclieu`) REFERENCES `duoclieu` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
