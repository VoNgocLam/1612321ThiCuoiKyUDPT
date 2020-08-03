-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 02, 2020 at 02:00 PM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `TraCuuDiemThiDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `DSCUMTHI`
--

CREATE TABLE `DSCUMTHI` (
  `MaCT` int(11) NOT NULL,
  `TenCumThi` varchar(255) NOT NULL,
  `Link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `DSCUMTHI`
--

INSERT INTO `DSCUMTHI` (`MaCT`, `TenCumThi`, `Link`) VALUES
(1, 'Trường Đại học Khoa học Tự nhiên TP Hồ Chí Minh', 'http://localhost:8888/1612321/1612321_CumThi1/'),
(2, 'Trường Đại học Bách khoa TP Hồ Chí Minh', 'http://localhost:8888/1612321/1612321_CumThi2/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `DSCUMTHI`
--
ALTER TABLE `DSCUMTHI`
  ADD PRIMARY KEY (`MaCT`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `DSCUMTHI`
--
ALTER TABLE `DSCUMTHI`
  MODIFY `MaCT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
