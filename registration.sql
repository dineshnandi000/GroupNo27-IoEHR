-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2018 at 10:33 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `user_role`) VALUES
(1, 'dinesh', 'dineshnandi1996@gmail.com', '4074c2e6936f06672e9455e9f81664ab', 'admin'),
(2, 'raj', 'raj@gmail.com', '67719c4c2dae2189c6a83110e9461c15', 'patient'),
(4, 'rajesh', 'rajesh@gmail.com', 'af4e5834b08749e4351722895ad14f5a', 'patient'),
(5, 'amit', 'amit@yahoo.com', '71f05ae4b4a6425bc883ba68ae96c6da', 'patient'),
(6, 'vinay', 'vinay@yahoo.com', '78ffb54cea01b365797d0b883eba44fc', 'patient'),
(8, 'salman', 'salman@gmail.com', '03346657feea0490a4d4f677faa0583d', 'patient'),
(9, 'shahrukh', 'shahrukh@gmail.com', '44b9d0ad6994b0cd9b0a85152610895f', 'admin'),
(11, 'anuj', 'anuj@gmail.com', 'ab6bc387cd023c16cb84ea7f407ae62e', 'patient'),
(12, 'bajaj', 'bajajp@bajaj.com', 'a4b4038112fae25d8172bd054f655ed2', 'insurance'),
(14, 'Metro_pathology', 'metro.pathology@gmail.com', 'b79d2096c66248cad58c309283bcd8d4', 'pathologist'),
(15, 'bharat_pathology', 'bp@patho.com', 'dfb57b2e5f36c1f893dbc12dd66897d4', ''),
(16, 'maxbupa', 'maxbupa@ins.com', '2ffe4e77325d9a7152f7086ea7aa5114', 'insurance');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
