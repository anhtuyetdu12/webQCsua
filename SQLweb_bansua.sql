-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 15, 2023 lúc 05:20 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_bansua`
--
CREATE DATABASE IF NOT EXISTS `web_bansua` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `web_bansua`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `id_chitiet` int(11) NOT NULL,
  `madonhang` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`id_chitiet`, `madonhang`, `id_sanpham`, `soluong`) VALUES
(1, '23', 4747, 0),
(2, '21', 4747, 0),
(3, '23', 6835, 0),
(4, '21', 6835, 0),
(5, '23', 6753, 0),
(6, '21', 6753, 0),
(7, '23', 5581, 0),
(8, '21', 5581, 0),
(9, '23', 9877, 0),
(10, '21', 9877, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `idAdmin` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`idAdmin`, `username`, `password`, `admin_status`) VALUES
(0, 'tuyetadmin', '25f9e794323b453885f5181f1b624d0b', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id_dangky` int(11) NOT NULL,
  `tenkhachhang` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nhaplaiMK` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmucsanpham`
--

CREATE TABLE `tbl_danhmucsanpham` (
  `iddanhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmucsanpham`
--

INSERT INTO `tbl_danhmucsanpham` (`iddanhmuc`, `tendanhmuc`, `thutu`) VALUES
(4, 'sữa không đường', 2),
(5, 'sữa có đường', 5),
(6, 'sữa chua vinamilk', 2),
(7, 'Sữa bột', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_giohang`
--

CREATE TABLE `tbl_giohang` (
  `id_cart` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `madonhang` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `thanhtoan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_giohang`
--

INSERT INTO `tbl_giohang` (`id_cart`, `id_khachhang`, `madonhang`, `thanhtoan`) VALUES
(1, 0, '4747', 1),
(2, 0, '6835', 1),
(3, 0, '6753', 1),
(4, 0, '5581', 1),
(5, 0, '9877', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `masua` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tensua` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `hangsua` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `loaisua` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `trongluong` int(11) NOT NULL,
  `dongia` double NOT NULL,
  `tpdd` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `loiich` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `iddanhmuc` int(11) NOT NULL,
  `giamgia` int(11) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `masua`, `tensua`, `hangsua`, `loaisua`, `trongluong`, `dongia`, `tpdd`, `loiich`, `hinhanh`, `iddanhmuc`, `giamgia`, `soluong`) VALUES
(20, 'MD001', 'sữa không đường tốt cho sức khỏe', 'Nutifood', 'Sữa pha sẵn', 200, 190000, 'sfregre', 'dsfdsfe', '1698327815_fami.webp', 4, 5, 14),
(21, 'MD002', 'sữa tươi tiệt trùng', 'Dutch Lady', 'Sữa bột', 300, 2000000, 'cefefewf', 'fegewgdfd', '1698327853_optimum.png', 7, 2, 27),
(22, 'MD003', 'TH true milk sữa uống ', 'TH Group', 'Sữa tươi', 500, 5000000, 'fdhdhh', 'dghdhr', '1698394969_THtruemilk.jpg', 5, 10, 55),
(23, 'MD004', 'sữa chua vinamilk nếp cẩm', 'Vinamilk', 'Sữa chua', 200, 3000000, 'ỷtyty', 'yetyyy', '1698395012_nepcam.jpg', 6, 0, 10);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`id_chitiet`);

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Chỉ mục cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id_dangky`);

--
-- Chỉ mục cho bảng `tbl_danhmucsanpham`
--
ALTER TABLE `tbl_danhmucsanpham`
  ADD PRIMARY KEY (`iddanhmuc`);

--
-- Chỉ mục cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `id_chitiet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmucsanpham`
--
ALTER TABLE `tbl_danhmucsanpham`
  MODIFY `iddanhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
