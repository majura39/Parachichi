-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql312.infinityfree.com
-- Generation Time: Sep 14, 2025 at 03:21 PM
-- Server version: 11.4.7-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_39801681_parachichi`
--

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `ngoma` varchar(222) NOT NULL,
  `aina` varchar(222) NOT NULL,
  `kipengele` varchar(222) NOT NULL,
  `img` varchar(222) NOT NULL,
  `video` varchar(222) NOT NULL,
  `maelezo` varchar(500) NOT NULL,
  `mwaka` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `ngoma`, `aina`, `kipengele`, `img`, `video`, `maelezo`, `mwaka`) VALUES
(1, 'Deja Vu X Izra twentynine', 'Only God Can Judge Me', 'hiphop', 'trending', 'IMG-20220202-WA0016.jpg', 'IMG_6567.MP4', '\"Only God Can Judge Me\" ni wimbo unaogusa nafsi, ukitoa ujumbe mzito wa maisha, mapambano, na imani. DÃ©jÃ  vu na Izra Twentynine wameleta mashairi ya ukweli yanayochoma mioyo na kuacha alama. Huu si wimbo wa kawaida â€“ ni ushuhuda.', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
