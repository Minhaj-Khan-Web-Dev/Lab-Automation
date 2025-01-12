-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2023 at 03:23 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(90) NOT NULL,
  `cust_email` varchar(90) NOT NULL,
  `cust_dob` date NOT NULL,
  `cust_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cust_id`, `cust_name`, `cust_email`, `cust_dob`, `cust_password`) VALUES
(7, 'Minhaj Khan', 'minhaj@gmail.com', '2005-02-02', 'master'),
(9, 'dasdas', 'SMH', '0000-00-00', 'shahbharwa1'),
(12, 'Minhaj', 'Minhaj', '2222-02-22', 'shahbharwa1'),
(15, 'Minhaj Khan33', 'nigg@gmail.com', '1203-11-02', 'shahbharwa1');

-- --------------------------------------------------------

--
-- Table structure for table `tester`
--

CREATE TABLE `tester` (
  `T_id` int(11) NOT NULL,
  `t_name` varchar(90) NOT NULL,
  `t_email` varchar(90) NOT NULL,
  `t_age` int(11) NOT NULL,
  `t_pass` varchar(90) NOT NULL,
  `t_img` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tester`
--

INSERT INTO `tester` (`T_id`, `t_name`, `t_email`, `t_age`, `t_pass`, `t_img`) VALUES
(12, 'adad', 'Nigga@gmail.com', 1, '123', 'images/4d672bc7-7f80-4ed6-a8d6-27b2f4c03e04.jpg'),
(15, 'Hamza', 'Hamza@gmail.com', 20, 'master', 'images/4d672bc7-7f80-4ed6-a8d6-27b2f4c03e04.jpg'),
(16, 'Malik', 'Malik@gmail.com', 22, 'master', 'images/cat.jpg'),
(17, '32423', 'SMH@gmail.com', 342, 'shahbharwa1', 'images/cat.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cust_id`),
  ADD UNIQUE KEY `cust_email` (`cust_email`);

--
-- Indexes for table `tester`
--
ALTER TABLE `tester`
  ADD PRIMARY KEY (`T_id`),
  ADD UNIQUE KEY `t_email` (`t_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tester`
--
ALTER TABLE `tester`
  MODIFY `T_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
