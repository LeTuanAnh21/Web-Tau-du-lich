-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 15, 2022 lúc 04:22 AM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `taudulich`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bangcap`
--

CREATE TABLE `bangcap` (
  `id` int(50) NOT NULL,
  `maso` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bangcap`
--

INSERT INTO `bangcap` (`id`, `maso`, `ten`) VALUES
(1, 'BC01', 'THUYỀN TRƯỞNG'),
(5, 'BC02', 'MÁY TRƯỞNG');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chucvu`
--

CREATE TABLE `chucvu` (
  `id` int(50) NOT NULL,
  `maso` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chucvu`
--

INSERT INTO `chucvu` (`id`, `maso`, `ten`) VALUES
(1, 'CV01', 'ADMIN'),
(2, 'CV02', 'NHÂN VIÊN');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chutau`
--

CREATE TABLE `chutau` (
  `id_ct` int(11) NOT NULL,
  `maso` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cmnd` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ns` date NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chutau`
--

INSERT INTO `chutau` (`id_ct`, `maso`, `email`, `hoten`, `cmnd`, `ns`, `diachi`, `sdt`, `gioitinh`) VALUES
(1, 'CT01', 'ANHB19071711@GMAIL.COM', 'LÊ TUẤN ANH', '286755121', '2022-10-05', 'CẦN THƠ', '0987332121', 1),
(10, 'CT02', 'huynhchihai7742@gmail.com', 'HUỲNH CHÍ HẢI', '287766212', '2022-10-31', 'CẦN THƠ', '0988322122', 1),
(11, 'CT03', 'nnduong2291@gmail.com', 'NGUYỀN NHẬT DƯƠNG', '285789221', '2022-10-31', 'HẬU GIANG', '0982332112', 2),
(12, 'CT04', 'buikhanhlynh2105@gmail.com', 'BÙI KHÁNH LINH', '2988772212', '2022-11-21', 'CẦN THƠ', '0988222171', 2),
(13, 'CT05', 'nhuunghia2203@gmail.com', 'NHÂM HỮU ÁNH', '287722122', '2022-11-18', 'KIÊN GIANG', '0988336021', 1),
(14, 'CT06', 'buianhloanhuynh2804@gmail.com', 'BÙI ÁNH LOAN HUYNH', '287799122', '2022-11-16', 'KIÊN GIANG', '0988728312', 1),
(15, 'CT07', 'anhhoang112@gmai.com', 'PHAN ANH HOÀNG', '287746221', '2022-10-31', 'CẦN THƠ', '0988221232', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hdct`
--

CREATE TABLE `hdct` (
  `id_hdct` int(11) NOT NULL,
  `maso` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_thanhvien` int(11) NOT NULL,
  `ngaybd` date NOT NULL,
  `ngaykt` date NOT NULL,
  `tinhtrang` int(11) DEFAULT NULL,
  `giatri` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_t` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hdct`
--

INSERT INTO `hdct` (`id_hdct`, `maso`, `id_thanhvien`, `ngaybd`, `ngaykt`, `tinhtrang`, `giatri`, `id_t`) VALUES
(31, 'HDCT01', 26, '2022-10-31', '2024-06-05', NULL, '100.000.000VND', 1),
(32, 'HDCT02', 27, '2022-09-27', '2022-12-23', NULL, '50.000.000VND ', 2),
(33, 'HDCT03', 27, '2022-10-31', '2024-05-29', NULL, '97.000.000VND', 17),
(34, 'HDCT04', 29, '2021-01-21', '2022-12-01', NULL, '56.000.000VND', 18),
(35, 'HDCT05', 27, '2021-12-28', '2022-12-30', NULL, '50.000.000VND', 19),
(36, 'HDCT06', 27, '2022-10-31', '2022-12-01', NULL, '25.000.000VND', 20),
(37, 'HDCT07', 30, '2022-10-31', '2022-12-11', NULL, '30.000.000VND', 21);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hdkh`
--

CREATE TABLE `hdkh` (
  `id_hdkh` int(11) NOT NULL,
  `maso` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngaybd` date NOT NULL,
  `ngaykt` date NOT NULL,
  `giatri` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_thanhvien` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `id_lenh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hdkh`
--

INSERT INTO `hdkh` (`id_hdkh`, `maso`, `ngaybd`, `ngaykt`, `giatri`, `tinhtrang`, `id_thanhvien`, `id_khachhang`, `id_lenh`) VALUES
(23, 'HDKH01', '2022-11-07', '2022-12-11', '10.000.000VND', 0, 26, 23, 1),
(24, 'HDKH02', '2022-10-31', '2022-12-11', '15.000.000VND', 0, 28, 25, 2),
(25, 'HDKH03', '2022-10-31', '2023-01-08', '12.000.000VND', 0, 27, 26, 16),
(26, 'HDKH04', '2022-10-31', '2022-12-02', '14.000.000VND', 0, 29, 28, 17),
(27, 'HDKH05', '2022-10-31', '2023-01-04', '25.000.000VND', 0, 29, 28, 18),
(28, 'HDKH06', '2022-10-31', '2023-03-11', '34.000.000VND', 0, 26, 22, 19),
(29, 'HDKH07', '2022-10-31', '2022-12-11', '20.000.000VND', 0, 30, 29, 21);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id_khachhang` int(11) NOT NULL,
  `maso` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` int(1) NOT NULL,
  `CMND` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ns` date NOT NULL,
  `sdt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id_khachhang`, `maso`, `hoten`, `email`, `gioitinh`, `CMND`, `ns`, `sdt`, `id`) VALUES
