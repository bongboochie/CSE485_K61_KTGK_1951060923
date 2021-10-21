-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2021 lúc 06:14 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlnganhangmau`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blood_recipient`
--

CREATE TABLE `blood_recipient` (
  `reci_id` int(10) NOT NULL,
  `reci_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reci_age` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reci_bgrp` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reci_bqnty` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reci_sex` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reci_reg_date` date DEFAULT NULL,
  `reci_phno` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blood_recipient`
--

INSERT INTO `blood_recipient` (`reci_id`, `reci_name`, `reci_age`, `reci_bgrp`, `reci_bqnty`, `reci_sex`, `reci_reg_date`, `reci_phno`) VALUES
(3, '[Thu Phương]', '[1999]', '[A]', '[200ml]', '[Nu]', '2021-10-12', '[09426873223]'),
(5, '[Trần Thị Phúc]', '[2001]', '[O]', '[25Oml]', '[Nu]', '2021-10-16', '[0942355343]'),
(6, '[Trần Đại Quang]', '[2004]', '[AB]', '[21Oml]', '[Nam]', '2021-10-19', '[0328546467]'),
(7, '[Trần Thu Thảo]', '[1995]', '[AB]', '[11Oml]', '[Nu]', '2021-10-15', '[0328546467]'),
(9, '[Hoàng Lê Tùng]', '[1999]', '[A]', '[200ml]', '[nu]', '2021-10-21', '[0942687323]');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blood_recipient`
--
ALTER TABLE `blood_recipient`
  ADD PRIMARY KEY (`reci_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `blood_recipient`
--
ALTER TABLE `blood_recipient`
  MODIFY `reci_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
