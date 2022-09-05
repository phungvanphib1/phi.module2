-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th9 05, 2022 lúc 07:16 AM
-- Phiên bản máy phục vụ: 5.7.33
-- Phiên bản PHP: 8.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `md2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocsinh`
--

CREATE TABLE `hocsinh` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `Dateofbirth` date DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `information` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `hocsinh`
--

INSERT INTO `hocsinh` (`id`, `name`, `class`, `Dateofbirth`, `gender`, `information`) VALUES
(11, 'PhÃ¹ng VÄƒn Phi', 'm08', '2022-09-11', 'Nam', '    a\r\n    '),
(13, 'PhÃ¹ng VÄƒn Phi', 'c05', '2022-09-07', 'Nam', 'Libero et molestiae nihil voluptas repudiandae. Porro eligendi commodi rerum sapiente quae. Quas iste consectetur tempore voluptas.'),
(14, 'Alejandrin Terry', 'c06', '2022-09-14', 'NÆ°', 'Libero et molestiae nihil voluptas repudiandae. Porro eligendi commodi rerum sapiente quae. Qu'),
(15, 'HoÃ ng XuÃ¢n Tháº¯ng', 'c05', '0001-01-01', 'Nam', 'as iste consectetur tempore voluptas.');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `hocsinh`
--
ALTER TABLE `hocsinh`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hocsinh`
--
ALTER TABLE `hocsinh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
