-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2018 at 06:05 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rendileht`
--

-- --------------------------------------------------------

--
-- Table structure for table `esemed`
--

CREATE TABLE `esemed` (
  `id` int(11) NOT NULL,
  `kategooria_id` int(11) NOT NULL,
  `kasutaja_id` int(11) NOT NULL,
  `nimi` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `lühikirjeldus` varchar(50) NOT NULL,
  `kirjeldus` text NOT NULL,
  `asukoht` varchar(255) NOT NULL,
  `post_image` varchar(255) DEFAULT NULL,
  `lisamise_aeg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `esemed`
--

INSERT INTO `esemed` (`id`, `kategooria_id`, `kasutaja_id`, `nimi`, `slug`, `lühikirjeldus`, `kirjeldus`, `asukoht`, `post_image`, `lisamise_aeg`) VALUES
(5, 2, 2, 'Lauamäng \"Alias\"', '1', '', '<p>Alias on vahva s&otilde;naseletusm&auml;ng, kus peab oskama v&auml;ljenduda teiste s&otilde;nadega s.t kiireid vihjeid ja seletusi andes tuleb m&auml;ngupartner saada &auml;ra arvama v&otilde;imalikult palju s&otilde;nu. M&auml;ngukarbis on kahepoolne m&auml;ngulaud, kus &uuml;hel poolel on s&otilde;nad jagatud kategooriatesse asjad ja esemed, ametid ja inimesed, omadus- ja tegus&otilde;nad. Raskema poole peal jagunevad s&otilde;nad 4 erinevasse r&uuml;hma: &uuml;mbritsev maailm, sport ja kehakultuur, ajaviide ja kultuur ning aforismid ja vanas&otilde;nad. Alias on mitmek&uuml;lgne s&otilde;naseletusm&auml;ng, mis sobib nii t&auml;iskasvanutele kui ka lastele.<br />\r\nM&auml;ngukarbis on kahepoolne m&auml;ngulauad, 400 s&otilde;nakaarti, liivakell, 6 m&auml;ngunuppu ja m&auml;ngureeglid. Vanus: alates 7. eluaastast M&auml;ngijaid: 4 ja rohkem M&auml;nguaeg: u. 60 min.</p>\r\n', 'Tartumaa', NULL, '2018-03-22 10:57:45'),
(6, 2, 2, 'Saboteur', '', '', '<p>Sa t&ouml;&ouml;tad p&ouml;ialpoisina kaevanduses ja Sind innustab mitte ainult suur armastus t&ouml;&ouml; vastu, vaid ka teadmine, et v&otilde;id leida maap&otilde;uest salakambritesse peidetud kulda. P&ouml;ialpoiss-kaevuri elu ei ole meelakkumine - vahel juhtub, et keegi Sinu kolleegidest &uuml;ritab takistada teisi m&auml;ngijaid kulda leidmast. Ja see ei ole veel k&otilde;ik &ndash; kui Sa vaid teaksid, kes kaasm&auml;ngijatest on Sinuga &uuml;hes paadis, kes aga t&ouml;&ouml;tab teie vastu. Selle &uuml;le saab otsustada m&auml;ngu k&auml;igus kaasm&auml;ngijate tegevuse j&auml;rgi...<br />\r\n<br />\r\nM&auml;ngukomplekt: 44 tunnelikaarti, 28 kullakaarti, 27 tegevuskaart, 11 p&ouml;ielpoisikaarti, m&auml;ngureeglid (eesti, l&auml;ti, leedu ja vene keeles)</p>\r\n', 'Tartumaa', NULL, '2018-03-22 10:58:59'),
(7, 1, 2, 'DJI Mavic Pro droon', '', '', '<p>DJI Mavic Pro kompaktses vormis on peidus DJI uusimad droonitehnoloogiad. 24 tuuma andmete arvutamiseks, t&auml;iesti uus saatjas&uuml;steem 4 km t&ouml;&ouml;raadiusega, 5 vision sensorit ning 3-teljeliselt stabiliseeritud 4K kaamera. Mavic droon kasutab FlightAutonomy tehnoloogiat, mis on v&otilde;imeline tuvastama takistusi kuni 15 m kauguselt. Droon v&otilde;ib lennates takistusi v&auml;ltida v&otilde;i vajadusel peatuda ja h&otilde;ljuma j&auml;&auml;da. Seadmel on maksimaalne lennuaeg 27 minutit ja lennukaugus 13 km - t&auml;nu sellele on Mavic v&otilde;imeline lendama kauem. DJI Mavic toetab 4K videosalvestust, mist&otilde;ttu ei kasutata mitte elektroonilist vaid mehhaanilist stabilisaatorit. Droonis on kasutusel 3-teljeline gimbal, mis stabiliseerib kaamera ka v&auml;ga kiire lennu ajal, luues sellega platvormi sujuvate fotode ja videote jaoks.</p>\r\n\r\n<ul>\r\n	<li>NB! Enne drooniga lendamist vii end kurssi Eesti Vabariigis kehtiva seadusandlusega ning lenda drooniga vastutustundlikult. Lennulubade ja lennupiirangute kohta saate t&auml;psemat infot <a href=\"https://www.lennuluba.ee/\">SIIT</a>.</li>\r\n	<li>Kokkuvolditava disainiga, transpordiasendis v&auml;ike kui veepudel, lihtne k&otilde;ikjale kaasa v&otilde;tta</li>\r\n	<li>Uus OcuSync s&uuml;steem toetab kuni 4 km t&ouml;&ouml;raadiust</li>\r\n	<li>Lenda kuni 64 km/h v&otilde;i lausa 27 minutit &uuml;he laadimisega</li>\r\n	<li>Stabiliseeritud 4K videosalvestus</li>\r\n	<li>ActiveTrack, TapFly ja muud nutikad lahendused teevad videosalvestuse imelihtsaks</li>\r\n</ul>\r\n', 'Tartumaa', NULL, '2018-03-22 11:07:35'),
(18, 1, 4, 'pealkiri', 'pealkiri', 'lühikirjeldus', '<p>pikem kirjeldus</p>\r\n', 'Tartumaa', NULL, '2018-03-24 16:57:33');

