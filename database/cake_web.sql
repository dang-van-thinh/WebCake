-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 01, 2023 lúc 04:38 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cake_web`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(11) NOT NULL,
  `noi_dung` text NOT NULL,
  `ma_kh` int(11) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `ngay_bl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`ma_bl`, `noi_dung`, `ma_kh`, `ma_hh`, `ngay_bl`) VALUES
(1, 'bánh ngon , tuyệt vời , tương ứng với giá tiền', 37, 18, '2023-09-19'),
(2, 'Bánh độc lạ , ngon , vừa với túi tiền', 37, 29, '2023-09-20'),
(4, 'Bánh ngon , rẻ , phù hợp với giá tiền', 40, 33, '2023-09-17'),
(9, 'bánh ngon nhắm', 40, 8, '2023-09-21'),
(11, 'bánh ngon hết sảy , phù hợp với giá tiền', 40, 8, '2023-09-21'),
(101, 'bánh ngon , rất đáng tiền nhé !', 40, 8, '2023-09-21'),
(102, 'bánh này nhìn mẫu mã đẹp thật , đáng tiền mua', 38, 8, '2023-09-21'),
(103, 'nhìn bánh ngon thật đấy :))))', 43, 16, '2023-09-21'),
(104, 'bánh mỳ này giống trong siêu thị thế ', 43, 30, '2023-09-21'),
(105, 'Không khác gì bánh mỳ siêu thị -1 sao\r\n', 44, 30, '2023-09-21'),
(106, 'ukm ! Công nhận bánh này ngon thật chưa mua nhưng nhìn ngon đấy :333', 37, 8, '2023-09-22'),
(107, 'Ôi bánh này đúng ngon luôn !', 37, 17, '2023-09-22'),
(108, 'Bánh ngon bánh ngon', 40, 17, '2023-09-22'),
(109, 'uk công nhận , 10 điểm không có nhưng nhé\r\n', 40, 16, '2023-09-22'),
(110, 'oke ', 40, 8, '2023-09-25'),
(112, 'bánh này ngon cho 5 sao !', 37, 17, '2023-09-26'),
(113, 'kem raất ngon nhé ! 10 điểm', 46, 32, '2023-10-01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `ma_hh` int(11) NOT NULL,
  `ten_hh` varchar(150) NOT NULL,
  `don_gia` int(11) NOT NULL,
  `anh` varchar(150) NOT NULL,
  `giam_gia` int(11) NOT NULL,
  `ngay_nhap` date NOT NULL,
  `ma_loai` int(11) NOT NULL,
  `dac_biet` int(11) NOT NULL,
  `so_luot_xem` int(11) NOT NULL,
  `mota` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hang_hoa`
--

INSERT INTO `hang_hoa` (`ma_hh`, `ten_hh`, `don_gia`, `anh`, `giam_gia`, `ngay_nhap`, `ma_loai`, `dac_biet`, `so_luot_xem`, `mota`) VALUES
(8, 'lục vân nguyệt bảo', 560000, '../upload/san-pham/avatar-tt-lucvannguyetbao.webp', 0, '2023-09-13', 4, 1, 184, 'Hộp 06 bánh nướng, dẻo + 01 hộp trà'),
(16, 'ngư nguyệt tam', 300000, '../upload/san-pham/avatar-tt-ngunguyettam.webp', 295000, '2023-09-13', 4, 1, 102, 'Hộp 04 bánh nướng, dẻo '),
(17, 'Bánh nướng', 45000, '../upload/san-pham/avatar-tt-2.webp', 40000, '2023-09-13', 4, 0, 28, 'Bánh nướng trung thu'),
(18, 'Bạch liên nguyệt', 420000, '../upload/san-pham/avatar-tt-3.webp', 0, '2023-09-13', 4, 1, 56, 'Hộp 06 bánh nướng, dẻo'),
(19, 'Dạ Nguyệt vũ', 295000, '../upload/san-pham/avatar-tt-4.webp', 0, '2023-09-13', 4, 1, 67, 'Hộp 04 bánh nướng, dẻo '),
(20, 'lục vân kim bảo', 800000, '../upload/san-pham/avatar-tt-lucvankimbao.webp', 0, '2023-09-13', 4, 1, 53, 'Hộp 06 bánh nướng, dẻo + 01 chai rượu vang'),
(21, 'nguyệt lộc cát', 300000, '../upload/san-pham/avatar-tt-nguyetloccat.webp', 0, '2023-09-13', 4, 1, 50, 'Hộp 04 bánh nướng, dẻo '),
(22, 'song lộc', 130000, '../upload/san-pham/avatar-tt-songloc.webp', 0, '2023-09-13', 4, 0, 64, 'Hộp 02 bánh nướng, dẻo'),
(23, 'song phát', 130000, '../upload/san-pham/avatar-tt-songphat.webp', 0, '2023-09-13', 4, 0, 50, 'Hộp 02 bánh nướng, dẻo '),
(24, 'Fruit cake', 275000, '../upload/san-pham/avatar-sn-1.webp', 0, '2023-09-13', 1, 0, 20, 'Thành phần chính:\r\n\r\n- Gato\r\n\r\n- Kem tươi vị rượu rum\r\n\r\n- Hoa quả\r\n\r\n- Dừa khô.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi vị rượu rum (nho). Trên mặt bánh được trang trí bằng hoa quả với dừa khô kết xung quanh.'),
(25, 'Greentea cake', 275000, '../upload/san-pham/avatar-sn-2.webp', 0, '2023-09-13', 1, 0, 20, 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi trà xanh ,  vị rượu rum,\r\n\r\n-Bột Trà xanh.\r\n\r\nBánh làm từ 3 lớp gato trắng xen giữa 3 lớp kem tươi trà xanh  vị rượu rum (nho). Bên ngoài bánh phủ 1 LỚP BỘT TRÀ XANH VÀ TRANG TRÍ HOA QUẢ.'),
(26, 'coconout cake', 275000, '../upload/san-pham/avatar-sn-3.webp', 0, '2023-09-13', 1, 0, 20, 'Thành phần chính:\r\n\r\nGato\r\nKem tươi  vị Coffee \r\nDừa tươi sấy khô \r\nBánh làm từ 3 lớp kem gato trắng  kết hợp với 3 lớp kem TƯƠI  vị coffe.bánh được phủ bên ngoài bởi 1 lớp dừa sấy khô rất thơm , TRANG TRÍ HOA QUẢ'),
(27, 'tiramisu', 275000, '../upload/san-pham/avatar-sn-4.webp', 0, '2023-09-13', 1, 0, 20, 'Thành phần chính:\r\n\r\n- Gato,\r\n\r\n- Kem tươi mặn vị coffee,\r\n\r\n- Bột cacao.\r\n\r\nBánh làm từ 3 lớp gato trắng kết hợp với 3 lớp kem mặn vị coffee. Bánh phủ bên trên bởi 1 lớp kem tươi rắc bột cacao.'),
(28, 'bánh ruốc (cuộn 10)', 15000, '../upload/san-pham/avatar-banhmy-1.webp', 0, '2023-09-13', 6, 0, 20, 'Bột mỳ, trứng, đường, sữa tươi, dầu ăn, bột sữa, chất ổn định, chà bông, sốt trứng.'),
(29, 'bánh hotdog', 10000, '../upload/san-pham/avatar-banhmy-2.jpg', 0, '2023-09-13', 6, 0, 20, 'Bột mỳ, bơ, muối, phụ gia, xúc xích.'),
(30, 'bánh mì baguette', 12000, '../upload/san-pham/avatar-banhmy-3.webp', 0, '2023-09-13', 6, 0, 24, 'Thành phần chính:\r\n\r\n- Bột mỳ\r\n\r\n- Muối\r\n\r\n- Phụ gia'),
(31, 'bánh mì chuột', 5000, '../upload/san-pham/avatar-banhmy-4.webp', 0, '2023-09-13', 6, 0, 20, 'Thành phần chính: \r\n\r\n- Bột mỳ\r\n\r\n- Muối\r\n\r\n- Phụ gia'),
(32, 'KEM TIRANO VỊ CÀ PHÊ', 22000, '../upload/san-pham/avatar-ic-1.webp', 0, '2023-09-13', 2, 0, 23, 'Trứng, sữa, đường, bột sữa, cà phê nguyên chất, kem tươi whipping'),
(33, 'BÔNG LAN TRỨNG MUỐI 65GRAM', 25000, '../upload/san-pham/avatar-mini-1.jpg', 0, '2023-09-13', 5, 0, 20, 'Bột mỳ, đường, trứng, sữa, dầu ăn, bột ngô, trứng muối, chà bông, sốt trứng.'),
(34, 'PHOMAI TIÊU', 30000, '../upload/san-pham/avatar-man-1.webp', 0, '2023-09-13', 3, 0, 20, 'Bột mỳ, men, muối, phụ gia, đường, bơ, phomai cheddar, jambon, hương sữa, đầu ăn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` int(11) NOT NULL,
  `hoten` varchar(150) NOT NULL,
  `matkhau` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `anh` varchar(250) NOT NULL,
  `kich_hoat` bit(1) NOT NULL,
  `vai_tro` bit(1) NOT NULL,
  `dia_chi` varchar(150) NOT NULL,
  `phone` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`ma_kh`, `hoten`, `matkhau`, `email`, `anh`, `kich_hoat`, `vai_tro`, `dia_chi`, `phone`) VALUES
