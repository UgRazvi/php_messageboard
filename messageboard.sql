-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2024 at 09:49 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `messageboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `compose`
--

CREATE TABLE `compose` (
  `email` varchar(40) NOT NULL,
  `receiverid` varchar(40) NOT NULL,
  `subject` varchar(400) NOT NULL,
  `message` varchar(10000) NOT NULL,
  `curdate` date NOT NULL,
  `curtime` time NOT NULL,
  `senderid` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `compose`
--

INSERT INTO `compose` (`email`, `receiverid`, `subject`, `message`, `curdate`, `curtime`, `senderid`) VALUES
('ugrazvi@gmail.com', 'usman@gmail.com', 'Test 1', 'This is the first testing message from Usman ', '2024-01-09', '14:16:07', 'ugrazvi@gmail.com'),
('ugrazvi@gmail.com', 'admin@test.com', 'Test 2', 'This is the second testing message from Usman to Admin', '2024-01-09', '14:16:43', 'ugrazvi@gmail.com'),
('admin@test.com', 'ugrazvi@gmail.com', 'TEST 3 By ADMIN', 'This is the Third testing message from Admin to USMAN ', '2024-01-09', '14:18:08', 'admin@test.com');

-- --------------------------------------------------------

--
-- Table structure for table `createac`
--

CREATE TABLE `createac` (
  `name` varchar(40) NOT NULL,
  `number` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `createac`
--

INSERT INTO `createac` (`name`, `number`, `email`, `password`) VALUES
('Mohammad Usman Qureshi', '9929114267', 'ugrazvi@gmail.com', 'Usman#101'),
('ADMIN', '9992112476', 'admin@test.com', 'Admin#101');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