(17, 'KH01', 'LÊ TUẤN ANH', 'anhb1906362@gmail.com', 1, '298872221', '2022-10-31', '0983502610', 1),
(18, 'KH02', 'BÙI TỐ NHƯ QUỲNH', 'buitonhuquynh11@gmail.com', 2, '287722122', '2022-10-31', '0987811221', 1),
(19, 'KH03', 'PHAN TẤN NGHĨA', 'ptnghia221@gmail.com', 1, '289762212', '2022-11-02', '0998122218', 15),
(20, 'KH04', 'TRẦN THỊ HOÀI THƯƠNG', 'tthoaithuong2211@gmail.com', 2, '287666552', '2022-10-31', '0998111221', 1),
(21, 'KH05', 'LÊ THỊ TUYẾT MAI', 'lttuyetmai21@mail.com', 2, '287655522', '2022-10-31', '0989877212', 1),
(22, 'KH06', 'ĐỖ TUẤN KIỆT', 'dotuankiet7711@gmail.com', 1, '287722122', '2015-01-28', '0988722122', 1),
(23, 'KH07', 'LÂM CHẤN HẢI', 'lchanhai2288@gmail.com', 1, '288212212', '2022-10-31', '0998873211', 1),
(24, 'KH08', 'LÊ TUẤN ANH HÒA', 'ltahao20611@gmail.com', 1, '298822122', '2022-10-31', '098222198', 1),
(25, 'KH09', 'LÊ NGUYỄN THUẦN NAM', 'anhhoai2875@gmail.com', 1, '298872112', '2022-11-10', '0988773221', 1),
(26, 'KH10', 'NGUYỄN THẾ THANH', 'ntthanh8744@gmail.com', 1, '285789221', '2022-11-01', '0988221221', 1),
(27, 'KH11', 'NGUYỄN HOÀI THƯƠNG', 'nhoaithuong7774@gmail.com', 2, '2876622219', '2022-10-21', '0988773346', 1),
(28, 'KH12', 'LÊ HUỲNH BẢO TRÚC', 'baohuynhtruc8755@gmail,com', 1, '298822122', '2022-10-31', '0983502692', 1),
(29, 'KH13', 'LÝ TÂN TRANG', 'lytantrang2106@gmail.com', 2, '289921921', '2022-11-02', '0983662771', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `laitau`
--

CREATE TABLE `laitau` (
  `id_lt` int(11) NOT NULL,
  `maso` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cmnd` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `sdt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trinhdo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngaycap` date NOT NULL,
  `noicap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `laitau`
--

INSERT INTO `laitau` (`id_lt`, `maso`, `email`, `hoten`, `cmnd`, `ngaysinh`, `sdt`, `dc`, `trinhdo`, `ngaycap`, `noicap`, `id`) VALUES
(1, 'LT01', 'anhb1906362@gmail.com', 'LÊ TUẤN ANH', '285788212', '2022-10-01', '0987222311', 'CẦN THƠ', 'HẠNG NHẤT', '2022-11-01', 'CẦN THƠ', 1),
(13, 'LT02', 'anhtohung8821@gmail.com', 'BÙI ÁNH TỐ HÙNG', '286777332', '2022-11-16', '0983502621', 'CẦN THƠ', 'HẠNG HAI', '2022-11-02', 'CẦN THƠ', 1),
(14, 'LT03', 'hnhatnguyen1203@gmail.com', 'HOÀNG NHẤT NGUYÊN', '285789341', '2022-11-16', '0988322112', 'CẦN THƠ', 'HẠNG HAI', '2022-11-23', 'CẦN THƠ', 5),
(15, 'LT04', 'tuanhoang2105@gmail.com', 'PHAN HOÀNG TUẤN', '285788221', '2022-11-18', '0983221012', 'CẦN THƠ', 'HẠNG HAI', '2022-11-08', 'CẦN THƠ', 5),
(16, 'LT05', 'tuanphan503@gmail.com', 'PHAN MINH TUẤN', '287799872', '2022-11-12', '09888221232', 'CẦN THƠ', 'HẠNG NHẤT', '2022-11-08', 'CẦN THƠ', 1),
(17, 'LT06', 'phantrong1222@gmail.com', 'PHAN HUỲNH TẤN TRỌNG', '285711229', '2022-11-01', '0988233412', 'CẦN THƠ', 'HẠNG HAI', '2022-11-15', 'CẦN THƠ', 1),
(18, 'LT07', 'trungtan7732@gmail.com', 'PHAN TẤN TRUNG', '2857882112', '2022-10-31', '0983502610', 'CẦN THƠ', 'HẠNG HAI', '2022-11-08', 'CẦN THƠ', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lenh`
--

CREATE TABLE `lenh` (
  `id_lenh` int(11) NOT NULL,
  `id_lt` int(11) NOT NULL,
  `id_t` int(11) NOT NULL,
  `masol` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diadiem` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngaybd` date NOT NULL,
  `ngaykt` date NOT NULL,
  `mota` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `giatau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chitiettau` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lenh`
--

INSERT INTO `lenh` (`id_lenh`, `id_lt`, `id_t`, `masol`, `diadiem`, `ngaybd`, `ngaykt`, `mota`, `giatau`, `chitiettau`) VALUES
(1, 1, 1, 'LKH01', 'CHỢ NỔI CÁI RĂNG', '2022-11-01', '2022-11-30', '', '22.000.000', '08:45 Nhân viên Vega Yacht  đón Quý Khách tại khách sạn, di chuyển xuống bến du thuyền Ana Marina / cảng du lịch Vĩnh Trường. \r\n\r\n09:00 Vega Team chào mừng Quý Khách. Bắt đầu chuyến du ngoạn tham quan. \r\n\r\n10:00 Điểm dừng chân đầu tiên. Quý Khách tự do bơi, lặn ngắm san hô, khám phá thế giới đại dương với trang thiết bị bơi lặn chuyên nghiệp. \r\n\r\n11:50 Điểm dừng chân thứ hai.  Nghỉ ngơi tắm biển và tham gia các hoạt động trên biển. \r\n\r\n13:35 Tham quan, khám phá cuộc sống của dân chài địa phương. \r\n\r\n15:00 Trở về bến du thuyền Ana Marina / cảng du lịch Vĩnh Trường. Kết thúc hành trình.'),
(2, 13, 2, 'LKH02', 'CẦN THƠ', '2022-11-17', '2022-11-30', '', '20.000.000', '08:45 Nhân viên Vega Yacht  đón Quý Khách tại khách sạn, di chuyển xuống bến du thuyền Ana Marina / cảng du lịch Vĩnh Trường. \r\n\r\n09:00 Vega Team chào mừng Quý Khách. Bắt đầu chuyến du ngoạn tham quan. \r\n\r\n10:00 Điểm dừng chân đầu tiên. Quý Khách tự do bơi, lặn ngắm san hô, khám phá thế giới đại dương với trang thiết bị bơi lặn chuyên nghiệp. \r\n\r\n11:50 Điểm dừng chân thứ hai.  Nghỉ ngơi tắm biển và tham gia các hoạt động trên biển. \r\n\r\n13:35 Tham quan, khám phá cuộc sống của dân chài địa phương. \r\n\r\n15:00 Trở về bến du thuyền Ana Marina / cảng du lịch Vĩnh Trường. Kết thúc hành trình.'),
(16, 14, 17, 'LKH03', 'CHỢ NỔI CÁI RĂNG', '2022-10-31', '2022-12-10', '', '19.000.000', '08:45 Nhân viên Vega Yacht  đón Quý Khách tại khách sạn, di chuyển xuống bến du thuyền Ana Marina / cảng du lịch Vĩnh Trường. \r\n\r\n09:00 Vega Team chào mừng Quý Khách. Bắt đầu chuyến du ngoạn tham quan. \r\n\r\n10:00 Điểm dừng chân đầu tiên. Quý Khách tự do bơi, lặn ngắm san hô, khám phá thế giới đại dương với trang thiết bị bơi lặn chuyên nghiệp. \r\n\r\n11:50 Điểm dừng chân thứ hai.  Nghỉ ngơi tắm biển và tham gia các hoạt động trên biển. \r\n\r\n13:35 Tham quan, khám phá cuộc sống của dân chài địa phương. \r\n\r\n15:00 Trở về bến du thuyền Ana Marina / cảng du lịch Vĩnh Trường. Kết thúc hành trình.'),
(17, 15, 18, 'LKH04', 'HÒN SƠN-KIÊN GIANG', '2022-10-31', '2022-12-11', '', '', ''),
(18, 17, 19, 'LKH05', 'CHỢ NỔI CÁI RĂNG', '2022-10-31', '2022-11-25', '', '', ''),
(19, 16, 20, 'LKH06', 'NĂM CAN-CÀ MAU', '2022-12-11', '2023-01-29', '', '', ''),
(21, 18, 21, 'LKH07', 'CHỢ NỔI CÁI RĂNG-CẦN THƠ', '2022-10-31', '2022-12-10', '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quoctich`
--

CREATE TABLE `quoctich` (
  `id` int(50) NOT NULL,
  `maso` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quoctich`
--

INSERT INTO `quoctich` (`id`, `maso`, `ten`) VALUES
(1, 'QG01', 'VIETNAMESE'),
(2, 'QG02', 'LAOS'),
(3, 'QG03', 'SOUTH KOREA'),
(4, 'QG04', 'NORTH KOREA'),
(5, 'QG05', 'JAPAN'),
(6, 'QG06', 'MONGOLA'),
(7, 'QG07', 'CHINA'),
(8, 'QG08', 'PHILIPPINES'),
(9, 'QG09', 'TIMOR LESTE'),
(10, 'QG10', 'BHUTAN'),
(11, 'QG11', 'INDIA'),
(12, 'QG12', 'MYANMAR'),
(13, 'QG13', 'MALAYSIA'),
(14, 'QG14', 'CAMBODIA'),
(15, 'QG15', 'THAILAND'),
(16, 'QG16', 'SINGAPORE'),
(17, 'QG17', 'ENGLAND');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tau`
--

CREATE TABLE `tau` (
  `id_t` int(11) NOT NULL,
  `masot` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `namsx` date NOT NULL,
  `tinhtrang` int(1) NOT NULL,
  `anh_sp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `socho` int(11) NOT NULL,
  `id_ct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tau`
--

INSERT INTO `tau` (`id_t`, `masot`, `namsx`, `tinhtrang`, `anh_sp`, `socho`, `id_ct`) VALUES
(1, 'T01', '2022-11-02', 2, 'MAILINHcaotoc.jpg', 100, 1),
(2, 'T02', '2014-10-02', 3, 'duthuyenCT.jpg', 100, 1),
(17, 'T03', '2022-10-31', 2, 'duthuyenjescica.jpg', 50, 1),
(18, 'T04', '2022-11-01', 2, 'TaucaotocCT.jpg', 50, 11),
(19, 'T05', '2022-10-31', 1, 'duthuyensantalegend.jpg', 50, 12),
(20, 'T06', '2022-10-31', 1, 'taudulichrosycruise.jpg', 50, 12),
(21, 'T07', '2022-09-07', 1, 'taucaotocGreenLine.png', 50, 10),
(22, 'T08', '2020-06-10', 1, 'duthuyenNK.jpg', 50, 15);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhvien`
--

CREATE TABLE `thanhvien` (
  `id_thanhvien` int(11) NOT NULL,
  `maso` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ht` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cmnd` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anh_sp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gt` int(1) NOT NULL,
  `dc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(50) NOT NULL,
  `quyen_truy_cap` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thanhvien`
--

INSERT INTO `thanhvien` (`id_thanhvien`, `maso`, `email`, `ht`, `cmnd`, `anh_sp`, `gt`, `dc`, `sdt`, `mat_khau`, `id`, `quyen_truy_cap`) VALUES
(1, 'ADMIN1', 'anhb1906362@gmail.com', 'LÊ TUẤN ANH', '285733221', 'admin2.jpg', 1, 'CẦN THƠ', '09877766100191', '12345', 1, 2),
(2, 'NV01', 'huyhai1121@gmail.com', 'HUỲNH CHÍ HẢI', '285772112', 'admin1.jpg', 1, 'CẦN THƠ', '0987111221', '122345', 2, 1),
(25, 'NV02', 'chanhhao1101@gmail.com', 'BÙI CHÁNH HẢO', '287762212', 'ankhang.jpg', 1, 'CẦN THƠ', '0988722122', '1234', 2, 1),
(26, 'NV03', 'lehuynhtuanh1122@gmai.com', 'LÊ TÚ HUỲNH ÁNH', '287221122', 'huyentrang.jpg', 2, 'AN GIANG', '09878712212', '20012', 2, 1),
(27, 'NV04', 'buianhtung99@gmail.com', 'BÙI MẠNH TÙNG', '287272122', 'laitau1.jpg', 1, 'CẦN THƠ', '0998221222', '12234', 2, 1),
(28, 'NV05', 'lhoanganhtri99@gmial.com', 'LÊ HOÀNG ÁNH TRÍ', '287867222', 'khâi.jpg', 2, 'CẦN THƠ', '09881112121', '12889', 2, 1),
(29, 'NV06', '285789341@gmail.com', 'NGUYỄN ÁNH DUY', '287722721', 'phuloc.jpg', 1, 'CẦN THƠ', '0983502822', '12244', 2, 1),
(30, 'NV07', 'tanhao2182@gmai.com', 'BÙI HUỲNH TẤN HÀO', '285788232', 'toaanh.webp', 1, 'CẦN THƠ', '09835028881', '11245', 2, 1),
(31, 'ADMIN02', 'lehoanganh21@gmail.com', 'LÊ HOÀNG ÁNH', '287766322', 'trangbui.jpg', 2, 'CẦN THƠ', '0986434521', '53211', 1, 2),
(33, 'NV08', 'leanhb1906362@gmail.com', 'HUỲNH HỮU HẢI BÁNH', '2852234322', 'tamnhu.jpg', 2, 'CẦN THƠ', '0983502610', '12345', 2, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bangcap`
--
ALTER TABLE `bangcap`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chucvu`
--
ALTER TABLE `chucvu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chutau`
--
ALTER TABLE `chutau`
  ADD PRIMARY KEY (`id_ct`);

--
-- Chỉ mục cho bảng `hdct`
--
ALTER TABLE `hdct`
  ADD PRIMARY KEY (`id_hdct`),
  ADD KEY `id_thanhvien` (`id_thanhvien`),
  ADD KEY `id_t` (`id_t`);

--
-- Chỉ mục cho bảng `hdkh`
--
ALTER TABLE `hdkh`
  ADD PRIMARY KEY (`id_hdkh`),
  ADD KEY `FK_thanhvien` (`id_thanhvien`),
  ADD KEY `FK_khachhang` (`id_khachhang`),
  ADD KEY `id_lenh` (`id_lenh`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id_khachhang`),
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `laitau`
--
ALTER TABLE `laitau`
  ADD PRIMARY KEY (`id_lt`),
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `lenh`
--
ALTER TABLE `lenh`
  ADD PRIMARY KEY (`id_lenh`),
  ADD KEY `kngoai` (`id_lt`),
  ADD KEY `khoangoai` (`id_t`);

--
-- Chỉ mục cho bảng `quoctich`
--
ALTER TABLE `quoctich`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tau`
--
ALTER TABLE `tau`
  ADD PRIMARY KEY (`id_t`),
  ADD KEY `FK_chutau` (`id_ct`);

--
-- Chỉ mục cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`id_thanhvien`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bangcap`
--
ALTER TABLE `bangcap`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `chucvu`
--
ALTER TABLE `chucvu`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `chutau`
--
ALTER TABLE `chutau`
  MODIFY `id_ct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `hdct`
--
ALTER TABLE `hdct`
  MODIFY `id_hdct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `hdkh`
--
ALTER TABLE `hdkh`
  MODIFY `id_hdkh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id_khachhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `laitau`
--
ALTER TABLE `laitau`
  MODIFY `id_lt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `lenh`
--
ALTER TABLE `lenh`
  MODIFY `id_lenh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `quoctich`
--
ALTER TABLE `quoctich`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `tau`
--
ALTER TABLE `tau`
  MODIFY `id_t` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `id_thanhvien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hdct`
--
ALTER TABLE `hdct`
  ADD CONSTRAINT `hdct_ibfk_2` FOREIGN KEY (`id_thanhvien`) REFERENCES `thanhvien` (`id_thanhvien`),
  ADD CONSTRAINT `hdct_ibfk_4` FOREIGN KEY (`id_t`) REFERENCES `tau` (`id_t`);

--
-- Các ràng buộc cho bảng `hdkh`
--
ALTER TABLE `hdkh`
  ADD CONSTRAINT `FK_khachhang` FOREIGN KEY (`id_khachhang`) REFERENCES `khachhang` (`id_khachhang`),
  ADD CONSTRAINT `FK_thanhvien` FOREIGN KEY (`id_thanhvien`) REFERENCES `thanhvien` (`id_thanhvien`),
  ADD CONSTRAINT `hdkh_ibfk_1` FOREIGN KEY (`id_lenh`) REFERENCES `lenh` (`id_lenh`);

--
-- Các ràng buộc cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `khachhang_ibfk_1` FOREIGN KEY (`id`) REFERENCES `quoctich` (`id`);

--
-- Các ràng buộc cho bảng `laitau`
--
ALTER TABLE `laitau`
  ADD CONSTRAINT `laitau_ibfk_1` FOREIGN KEY (`id`) REFERENCES `bangcap` (`id`);

--
-- Các ràng buộc cho bảng `lenh`
--
ALTER TABLE `lenh`
  ADD CONSTRAINT `khoangoai` FOREIGN KEY (`id_t`) REFERENCES `tau` (`id_t`),
  ADD CONSTRAINT `kngoai` FOREIGN KEY (`id_lt`) REFERENCES `laitau` (`id_lt`);

--
-- Các ràng buộc cho bảng `tau`
--
ALTER TABLE `tau`
  ADD CONSTRAINT `FK_chutau` FOREIGN KEY (`id_ct`) REFERENCES `chutau` (`id_ct`);

--
-- Các ràng buộc cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD CONSTRAINT `thanhvien_ibfk_1` FOREIGN KEY (`id`) REFERENCES `chucvu` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
