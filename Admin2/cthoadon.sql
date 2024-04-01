-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 20, 2024 lúc 04:28 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doancuoiki2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthoadon`
--

CREATE TABLE `cthoadon` (
  `masohd` int(11) NOT NULL,
  `mahh` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cthoadon`
--

INSERT INTO `cthoadon` (`masohd`, `mahh`, `soluongmua`, `thanhtien`, `tinhtrang`) VALUES
(88, 21, 1, 500000, 0),
(88, 22, 1, 500000, 0),
(88, 23, 1, 2000000, 0),
(89, 23, 2, 4000000, 0),
(90, 22, 1, 500000, 0),
(90, 23, 1, 2000000, 0),
(91, 20, 1, 500000, 0),
(91, 21, 1, 500000, 0),
(91, 22, 1, 500000, 0),
(91, 23, 6, 12000000, 0),
(92, 22, 2, 1000000, 0),
(93, 20, 3, 1500000, 0),
(94, 14, 1, 500000, 0),
(94, 23, 1, 2000000, 0),
(95, 21, 1, 500000, 0),
(96, 22, 1, 500000, 0),
(97, 23, 4, 8000000, 0),
(98, 23, 1, 2000000, 0),
(99, 22, 1, 500000, 0),
(99, 23, 4, 8000000, 0),
(100, 23, 1, 2000000, 0),
(101, 23, 1, 2000000, 0),
(102, 22, 1, 500000, 0),
(103, 23, 1, 2000000, 0),
(104, 15, 1, 450000, 0),
(105, 23, 1, 2000000, 0),
(106, 22, 1, 500000, 0),
(106, 23, 1, 2000000, 0),
(107, 23, 1, 2000000, 0),
(108, 15, 1, 450000, 0),
(109, 20, 1, 500000, 0),
(109, 23, 1, 2000000, 0),
(110, 21, 1, 500000, 0),
(110, 22, 1, 500000, 0),
(110, 23, 1, 2000000, 0),
(111, 23, 1, 2000000, 0),
(112, 21, 5, 2500000, 0),
(112, 23, 1, 2000000, 0),
(113, 22, 1, 500000, 0),
(113, 23, 1, 2000000, 0),
(114, 23, 1, 2000000, 0),
(115, 20, 1, 500000, 0),
(115, 23, 2, 4000000, 0),
(116, 23, 3, 6000000, 0),
(117, 23, 3, 6000000, 0),
(118, 23, 3, 6000000, 0),
(119, 22, 1, 500000, 0),
(119, 23, 2, 4000000, 0),
(120, 23, 1, 2000000, 0),
(121, 17, 1, 600000, 0),
(121, 18, 4, 2000000, 0),
(122, 18, 1, 500000, 0),
(122, 22, 4, 2000000, 0),
(123, 23, 1, 2000000, 0),
(124, 22, 1, 500000, 0),
(125, 23, 3, 6000000, 0),
(126, 23, 3, 6000000, 0),
(127, 22, 1, 500000, 0),
(128, 21, 4, 2000000, 0),
(129, 22, 4, 2000000, 0),
(130, 23, 4, 8000000, 0),
(131, 2, 1, 2, 0),
(131, 22, 2, 1000000, 0),
(131, 23, 1, 2000000, 0),
(132, 23, 1, 2000000, 0),
(133, 22, 1, 500000, 0),
(134, 22, 1, 500000, 0),
(135, 23, 1, 2000000, 0),
(136, 23, 1, 2000000, 0),
(137, 23, 1, 2000000, 0),
(138, 23, 2, 4000000, 0),
(139, 23, 2, 4000000, 0),
(140, 23, 3, 6000000, 0),
(141, 23, 1, 2000000, 0),
(142, 23, 1, 2000000, 0),
(143, 23, 2, 4000000, 0),
(144, 19, 3, 1950000, 0),
(145, 14, 2, 1000000, 0),
(146, 14, 1, 500000, 0),
(146, 15, 1, 450000, 0),
(147, 19, 1, 650000, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD PRIMARY KEY (`masohd`,`mahh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
