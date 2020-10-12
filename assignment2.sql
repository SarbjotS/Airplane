-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2020 at 02:54 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment2`
--

-- --------------------------------------------------------

--
-- Table structure for table `aircraft`
--

CREATE TABLE `aircraft` (
  `craftID` varchar(3) NOT NULL,
  `model` varchar(55) NOT NULL,
  `capacity` int(11) NOT NULL,
  `rangenmi` float NOT NULL,
  `cruisekn` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aircraft`
--

INSERT INTO `aircraft` (`craftID`, `model`, `capacity`, `rangenmi`, `cruisekn`) VALUES
('A01', 'SyberJet SJ30i', 6, 622, 233),
('A02', 'Cirrus SF50', 4, 1171, 342),
('A03', 'HondaJet Elite', 5, 2205, 408);

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `code` varchar(4) NOT NULL,
  `airport` varchar(55) NOT NULL,
  `region` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`code`, `airport`, `region`) VALUES
('NZCI', 'Tuuta Aiport', 'Chatham Islands'),
('NZGB', 'Claris Aerodrome', 'Great Barrier Island'),
('NZNE', 'Dairy Flat Airport', 'North Shore'),
('NZRO', 'Rotorua Aiport', 'Rotorua'),
('NZTL', 'Lake Tekapo Airport', 'Mackenzie District'),
('YSSY', 'Sydney Kingsford Smith Airport', 'Sydney');

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `craftID` varchar(3) NOT NULL,
  `routeID` varchar(3) NOT NULL,
  `flightID` varchar(3) NOT NULL,
  `flightTime` time NOT NULL,
  `day` set('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday') NOT NULL,
  `type` set('ARRIVAL','DEPARTURE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`craftID`, `routeID`, `flightID`, `flightTime`, `day`, `type`) VALUES
('A01', 'R01', 'F01', '15:00:00', 'Friday', 'DEPARTURE'),
('A02', 'R02', 'F02', '08:00:00', 'Monday', 'DEPARTURE'),
('A02', 'R02', 'F03', '16:00:00', 'Monday', 'DEPARTURE'),
('A02', 'R02', 'F04', '08:00:00', 'Tuesday', 'DEPARTURE'),
('A02', 'R02', 'F05', '16:00:00', 'Tuesday', 'DEPARTURE'),
('A02', 'R02', 'F06', '08:00:00', 'Wednesday', 'DEPARTURE'),
('A02', 'R02', 'F07', '16:00:00', 'Wednesday', 'DEPARTURE'),
('A02', 'R02', 'F08', '08:00:00', 'Thursday', 'DEPARTURE'),
('A02', 'R02', 'F09', '16:00:00', 'Thursday', 'DEPARTURE'),
('A02', 'R02', 'F10', '08:00:00', 'Friday', 'DEPARTURE'),
('A02', 'R02', 'F11', '16:00:00', 'Friday', 'DEPARTURE'),
('A02', 'R04', 'F12', '10:00:00', 'Monday', 'DEPARTURE'),
('A02', 'R04', 'F13', '10:00:00', 'Wednesday', 'DEPARTURE'),
('A02', 'R04', 'F14', '10:00:00', 'Friday', 'DEPARTURE'),
('A03', 'R03', 'F15', '11:00:00', 'Tuesday', 'DEPARTURE'),
('A03', 'R03', 'F16', '11:00:00', 'Friday', 'DEPARTURE'),
('A03', 'R05', 'F17', '13:00:00', 'Monday', 'DEPARTURE');

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `routeID` varchar(3) NOT NULL,
  `point1` varchar(4) NOT NULL,
  `point2` varchar(4) NOT NULL,
  `distance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`routeID`, `point1`, `point2`, `distance`) VALUES
('R01', 'NZNE', 'YSSY', 1164),
('R02', 'NZNE', 'NZRO', 137),
('R03', 'NZNE', 'NZCI', 581),
('R04', 'NZNE', 'NZGB', 54),
('R05', 'NZNE', 'NZTL', 472);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `password`) VALUES
(1, 'testUsername', 'testPassword');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aircraft`
--
ALTER TABLE `aircraft`
  ADD PRIMARY KEY (`craftID`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`flightID`),
  ADD KEY `routeID` (`routeID`),
  ADD KEY `craftID` (`craftID`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`routeID`),
  ADD KEY `point1` (`point1`),
  ADD KEY `point2` (`point2`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `flights`
--
ALTER TABLE `flights`
  ADD CONSTRAINT `flights_ibfk_1` FOREIGN KEY (`routeID`) REFERENCES `routes` (`routeID`),
  ADD CONSTRAINT `flights_ibfk_2` FOREIGN KEY (`craftID`) REFERENCES `aircraft` (`craftID`);

--
-- Constraints for table `routes`
--
ALTER TABLE `routes`
  ADD CONSTRAINT `routes_ibfk_1` FOREIGN KEY (`point1`) REFERENCES `destinations` (`code`),
  ADD CONSTRAINT `routes_ibfk_2` FOREIGN KEY (`point2`) REFERENCES `destinations` (`code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
