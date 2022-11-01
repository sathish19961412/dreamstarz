-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2022 at 07:30 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shinestarz`
--

-- --------------------------------------------------------

--
-- Table structure for table `registeration`
--

CREATE TABLE `registeration` (
  `artistid` int(250) NOT NULL,
  `artistname` varchar(250) NOT NULL,
  `age` int(250) NOT NULL,
  `specialization` varchar(250) NOT NULL,
  `experiance` varchar(250) NOT NULL,
  `place` varchar(250) NOT NULL,
  `mobile` int(250) NOT NULL,
  `photo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registeration`
--

INSERT INTO `registeration` (`artistid`, `artistname`, `age`, `specialization`, `experiance`, `place`, `mobile`, `photo`) VALUES
(1, 'Oorvasi', 50, 'actress', '20', 'Carela', 89035, 'mother.jpg'),
(2, '	Charlie', 62, ' actor, comedian', '30', 'Thoothukudi', 89035, 'father.jpg'),
(3, 'Manorama', 78, 'actress', '50', 'Thiruvarur', 89035, 'grand-mother.jpg'),
(4, 'sathish', 75, 'actor', '20', 'coimbatore', 89035, 'grand-father.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registeration`
--
ALTER TABLE `registeration`
  ADD PRIMARY KEY (`artistid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registeration`
--
ALTER TABLE `registeration`
  MODIFY `artistid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
