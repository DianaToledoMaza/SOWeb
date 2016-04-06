-- phpMyAdmin SQL Dump
-- version 4.2.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 29, 2016 at 07:27 PM
-- Server version: 5.5.41-log
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `so`
--

-- --------------------------------------------------------

--
-- Table structure for table `notas`
--

CREATE TABLE IF NOT EXISTS `notas` (
  `Usuario` varchar(255) NOT NULL,
  `Nota` varchar(255) NOT NULL,
`ID` int(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `notas`
--

INSERT INTO `notas` (`Usuario`, `Nota`, `ID`) VALUES
('Diana', 'Te amo', 1),
('Diana', 'Te amo', 2),
('Itzel', 'Te amo H <3', 3),
('Itzel', 'ahgda', 4),
('Itzel', 'jajajaj', 5),
('Itzel', 'maÃ±ana entregar proyecto ', 6),
('Itzel', ' Te am ', 7),
('Itzel', '  Te amo', 9),
('Itzel', '  Te  ', 10),
('Itzel', ':3', 11),
('Itzel', 'hhhhhh', 12),
('Itzel', 'ernesto', 14),
('Itzel', ' ernesto csoas', 15),
('Itzel', ' ernesto 2', 16),
('Itzel', '  ernesto 3', 17),
('Itzel', 'cosas malas', 18),
('Itzel', 'mas cosas :v', 19),
('Itzel', 'ayudame', 20);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `Usuario` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Tipo` int(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Telefono` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`Usuario`, `Password`, `Tipo`, `Email`, `Telefono`) VALUES
('carlos', '1', 1, 'kinrikis@hotmail.com', 324543),
('Diana', '123', 0, '', 0),
('Itzel', '1', 1, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notas`
--
ALTER TABLE `notas`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`Usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notas`
--
ALTER TABLE `notas`
MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
