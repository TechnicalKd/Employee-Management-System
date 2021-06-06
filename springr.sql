-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2021 at 10:45 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `springr`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_of_joining` varchar(255) NOT NULL,
  `date_of_leaving` varchar(255) NOT NULL,
  `still_working` tinyint(1) NOT NULL DEFAULT '0',
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`id`, `name`, `email`, `date_of_joining`, `date_of_leaving`, `still_working`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Burton Stephens', 'qeheke@mailinator.com', '2007-03-26', '', 1, 'gallery/60bd282e67585.jpg', '2021-06-06 19:55:26', '2021-06-06 19:55:26'),
(3, 'Hillary Trevino', 'hyser@mailinator.com', '1986-10-28', '2005-03-06', 0, 'gallery/60bd285ae059c.jpg', '2021-06-06 19:56:11', '2021-06-06 19:56:11'),
(4, 'Melissa Dennis', 'selagobok@mailinator.com', '1971-09-01', '', 1, 'gallery/60bd2a267fa81.jpg', '2021-06-06 20:03:50', '2021-06-06 20:03:50'),
(6, 'Tamekah Spencer', 'corohoto@mailinator.com', '1999-11-19', '2011-04-09', 0, 'gallery/60bd2aea751ff.jpg', '2021-06-06 20:07:06', '2021-06-06 20:07:06'),
(7, 'KIRAN BALASAHEB DEVKAR', 'kirandevkar5519@gmail.com', '2021-06-01', '2021-06-22', 0, 'gallery/60bd3038c40de.jpg', '2021-06-06 20:29:45', '2021-06-06 20:29:45'),
(8, 'Judith Palmer', 'teza@mailinator.com', '2021-06-01', '', 1, 'gallery/60bd3246a0693.jpg', '2021-06-06 20:38:30', '2021-06-06 20:38:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
