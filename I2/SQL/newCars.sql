-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 30, 2020 at 04:57 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newCars`
--

-- --------------------------------------------------------

--
-- Table structure for table `newCarsTable`
--

CREATE TABLE `newCarsTable` (
  `nCar_ID` int(11) DEFAULT NULL,
  `nCar_Name` varchar(255) DEFAULT NULL,
  `nCar_Year` varchar(255) DEFAULT NULL,
  `nCar_Miles` varchar(255) DEFAULT NULL,
  `nCar_Price` varchar(255) DEFAULT NULL,
  `nCar_Img_Link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newCarsTable`
--

INSERT INTO `newCarsTable` (`nCar_ID`, `nCar_Name`, `nCar_Year`, `nCar_Miles`, `nCar_Price`, `nCar_Img_Link`) VALUES
(1, 'BMW 3 Series 2.0 SE 5dr', '2011', '185,000', '1,995', 'https://m.atcdn.co.uk/a/media/w800h600/7e207b7a4f454f378e03e8a60906b498.jpg'),
(2, 'olvo S40 1.6TD S 4dr', '2006', '141,000 ', '400', 'https://m.atcdn.co.uk/a/media/w800h600/d8074a4608af433b8ced0d745229e26d.jpg'),
(3, 'Ford S-Max 20 TDCI 5dr', '2008', '156,000', '1500', 'https://m.atcdn.co.uk/a/media/w800h600/674e304a7dcf41348431c5f97baa9473.jpg'),
(4, 'ord Focus 1.0 EB 5dr', '2019', '6,484', '15,000', 'https://m.atcdn.co.uk/a/media/w800h600/e240827438f942d49544b5953efaf87f.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
