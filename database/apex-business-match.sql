-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2022 at 12:55 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apex-business-match`
--

-- --------------------------------------------------------

--
-- Table structure for table `entlogin`
--

CREATE TABLE `entlogin` (
  `Email` varchar(40) NOT NULL,
  `Password` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `investerlogin`
--

CREATE TABLE `investerlogin` (
  `Email` varchar(50) NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `investerlogin`
--

INSERT INTO `investerlogin` (`Email`, `Password`) VALUES
('jobhub@gmail.com', '12345'),
('nam@abc.com', '12345'),
('naman@abc.com', 'n'),
('ram@gmail.com', '12345'),
('sdf@gfgdf.com', 'hh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entlogin`
--
ALTER TABLE `entlogin`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `investerlogin`
--
ALTER TABLE `investerlogin`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
