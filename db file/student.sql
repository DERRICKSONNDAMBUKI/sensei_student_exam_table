-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2021 at 05:26 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `Name` varchar(100) NOT NULL,
  `AdmNo` int(25) NOT NULL,
  `Class` int(10) NOT NULL,
  `Stream` varchar(45) NOT NULL,
  `English` int(20) NOT NULL,
  `Mathematics` int(20) NOT NULL,
  `Kiswahili` int(20) NOT NULL,
  `chemistry` int(20) NOT NULL,
  `Biology` int(20) NOT NULL,
  `Physics` int(20) NOT NULL,
  `History` int(20) NOT NULL,
  `Geography` int(20) NOT NULL,
  `CRE` int(20) NOT NULL,
  `Business` int(20) NOT NULL,
  `Computer` int(20) NOT NULL,
  `Home_sci` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`Name`, `AdmNo`, `Class`, `Stream`, `English`, `Mathematics`, `Kiswahili`, `chemistry`, `Biology`, `Physics`, `History`, `Geography`, `CRE`, `Business`, `Computer`, `Home_sci`) VALUES
('Ann Njogi', 654, 1, 'E', 90, 33, 67, 56, 60, 44, 48, 65, 49, 54, 49, 34),
('Deno', 700, 4, 'W', 54, 56, 67, 78, 76, 34, 56, 74, 67, 77, 70, 32),
('Enock Osir', 904, 3, 'W', 66, 76, 54, 49, 65, 68, 90, 76, 54, 56, 76, 44),
('Geofry Kimutai', 905, 4, 'W', 45, 63, 61, 67, 22, 54, 68, 65, 61, 76, 79, 40),
('James', 2009, 2, 'N', 34, 67, 54, 43, 49, 47, 90, 56, 59, 65, 53, 28),
('Kim Tanui', 876, 3, 'N', 45, 51, 62, 67, 45, 54, 68, 52, 63, 79, 77, 50),
('Susan', 0, 4, 'E', 45, 76, 44, 67, 45, 85, 45, 35, 36, 86, 54, 34);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`Name`,`AdmNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
