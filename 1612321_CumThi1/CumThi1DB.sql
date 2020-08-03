-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 02, 2020 at 01:59 PM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `CumThi1DB`
--

-- --------------------------------------------------------

--
-- Table structure for table `DIEM_THI`
--

CREATE TABLE `DIEM_THI` (
  `MaBT` int(11) NOT NULL,
  `SBD` varchar(20) NOT NULL,
  `MAMT` varchar(20) NOT NULL,
  `Diem` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `DIEM_THI`
--

INSERT INTO `DIEM_THI` (`MaBT`, `SBD`, `MAMT`, `Diem`) VALUES
(1, '01.0001', 'M1', 7),
(2, '01.0001', 'M2', 9),
(3, '01.0001', 'M3', 8),
(4, '01.0001', 'M4', 9),
(5, '01.0001', 'M5', 8),
(6, '01.0002', 'M1', 7),
(7, '01.0002', 'M2', 9),
(8, '01.0002', 'M3', 9),
(9, '01.0002', 'M4', 10),
(10, '01.0002', 'M5', 6),
(11, '01.0003', 'M1', 6),
(12, '01.0003', 'M2', 7),
(13, '01.0003', 'M3', 8),
(14, '01.0003', 'M4', 9),
(15, '01.0003', 'M5', 2),
(16, '01.0004', 'M1', 3),
(17, '01.0004', 'M2', 4),
(18, '01.0004', 'M3', 5),
(19, '01.0004', 'M4', 6),
(20, '01.0004', 'M5', 4),
(21, '01.0005', 'M1', 1),
(22, '01.0005', 'M2', 2),
(23, '01.0005', 'M3', 7),
(24, '01.0005', 'M4', 8),
(25, '01.0005', 'M5', 4),
(26, '01.0006', 'M1', 3),
(27, '01.0006', 'M2', 7),
(28, '01.0006', 'M3', 2),
(29, '01.0006', 'M4', 8),
(30, '01.0006', 'M5', 4),
(31, '01.0007', 'M1', 8),
(32, '01.0007', 'M2', 6),
(33, '01.0007', 'M3', 7),
(34, '01.0007', 'M4', 4),
(35, '01.0007', 'M5', 3),
(36, '01.0008', 'M1', 3),
(37, '01.0008', 'M2', 4),
(38, '01.0008', 'M3', 6),
(39, '01.0008', 'M4', 5),
(40, '01.0008', 'M5', 7),
(41, '01.0009', 'M1', 2),
(42, '01.0009', 'M2', 4),
(43, '01.0009', 'M3', 5),
(44, '01.0009', 'M4', 8),
(45, '01.0009', 'M5', 5),
(46, '01.0010', 'M1', 6),
(47, '01.0010', 'M2', 5),
(48, '01.0010', 'M3', 4),
(49, '01.0010', 'M4', 3),
(50, '01.0010', 'M5', 8),
(51, '01.0011', 'M1', 7),
(52, '01.0011', 'M2', 9),
(53, '01.0011', 'M3', 2),
(54, '01.0011', 'M4', 5),
(55, '01.0011', 'M5', 7),
(56, '01.0012', 'M1', 8),
(57, '01.0012', 'M2', 9),
(58, '01.0012', 'M3', 2),
(59, '01.0012', 'M4', 5),
(60, '01.0012', 'M5', 6),
(61, '01.0013', 'M1', 7),
(62, '01.0013', 'M2', 3),
(63, '01.0013', 'M3', 5),
(64, '01.0013', 'M4', 1),
(65, '01.0013', 'M5', 2),
(66, '01.0014', 'M1', 8),
(67, '01.0014', 'M2', 9),
(68, '01.0014', 'M3', 5),
(69, '01.0014', 'M4', 3),
(70, '01.0014', 'M5', 7);

-- --------------------------------------------------------

--
-- Table structure for table `MONTHI`
--

CREATE TABLE `MONTHI` (
  `MaMT` varchar(20) NOT NULL,
  `TenMonThi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `MONTHI`
--

INSERT INTO `MONTHI` (`MaMT`, `TenMonThi`) VALUES
('M1', 'Toán'),
('M2', 'Ngữ văn'),
('M3', 'Ngoại ngữ'),
('M4', 'Khoa học Tự nhiên'),
('M5', 'Khoa học Xã hội');

-- --------------------------------------------------------

--
-- Table structure for table `THI_SINH`
--

CREATE TABLE `THI_SINH` (
  `SBD` varchar(20) NOT NULL,
  `HoTen` varchar(50) NOT NULL,
  `NgaySinh` datetime NOT NULL,
  `GioiTinh` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `THI_SINH`
--

INSERT INTO `THI_SINH` (`SBD`, `HoTen`, `NgaySinh`, `GioiTinh`) VALUES
('01.0001', 'Nguyễn Văn A', '2003-08-11 00:00:00', 'Nam'),
('01.0002', 'Trần Thị B', '2003-01-11 00:00:00', 'Nữ'),
('01.0003', 'Võ Ngọc Lâm', '2003-10-02 00:00:00', 'Nam'),
('01.0004', 'Nguyễn Thanh Lâm', '2003-08-11 00:00:00', 'Nam'),
('01.0005', 'Đoàn Khuê', '2003-10-11 00:00:00', 'Nam'),
('01.0006', 'Phạm Thị Thu Trang', '2003-12-24 00:00:00', 'Nữ'),
('01.0007', 'Mi Chu', '2003-05-08 00:00:00', 'Nữ'),
('01.0008', 'Trần Thị Tuyết Ngân', '2003-06-03 00:00:00', 'Nữ'),
('01.0009', 'Selena Gomes', '2003-01-01 00:00:00', 'Nữ'),
('01.0010', 'Trần Thị Lạng', '2003-07-11 00:00:00', 'Nữ'),
('01.0011', 'Kim Jong Kook', '2003-06-11 00:00:00', 'Nam'),
('01.0012', 'Võ Ngọc Lâm', '2003-10-23 00:00:00', 'Nam'),
('01.0013', 'Võ Ngọc Lâm', '2003-07-23 00:00:00', 'Nam'),
('01.0014', 'Võ Ngọc Lâm', '2003-05-01 00:00:00', 'Nam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `DIEM_THI`
--
ALTER TABLE `DIEM_THI`
  ADD PRIMARY KEY (`MaBT`),
  ADD KEY `FK_DIEMTHI_THISINH` (`SBD`),
  ADD KEY `FK_DIEMTHI_MONTHI` (`MAMT`);

--
-- Indexes for table `MONTHI`
--
ALTER TABLE `MONTHI`
  ADD PRIMARY KEY (`MaMT`);

--
-- Indexes for table `THI_SINH`
--
ALTER TABLE `THI_SINH`
  ADD PRIMARY KEY (`SBD`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `DIEM_THI`
--
ALTER TABLE `DIEM_THI`
  MODIFY `MaBT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `DIEM_THI`
--
ALTER TABLE `DIEM_THI`
  ADD CONSTRAINT `FK_DIEMTHI_MONTHI` FOREIGN KEY (`MAMT`) REFERENCES `MONTHI` (`MaMT`),
  ADD CONSTRAINT `FK_DIEMTHI_THISINH` FOREIGN KEY (`SBD`) REFERENCES `THI_SINH` (`SBD`);
