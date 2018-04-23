-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2018 at 10:34 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `patient`
--

-- --------------------------------------------------------

--
-- Table structure for table `patientdata`
--

CREATE TABLE `patientdata` (
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `id` decimal(12,0) NOT NULL,
  `id_type` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `number` varchar(10) NOT NULL,
  `age` tinyint(4) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `address` varchar(100) NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  `sugar_level` text NOT NULL,
  `blood_pressure` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `report` varchar(100) NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientdata`
--

INSERT INTO `patientdata` (`first_name`, `middle_name`, `last_name`, `id`, `id_type`, `DOB`, `number`, `age`, `gender`, `address`, `blood_group`, `sugar_level`, `blood_pressure`, `image`, `report`, `type`, `size`) VALUES
('dinesh', 'munikrishna', 'nandi', '123456780001', 'OpenMRS Identification Number', '1996-11-21', '0', 22, 'male', 'sion', '', '', '', '', '', '', ''),
('akshay', 'ramesh', 'gunani', '123456780002', 'Old Identification Number', '1996-01-09', '9604221165', 22, 'male', 'ulhasnagar', '', '', '', '', '', '', ''),
('vinay', 'chunilal', 'dodeja', '123456780003', 'OpenMRS Identification Number', '1996-10-08', '0', 22, 'male', 'ulhasnagar', '', '', '', '', '23082-wire.docx', '', ''),
('jayesh', 'krushna', 'sawale', '123456780004', 'Old Identification Number', '1995-12-09', '0', 23, 'male', 'bandra', '', '', '', '', '', '', ''),
('krishna', 'dharmendra', 'vanvari', '123456780005', 'OpenMRS Identification Number', '1996-10-15', '0', 22, 'male', 'ulhasnagar', '', '', '', '', '', '', ''),
('pratik', 'prakash', 'watwani', '123456780006', 'Old Identification Number', '1996-03-14', '0', 22, 'male', 'ulhasnagar', '', '', '', '', '', '', ''),
('pravin', 'radheyshyam', 'tripathi', '123456780007', 'Old Identification Number', '1996-10-02', '0', 22, 'male', 'dombivali', '', '', '', '', '', '', ''),
('raj', 'ravi', 'pawar', '123456780008', 'OpenMRS Identification Number', '1997-01-24', '0', 21, 'male', 'vikhroli', '', '', '', '', '', '', ''),
('pankaj', 'hari', 'dhane', '123456780009', 'Old Identification Number', '1994-05-04', '0', 24, 'male', 'nerul', '', '', '', '', '', '', ''),
('mahesh', 'anand', 'jadhav', '123456780010', 'OpenMRS Identification Number', '1996-05-08', '0', 22, 'male', 'chembur', '', '', '', '', '', '', ''),
('mohan', 'kumar', 'yadav', '123456780012', 'Old Identification Number', '1996-02-14', '0', 22, 'male', 'kharghar', '', '', '', '', '', '', ''),
('ramesh', 'rajesh', 'kumar', '123456789014', 'Old Identification Number', '1992-03-04', '0', 26, 'male', 'chembur', '', '', '', '', '', '', ''),
('mayur', 'prasad', 'chavan', '123456789015', 'Old Identification Number', '1997-07-09', '0', 21, 'male', 'bandra', '', '', '', '', '', '', ''),
('prasad', 'prabhakar', 'lad', '123456789016', 'Old Identification Number', '1996-03-07', '0', 22, 'male', 'thane', '', '', '', '', '', '', ''),
('sai', 'venkat', 'kumar', '123456789017', 'Old Identification Number', '1997-10-01', '0', 21, 'male', 'chembur', '', '', '', '', '', '', ''),
('jigar', 'chetan', 'ajmera', '123456789021', 'Old Identification Number', '1996-12-02', '0', 22, 'male', 'thane', 'B+ve', 'High', 'High', '', '', '', ''),
('arijit', 'jit', 'singh', '123456789022', 'Old Identification Number', '2000-02-14', '9876543210', 18, 'male', 'sion', 'O+ve', 'Normal', 'High', '', '', '', ''),
('dinesh', 'munikrishna', 'nandi', '123456789023', 'Old Identification Number', '1996-11-21', '345678921', 21, 'male', 'sion', 'O+ve', 'Normal', 'Normal', 'arijitsingh-b4.jpg', '2018-04-22--p.py', 'application/vnd.ms-excel', '0.573242187'),
('manas', 'kumar', 'sanu', '123456789024', 'Old Identification Number', '1998-02-04', '9234516709', 20, 'male', 'chembur', 'AB+ve', 'Low', 'High', '', '', '', ''),
('ranveer', 'veer', 'singh', '123456789025', 'Old Identification Number', '1996-06-13', '8756123405', 22, 'male', 'sion', 'O+ve', 'Normal', 'Normal', '', '', '', ''),
('bhanu', 'pratap', 'singh', '123456789026', 'Old Identification Number', '1996-03-05', '9076543210', 22, 'male', 'sion', 'O+ve', 'Normal', 'Normal', '', '', '', ''),
('shushant', 'raj', 'singh', '123456789027', 'Old Identification Number', '1996-06-13', '7865439021', 22, 'male', 'kharghar', 'A-ve', 'Low', 'Normal', '', '', '', ''),
('jeet', 'haar', 'ganguly', '123456789030', 'Old Identification Number', '1998-06-17', '9986543271', 20, 'male', 'sion', 'B-ve', 'Low', 'Normal', '_20150314_195925.JPG', '', '', ''),
('kumar', 'k', 'sanu', '123456789031', 'Old Identification Number', '1998-01-07', '8268426055', 20, 'male', 'sion', 'A+ve', 'Low', 'Low', '_20150325_131026.JPG', '', '', ''),
('babu', 'raju', 'bhai', '234598761234', 'OpenMRS Identification Number', '2018-03-26', '1234567895', 2, 'male', 'dubai', 'O-ve', 'High', 'High', '', '', '', ''),
('salman', 'salim', 'khan', '670987654321', 'OpenMRS Identification Number', '1995-02-07', '9867988985', 23, 'male', 'bandra', 'O+ve', 'Low', 'High', 'salman.jpg', '96656-visual.java', '', ''),
('Prashant', 'Vilas', 'Kanade', '858361250778', 'OpenMRS Identification Number', '1974-11-22', '9869710208', 44, 'male', 'Thane', 'O+ve', 'Normal', 'Normal', '', '', '', ''),
('ravi', 'dueby', 'mamu', '987623451230', 'OpenMRS Identification Number', '2018-04-05', '1234567890', 2, 'male', 'thane', 'O-ve', 'Normal', 'High', 'salman.jpg', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `patientdata`
--
ALTER TABLE `patientdata`
  ADD UNIQUE KEY `id` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
