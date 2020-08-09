-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2020 at 05:27 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `books_to_buy`
--

CREATE TABLE `books_to_buy` (
  `id` int(11) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `category` varchar(100) NOT NULL,
  `pages` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books_to_buy`
--

INSERT INTO `books_to_buy` (`id`, `uname`, `book_name`, `author`, `category`, `pages`, `price`) VALUES
(1, 'Papa Smurf', 'sharksinsuits', 'blackdante101', 'Comic book', 12, 1.3),
(3, 'Papa Smurf', 'shh', 'kudos', 'Cookbook', 1, 1.3);

-- --------------------------------------------------------

--
-- Table structure for table `librarytbl`
--

CREATE TABLE `librarytbl` (
  `id` int(11) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `category` varchar(200) NOT NULL,
  `pages` int(11) NOT NULL,
  `book_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `librarytbl`
--

INSERT INTO `librarytbl` (`id`, `uname`, `book_name`, `author`, `category`, `pages`, `book_date`) VALUES
(1, 'Papa Smurf', '5am Club', 'Robin Sharma', 'Self help', 306, '24-06-2020'),
(4, 'BlackDante', 'Social Studies For Senior Schools', 'Approachers Series', 'Encyclopedia', 500, '2020-08-14'),
(7, 'Papa Smurf', 'catsgallery', 'blackdante101', 'Cookbook', 22, '');

-- --------------------------------------------------------

--
-- Table structure for table `usertbl`
--

CREATE TABLE `usertbl` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertbl`
--

INSERT INTO `usertbl` (`id`, `fname`, `lname`, `username`, `email`, `dob`, `gender`, `password`) VALUES
(1, 'admin', 'Adam', 'Papa Smurf', 'abukarizaidan@yahoo.com', '2020-08-11', 'Male', 'papa2020'),
(3, 'Abukari', 'Einus', 'BlackDante', 'gitproject49@gmail.com', '2020-08-11', 'Male', 'blackboi'),
(4, 'sam', 'otchere', 'blackdante20', 'dsff', 'fds', 'fds', 'dfsfdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books_to_buy`
--
ALTER TABLE `books_to_buy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `librarytbl`
--
ALTER TABLE `librarytbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertbl`
--
ALTER TABLE `usertbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books_to_buy`
--
ALTER TABLE `books_to_buy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `librarytbl`
--
ALTER TABLE `librarytbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `usertbl`
--
ALTER TABLE `usertbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
