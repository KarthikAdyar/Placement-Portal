-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2019 at 03:36 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placement`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `c_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `Date` date NOT NULL,
  `package` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`c_id`, `name`, `Date`, `package`) VALUES
(1, 'Infosys', '2019-09-17', '3.6'),
(2, 'ITC infotech', '2019-08-22', '3.5'),
(3, 'IBM', '2019-09-18', '4.25'),
(4, '24[7]', '2019-11-22', '3');

-- --------------------------------------------------------

--
-- Table structure for table `company_enquiry`
--

CREATE TABLE `company_enquiry` (
  `c_name` varchar(25) NOT NULL,
  `c_email` varchar(30) NOT NULL,
  `phone` int(15) NOT NULL,
  `branch` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_enquiry`
--

INSERT INTO `company_enquiry` (`c_name`, `c_email`, `phone`, `branch`, `description`) VALUES
('Microsoft', 'microsoft@gmail.com', 88723476, 'CS', 'Dynamic CSE students needed'),
('Google', 'mail@google.com', 2147483647, 'CS', 'Its google');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `usn` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `yearofjoining` year(4) DEFAULT NULL,
  `yearofpassing` year(4) DEFAULT NULL,
  `cgpa` float DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `firstname`, `lastname`, `usn`, `email`, `yearofjoining`, `yearofpassing`, `cgpa`, `gender`, `branch`) VALUES
(1, 'Karthik', 'Adyar', '4sf16cs066', 'karthik@gmail.com', 2016, 2020, 7.12, 'M', 'C.S.E'),
(2, 'Krishna', 'Prasad', '4sf16cs069', 'kp@gmail.com', 2016, 2020, 10, 'M', 'C.S.E'),
(3, 'Karthik', 'M', '4SF15CS068', 'karthikkarti@gmail.com', 2015, 2020, 6, 'M', 'C.S.E');

-- --------------------------------------------------------

--
-- Table structure for table `student_placements`
--

CREATE TABLE `student_placements` (
  `s_id` int(11) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_placements`
--

INSERT INTO `student_placements` (`s_id`, `c_id`) VALUES
(1, 1),
(3, 4),
(2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
