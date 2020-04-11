-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2020 at 09:18 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid`
--

-- --------------------------------------------------------

--
-- Table structure for table `nth`
--

CREATE TABLE `nth` (
  `id` int(4) NOT NULL,
  `name` varchar(60) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `adult` varchar(1) NOT NULL,
  `child` varchar(1) NOT NULL,
  `address` varchar(2000) NOT NULL,
  `city` varchar(60) NOT NULL,
  `district` varchar(60) NOT NULL,
  `PIN` varchar(6) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nth`
--

INSERT INTO `nth` (`id`, `name`, `mobile`, `adult`, `child`, `address`, `city`, `district`, `PIN`, `status`) VALUES
(0, 'Suraj Goswami', '9932184832', '4', '1', 'House no. A111, Shivam Park, Benachity, City:Durgapur, District:Burdwan, State:West Bengal, PIN:713213', 'Durgapur', 'Burdwan', '713213', 'SEEN'),
(1, 'Anand Goswami', '8927321488', '0', '2', 'House no. A111, Room No. 228, HCMMs Hostel, jalpaiguri polytechnic institute, danguajhar, , City:Jalpaiguri, District:jalpaiguri, State:West Bengal, PIN:735102', 'Jalpaiguri', 'jalpaiguri', '735102', 'SEEN'),
(2, 'Suraj Goswami', '0123456789', '6', '1', 'House no. A111, A111 Shivam park, benachity, , City:Durgapur, District:bardawan, State:West Bengal, PIN:713213', 'Durgapur', 'bardawan', '713213', 'UN-SEEN'),
(3, 'Suraj Goswami', '1234567890', '3', '5', 'House no. a111, Room No. 228, HCMMs Hostel, jalpaiguri polytechnic institute, danguajhar, , City:Jalpaiguri, District:bardawan, State:West Bengal, PIN:735102', 'Jalpaiguri', 'bardawan', '735102', 'UN-SEEN');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `id` int(1) NOT NULL,
  `name` varchar(60) NOT NULL,
  `mobile` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`id`, `name`, `mobile`) VALUES
(1, 'Suraj Goswami', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `wth`
--

CREATE TABLE `wth` (
  `name` varchar(60) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `token` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wth`
--

INSERT INTO `wth` (`name`, `mobile`, `token`) VALUES
('Suraj Goswami', '9932158654', '0'),
('Suraj Goswami', '9932184832', '0'),
('Suraj Goswami', '9932184832', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nth`
--
ALTER TABLE `nth`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
