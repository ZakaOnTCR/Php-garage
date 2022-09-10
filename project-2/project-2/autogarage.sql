-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2022 at 11:53 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autogarage`
--

-- --------------------------------------------------------

--
-- Table structure for table `auto`
--

CREATE TABLE `auto` (
  `Autokenteken` varchar(10) NOT NULL,
  `Automerk` text NOT NULL,
  `Autotype` varchar(15) NOT NULL,
  `Autokmstand` int(10) NOT NULL,
  `Klantid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auto`
--

INSERT INTO `auto` (`Autokenteken`, `Automerk`, `Autotype`, `Autokmstand`, `Klantid`) VALUES
('04-JDK-9 ', 'Volkswagen', 'Polo', 4087, 4),
('37-TVR-1', 'Opel', 'Corsa', 4087, 5),
('67-YB-44', 'Tatra', '603', 309872, 6),
('95-RP-LR', 'Fiat', 'Doblo', 143989, 7),
('HV-GB-23', 'Jaguar', 'XJ6', 2043439, 8),
('89-PG-GP', 'suzoikie', 'se', 1234, 9);

-- --------------------------------------------------------

--
-- Table structure for table `gebruikers`
--

CREATE TABLE `gebruikers` (
  `gebruikerid` int(11) NOT NULL,
  `gebruikernaam` varchar(30) NOT NULL,
  `gebruikerleeftijd` date NOT NULL,
  `gebruikeremail` varchar(100) NOT NULL,
  `gebruikerwachtwoord` varchar(100) NOT NULL,
  `gebruikerrol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gebruikers`
--

INSERT INTO `gebruikers` (`gebruikerid`, `gebruikernaam`, `gebruikerleeftijd`, `gebruikeremail`, `gebruikerwachtwoord`, `gebruikerrol`) VALUES
(10, 'osama', '2022-01-25', 'osama@gmail.com', '1234', 'planner'),
(11, 'alaa', '2022-01-03', 'alaa@gmail.com', '1234', 'directie'),
(12, 'tawfik', '2022-01-04', 'tawfik@gmail.com', '1234', 'systeembeheerder'),
(14, 'test', '2022-01-03', 'test@gmail.com', '1234', 'directie');

-- --------------------------------------------------------

--
-- Table structure for table `klant`
--

CREATE TABLE `klant` (
  `klantid` int(11) NOT NULL,
  `klantnaam` varchar(64) NOT NULL,
  `klantadres` varchar(35) NOT NULL,
  `klantpostcode` varchar(10) NOT NULL,
  `klantplaats` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `klant`
--

INSERT INTO `klant` (`klantid`, `klantnaam`, `klantadres`, `klantpostcode`, `klantplaats`) VALUES
(1, 'Eijeriks, Anjo', 'Dijkwal 145b', '3015CD', 'Rotterdam'),
(2, 'Poenai, V', 'Schiphollan', '3213BV', 'Rotterdam'),
(3, 'Stoop, Sam', 'Stooppelin 45', '2023KL', 'Lekkerkerk'),
(4, 'Efes, Mo', 'Noorderweg 321', '4532BV', 'Schiedam'),
(5, 'Vliet, Sandra van', 'Hoofdweg 7', '3483MN', 'Capelle'),
(6, 'Kelvin, G', 'Celsiuslaan 273', '4532BV', 'Capelle'),
(8, 'El Ouafa, Saida', 'Binnenweg 229', '3045HG', 'Rotterdam'),
(10, 'Antonic, H', 'Hoofdstraat 54', '2932BB', 'Schiedam'),
(13, 'Nikola, N', 'Nikostraat 24', '3028NN', 'rotterdam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`Klantid`);

--
-- Indexes for table `gebruikers`
--
ALTER TABLE `gebruikers`
  ADD PRIMARY KEY (`gebruikerid`);

--
-- Indexes for table `klant`
--
ALTER TABLE `klant`
  ADD PRIMARY KEY (`klantid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auto`
--
ALTER TABLE `auto`
  MODIFY `Klantid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `gebruikers`
--
ALTER TABLE `gebruikers`
  MODIFY `gebruikerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `klant`
--
ALTER TABLE `klant`
  MODIFY `klantid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
