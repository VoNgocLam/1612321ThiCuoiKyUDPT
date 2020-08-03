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
-- Database: `CumThi2DB`
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
(1, '02.0001', 'M1', 6),
(2, '02.0001', 'M2', 9),
(3, '02.0001', 'M3', 9),
(4, '02.0001', 'M4', 8),
(5, '02.0001', 'M5', 7),
(6, '02.0002', 'M1', 10),
(7, '02.0002', 'M2', 7),
(8, '02.0002', 'M3', 8),
(9, '02.0002', 'M4', 9),
(10, '02.0002', 'M5', 6);

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
('02.0001', 'Nguyễn Văn C', '2003-02-11 00:00:00', 'Nam'),
('02.0002', 'Trần Thị D', '2003-04-11 00:00:00', 'Nữ');

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
  MODIFY `MaBT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `DIEM_THI`
--
ALTER TABLE `DIEM_THI`
  ADD CONSTRAINT `FK_DIEMTHI_MONTHI` FOREIGN KEY (`MAMT`) REFERENCES `MONTHI` (`MaMT`),
  ADD CONSTRAINT `FK_DIEMTHI_THISINH` FOREIGN KEY (`SBD`) REFERENCES `THI_SINH` (`SBD`);