-- --------------------------------------------------------

--
-- Table structure for table `kasutajad`
--

CREATE TABLE `kasutajad` (
  `id` int(11) NOT NULL,
  `eesnimi` varchar(255) NOT NULL,
  `perenimi` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefon` varchar(14) NOT NULL,
  `parool` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kasutajad`
--

INSERT INTO `kasutajad` (`id`, `eesnimi`, `perenimi`, `email`, `telefon`, `parool`) VALUES
(1, 're', 'jlkj', 'jslkfsdf@gmail.com', '', '69fb46f4c18463dd25002aeffc0257d1'),
(2, 'asajsdh', 'ajkhjk', 'ssss@gmail.com', '', '69fb46f4c18463dd25002aeffc0257d1'),
(3, 'asd', 'dds', 'rrr@gmail.com', '', '9ccb59017fec7749e5f779106e6163cb'),
(4, 'omar', 'purik', 'omar.purik@gmail.com', '58594939', '0d6b0942de5309b33e0ab809ef4667d8');

-- --------------------------------------------------------

--
-- Table structure for table `kategooriad`
--

CREATE TABLE `kategooriad` (
  `id` int(11) NOT NULL,
  `kategooria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategooriad`
--

INSERT INTO `kategooriad` (`id`, `kategooria`) VALUES
(1, 'Elektroonika'),
(2, 'Mängud'),
(3, 'Spordivahendid'),
(4, 'Riided');

-- --------------------------------------------------------

--
-- Table structure for table `kommentaarid`
--

CREATE TABLE `kommentaarid` (
  `id` int(11) NOT NULL,
  `eseme_id` int(11) NOT NULL,
  `positaja_id` int(11) NOT NULL,
  `tekst` text NOT NULL,
  `aeg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kommentaarid`
--

INSERT INTO `kommentaarid` (`id`, `eseme_id`, `positaja_id`, `tekst`, `aeg`) VALUES
(1, 13, 0, 'tere', '2018-03-24 16:38:07'),
(2, 18, 0, 'kommentaar', '2018-03-24 16:58:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `esemed`
--
ALTER TABLE `esemed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kasutajad`
--
ALTER TABLE `kasutajad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategooriad`
--
ALTER TABLE `kategooriad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kommentaarid`
--
ALTER TABLE `kommentaarid`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `esemed`
--
ALTER TABLE `esemed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `kasutajad`
--
ALTER TABLE `kasutajad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategooriad`
--
ALTER TABLE `kategooriad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kommentaarid`
--
ALTER TABLE `kommentaarid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
  
CREATE TABLE `statistika` (
  `id` int(11) AUTO_INCREMENT, AUTO_INCREMENT=1
  `asukoht` varchar(50) NOT NULL,
  `brauser` varchar(50) NOT NULL,
  `opsysteem` varchar(50) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*asukoht muuta maakonnaks ka enne */
ALTER TABLE `esemed` ADD `aadress` VARCHAR(150) NOT NULL AFTER `maakond`;
ALTER TABLE `statistika` ADD `ip` VARCHAR(20) NOT NULL AFTER `id`;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
