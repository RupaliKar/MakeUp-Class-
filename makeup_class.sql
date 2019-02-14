-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2018 at 01:30 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `makeup_class`
--

-- --------------------------------------------------------

--
-- Table structure for table `class_schedule`
--

CREATE TABLE `class_schedule` (
  `id` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `room` int(11) NOT NULL,
  `teacher` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_schedule`
--

INSERT INTO `class_schedule` (`id`, `subject`, `room`, `teacher`, `date`, `time`) VALUES
(3, 'bangla', 901, '', '2020-02-02', '14:04:00'),
(7, 'english', 601, '', '2018-12-10', '15:01:00'),
(14, '', 902, '', '2018-12-03', '20:00:00'),
(15, '', 902, '', '2018-12-11', '20:00:00'),
(16, '', 901, '', '2018-12-11', '21:00:00'),
(17, '', 801, '', '2018-12-17', '23:00:00'),
(18, '', 905, '', '2018-12-12', '12:30:00'),
(19, '', 907, '', '2018-12-12', '14:00:00'),
(20, '', 908, '', '2018-12-09', '09:00:00'),
(21, '', 900, '', '2018-12-18', '14:01:00'),
(22, '', 800, '', '2018-12-14', '15:21:00'),
(23, '', 901, 'sHorif sir', '2018-12-19', '00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_schedule`
--
ALTER TABLE `class_schedule`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class_schedule`
--
ALTER TABLE `class_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
