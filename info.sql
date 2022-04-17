-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2022 at 02:33 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `name`, `email`, `country`, `address`, `role`, `username`, `password`) VALUES
(42, 'rajan', 'monanagpure17@gmail.com', 'Albania', 'morgaon', 'admin', 'rajni1234', 'rajniEEEE44444444444'),
(49, 'ererer', 'monanagpure17@gmail.com', 'Afghanistan', 'jalgaon jamod', 'Admin', 'epiz_30228579', 'WWdfdf454'),
(50, 'ererer', 'monanagpure17@gmail.com', 'Afghanistan', 'jalgaon jamod', 'Admin', 'epiz_30228579', 'WWdfdf454'),
(51, 'ererer', 'monanagpure17@gmail.com', 'Afghanistan', 'jalgaon jamod', 'Admin', 'epiz_30228579', 'WWdfdf454'),
(52, 'ererer', 'monanagpure17@gmail.com', 'Afghanistan', 'jalgaon jamod', 'Admin', 'epiz_30228579', 'WWdfdf454'),
(53, 'e', 'monanagpure17@gmail.com', 'Albania', 'jalgaon jamod', 'Sub Admin', 'epiz_30228579', 'WWWerr45'),
(54, 'e', 'monanagpure17@gmail.com', 'Albania', 'jalgaon jamod', 'Sub Admin', 'epiz_30228579', 'WWWerr45'),
(55, 'e', 'monanagpure17@gmail.com', 'Albania', 'jalgaon jamod', 'Sub Admin', 'epiz_30228579', 'WWWerr45'),
(56, 'e', 'monanagpure17@gmail.com', 'Albania', 'jalgaon jamod', 'Sub Admin', 'epiz_30228579', 'WWWerr45'),
(57, 'dedfdfdf', 'monanagpure17@gmail.com', 'Afghanistan', 'jalgaon jamod', 'Admin', 'epiz_30228579', 'dWWWdddfer454'),
(58, 'dedfdfdf', 'monanagpure17@gmail.com', 'Afghanistan', 'jalgaon jamod', 'Admin', 'epiz_30228579', 'dWWWdddfer454'),
(59, 'kiran', 'monanagpure17@gmail.com', 'Albania', 'jalgaon jamod', 'Admin', 'monali', 'Mona1234'),
(60, 'kiran', 'monanagpure17@gmail.com', 'Albania', 'jalgaon jamod', 'Admin', 'monali', 'Mona1234'),
(63, 'Rajni', 'r@gmail.com', 'Algeria', 'hadapsar pune', 'admin', 'monali', 'WWee23456'),
(64, 'Rajni', 'r@gmail.com', 'Algeria', 'hadapsar pune', 'admin', 'monali33333', 'WWee23456gg'),
(65, 'damini', 'd@gmail.com', 'Afghanistan', 'jalgaon jamod', 'subadmin', 'epiz_30228579', 'ddd'),
(66, 'damini1234', 'd1234@gmail.com', 'Algeria', 'jalgaon jamod1111', 'admin', 'Dhole123444what', 'SHYam3456789'),
(68, 'shyam', 's@gmail.com', 'Algeria', 'hadapsar pune', 'admin', 'shyamn', 'SHyam34566'),
(69, 'Dhole', 'Dholr@gmail.com', 'Albania', 'pune', 'agent', 'sdhole', 'DHole1234'),
(70, 'Dhole', 'Dholr@gmail.com', 'Albania', 'pune', 'agent', 'sdhole', 'DHole1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
