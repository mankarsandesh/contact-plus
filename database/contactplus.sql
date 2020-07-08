-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 14, 2019 at 04:16 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contactplus`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contactId` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `middleName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `landline` varchar(10) NOT NULL,
  `notes` text NOT NULL,
  `addedby` int(11) NOT NULL,
  `status` enum('public','private','','') NOT NULL,
  `view` int(11) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contactId`, `firstName`, `middleName`, `lastName`, `photo`, `email`, `mobile`, `landline`, `notes`, `addedby`, `status`, `view`, `date`) VALUES
(1, 'Sandesh', 'Shivaji', 'Mankar', 'upload/unnamed.jpg', 'mankarsandesh111@gmail.com', '9702242036', '9702242036', 'This is a test', 1, 'public', 25, '2019-07-14 14:13:21'),
(3, 'Bipin', '', 'Thabe', 'img/user.png', 'bipin@gmail.com', '3434343433', '', 'This is a Test', 1, 'public', 6, '2019-07-14 13:42:48'),
(4, 'Tushar', '', 'Hadawale', 'upload/User_Logo.png', 'tushar@gmail.com', '9702242036', '', 'This is a testing', 3, 'public', 0, '2019-07-14 13:46:07'),
(5, 'Ajay', '', 'Kewat', 'upload/64176077.jpg', 'ajay@gmail.com', '2167267167', '8238627327', 'ndjwhu dwugduwhdjwjhdghgb', 3, 'public', 2, '2019-07-14 14:01:39'),
(6, 'Sachin', 'Shivaji', 'Mankar', 'img/user.png', 'sachin@gmail.com', '6768797979', '978787878', 'bjdhsjdhjshdjhsdgs', 1, 'private', 2, '2019-07-14 14:05:57');

-- --------------------------------------------------------

--
-- Table structure for table `contactview`
--

CREATE TABLE `contactview` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `contactId` int(11) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `fullname`, `email`, `password`, `date`) VALUES
(1, 'Sandesh Mankar', 'mankarsandesh@gmail.com', '123', '2019-07-14 14:12:37'),
(2, 'Suresh Mankar', 'mankarsandesh11@gmail.com', '123', '2019-07-14 14:12:44'),
(3, 'Bipin', 'bipin@gmail.com', '123', '2019-07-14 12:41:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contactId`);

--
-- Indexes for table `contactview`
--
ALTER TABLE `contactview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contactId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contactview`
--
ALTER TABLE `contactview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
