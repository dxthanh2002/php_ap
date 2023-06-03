-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 03, 2023 lúc 06:03 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `phpdemo08_1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbbooks`
--

CREATE TABLE `tbbooks` (
  `bookid` int(11) NOT NULL,
  `authorid` int(11) NOT NULL DEFAULT 0,
  `title` varchar(55) NOT NULL,
  `ISBN` varchar(25) NOT NULL,
  `pub_year` smallint(6) NOT NULL,
  `available` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbbooks`
--

INSERT INTO `tbbooks` (`bookid`, `authorid`, `title`, `ISBN`, `pub_year`, `available`) VALUES
(1, 0, 'PHP Programming', 'PHP01', 2003, 1),
(2, 0, 'PHP Avanced Programing', 'PHP02', 2004, 1),
(3, 0, 'MySQL Database Management System', 'MYSQL01', 2004, 0),
(4, 1, 'C# programming', 'C#', 2021, 1),
(5, 2, 'Hacking Pc programming', 'Hack', 2077, 0),
(6, 2, 'Hacking Pc programming', 'Hack', 2077, 1),
(7, 1, 'MacOs', 'Mac', 2121, 1),
(8, 3, 'Android Programming', 'android', 2012, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbbooks`
--
ALTER TABLE `tbbooks`
  ADD PRIMARY KEY (`bookid`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbbooks`
--
ALTER TABLE `tbbooks`
  MODIFY `bookid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
