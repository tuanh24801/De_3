-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2021 at 06:58 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_quanlybenhvien`
--

-- --------------------------------------------------------

--
-- Table structure for table `patientt`
--

CREATE TABLE `patientt` (
  `patienid` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `dateofbirth` date NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `height` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `blood_type` varchar(50) NOT NULL,
  `created_on` date NOT NULL DEFAULT current_timestamp(),
  `modified_on` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patientt`
--

INSERT INTO `patientt` (`patienid`, `firstname`, `lastname`, `dateofbirth`, `gender`, `mobile`, `email`, `height`, `weight`, `blood_type`, `created_on`, `modified_on`) VALUES
(1, 'Nguyễn', 'Anh', '2001-08-24', 1, '0379452201', 'tuanh12a12001@gmail.com', '165', '55', 'A', '2021-10-21', '0000-00-00'),
(3, 'Hoàng', 'Anh', '2001-04-04', 0, '0379452211', 'hoanganh@gmail.com', '170', '56', 'B', '2021-10-21', '2021-10-21'),
(9, 'Nguyễn Thị', 'Kim Anh', '2019-01-02', 0, '0379452301', 'kimanh@gmail.com', '160', '45', 'O', '2021-10-21', '2021-10-21'),
(11, 'Ngô Tấn', 'Phát ', '2021-09-28', 1, '0382461514', 'phat@gmail.com', '167', '73', 'B', '2021-10-21', '2021-10-21'),
(12, 'Phạm Quang', 'Phương', '2021-10-09', 1, '0475452201', 'Phuong@gmail.com', '175', '50', 'O', '2021-10-21', '2021-10-21'),
(13, 'Nguyễn Thị', 'Kim Cheo', '2006-02-04', 0, '0382461612', 'KimAnh2@gmail.com', '167', '40', 'A', '2021-10-21', '2021-10-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patientt`
--
ALTER TABLE `patientt`
  ADD PRIMARY KEY (`patienid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patientt`
--
ALTER TABLE `patientt`
  MODIFY `patienid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