(1, 'Admin', '123', 'admin@gmail.com', '../upload/img/just-shop-logo.png', b'1', b'1', '', ''),
(36, 'admin2', '123', 'admin2@gmail.com', '../upload/img/just-shop-logo.png', b'1', b'1', '', ''),
(37, 'Khách hàng 1', '123', 'khachhang1@gmail.com', '../upload/img/banner-1.png', b'1', b'0', 'Xóm Hạ Đình - Hà Đông - Hà Nội', '0123457788'),
(38, 'Khách hàng 2', '123456', 'khachhang2@gmail.com', '../upload/img/user.jpg', b'1', b'0', 'Văn Quán - Hà Đông - Hà Nội', '0135456789'),
(39, 'Khách hàng 3', '456789', 'khachhang3@gmail.com', '../upload/img/user.jpg', b'1', b'0', '', ''),
(40, 'ĐẶNG VĂN THỊNH', '123', 'thinh@gmail.com', '../upload/img/5.png', b'1', b'0', 'Xóm Đồi - Long châu - Hà Nội', '0123456654'),
(43, 'Đặng Văn Thịnh', '123456', 'vanthinh@gmail.com', '../upload/img/1.png', b'0', b'0', 'Hoài Đức - Hà Nội', '0123456987'),
(44, 'Nguyễn Văn C', '123456', 'nguyenvanc@gmail.com', '../upload/img/6.png', b'0', b'0', 'Thanh Xuân - Hà Đông - Hà Nội', '0256789456'),
(45, 'Tòng Thị Phúng', '123', 'phung@gmail.com', '../upload/img/avatar.jpg', b'0', b'0', '', ''),
(46, 'Nguyễn Văn Thịnh', '123', 'thinhdvph33448@fpt.edu.vn', '../upload/img/avatar.jpg', b'0', b'0', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `ma_loai` int(11) NOT NULL,
  `ten_loai` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`ma_loai`, `ten_loai`) VALUES
(1, 'Bánh sinh nhật'),
(2, 'Ice-Cream'),
(3, 'Bánh mặn'),
(4, 'Bánh trung thu'),
(5, 'Bánh Mini'),
(6, 'Bánh mỳ\r\n');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `fk_bl_kh` (`ma_kh`),
  ADD KEY `fk_bl_hh` (`ma_hh`);

--
-- Chỉ mục cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`ma_hh`),
  ADD KEY `fk_hh_loai` (`ma_loai`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`ma_loai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `ma_hh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `ma_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `fk_bl_hh` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`),
  ADD CONSTRAINT `fk_bl_kh` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`);

--
-- Các ràng buộc cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `fk_hh_loai` FOREIGN KEY (`ma_loai`) REFERENCES `loai` (`ma_loai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
