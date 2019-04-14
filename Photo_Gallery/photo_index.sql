-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2019 at 10:26 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `photo gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `photo_index`
--

CREATE TABLE `photo_index` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo_index`
--

INSERT INTO `photo_index` (`ID`, `Name`) VALUES
(16, 'jim.png'),
(17, 'hello.jpg'),
(18, 'keegan.jpeg'),
(19, 'dawdaw.png'),
(20, 'awdawd.png'),
(21, 'dawdawd.png'),
(22, 'dawdawda.jpg'),
(23, 'awdawd.png'),
(24, 'dawdawd.jpg'),
(25, 'dawdawd.png'),
(27, 'awdawda.png'),
(28, 'wdawdawd.png'),
(29, 'dawdawd.jpg'),
(32, 'wdawdawd.jpg'),
(33, 'dawddawd.png'),
(34, 'dawdawd.png'),
(35, 'dawdawd.jpg'),
(36, 'awdawda.jpg'),
(37, 'awdawdaw.jpg'),
(38, 'dawdawd.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `photo_index`
--
ALTER TABLE `photo_index`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `photo_index`
--
ALTER TABLE `photo_index`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
