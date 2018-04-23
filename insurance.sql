-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2018 at 10:36 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `insurance`
--

-- --------------------------------------------------------

--
-- Table structure for table `insurancedata`
--

CREATE TABLE `insurancedata` (
  `id` decimal(12,0) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` decimal(10,0) NOT NULL,
  `insurance` varchar(50) NOT NULL,
  `Proposer_Code` decimal(8,0) NOT NULL,
  `Policy_Previous` int(11) NOT NULL,
  `Policy_Current` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `End_date` date NOT NULL,
  `sector` text NOT NULL,
  `med` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insurancedata`
--

INSERT INTO `insurancedata` (`id`, `name`, `number`, `insurance`, `Proposer_Code`, `Policy_Previous`, `Policy_Current`, `start_date`, `End_date`, `sector`, `med`) VALUES
('123456780004', 'jayesh', '9087654321', 'maxbupa', '9876543', 453627, 987012, '2018-04-11', '2028-01-11', 'urban', 'NO'),
('123456780003', 'vinay', '8970123456', 'maxbupa', '99887766', 112233, 550099, '2018-04-19', '2028-01-19', 'urban', 'NO'),
('123456780005', 'krishna', '8970123455', 'bajaj', '99880000', 112288, 550111, '2018-04-19', '2028-01-19', 'urban', 'NO'),
('123456789023', 'dinesh', '9867988985', 'maxbupa', '98761234', 398610, 673014, '2018-04-27', '2026-07-22', 'urban', 'NO'),
('123456789023', 'Dinesh', '9870912345', 'reliance', '685724', 7744, 662211, '2018-04-25', '2028-10-26', 'rural', 'fever'),
('123456780005', 'krishna', '1234567899', 'bajaj', '234567', 236677, 789456, '2018-04-09', '2018-04-24', 'urban', 'no'),
('123456780005', 'krishna', '1234567899', 'maxbupa', '235566', 236677, 789456, '2018-04-09', '2018-04-24', 'urban', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `insurancedata`
--
ALTER TABLE `insurancedata`
  ADD KEY `id` (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `insurancedata`
--
ALTER TABLE `insurancedata`
  ADD CONSTRAINT `id_fk` FOREIGN KEY (`id`) REFERENCES `patient`.`patientdata` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
