-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2022 at 07:42 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `print`
--

-- --------------------------------------------------------

--
-- Table structure for table `kra`
--

CREATE TABLE `kra` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL,
  `pf` enum('NL','ER','CR') NOT NULL,
  `pin` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `pname` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kra`
--

INSERT INTO `kra` (`id`, `email`, `phone`, `pf`, `pin`, `pass`, `pname`) VALUES
(1, 'isaaacmuteru@gmail.com', 708998098, 'CR', '1234', '2348', '7933-RN1-AAIRUEY.pdf'),
(2, 'isaaacmuteru@gmail.com', 708998098, 'CR', '1234', '2348', '4905-RN1-AAIRUEY.pdf'),
(3, 'isaaacmuteru@gmail.com', 708112014, 'NL', '1234', '2348', '5811-RN1-AAIRUEY.pdf'),
(4, 'isaaacmuteru@gmail.com', 708112014, 'NL', '1234', '2348', '5672-RN1-AAIRUEY.pdf'),
(5, 'isaaacmuteru@gmail.com', 708112014, 'NL', '1234', '2348', '5215-RN1-AAIRUEY.pdf'),
(6, 'isaaacmuteru@gmail.com', 708112014, '', '1234', '234', '7239-MbauKra.pdf'),
(7, 'isaaacmuteru@gmail.com', 708112014, '', '1234', '234', '3845-MbauKra.pdf'),
(8, 'isaaacmuteru@gmail.com', 708112014, '', '1234', '234', '9786-updated-p9 (1).pdf'),
(9, 'isaaacmuteru@gmail.com', 708112014, '', '1234', '234', '7169-updated-p9 (1).pdf'),
(10, 'isaaacmuteru@gmail.com', 708112014, '', '1234', '234', '6225-updated-p9 (1).pdf'),
(11, 'isaaacmjuteru@gmail.com', 708112014, '', '1234', '234', '8315-updated-p9 (1).pdf'),
(12, 'isaaacmjuteru@gmail.com', 708112014, '', '1234', '234', '3266-updated-p9 (1).pdf'),
(13, 'isaaacmjuteru@gmail.com', 708112014, '', '1234', '234', '4078-updated-p9 (1).pdf'),
(14, 'isaaacmjuteru@gmail.com', 708112014, '', '1234', '234', '9098-updated-p9 (1).pdf'),
(15, 'isaaacmjuteru@gmail.com', 708112014, '', '1234', '234', '9926-updated-p9 (1).pdf'),
(16, 'isaaacmuteru@gmail.com', 708112014, 'NL', '1234', '234', '7827-'),
(17, 'isaaacmuteru@gmail.com', 708112014, '', '1234', '234', '8188-RN1-AAIRUEY.pdf'),
(18, 'isaaacmuteru@gmail.com', 708112014, '', '1234', '234', '9845-RN1-AAIRUEY.pdf'),
(19, 'isaaacmuteru@gmail.com', 708112014, '', '1234', '234', '4131-MbauKra.pdf'),
(20, 'isaaacmuteru@gmail.com', 708112014, 'CR', '1234', '234', '7664-RN1-AAIRUEY.pdf'),
(21, 'isaaacjkjkmuteru@gmail.com', 708112014, 'ER', '1234', '234', '6728-RN1-AAIRUEY.pdf'),
(22, 'isaaacjkjkmuteru@gmail.com', 708112014, 'ER', '1234', '234', '6657-RN1-AAIRUEY.pdf'),
(23, 'isaaacmuteru@gmail.com', 708112014, 'ER', '12346', '234', '6623-RN1-AAIRUEY.pdf'),
(24, 'isaaacmuteru@gmail.com', 708112014, 'NL', '1234', '234', '6858-'),
(25, 'isaaacmuteru@gmail.com', 708112014, 'NL', '1234', '234', '8830-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kra`
--
ALTER TABLE `kra`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kra`
--
ALTER TABLE `kra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
