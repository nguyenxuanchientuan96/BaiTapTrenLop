-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 27, 2017 at 05:16 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thuctap`
--

-- --------------------------------------------------------

--
-- Table structure for table `tuan5`
--

CREATE TABLE `tuan5` (
  `masv` int(50) NOT NULL,
  `hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `quequan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tuan5`
--

INSERT INTO `tuan5` (`masv`, `hoten`, `ngaysinh`, `quequan`, `mobile`) VALUES
(2, 'Nguyen Thi Hai', '1996-08-08', 'Ha Noi', 988894884),
(3, 'Nguyen Van Ba', '1998-08-05', 'Ha Nam', 91256555),
(4, 'Tran Van Bon', '1996-05-05', 'Nam Dinh', 933333333);

-- --------------------------------------------------------

--
-- Table structure for table `tuan6`
--

CREATE TABLE `tuan6` (
  `hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tendangnhap` text COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tuan6`
--

INSERT INTO `tuan6` (`hoten`, `tendangnhap`, `matkhau`, `gioitinh`, `ngaysinh`, `email`, `sodienthoai`, `diachi`) VALUES
('dbhbbh', 'hvbdfhbh', 'bhbhfdbh', 'nam', '1996-07-03', 'bdfbhb', '11111111111', 'bfdhbhb'),
('dfhyghg', 'gygyg', 'ygygygy', 'nam', '1996-07-03', 'jsdghyg', '11111111111', 'bgdygy'),
('fsfsf', 'fscft', 'tftftf', 'nam', '1996-07-03', 'tyftft', '11111111111', 'tftft'),
('gsdvygy', 'vcvvb', 'fdgh', 'nam', '1996-08-04', 'chientuan084@gmail.com', '1222222222', 'nkjdnckds'),
('hoang nhat truong', 'hoang trừong', 'gvgvg', 'nam', '1996-07-03', 'bdfbhbh', '1111111111', 'hdfvshvhf'),
('Nguyễn Xuân Chiến Tuấn', 'chientuan', '08041996', 'Nam', '1996-08-04', 'chientuan084@gmail.com', '0989765049', 'Thanh Hóa'),
('Nguyễn Xuân Chiến Tuấn1', 'chientuan', '08041996', 'nam', '1996-08-04', 'chientuan084@gmail.com', '11111111123', 'Ha Noi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tuan5`
--
ALTER TABLE `tuan5`
  ADD PRIMARY KEY (`masv`);

--
-- Indexes for table `tuan6`
--
ALTER TABLE `tuan6`
  ADD PRIMARY KEY (`hoten`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tuan5`
--
ALTER TABLE `tuan5`
  MODIFY `masv` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103100401;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
