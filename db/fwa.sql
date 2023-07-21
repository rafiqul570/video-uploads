-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2023 at 03:34 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fwa`
--

-- --------------------------------------------------------

--
-- Table structure for table `couple`
--

CREATE TABLE `couple` (
  `id` int(11) NOT NULL,
  `village_name` varchar(110) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `couple_no` int(11) NOT NULL,
  `mar_date` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `wife_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `wife_age` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hus_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hus_age` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `m_c_age` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `l_c_boys` int(11) NOT NULL,
  `l_c_girls` int(11) NOT NULL,
  `m_edu_quali` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nid` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `birth_reg_no` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ftt` varchar(110) NOT NULL,
  `fwa_id` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `couple`
--

INSERT INTO `couple` (`id`, `village_name`, `couple_no`, `mar_date`, `wife_name`, `wife_age`, `hus_name`, `hus_age`, `m_c_age`, `l_c_boys`, `l_c_girls`, `m_edu_quali`, `nid`, `birth_reg_no`, `phone`, `ftt`, `fwa_id`) VALUES
(31, 'Ariamordan', 1, '2022-03-28', 'Rina Akter', '20 year', 'Rifat Haolader', '30Year', '4', 1, 1, 'ssc', '0123456789', '23456789', '01721853793', '1,2,3,4', '\r\n                      6            '),
(32, 'Ariamordan', 2, '2022-03-30', 'Naima', '20 year', 'Sabul', '30Year', '4', 2, 2, 'ssc', '0123456789', '345678', '01977842188', '1,2,3,4,5', '\r\n                      6            '),
(33, 'Ariamordan', 3, '2023-03-30', 'Rina Akter', '20 year', 'Rifat Haolader', '30Year', '4', 2, 1, 'ssc', '0123456789', '22345', '01977842188', '1,2,3,4', '\r\n                      6            '),
(34, 'Ariamordan', 3, '2023-03-30', 'Rina Akter', '20 year', 'Rifat Haolader', '30Year', '4', 2, 1, 'ssc', '0123456789', '22345', '01977842188', '1,2,3,4', '\r\n                      6            '),
(35, 'Ariamordan', 3, '2023-03-30', 'Rina Akter', '20 year', 'Rifat Haolader', '30Year', '4', 2, 1, 'ssc', '0123456789', '22345', '01977842188', '1,2,3,4', '\r\n                      6            '),
(36, 'Ariamordan', 3, '2023-03-30', 'Rina Akter', '20 year', 'Rifat Haolader', '30Year', '4', 2, 1, 'ssc', '0123456789', '22345', '01977842188', '1,2,3,4', '\r\n                      6            '),
(37, 'Ariamordan', 3, '2023-03-30', 'Rina Akter', '20 year', 'Rifat Haolader', '30Year', '4', 2, 1, 'ssc', '0123456789', '22345', '01977842188', '1,2,3,4', '\r\n                      6            '),
(38, 'Ariamordan', 3, '2023-03-30', 'Rina Akter', '20 year', 'Rifat Haolader', '30Year', '4', 2, 1, 'ssc', '0123456789', '22345', '01977842188', '1,2,3,4', '\r\n                      6            '),
(39, 'Ariamordan', 3, '2023-03-30', 'Rina Akter', '20 year', 'Rifat Haolader', '30Year', '4', 2, 1, 'ssc', '0123456789', '22345', '01977842188', '1,2,3,4', '\r\n                      6            '),
(40, 'Ariamordan', 3, '2023-03-30', 'Rina Akter', '20 year', 'Rifat Haolader', '30Year', '4', 2, 1, 'ssc', '0123456789', '22345', '01977842188', '1,2,3,4', '\r\n                      6            '),
(41, 'Ariamordan', 3, '2023-03-30', 'Rina Akter', '20 year', 'Rifat Haolader', '30Year', '4', 2, 1, 'ssc', '0123456789', '22345', '01977842188', '1,2,3,4', '\r\n                      6            '),
(42, 'Ariamordan', 3, '2023-03-30', 'Rina Akter', '20 year', 'Rifat Haolader', '30Year', '4', 2, 1, 'ssc', '0123456789', '22345', '01977842188', '1,2,3,4', '\r\n                      6            '),
(43, 'Ariamordan', 3, '2023-03-30', 'Rina Akter', '20 year', 'Rifat Haolader', '30Year', '4', 2, 1, 'ssc', '0123456789', '22345', '01977842188', '1,2,3,4', '\r\n                      6            ');

-- --------------------------------------------------------

--
-- Table structure for table `fwa`
--

CREATE TABLE `fwa` (
  `id` int(11) NOT NULL,
  `username` varchar(155) CHARACTER SET latin1 NOT NULL,
  `nid` int(11) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `uni` varchar(110) NOT NULL,
  `ward` varchar(110) NOT NULL,
  `upazila` varchar(110) NOT NULL,
  `district` varchar(110) NOT NULL,
  `division` varchar(110) NOT NULL,
  `phone` varchar(100) CHARACTER SET latin1 NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fwa`
--

INSERT INTO `fwa` (`id`, `username`, `nid`, `unit`, `uni`, `ward`, `upazila`, `district`, `division`, `phone`, `password`, `role`) VALUES
(6, 'Sarmin Sultana', 123456789, '2/KA', 'Kachua', '5', 'kachua', 'Bagerhat', 'Khulna', '01308533071', '81dc9bdb52d04dc20036dbd8313ed055', 0);

-- --------------------------------------------------------

--
-- Table structure for table `inspection`
--

CREATE TABLE `inspection` (
  `id` int(11) NOT NULL,
  `couple_no` varchar(155) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Birth_control_system` varchar(155) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Maternal_nutrition_services` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Child_nutrition_services` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fwa_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ins_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inspection`
--

INSERT INTO `inspection` (`id`, `couple_no`, `Birth_control_system`, `Maternal_nutrition_services`, `Child_nutrition_services`, `fwa_id`, `ins_date`) VALUES
(5, '1', 'à¦¬à§œà¦¿', 'yes', 'yes', '\r\n                      6            ', '2023-04-02');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(110) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `phone`, `password`, `role`) VALUES
(3, 'Admin', 1721853793, '709b0a2250712084a25c2b0a8949d1df', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `couple`
--
ALTER TABLE `couple`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fwa`
--
ALTER TABLE `fwa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inspection`
--
ALTER TABLE `inspection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `couple`
--
ALTER TABLE `couple`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `fwa`
--
ALTER TABLE `fwa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `inspection`
--
ALTER TABLE `inspection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
