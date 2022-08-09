-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2022 at 05:59 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlnganhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `chinhanh`
--

CREATE TABLE `chinhanh` (
  `MaCN` varchar(20) NOT NULL,
  `TenCN` varchar(100) NOT NULL,
  `DiaChi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chinhanh`
--

INSERT INTO `chinhanh` (`MaCN`, `TenCN`, `DiaChi`) VALUES
('D1', 'Bách Khoa', '137 Đ.Nguyễn Văn Cừ, Ngọc Lâm, Long Biên, Hà Nội'),
('D2', 'Hai Bà Trưng', 'P.Lạc Trung, Vĩnh Tuy, Hai Bà Trưng\r\n'),
('D3', 'Bách Khoa', 'Số 17 P.Tạ Quang Bửu, Bách Khoa, Hai Bà Trưng, Hà Nội');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` varchar(20) NOT NULL,
  `tenkh` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`) VALUES
('20193191', 'Le Chi Tuyen'),
('20193192', 'Tran Thanh Lam'),
('20193193', 'Nguyen Huu Tuan');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `manv` varchar(20) NOT NULL,
  `tennv` varchar(100) NOT NULL,
  `KPI` int(11) NOT NULL,
  `chinhanh` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`manv`, `tennv`, `KPI`, `chinhanh`) VALUES
('20193160', 'Tran Huu Khoi', 20, 'D1'),
('20193161', 'Tran Duc Hung', 30, 'D1'),
('20193162', 'Tran Cong Truong', 40, 'D2'),
('20193163', 'Tran Minh Hanh', 50, 'D3');

-- --------------------------------------------------------

--
-- Table structure for table `tiepnhan`
--

CREATE TABLE `tiepnhan` (
  `id` int(20) NOT NULL,
  `idnhanvien` varchar(20) NOT NULL,
  `idkhachhang` varchar(20) NOT NULL,
  `idchinhanh` varchar(20) NOT NULL,
  `ngaytiepnhan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tiepnhan`
--

INSERT INTO `tiepnhan` (`id`, `idnhanvien`, `idkhachhang`, `idchinhanh`, `ngaytiepnhan`) VALUES
(1, '20193160', '20193191', 'D1', '2022-08-09'),
(2, '20193160', '20193192', 'D1', '2022-08-09'),
(3, '20193161', '20193193', 'D2', '2022-08-09'),
(4, '20193162', '20193192', 'D3', '2022-08-09'),
(5, '20193163', '20193193', 'D3', '2022-08-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chinhanh`
--
ALTER TABLE `chinhanh`
  ADD PRIMARY KEY (`MaCN`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`manv`);

--
-- Indexes for table `tiepnhan`
--
ALTER TABLE `tiepnhan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idnhanvien` (`idnhanvien`),
  ADD KEY `idkhachhang` (`idkhachhang`),
  ADD KEY `idchinhanh` (`idchinhanh`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tiepnhan`
--
ALTER TABLE `tiepnhan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chinhanh`
--
ALTER TABLE `chinhanh`
  ADD CONSTRAINT `chinhanh_ibfk_1` FOREIGN KEY (`MaCN`) REFERENCES `tiepnhan` (`idchinhanh`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `khachhang_ibfk_1` FOREIGN KEY (`makh`) REFERENCES `tiepnhan` (`idkhachhang`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`manv`) REFERENCES `tiepnhan` (`idnhanvien`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
