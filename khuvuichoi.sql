-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 22, 2024 lúc 10:02 AM
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
-- Cơ sở dữ liệu: `khuvuichoi`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `username` varchar(20) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`username`, `pass`, `email`) VALUES
('admin', '123', 'thanhnamnb@gamil.com'),
('admin4', '123', 'thanhnamnb1004@gmail.com'),
('user', '123', 'thanhnamnb1004@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblgiaitri`
--

CREATE TABLE `tblgiaitri` (
  `makhu` varchar(50) NOT NULL,
  `tenkhu` varchar(100) NOT NULL,
  `diadiem` varchar(100) NOT NULL,
  `trangthai` varchar(200) NOT NULL,
  `thoigian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tblgiaitri`
--

INSERT INTO `tblgiaitri` (`makhu`, `tenkhu`, `diadiem`, `trangthai`, `thoigian`) VALUES
('kh123', 'công viên nước', 'khu c', 'đóng cửa', '2024-07-06'),
('khu1', 'Rạp chiếu phim', 'Khu a', 'đang mở', '2024-06-23'),
('khu3', 'tổ hợp safari', 'khu b', 'đang mở', '2024-06-23'),
('khu6', 'ẩm thực', 'khu c ', 'Đóng cửa', '2024-06-30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_admin`
--

CREATE TABLE `user_admin` (
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user_admin`
--

INSERT INTO `user_admin` (`username`, `pass`, `email`) VALUES
('admin1', '123', '123'),
('admin4', '123', 'thanhnamnb1004@gmail.com'),
('user', '123', 'thanhnamnb1004@gmail.com');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `tblgiaitri`
--
ALTER TABLE `tblgiaitri`
  ADD PRIMARY KEY (`makhu`);

--
-- Chỉ mục cho bảng `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
