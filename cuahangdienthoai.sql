-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2022 at 11:32 AM
-- Server version: 8.0.27
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cuahangdienthoai`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account`
--

CREATE TABLE `tbl_account` (
  `id_account` int NOT NULL,
  `tenkhachhang` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `dienthoai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_account`
--

INSERT INTO `tbl_account` (`id_account`, `tenkhachhang`, `email`, `diachi`, `matkhau`, `dienthoai`) VALUES
(2, 'Trần Nhơn Hòa', 'trannhon@gmail.com', 'An Giang', '68053af2923e00204c3ca7c6a3150cf7', '78999');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `admin_status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_baiviet`
--

CREATE TABLE `tbl_baiviet` (
  `id_baiviet` int NOT NULL,
  `tenbaiviet` varchar(255) NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `noidung` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tomtat` varchar(255) NOT NULL,
  `tinhtrang` int NOT NULL,
  `id_danhmuc` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_baiviet`
--

INSERT INTO `tbl_baiviet` (`id_baiviet`, `tenbaiviet`, `hinhanh`, `noidung`, `tomtat`, `tinhtrang`, `id_danhmuc`) VALUES
(6, 'VN - TL', '1640272985_tải xuống (2).jpg', '<p>Gặp ĐT Th&aacute;i Lan tại v&ograve;ng b&aacute;n kết, người h&acirc;m mộ chờ đợi v&agrave;o m&agrave;n thể hiện của đội b&oacute;ng duy nhất g&oacute;p mặt ở v&ograve;ng loại thứ 3 World Cup 2022. Việc đ&aacute;nh bại ĐT Th&aacute;i Lan l&agrave; mục ti&ecirc;u để hướng đến bảo vệ chức v&ocirc; địch, c&ugrave;ng với đ&oacute; l&agrave; khẳng định vị thế trong khu vực. Ngay sau tiếng c&ograve;i khai cuộc, cả 2 đội đều thể hiện quyết t&acirc;m để t&igrave;m kiếm b&agrave;n thắng tạo ra lợi thế sớm. Ph&uacute;t thứ 4, Ho&agrave;ng Đức c&oacute; pha nhả b&oacute;ng vừa tầm để Quang Hải dứt điểm một chạm s&aacute;t vạch 16m50, nhưng b&oacute;ng đi kh&ocirc;ng kh&oacute; với thủ m&ocirc;n Chatchai. Trong khoảng 13 ph&uacute;t đầu ti&ecirc;n, ĐT Việt Nam chủ động chơi chậm v&agrave; t&igrave;m cơ hội phản c&ocirc;ng với &quot;ng&ograve;i nổ&quot; Văn To&agrave;n ở ngay đầu trận. Tuy nhi&ecirc;n, một sai lầm của Hồng Duy đ&atilde; khiến ĐT Việt Nam phải nhận b&agrave;n thua ở ph&uacute;t thứ 14. Từ pha tổ chức phản c&ocirc;ng nhanh, sau đường chuyền của Phitiwat, Hồng Duy trượt ch&acirc;n đ&aacute;ng tiếc, gi&uacute;p Chanathip c&oacute; cơ hội đối mặt Nguy&ecirc;n Mạnh. Tiền vệ của Th&aacute;i Lan dứt điểm tinh tế để ghi b&agrave;n mở tỷ số.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table cellpadding=\"0\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><img src=\"https://cdn3.kinhtedothi.vn/594/2021/12/23/[Downloader.la]-61c47e7b881dd.jpg\" style=\"float:left; height:133px; width:200px\" /><em>Chanathip l&agrave; cầu thủ ghi b&agrave;n mở tỉ số của trận đấu giữa ĐT Việt Nam v&agrave; ĐT Th&aacute;i Lan. Ảnh: Getty.</em></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Đến ph&uacute;t thứ 22, ĐT Th&aacute;i Lan c&oacute; pha phối hợp đập nhả hiệu quả đ&atilde; loại bỏ tuyến ph&ograve;ng ngự ĐT Việt Nam, Yooyen chọc khe đẹp mắt cho Chanathip băng xuống n&acirc;ng tỷ số l&ecirc;n 2-0.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>T&igrave;nh huống đ&aacute;ng ch&uacute; &yacute; nhất của ĐT Việt Nam trong hiệp thi đấu đầu ti&ecirc;n l&agrave; pha đ&aacute; phạt chạm cột dọc của Quang Hải, c&ugrave;ng với đ&oacute; l&agrave; những tranh c&atilde;i về t&igrave;nh huống thủ m&ocirc;n Chatchai phạm lỗi với Văn To&agrave;n ngo&agrave;i v&ograve;ng cấm, nhưng thủ m&ocirc;n n&agrave;y chỉ phải nhận 1 thẻ v&agrave;ng.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Bước v&agrave;o hiệp 2, ĐT Việt Nam c&oacute; sự thay đổi về nh&acirc;n sự khi Tiến Linh v&agrave;o thay Văn To&agrave;n v&agrave; Văn Đức thay thế vị tr&iacute; của Tuấn Anh. Chỉ sau 2 ph&uacute;t c&oacute; mặt tr&ecirc;n s&acirc;n, Tiến Linh đ&atilde; để lại ấn tượng khi tho&aacute;t xuống nhanh xuống c&aacute;ch phải v&agrave; chuyền b&oacute;ng đập ngược trở lại cho Văn Thanh, nhưng c&uacute; s&uacute;t ch&acirc;n tr&aacute;i của hậu vệ số 17 đưa b&oacute;ng đi kh&ocirc;ng ch&iacute;nh x&aacute;c. Ph&uacute;t thứ 67, Quang Hải để lại ấn tượng tiếp theo, từ c&uacute; s&uacute;t b&ecirc;n ngo&agrave;i v&ograve;ng cấm, Quang Hải đ&atilde; đ&aacute;nh bại thủ m&ocirc;n Chatchai nhưng x&agrave; ngang một lần nữa kh&ocirc;ng cho cầu thủ số 19 của ĐT Việt Nam c&oacute; được b&agrave;n thắng trong trận đấu n&agrave;y.</p>\r\n\r\n<table cellpadding=\"0\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><img src=\"https://cdn3.kinhtedothi.vn/594/2021/12/23/[Downloader.la]-61c47e9d95393.jpg\" style=\"float:left; height:133px; width:200px\" /><em>ĐT Th&aacute;i Lan đ&aacute;nh bại ĐT Việt Nam ở trận b&aacute;n kết lượt đi AFF Cup 2020. Ảnh: Getty.</em></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Bị dẫn trước 2 b&agrave;n, ĐT Việt Nam buộc phải dồn l&ecirc;n tấn c&ocirc;ng t&igrave;m kiếm b&agrave;n thắng r&uacute;t ngắn tỉ số, chưa thể ghi b&agrave;n v&agrave;o lưới ĐT Th&aacute;i Lan th&igrave; ĐT Việt Nam phải nhận quả phạt 11m khi Duy Mạnh phạm lỗi với Supachok. Nhưng tr&ecirc;n chấm đ&aacute; phạt 11m, Chanathip kh&ocirc;ng thể đ&aacute;nh bại thủ m&ocirc;n Nguy&ecirc;n Mạnh.</p>\r\n\r\n<p>Ở những ph&uacute;t cuối c&ugrave;ng, ĐT Việt Nam nỗ lực chơi tấn c&ocirc;ng để t&igrave;m kiếm b&agrave;n thắng r&uacute;t ngắn tỉ số cũng như hướng đến trận b&aacute;n kết lượt về. Tuy nhi&ecirc;n, thầy tr&ograve; HLV Park Hang-seo kh&ocirc;ng thể ghi được b&agrave;n thắng v&agrave; đ&agrave;nh chấp nhận thất bại với tỉ số 0-2. Ở trận lượt về, ĐT Việt Nam sẽ c&oacute; m&agrave;n t&aacute;i đấu với ĐT Th&aacute;i Lan v&agrave;o l&uacute;c 19 giờ 30 ng&agrave;y 26/12.</p>\r\n\r\n<p><em><strong>Đội h&igrave;nh ra s&acirc;n của 2 đội:</strong></em></p>\r\n\r\n<p><strong>ĐT Việt Nam:</strong>&nbsp;Nguy&ecirc;n Mạnh, Duy Mạnh, Thành Chung, Ngọc Hải, Văn Thanh, Hồng Duy, Ho&agrave;ng Đức, Tuấn Anh, Quang Hải, C&ocirc;ng Phượng, Văn To&agrave;n</p>\r\n\r\n<p><strong>ĐT Th&aacute;i Lan:</strong>&nbsp;Chatchai Bootprom, Theerathon Bunmathan, Manuel Tom Bihr, Sarach Yooyen, Narubadin Weerawatnodom, Thanawat Suengchitthawon, Phitiwat Sookjitthammakul, Kritsada Kaman, Chanathip Songkrasin, Supachok Sarachat, Teerasil Dangda</p>\r\n', '<p>aaaaaaaaaaaaaaa</p>\r\n', 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` int NOT NULL,
  `id_khachhang` int NOT NULL,
  `code_cart` varchar(100) NOT NULL,
  `cart_status` int NOT NULL,
  `cart_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `id_khachhang`, `code_cart`, `cart_status`, `cart_date`) VALUES
(1, 2, '62816', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart_detail`
--

CREATE TABLE `tbl_cart_detail` (
  `id_cart_detail` int NOT NULL,
  `code_cart` varchar(100) NOT NULL,
  `id_sanpham` int NOT NULL,
  `soluong` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_cart_detail`
--

INSERT INTO `tbl_cart_detail` (`id_cart_detail`, `code_cart`, `id_sanpham`, `soluong`) VALUES
(1, '62816', 14, 1),
(2, '62816', 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danhmucbaiviet`
--

CREATE TABLE `tbl_danhmucbaiviet` (
  `id_danhmuc` int NOT NULL,
  `tendanhmuc` varchar(255) NOT NULL,
  `thutu` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_danhmucbaiviet`
--

INSERT INTO `tbl_danhmucbaiviet` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(3, 'Tin Công Nghệ', 1),
(4, 'Tin Kinh Tế', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danhmucsanpham`
--

CREATE TABLE `tbl_danhmucsanpham` (
  `id_danhmuc` int NOT NULL,
  `tendanhmuc` varchar(255) NOT NULL,
  `thutu` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_danhmucsanpham`
--

INSERT INTO `tbl_danhmucsanpham` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(6, 'Ốp lưng 2021', 2),
(8, 'Tai Nghe', 3),
(9, 'Điện thoại', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int NOT NULL,
  `tensanpham` varchar(255) NOT NULL,
  `masanpham` varchar(255) NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `soluong` int NOT NULL,
  `gia` int NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `tomtat` varchar(255) NOT NULL,
  `tinhtrang` tinyint NOT NULL,
  `id_danhmuc` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `masanpham`, `hinhanh`, `soluong`, `gia`, `noidung`, `tomtat`, `tinhtrang`, `id_danhmuc`) VALUES
(13, 'iphone', '001', '1640160254_dienthoai.jpg', 1, 1500000, '                Chưa có            ', '                Chưa có            ', 0, 9),
(14, 'Tai Nghe sony', '002', '1640175853_tainghe.jpg', 1, 630000, 'No', 'No', 1, 8),
(15, 'tai nghe samsung', '004', '1640239559_tải xuống (1).jpg', 1, 200000, 'Chua co', 'Chua co', 1, 8),
(16, 'ốp lưng nokia', '003', '1640239594_tải xuống (2).jpg', 1, 350000, '            Chua co                ', '                 Chua co           ', 0, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_account`
--
ALTER TABLE `tbl_account`
  ADD PRIMARY KEY (`id_account`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  ADD PRIMARY KEY (`id_baiviet`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `tbl_cart_detail`
--
ALTER TABLE `tbl_cart_detail`
  ADD PRIMARY KEY (`id_cart_detail`);

--
-- Indexes for table `tbl_danhmucbaiviet`
--
ALTER TABLE `tbl_danhmucbaiviet`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Indexes for table `tbl_danhmucsanpham`
--
ALTER TABLE `tbl_danhmucsanpham`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Indexes for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_account`
--
ALTER TABLE `tbl_account`
  MODIFY `id_account` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  MODIFY `id_baiviet` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id_cart` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_cart_detail`
--
ALTER TABLE `tbl_cart_detail`
  MODIFY `id_cart_detail` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_danhmucbaiviet`
--
ALTER TABLE `tbl_danhmucbaiviet`
  MODIFY `id_danhmuc` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_danhmucsanpham`
--
ALTER TABLE `tbl_danhmucsanpham`
  MODIFY `id_danhmuc` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
