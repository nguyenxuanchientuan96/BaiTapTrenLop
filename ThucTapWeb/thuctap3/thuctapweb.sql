-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2017 at 09:21 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thuctapweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `buoi1`
--

CREATE TABLE `buoi1` (
  `masv` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `hinh` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `buoi1`
--

INSERT INTO `buoi1` (`masv`, `hoten`, `ngaysinh`, `hinh`) VALUES
('3513131', 'Nguyen Xuan Chien Tuan', '1996-04-08', 'copa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `buoi3`
--

CREATE TABLE `buoi3` (
  `tendangnhap` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tenthat` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nhaplaimatkhau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` int(50) NOT NULL,
  `diachi` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `buoi3`
--

INSERT INTO `buoi3` (`tendangnhap`, `tenthat`, `matkhau`, `nhaplaimatkhau`, `ngaysinh`, `email`, `sodienthoai`, `diachi`) VALUES
('tuan', 'nguyenxuanchientuan', '123456', '123456', '2017-03-01', 'vgvgvgvgvgv', 515151515, 'gvgvggftftftgytg'),
('gvghvgvg', 'vgvgvgvgvgv', '5415145145', '151451515', '1996-08-04', 'hvghzvgdsvfgv', 515641515, 'vbdhbfgdbhyfd'),
('dfvgdgvvghvg', 'vgvgvcgvgvg', '123456', '123456', '1996-08-04', 'ghfgvgvgvcg', 51515151, '5gcgcgvvhbhbvhbvdsh'),
('chientuan', 'nguyenxuanchientuan', '123456', '123456', '1996-08-04', 'hbdhsbhbdshbhb', 32626262, 'hbhvhdfbhdfy'),
('ly', 'phanhaily', '1996', '1996', '1996-08-04', 'vdhsvhvhb', 5151451, 'hvdfhvhd'),
('son', 'sontran', '1232', '1232', '1996-08-04', 'bgbvgbvgb', 4151521, ' b  hg'),
('vghvvfgvfg', 'vgvgvgvgv', '123', '123', '1996-08-04', 'vftyfgftgvf', 515145145, 'fcfccftr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buoi1`
--
ALTER TABLE `buoi1`
  ADD PRIMARY KEY (`masv`);

--
-- Indexes for table `buoi3`
--
ALTER TABLE `buoi3`
  ADD PRIMARY KEY (`tendangnhap`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
