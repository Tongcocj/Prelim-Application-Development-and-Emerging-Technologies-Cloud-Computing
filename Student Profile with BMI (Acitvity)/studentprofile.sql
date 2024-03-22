-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2024 at 11:41 AM
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
-- Database: `biometrics`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentprofile`
--

CREATE TABLE `studentprofile` (
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `cnum` int(11) NOT NULL,
  `bdate` date NOT NULL,
  `bloodtype` varchar(255) NOT NULL,
  `weightkg` int(11) NOT NULL,
  `heightm` int(11) NOT NULL,
  `weightlbs` int(11) NOT NULL,
  `heightin` int(11) NOT NULL,
  `bmi` int(11) NOT NULL,
  `imbmi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentprofile`
--

INSERT INTO `studentprofile` (`name`, `age`, `address`, `cnum`, `bdate`, `bloodtype`, `weightkg`, `heightm`, `weightlbs`, `heightin`, `bmi`, `imbmi`) VALUES
('Rubylyn M. Balansay', 21, 'Malabon City', 99999999, '2003-01-08', 'Unknown', 50, 2, 110, 59, 111, 111),
('rubylyn', 121, 'malabon', 2121, '2024-02-20', 'a', 1212, 2121, 2121, 2121, 0, 0),
('rubylyn', 121, 'malabon', 2121, '2024-02-20', 'a', 1212, 2121, 2121, 2121, 0, 0),
('rubylyn', 121, 'malabon', 2121, '2024-02-20', 'a', 1212, 2121, 2121, 2121, 0, 0),
('rubylyn', 121, 'malabon', 2121, '2024-02-20', 'a', 1212, 2121, 2121, 2121, 0, 0),
('rubylyn', 121, 'malabon', 2121, '2024-02-20', 'a', 1212, 2121, 2121, 2121, 0, 0),
('rubylyn', 11212, 'malabon', 2121, '2024-02-20', 'a', 50, 2, 110, 59, 13, 22);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
