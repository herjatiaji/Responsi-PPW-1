-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2022 at 07:57 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact`
--

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`name`, `email`, `pesan`) VALUES
('Kim Ji soo', 'Jisooygblackpink@gmail.com', 'Hi i interested in your project, give feed back if you want join us!'),
('Yi Long Ma', 'spaceyYilongMa@mail.spacey.us', 'hi you are very awesome and skillful, i want to invite you at space y headquarter.'),
('ibu marni ', 'BOCILKEMATIAN@gmail.com', 'mas, itu jemurannya udah saya angkat ya'),
('Andi', 'andi@gmail.com', 'halo'),
('Erika ', 'erika@gmail.com', 'Halo'),
('roy', 'roy@gmail.com', 'hai'),
('john', 'john@gmail.com', 'hello'),
('bayu', 'bayu@gmail.com', 'halo'),
('jane', 'jane@gmail.com', 'hii'),
('kau', 'kau@gmail.com', 'halooo'),
('sfsdfsdg', 'adasdas@gmail.com', 'rsdfsdrtsertyt'),
('dsdass', 'sfasdas@gmail.com', 'dadasdasda eqwe  qw  qw eqe eq e'),
('kl.kl.h', 'heheawiawoaowkd@gmail.com', 'l.yl;y.y.yl;');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
