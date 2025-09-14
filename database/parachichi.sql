-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2025 at 08:57 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `id` int(222) NOT NULL,
  `name` varchar(222) NOT NULL,
  `ngoma` varchar(222) NOT NULL,
  `aina` varchar(222) NOT NULL,
  `kipengele` varchar(222) NOT NULL,
  `img` varchar(222) NOT NULL,
  `audio` varchar(222) NOT NULL,
  `maelezo` varchar(500) NOT NULL,
  `downloads` int(11) NOT NULL,
  `mwaka` int(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`id`, `name`, `ngoma`, `aina`, `kipengele`, `img`, `audio`, `maelezo`, `downloads`, `mwaka`) VALUES
(7, 'SZA', 'Special', 'RnB', 'trendingnow', 'SZA.png', '16 Special.m4a', ' ngoma kali inayopatikana kwenye album ya sos', 0, 2025),
(8, '2pac', 'Fame', 'HipHop/Rap', 'oldschool', '2pac.png', '2Pac – Fame.mp3', ' ngoma ya mwisho ya tupac kurecord kabla ya kifo chake Fame itabaki kua ngoma ya muda wote ya hiphp kutoka kwa tupac', 14, 2025),
(9, '6ix9ine', 'GTL', 'HipHop/Trap', 'trendingnow', 'Cover.jpg', '12 GTL 1 - (SongsLover.com).mp3', ' bonge moja la ngoma humu ndani 69 hajatumia fujo nyingi ila ngoma imetulia sana', 2, 2025),
(10, 'Billie Eilish', 'ilomilo', 'RnB', 'trendingnow', 'bcover.jpg', '11. ilomilo.mp3', ' when we all fall a sleep where do we go, bonge moja la album kutoka kwa mwanadada mrembo na mwenye kipaji billie humu ndani ndipo utaipata hii ngoma ya ilomilo', 1, 2025),
(11, 'Card B', 'Best Life Feat Chance The Rapper', 'HipHop/Trap', 'trendingnow', 'card b.png', 'Cardi B – Best Life (feat. Chance The Rapper).mp3', ' album bora ya mwaka 2021 kutoka kwa card be invasion of privacy humu ndimo imepatikana hii ngoma ya best life bionge moja la ngoma enjoy', 8, 2025),
(12, 'beyonce', 'Ego', 'RnB', 'oldschool', 'TMPSNAPSHOT1487359622581.jpg', '207-beyonce-ego.mp3', ' bonge moja la ngoma kutoka kwa beyonce', 0, 2025),
(13, 'YoungBoy Never Brock Again', 'red', 'HipHop/Trap', 'trendingnow', 'yb2.png', '06-YoungBoy-Never-Broke-Again-Red-(HiphopKit.com).mp3', ' ngoma kali kutoka kwa Yb', 2, 2025),
(14, '2pac', 'hail mary', 'HipHop/Rap', 'oldschool', 'makaveli.png', '2Pac – Hail Mary.mp3', ' ngoma kali kutoka kwa goat wa hip hop hail mary kutoka kwenye album ya makaveli', 99, 2025),
(15, 'YoungBoy Never Brock Again', 'House Arrest Tingz', 'HipHop/Trap', 'trendingnow', 'top.png', 'YoungBoy Never Broke Again – House Arrest Tingz.mp3', ' moja kati ya nyimbo zake bora za muda wote ni hii ', 6, 2025),
(16, 'YoungBoy Never Brock Again', 'Austronaut kid', 'HipHop/Trap', 'trendingnow', 'un.png', 'YoungBoy Never Broke Again – Astronaut Kid.mp3', ' bonge moja la ngoma huyu jamaa anakipaji', 14, 2025),
(17, 'YoungBoy Never Brock Again', 'We poppin', 'HipHop/Trap', 'trendingnow', 'un.png', 'YoungBoy Never Broke Again – We Poppin (feat. Birdman).mp3', ' bonge la feature', 47, 2025),
(18, 'kendrick lamar', 'Peekaboo', 'HipHop/Rap', 'trendingnow', '1732335378103.jpg', '09-Kendrick-Lamar-peekaboo-(HipHopKit.com).mp3', ' bonge moja la ngoma kutoka kwa kdot', 21, 2025),
(19, 'Migos', 'walk it talk it', 'hiphop/trap', 'trending', 'Screenshot 2025-08-27 040815.png', '06. Walk It Talk It.mp3', 'ngoma bora zaidi kutoka kwa migos bad and boujee wakiwa wamemshirikisha mzee mzima drake', 1, 2025);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
