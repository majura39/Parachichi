-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2025 at 08:56 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parachichi`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `id` int(255) NOT NULL,
  `name` varchar(222) NOT NULL,
  `aina` varchar(222) NOT NULL,
  `maelezo` varchar(900) NOT NULL,
  `img` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`id`, `name`, `aina`, `maelezo`, `img`) VALUES
(7, '2pac', 'hiphop', 'Tupac Amaru shakur msanii bora wa hiphop wa muda wote', '285009983_5330594146963170_1316375646326506514_n.jpg'),
(8, 'YoungBoy Never Brock Again', 'hiphop/trap', 'Kentrell Gauldin Almaarufu kama NBA Youngboy', 'top.png'),
(9, 'Billie Eilish', 'pop', 'Msanii pendwa wa mabinti wengi alipata umaarufu mkubwa na ngoma yake ya Bad guy', 'wp4736050.jpg'),
(10, 'Beyonce', 'pop', 'Msanii bora wa kike wa muda wote', 'TMPSNAPSHOT1487359622581.jpg'),
(11, 'Card B', 'hiphop/trap', 'msanii bora wakike wa hiphop wa kizazi kipya', 'card b.png'),
(12, 'SZA', 'pop', 'SZA msanii mwenye kipaji kikubwa sana na sauti yakumtoa nyoka pangoni', 'sz.png'),
(13, 'kendrick lamar', 'hiphop', 'best rapper alive', 'IMG_20241123_082612.jpg'),
(14, 'Migos', 'hiphop/trap', 'group bora zaidi la trap kuwahi kutokea duniani RIP TakeOff', 'Cover.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
