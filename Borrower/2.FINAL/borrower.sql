-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2022 at 02:50 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `borrower`
--

-- --------------------------------------------------------

--
-- Table structure for table `borrowerlist`
--

CREATE TABLE `borrowerlist` (
  `uname` varchar(16) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `firstname` varchar(16) NOT NULL,
  `lastname` varchar(16) NOT NULL,
  `age` int(4) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `mobileno` varchar(11) NOT NULL,
  `email` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrowerlist`
--

INSERT INTO `borrowerlist` (`uname`, `pass`, `firstname`, `lastname`, `age`, `gender`, `mobileno`, `email`) VALUES
('batman', 'Iambatman420', 'Bruce', 'Wayne', 34, 'Male', '1236541025', 'batman@wayne.com'),
('ironman', 'Ironman00', 'Tony', 'Stark', 36, 'Male', '02147483647', 'ironman@stark.com'),
('Superman', 'Superman00', 'Clark', 'Wayne', 36, 'Male', '01236541199', 'superman@hotmail.com'),
('wonderwoman', 'Wonderwoman84', 'Diana', 'Princess', 39, 'Female', '01230212302', 'wonderwoman@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `borrowertoadmin`
--

CREATE TABLE `borrowertoadmin` (
  `cid` int(11) NOT NULL,
  `uname` varchar(16) NOT NULL,
  `mobileno` varchar(11) NOT NULL,
  `email` varchar(32) NOT NULL,
  `complaint` varchar(4096) NOT NULL,
  `cdate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrowertoadmin`
--

INSERT INTO `borrowertoadmin` (`cid`, `uname`, `mobileno`, `email`, `complaint`, `cdate`) VALUES
(52011, 'Superman', '01236541200', 'superman@hotmail.com', 'agfedfvdgggggggggggggggs', '2022-08-06'),
(52012, 'Superman', '01236541200', 'superman@hotmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 5   PARAGRAPHS  ', '2022-08-06'),
(52013, 'Superman', '01236541200', 'superman@hotmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 5   PARAGRAPHS  ', '2022-08-06'),
(52014, 'Superman', '01236541200', 'superman@hotmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 5   PARAGRAPHS  ', '2022-08-06'),
(52015, 'ironman', '02147483647', 'ironman@stark.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 5   PARAGRAPHS  ', '2022-08-06'),
(52016, 'ironman', '02147483647', 'ironman@stark.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 5   PARAGRAPHS  ', '2022-08-06'),
(52017, 'Superman', '01236541200', 'superman@hotmail.com', 'uaysgfbcyjhasnbnxcjhzbcjhzbxvcjhasdasv', '2022-08-06'),
(52018, 'wonderwoman', '01230212302', 'wonderwoman@gmail.com', 'The service is not good. The UI is terrible!', '2022-08-08'),
(52019, 'wonderwoman', '01230212302', 'wonderwoman@gmail.com', 'This is really bad!', '2022-08-08');

-- --------------------------------------------------------

--
-- Table structure for table `brequesteditem`
--

CREATE TABLE `brequesteditem` (
  `brid` int(16) NOT NULL,
  `uname` varchar(16) NOT NULL,
  `pname` varchar(32) NOT NULL,
  `category` varchar(32) NOT NULL,
  `budget` double NOT NULL,
  `brdate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brequesteditem`
--

INSERT INTO `brequesteditem` (`brid`, `uname`, `pname`, `category`, `budget`, `brdate`) VALUES
(4260011, 'Superman', 'Nokia 3300', 'Mobile', 5000, '2022-08-07'),
(4260012, 'Superman', 'DSLR', 'camera', 500, '2022-08-07'),
(4260015, 'Superman', 'Wooden Table', 'Furniture', 450, '2022-08-08'),
(4260016, 'wonderwoman', 'Steel Chair', 'Furniture', 100, '2022-08-08');

-- --------------------------------------------------------

--
-- Table structure for table `owneritemsforrent`
--

CREATE TABLE `owneritemsforrent` (
  `orid` int(11) NOT NULL,
  `ouname` varchar(32) NOT NULL,
  `pname` varchar(32) NOT NULL,
  `rentp` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owneritemsforrent`
--

INSERT INTO `owneritemsforrent` (`orid`, `ouname`, `pname`, `rentp`) VALUES
(429151, 'philipspufferfish', 'DSLR', 1500),
(429152, 'jonkabir', 'Guitar', 50000),
(429153, 'elontesla', 'Electric Car', 200000),
(429154, 'shroud', 'Logitech Mouse', 3000),
(429155, 'oabama', 'Blackberry Phone', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pid` int(16) NOT NULL,
  `uname` varchar(16) NOT NULL,
  `pmethod` varchar(16) NOT NULL,
  `amount` double NOT NULL,
  `pdate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pid`, `uname`, `pmethod`, `amount`, `pdate`) VALUES
(42900, '', 'haha', 500, '2022-08-08'),
(42901, 'Superman', 'Visa', 0, '2022-08-08'),
(42902, 'Superman', 'Visa', 0, '2022-08-08'),
(42903, 'Superman', 'Visa', 0, '2022-08-08'),
(42904, 'Superman', 'Visa', 0, '2022-08-08'),
(42905, 'Superman', 'Bkash', 0, '2022-08-08'),
(42906, 'Superman', 'Visa', 0, '2022-08-08'),
(42907, 'Superman', 'Visa', 0, '2022-08-08'),
(42908, 'wonderwoman', 'Visa', 0, '2022-08-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `borrowerlist`
--
ALTER TABLE `borrowerlist`
  ADD PRIMARY KEY (`uname`);

--
-- Indexes for table `borrowertoadmin`
--
ALTER TABLE `borrowertoadmin`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `brequesteditem`
--
ALTER TABLE `brequesteditem`
  ADD PRIMARY KEY (`brid`);

--
-- Indexes for table `owneritemsforrent`
--
ALTER TABLE `owneritemsforrent`
  ADD PRIMARY KEY (`orid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `borrowertoadmin`
--
ALTER TABLE `borrowertoadmin`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52020;

--
-- AUTO_INCREMENT for table `brequesteditem`
--
ALTER TABLE `brequesteditem`
  MODIFY `brid` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4260017;

--
-- AUTO_INCREMENT for table `owneritemsforrent`
--
ALTER TABLE `owneritemsforrent`
  MODIFY `orid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=429156;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pid` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42909;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
