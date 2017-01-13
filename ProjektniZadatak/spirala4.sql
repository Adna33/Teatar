-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2017 at 10:50 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spirala4`
--
CREATE DATABASE IF NOT EXISTS `spirala4` DEFAULT CHARACTER SET utf8 COLLATE utf8_slovenian_ci;
USE `spirala4`;

-- --------------------------------------------------------

--
-- Table structure for table `anketa`
--

DROP TABLE IF EXISTS `anketa`;
CREATE TABLE `anketa` (
  `id` int(11) NOT NULL,
  `glas` varchar(50) COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `anketa`
--

INSERT INTO `anketa` (`id`, `glas`) VALUES
(1, 'Ponekad posjecujem pozoriste'),
(2, 'Nikada ne posjecujem pozoriste'),
(4, 'IzmjenaBaza'),
(5, 'Cesto posjecujem pozoriste'),
(6, 'Nikada ne posjecujem pozoriste');

-- --------------------------------------------------------

--
-- Table structure for table `kritika`
--

DROP TABLE IF EXISTS `kritika`;
CREATE TABLE `kritika` (
  `id` int(11) NOT NULL,
  `predstava` int(11) NOT NULL,
  `tekst` varchar(1000) COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `kritika`
--

INSERT INTO `kritika` (`id`, `predstava`, `tekst`) VALUES
(3, 3, 'Kritika uvazenog administratora, kao bas dobra prestava '),
(4, 5, 'Neki sažetak teksta kritike iz novina bi isao ovdje, ovo je samo test'),
(5, 1, ' Predstava \'U Zvorniku ja sam ostavio svoje srce\' po drami Abdulaha Sidrana koja je svoje literarne vrijednosti, ali i eminentnu kazališnost potvrdila scenskom prisutnošću, kao i trajanjem na našim kazališnim repertoarima...');

-- --------------------------------------------------------

--
-- Table structure for table `predstava`
--

DROP TABLE IF EXISTS `predstava`;
CREATE TABLE `predstava` (
  `id` int(11) NOT NULL,
  `ime` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `dan` varchar(30) COLLATE utf8_slovenian_ci NOT NULL,
  `opis` varchar(200) COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `predstava`
--

INSERT INTO `predstava` (`id`, `ime`, `dan`, `opis`) VALUES
(1, 'U zvorniku ja sam ostavio svoje srce', 'Ponedeljak', 'Mjesto prikazivanja je Pozoriste mladih.Poslije je organizovan razgovor za glumcima. Cijena karte je 10 km.'),
(2, 'Vremenski tunel', 'Srijeda', 'Mjesto prikazivanja: Pozoriste mladih. Cijena karte je 8 km. Dostupne su studentske karte, sa popustom od 15%.'),
(3, 'Annie', 'Srijeda', 'Narodnom pozorištu, gledajte jedan od najpoznatijih mjuzikla svih vremena. Cijena karte: 10KM.'),
(4, 'Alma', 'Cetvrtak', 'Igra u Narodnom pozorištu. Cijena karte za ovu operu je 10 KM.'),
(5, 'Radnja na uglu', 'Petak', 'Igra u kamernom teatru. Dostupne karte po promotivnoj cijeni od 7km.'),
(6, 'Palčica', 'Utorak', 'Igra u Narodnom pozorištu, adaptacija Andersenove bajke. Ulaz za odrasle 10km, a za djecu 5km.'),
(7, 'Otkrivanje Žene', 'Petak', 'Igra u Narodnom pozorištu. Cijena karte: 10 KM. Rezervacije dostupne na stranici Narodnog Pozorišta.'),
(8, 'Tramvaj Zvani Žudnja', 'Srijeda', 'Ne propustite hit predstavu u SARTR-u. Ulaz besplatan u koprodukciji sa art teatrom.'),
(9, 'Tajna Džema od Malica', 'Ponedeljak', 'Po treci put u SARTR-u. Cijena karte : 15 km. Moguć popust za studente, na upit.'),
(10, 'U potrazi za djeda mrazom', 'Subota', 'Za malisane u Pozorištu mladih. Nakon predstave podjela paketića djeci.'),
(11, 'Sastanak na vrhu', 'Ponedeljak', 'Spektakl u narodnom pozorištu, cijena karte 10 km. ');

-- --------------------------------------------------------

--
-- Table structure for table `preplata`
--

DROP TABLE IF EXISTS `preplata`;
CREATE TABLE `preplata` (
  `id` int(11) NOT NULL,
  `ime` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `prezime` varchar(200) COLLATE utf8_slovenian_ci NOT NULL,
  `telefon` varchar(20) COLLATE utf8_slovenian_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `preplata`
--

INSERT INTO `preplata` (`id`, `ime`, `prezime`, `telefon`, `mail`) VALUES
(1, 'Adna', 'Karkelja', '061-900-878', 'adna1karkelja@gmail.com'),
(2, 'Lejla', 'Kesko', '099-000-053', 'lejla@gmail.com'),
(3, 'Korisnik', 'prezime', '000-030-333', 'nesto@gmail.com'),
(4, 'baza', 'proba', '994-343-444', 'baza@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `privilegije`
--

DROP TABLE IF EXISTS `privilegije`;
CREATE TABLE `privilegije` (
  `username` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `privilegije`
--

INSERT INTO `privilegije` (`username`, `password`) VALUES
('admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `raspored`
--

DROP TABLE IF EXISTS `raspored`;
CREATE TABLE `raspored` (
  `id` int(11) NOT NULL,
  `vrijeme` datetime NOT NULL,
  `predstava` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `raspored`
--

INSERT INTO `raspored` (`id`, `vrijeme`, `predstava`) VALUES
(1, '2017-01-12 20:00:00', 3),
(2, '2017-02-14 21:00:00', 2),
(3, '2017-01-12 21:00:00', 4);

-- --------------------------------------------------------

--
-- Table structure for table `utisak`
--

DROP TABLE IF EXISTS `utisak`;
CREATE TABLE `utisak` (
  `id` int(11) NOT NULL,
  `ime` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `komentar` varchar(200) COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `utisak`
--

INSERT INTO `utisak` (`id`, `ime`, `komentar`) VALUES
(1, 'User', 'kom'),
(2, 'Nameee', 'novi komentar'),
(3, 'Anonimni korisnik', 'Anonimni komentar'),
(4, 'Adna Karkelja', 'Proba utiska, sve radi'),
(5, 'Baza proba', 'upis u bazu podataka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anketa`
--
ALTER TABLE `anketa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kritika`
--
ALTER TABLE `kritika`
  ADD PRIMARY KEY (`id`),
  ADD KEY `predstava` (`predstava`);

--
-- Indexes for table `predstava`
--
ALTER TABLE `predstava`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `preplata`
--
ALTER TABLE `preplata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `raspored`
--
ALTER TABLE `raspored`
  ADD PRIMARY KEY (`id`),
  ADD KEY `predstava` (`predstava`);

--
-- Indexes for table `utisak`
--
ALTER TABLE `utisak`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anketa`
--
ALTER TABLE `anketa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kritika`
--
ALTER TABLE `kritika`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `predstava`
--
ALTER TABLE `predstava`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `preplata`
--
ALTER TABLE `preplata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `raspored`
--
ALTER TABLE `raspored`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `utisak`
--
ALTER TABLE `utisak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `kritika`
--
ALTER TABLE `kritika`
  ADD CONSTRAINT `kritika_ibfk_1` FOREIGN KEY (`predstava`) REFERENCES `predstava` (`id`);

--
-- Constraints for table `raspored`
--
ALTER TABLE `raspored`
  ADD CONSTRAINT `raspored_ibfk_1` FOREIGN KEY (`predstava`) REFERENCES `predstava` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
