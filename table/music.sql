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
(1, 'Rostam', 'ABDUL', 'hiphop', 'trending', 'ROSTAM-â€“-ABDUL-Roma-vs-Stamina.jpg', 'ROSTAM â€“ ABDUL (Roma vs Stamina) (1).mp3', 'Rostam  wanakupeleka kwenye dunia ya muziki na Abdul, wimbo wenye maneno yanayokufanya uendelee kuisikiliza.', 0, 2025),
(2, 'Joh Makini', 'A city', 'hiphop', 'trending', 'Joh-Makini-A-city.jpg', 'Joh Makini - A city (1).mp3', 'Joh Makini anazidi kushika mood â€“ A City ni wimbo wa moto, unakufanya uendelee kusikiliza.\r\nMistari yake ina onyesha uhalisia wa maisha ya jiji na ndoto za vijana.', 0, 2025),
(3, 'Kontawa', 'Somemore(Ft. Jay Melody)', 'hiphop', 'trending', 'Kontawa-Ft-Jay-Melody-â€“-Somemore-1536x1536.jpg', 'Kontawa Ft. Jay Melody â€“ Somemore.mp3', 'Sikiliza Somemore â€“ collaboration hii ya Kontawa na Jay Melody inakupeleka kwenye safari ya beat kali na lyrics zinazokugusa.\r\nNi wimbo unaokufanya uendelee kuusikiliza tena na tena.', 0, 2025),
(4, 'Gunna', 'Forever (ft wizkid)', 'hiphop', 'trending', 'https___images.genius.com_f40afc736a7decbe423bd4e72b4c54b1.1000x1000x1.png', 'Gunna-ft-Wizkid-Forever-Be-Mine-(Macknaija.com).mp3', 'Sikiliza Forever â€“ Gunna anakupeleka kwenye safari ya beats kali na lyrics zinazokugusa moyo.\r\nNi wimbo unaokufanya ujisikie confident na motivated.', 0, 2025),
(5, 'Chella', 'loyal', 'Afrobeat', 'trending', 'https___images.genius.com_964a31690b08de925c30f4f22fc5b1f4.640x640x1.jpg', 'Chella-Loyal-(parachichi.rf.gd).mp3', 'Chella ametuletea Loyal, wimbo unaochanganya melody safi, lyrics zenye mvuto, na beat ya kusikiliza nonstop.', 12, 2025),
(6, 'Chella', 'darling(ft diamond platnumz)', 'Afrobeat', 'trending', 'https___images.genius.com_964a31690b08de925c30f4f22fc5b1f4.640x640x1.jpg', 'Chella-ft-Diamond-Platnumz-My-Darling-Mpenzi-Wangu-(parachichi.rf.gd).mp3', 'Sikiliza Darling â€“ wimbo wa Chella na Diamond Platnumz unaochora hadithi ya upendo wa dhati.\r\nVocals laini na rhythm inayokamata moyo yanakufanya usikie kila neno.', 6, 2025),
(7, 'Barnaba', 'Salama (ft Diamond Platnumz)', 'Bongo Flaver', 'trending', 'Barnaba-Ft.-Diamond-Platnumz-â€“-Salama.jpg', 'Barnaba-ft-Diamond-Platnumz-Salama-(Macknaija.com).mp3', 'Salama â€“ collaboration yenye nguvu kutoka kwa Barnaba na Diamond Platnumz, ikikuletea romantic energy.', 6, 2025),
(8, 'Ciara', 'Low (ft Diamond Platnumz)', 'pop', 'trending', 'cia-dia-1536x864.jpg', 'Ciara-ft-Diamond-Platnumz-Low-(Macknaija.com).mp3', 'Low â€“ collaboration yenye nguvu kutoka kwa Ciara, ikikuletea mix ya emotion na rhythm ya kupendeza.\r\nMistari yake laini na hook yenye mvuto vinakufanya uendelee kusikiliza.', 3, 2025),
(9, 'YoungBoy Never Brock Again', 'Missing Everything', 'hiphop', 'trending', 'I_Just_Got_a_Lot_on_My_Shoulders.jpeg', 'YoungBoy-Never-Broke-Again-Missing-Everything.mp3', 'Missing Everything â€“ NBA YoungBoy anashiriki hisia zake za kweli juu ya upweke na kupoteza, akichanganya melody laini na lyrics zinazogusa moyo.', 6, 2025),
(10, 'YoungBoy Never Brock Again', 'fire your manager (ft play boy carti)', 'hiphop', 'trending', 'https___images.genius.com_5eebb40a50e66be52ec69013a944c507.1000x1000x1.png', '05-YoungBoy-Never-Broke-Again-Fire-Your-Manager-Ft-Playboi-Carti-(parachichi.rf.gd).mp3', 'Fire Your Manager â€“ Wimbo huu unamonyesha NBA YoungBoy akiwa na mood ya power na determination, akieleza masuala ya biashara na management ya maisha yake ya muziki.', 14, 2025),
(11, 'Mocco X country boy', 'pele maradona', 'hiphop', 'trending', 'Moni-Centrozone-Country-Wizzy-Pele-Maradona-feat-Billnass-mp3-image.jpg', 'Moco X Moni Centrozone & Country Wizzy Ft Billnass â€“ Pele Maradona.mp3', 'Pele Maradona ni wimbo wenye beat ya kisasa na rhythm ya kuvutia, ukiwashirikisha Moco na Country Boy kutoa vibes ya shauku na energy ya juu.', 11, 2025),
(12, 'mtu safi ft dogo elisha X baddest 47', 'vikao vya wanaume', 'singeli', 'trending', 'Mtusafi-Vikao-Vya-Wanaume-mp3-image.jpg', 'Mtusafi Ft. Dogo elisha X Baddest 47 X P Mawenge - Vikao vya wanaume.mp3', 'Kikao cha Wanaume ni wimbo wenye vibe ya urafiki na kuzungumza maisha ya kila siku, ukiwashirikisha Mtu Safi na Dogo Elisha kwa flow kali.', 10, 2025),
(13, 'Mchina Mweusi', 'Mishenyento', 'singeli', 'trending', 'Mchina-Mweusi-Mishenyento-.jpg', 'Mchina Mweusi - Mishenyento .mp3', 'ngoma kali sana ya singeli kutoka kwa mchina mweusi', 7, 2025),
(14, 'Mocco Genious', 'Maokoto', 'singeli', 'trending', 'Mocco-Genius-â€“-Maokoto-1536x1536.jpg', 'Mocco Genius â€“ Maokoto.mp3', 'beat kali ya singeli ngoma inaitwa maokoto trend ya kitaa kutoka kwa mocco', 8, 2025),
(15, 'Nize', 'Very far', 'Pop/bongo flavor', 'Trending', 'Screenshot_20250903-205748.png', 'AUD-20250903-WA0012.mp3', 'Bonge moja la ngoma kutoka kwa underground king Big foot Nize ngoma inaelezea mapenzi ya mbali Yaani long distance relationship  sikiliza uenjoy', 56, 2025),
(16, 'Nize', 'Stranger', 'Bongo flavor / hiphop', 'Trending', 'IMG-20250904-WA0000(1).jpg', 'Nize - Stranger .mp3', 'Kijana anaekuja vizuri na anatoa back to back hit song hii hapa stranger idea Kali ngoma kali', 19, 2025),
(18, 'D Voice', 'Chizi wee', 'Singeli', 'Singeli', 'Screenshot1752682285457.JPG', 'D Voice - Chizi Wee.mp3', 'Muziki mzuri wenye ladha halisi ya Singeli ladha, pata muda wako wa kuisikiliza', 6, 2025);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
