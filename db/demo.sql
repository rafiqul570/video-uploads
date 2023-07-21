-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2023 at 02:25 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `c_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`c_id`, `video_id`, `name`, `email`, `message`) VALUES
(12, 20, 'Rafiqul Islam', 'rafiqul.master5@gmail.com', '          VARY GOOD'),
(13, 20, 'MD RUHUL AMIN', 'mainul@gmail.com', '          \r\n\r\nRafiqul Islam\r\nrafiqul.master5@gmail.com\r\nVARY GOOD\r\n\r\nবাংলাদেশে এই প্রথম আন্তর্জাতিক আলেম কর্তৃক ডিজিটাল পদ্ধতিতে কুরআন শিক্ষা ক্লাস-১\r\n\r\nSarabangla Ak FojlulHaq\r\n\r\n\r\n\r\nবাংলাদেশে এই প্রথম আন্তর্জাতিক আলেম কর্তৃক ডিজিটাল পদ্ধতিতে কুরআন শিক্ষা ক্লাস-১\r\n'),
(14, 20, 'MD RUHUL AMIN', 'mainul@gmail.com', '          \r\n\r\nRafiqul Islam\r\nrafiqul.master5@gmail.com\r\nVARY GOOD\r\n\r\nবাংলাদেশে এই প্রথম আন্তর্জাতিক আলেম কর্তৃক ডিজিটাল পদ্ধতিতে কুরআন শিক্ষা ক্লাস-১\r\n\r\nSarabangla Ak FojlulHaq\r\n\r\n\r\n\r\nবাংলাদেশে এই প্রথম আন্তর্জাতিক আলেম কর্তৃক ডিজিটাল পদ্ধতিতে কুরআন শিক্ষা ক্লাস-১\r\n');

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
(3, 'Admin', 1721853793, '81dc9bdb52d04dc20036dbd8313ed055', 1);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `comments_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `comments_id`, `title`, `file`) VALUES
(16, 0, 'বাংলাদেশে এই প্রথম আন্তর্জাতিক আলেম কর্তৃক ডিজিটাল পদ্ধতিতে কুরআন শিক্ষা ক্লাস-১', '646b474b72565mp4'),
(17, 0, 'Sarabangla Ak FojlulHaq', '646b477a24990mp4'),
(18, 0, 'Sarabangla Ak FojlulHaq', '646c09ef51b7amp4'),
(19, 0, 'বাংলাদেশে এই প্রথম আন্তর্জাতিক আলেম কর্তৃক ডিজিটাল পদ্ধতিতে কুরআন শিক্ষা ক্লাস-১', '646c09fd69837mp4'),
(20, 0, 'Sarabangla Ak FojlulHaq', '646c0a1036c30mp4'),
(21, 0, 'Sarabangla Ak FojlulHaq', '646c0a4d7f2c2mp4'),
(22, 0, 'বাংলাদেশে এই প্রথম আন্তর্জাতিক আলেম কর্তৃক ডিজিটাল পদ্ধতিতে কুরআন শিক্ষা ক্লাস-১', '646c0a5d3a7b6mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`video_id`) REFERENCES `videos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
