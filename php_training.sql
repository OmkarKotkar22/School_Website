-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2026 at 03:43 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_training`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactform`
--

CREATE TABLE `contactform` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` int(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `opinion` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactform`
--

INSERT INTO `contactform` (`id`, `name`, `mobile`, `email`, `opinion`, `message`) VALUES
(1, 'omkar', 2147483647, 'omkar@gmail.com', 'INSTAGRAM', 'i like insta');

-- --------------------------------------------------------

--
-- Table structure for table `enquiryform`
--

CREATE TABLE `enquiryform` (
  `id` int(11) NOT NULL,
  `Full_Name` varchar(100) NOT NULL,
  `Father_Name` varchar(100) NOT NULL,
  `Mother_Name` varchar(100) NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `Aadhar_Number` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Mobile_Number` int(11) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Stream` varchar(100) NOT NULL,
  `Previous_Class` int(11) NOT NULL,
  `Hobbies` varchar(100) NOT NULL,
  `Account_Number` int(11) NOT NULL,
  `Religion` varchar(100) NOT NULL,
  `Category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiryform`
--

INSERT INTO `enquiryform` (`id`, `Full_Name`, `Father_Name`, `Mother_Name`, `Date_of_Birth`, `Aadhar_Number`, `Email`, `Mobile_Number`, `Gender`, `City`, `Stream`, `Previous_Class`, `Hobbies`, `Account_Number`, `Religion`, `Category`) VALUES
(1, 'Omkar Koktar', 'Thaksen', 'Kavita', '2017-06-14', 2147483647, 'omkar@gmail.com', 2147483647, 'male', 'Ahilyanagar', 'science', 11, 'swimming', 2147483647, 'Hindu', 'Maratha');

-- --------------------------------------------------------

--
-- Table structure for table `feeform`
--

CREATE TABLE `feeform` (
  `id` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feeform`
--

INSERT INTO `feeform` (`id`, `Email`, `Password`, `Fee`) VALUES
(1, 'omkar@gmail.com', 'omkar1234', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `loginform`
--

CREATE TABLE `loginform` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loginform`
--

INSERT INTO `loginform` (`id`, `email`, `password`) VALUES
(1, 'omkar@gmail.com', 'omkar12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactform`
--
ALTER TABLE `contactform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiryform`
--
ALTER TABLE `enquiryform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feeform`
--
ALTER TABLE `feeform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loginform`
--
ALTER TABLE `loginform`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactform`
--
ALTER TABLE `contactform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enquiryform`
--
ALTER TABLE `enquiryform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feeform`
--
ALTER TABLE `feeform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `loginform`
--
ALTER TABLE `loginform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
