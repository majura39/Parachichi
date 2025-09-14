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
(1, 'YoungBoy Never Brock Again', 'hiphop', 'Jina Halisi: Kentrell DeSean Gaulden  Maelezo: NBA YoungBoy ni rapper maarufu wa Marekani anayejulikana kwa mtindo wake wa kipekee wa hip-hop na maneno yenye hisia kali. Amejizolea umaarufu mkubwa kupitia nyimbo zenye mashabiki wengi na video zinazoenea mtandaoni.', '13914.jpg'),
(2, 'Barnaba', 'bongo flavor', 'Jina Halisi: Barnaba  Maelezo: Barnaba ni msanii wa muziki wa Tanzania anayejulikana kwa sauti yake ya kipekee na nyimbo zenye mashabiki wengi. Anafanya kazi za kimasomo na burudani, akichanganya midundo ya kisasa na mapokeo ya muziki wa kitanzania.', 'Snapinsta.app_398290534_259579086698572_4746133507338600246_n_1080.jpg'),
(3, 'diamond platnumz ', 'bongo flavor', 'Naseeb Abdul Juma Issack, anayejulikana kitaalam kama Diamond Platnumz, ni msanii wa kurekodi wa bongo flava kutoka Tanzania, mchezaji, mfadhili na mfanyabiashara. Yeye ni mwanzilishi na Mkurugenzi Mtendaji wa WCB Wasafi Record Label, Wasafi Bet na Wasafi Media. Diamond amepata wafuasi wengi katika Afrika Mashariki na Kati. Alikuwa msanii wa kwanza kutoka Afrika kufikia maoni milioni 900 kwenye YouTube.Baada ya kusaini mkataba wa kurekodi na Universal Music mwaka 2017, Platnumz alitoa albamu yake ya tatu ya studio, A Boy from Tandale (2018).Mnamo mwaka 2021, Diamond pamoja na lebo yake ya kurekodi WCB Wasafi walifanya mwingiliano wa Ushirikiano wa 360 na Warner Music Group.', 'wp3811760.jpg'),
(4, 'Ciara', 'RNB', 'Ciara Princess Wilson ni mwimbaji, mtunga nyimbo, mpiga dansi na muigizaji kutoka Marekani. Aligunduliwa na mtayarishaji wa rekodi Jazze Pha katika miaka ya mapema ya 2000, na alijulikana zaidi kwa albamu yake ya kwanza ya studio, Goodies (2004). Wimbo mkuu wa albamu hiyo (ukiwemo Petey Pablo) ulipanda hadi juu ya Billboard Hot 100, wakati wimbo unaofuata, \"1, 2 Step\" (ukiwemo Missy Elliott) na \"Oh\" (ukiwemo Ludacris), zote zilifika nafasi ya pili kwenye chati hiyo. Albamu hiyo ilikubaliwa kuwa na kiwango cha dhahabu mara nne na Shirikisho la Sekta ya Rekodi la Marekani (RIAA), na ilipokea uteuzi mbili katika Tuzo za Grammy za Mwaka wa 48. Ciara pia alijitokeza kwenye single za mwaka 2005 \"Lose Control\" na Missy Elliott na \"Like You\" na Bow Wow, zote ambazo zilifika nafasi ya tatu kwenye Billboard Hot 100.', '326277.jpg'),
(5, ' Joh Makini', 'hiphop', 'John Simon Mseke (alizaliwa Machi 27, 1980), anayejulikana kwa jina lake la jukwaani Joh Makini, ni msanii wa hip hop na mtungaji wa nyimbo kutoka Tanzania.Yeye ni mmoja wa wanachama wa kundi la Hip Hop la Tanzania liitwalo Weusi na pia ni mwanzilishi na Mkurugenzi Mtendaji wa lebo yake ya muziki, Makini Music. Joh Makini anatokea Arusha Tanzania na ni mmoja wa rappers walioheshimiwa zaidi nchini.', '254883_TUpTY3SNzlcrtyrG92ME9hdNjiTW_s.jpg'),
(6, 'Kontawa', 'hiphop/singeli', 'Abdu Hamid Said, maarufu kama Kontawa (alizaliwa Julai 12, 1996, mjini Dar es Salaam, Tanzania), ni rapper wa Kitanza, mwimbaji, mtungaji wa nyimbo, muigizaji, mfano, na mhamasishaji wa chapa. Mnamo mwaka wa 2023, alishinda tuzo ya Msanii Bora Anayekuja wa Mwaka katika Tuzo za Muziki za Tanzania za mwaka 2022. Mnamo mwaka wa 2024, aliteuliwa kati ya rapper bora katika Tuzo za Muziki za Tanzania.', 'OIP.jpg'),
(7, 'Rostam', 'hiphop', 'ROSTAM ni duo maarufu ya hip hop kutoka Tanzania, inayojumuisha Roma Mkatoliki na Stamina Shorwebwenzi. Duo hii inajulikana kwa mashairi yenye nguvu, simulizi zenye ufahamu, na nishati isiyoshindika kwenye jukwaa, ROSTAM inatoa muziki unaohamasisha. ...', 'Screenshot 2025-08-28 183155.png'),
(9, 'Gunna', 'hiphop', 'Sergio Giavanni Kitchens (alizaliwa Juni 14, 1993), anajulikana kitaalamu kama Gunna, ni rapper, mwimbaji, mtunzi wa nyimbo na mtayarishaji wa rekodi kutoka Marekani. Alijiunga na lebo ya Young Thug, YSL Records, ambayo ni sehemu ya 300 Entertainment mnamo mwaka 2016, na alipata umaarufu na mchanganyiko wake wa tatu, Drip Season 3 (2018).', 'OIP (1).jpg'),
(10, 'Mocco Genius', 'singeli', 'Mtayarishaji wa muziki wa Kitanzania na msanii Mocco Genius anashirikiana na nyota wa Bongo Flava Marioo kwenye wimbo mpya kabisa uliopewa jina \"Fitingi.\" Wimbo huu unaoeleweka na wa kupigiwa mbwembwe unachanganya hisia za Afrobeat pamoja na melodi za Bongo Flava.', 'IMG_0236.jpeg'),
(11, 'Nize', 'Bongo flavor / hiphop', 'Anajiita big foot underground king kija mwenye kipaji kikubwa anaekuja vizuri kwenye game', 'IMG-20250903-WA0021.jpg');

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
