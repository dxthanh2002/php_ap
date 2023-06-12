-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 01, 2021 lúc 04:40 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(50) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `price`) VALUES
(1, 'Hệ quản trị CSDL MySQL', 'TruongTM', 100000),
(2, 'Lập trình PHP', 'TruongTM', 200000),
(3, 'Thiết kế giao diện WEB', 'Viện Cntt', 300000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbchitiethoadon`
--

CREATE TABLE `tbchitiethoadon` (
  `id` int(11) NOT NULL,
  `mahd` int(11) NOT NULL,
  `masp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `giamua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbchitiethoadon`
--

INSERT INTO `tbchitiethoadon` (`id`, `mahd`, `masp`, `soluong`, `giamua`) VALUES
(1, 3, 1, 2, 100000),
(2, 3, 2, 1, 200000),
(3, 4, 3, 2, 300000),
(4, 4, 1, 3, 100000),
(5, 5, 1, 1, 100000),
(6, 5, 2, 2, 200000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbhoadon`
--

CREATE TABLE `tbhoadon` (
  `mahd` int(11) NOT NULL,
  `tennguoimua` varchar(30) NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `dienthoai` varchar(15) NOT NULL,
  `ngaydat` datetime NOT NULL DEFAULT current_timestamp(),
  `ngaynhan` datetime NOT NULL DEFAULT current_timestamp(),
  `trangthai` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbhoadon`
--

INSERT INTO `tbhoadon` (`mahd`, `tennguoimua`, `diachi`, `dienthoai`, `ngaydat`, `ngaynhan`, `trangthai`) VALUES
(3, 'Nguyễn văn nam', 'Hà nội', '0912356004', '2021-11-26 22:02:01', '2021-11-27 00:00:00', 0),
(4, 'Hoàng Ngọc Long', 'Đông Anh', '123456789', '2021-11-26 22:05:15', '2021-11-28 00:00:00', 0),
(5, 'Nguyễn Tài Lộc', 'Hà Nội', '123456789', '2021-12-01 20:27:49', '2021-12-02 00:00:00', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbchitiethoadon`
--
ALTER TABLE `tbchitiethoadon`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_mahd_masp` (`mahd`,`masp`),
  ADD KEY `idx_masp` (`masp`),
  ADD KEY `idx_mahd` (`mahd`);

--
-- Chỉ mục cho bảng `tbhoadon`
--
ALTER TABLE `tbhoadon`
  ADD PRIMARY KEY (`mahd`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbchitiethoadon`
--
ALTER TABLE `tbchitiethoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbhoadon`
--
ALTER TABLE `tbhoadon`
  MODIFY `mahd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbchitiethoadon`
--
ALTER TABLE `tbchitiethoadon`
  ADD CONSTRAINT `tbchitiethoadon_ibfk_1` FOREIGN KEY (`mahd`) REFERENCES `tbhoadon` (`mahd`),
  ADD CONSTRAINT `tbchitiethoadon_ibfk_2` FOREIGN KEY (`masp`) REFERENCES `books` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
