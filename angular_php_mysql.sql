-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2017 at 08:22 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `angular_php_mysql`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(100) NOT NULL,
  `emp_email_address` varchar(100) NOT NULL,
  `emp_full_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`emp_id`, `emp_name`, `emp_email_address`, `emp_full_name`) VALUES
(24, 'sabuzcode', 'everythingkst@gmail.com', 'Hello Sabuz'),
(25, 'sabuz', 'everythingkst@gmail.com', 'Hello Sabuz'),
(26, 'sabuz', 'everythingkst@gmail.com', 'Hello Sabuz'),
(28, 'sabuz', 'everythingkst@gmail.com', 'Hello Sabuz'),
(29, 'sabuz', 'everythingkst@gmail.com', 'Hello Sabuz'),
(30, 'sabuz', 'everythingkst@gmail.com', 'Hello Sabuz'),
(34, 'Uddin', 'uddin@gmail.com', 'Shihab Uddin'),
(35, 'simon', 'simon@gmail.com', 'Saymon'),
(37, 'Arzu', 'arzu@yahoo.com', 'Hello world'),
(38, 'sabuz', 'everythingkst@gmail.com', 'Hello Firoz to home'),
(39, 'sabuzcode', 'everythingkst@gmail.com', 'Hello Firoz to home'),
(40, 'sabuzcode', 'everythingkst@gmail.com', 'Hello Firoz to home'),
(41, 'sabuzcode', 'everythingkst@gmail.com', 'Hello Firoz to home'),
(42, 'frsmgt@gmail.com', 'everythingkst@gmail.com', 'Hello Firoz to home'),
(43, 'frsmgt@gmail.com', 'everythingkst@gmail.com', 'Hello Firoz to home'),
(44, 'frsmgt@gmail.com', 'everythingkst@gmail.com', 'Hello Firoz to home'),
(45, 'sabuz', 'everythingkst@gmail.com', 'Firoz Rahman Sabuz'),
(46, 'sabuz', 'everythingkst@gmail.com', 'Firoz Rahman Sabuz'),
(47, 'sabuz', 'everythingkst@gmail.com', 'Firoz Rahman Sabuz'),
(48, 'sabuz', 'everythingkst@gmail.com', 'Firoz Rahman Sabuz'),
(49, 'karim', 'everythingkst@gmail.com', 'Firoz Rahman Sabuz'),
(50, 'sabuz', 'everythingkst@gmail.com', 'Firoz Rahman Sabuz'),
(51, 'frsmgt@gmail.com', 'everythingkst@gmail.com', 'Hello Firoz to home'),
(52, 'sabuz', 'everythingkst@gmail.com', 'Hello Firoz to home');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
