-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2020 at 04:44 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `educo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin` varchar(100) NOT NULL,
  `passw` varchar(100) NOT NULL,
  `adm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin`, `passw`, `adm`) VALUES
('admin', '12345', ''),
('admin', '1234', 'admin'),
('arafat', '12345', ''),
('sakib', '12345', ''),
('shawon', '12345', '');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `main_salary` int(11) NOT NULL,
  `number_of_classes` int(11) NOT NULL,
  `paid_salary` int(11) NOT NULL,
  `still_not_paid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `user_name`, `full_name`, `password`, `main_salary`, `number_of_classes`, `paid_salary`, `still_not_paid`) VALUES
(1, 'arnab', 'nayeem al tamzid bhuiyan', 'ar018323', 2500, 8, 1500, 1000),
(2, 'nayeem', 'nayeem bhuiyan', 'na018323', 2000, 15, 1500, 500),
(3, 'tamzid', 'tamzid', '1234', 1000, 10, 500, 500),
(4, 'asad', 'asaduzzaman sakib', '12345', 1000, 2, 500, 500),
(5, 'hossain', 'arafat hossain', '1022', 10000, 6, 10000, 0),
(6, 'shd', 'shawon hd', '00123', 5000, 4, 5000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `uname`
--

CREATE TABLE `uname` (
  `usname` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uname`
--

INSERT INTO `uname` (`usname`, `pass`) VALUES
('molom', '3456'),
('SAMIYA', '789'),
('wer', '789'),
('kamal', '123'),
('kamal', '789'),
('urmi', '12345'),
('navid', '1232'),
('kamal', '123'),
('urmi', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
