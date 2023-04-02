-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2023 at 02:07 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical`
--

-- --------------------------------------------------------

--
-- Table structure for table `injection`
--

CREATE TABLE `injection` (
  `id_injection` int(11) NOT NULL,
  `name_injection` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `injection_possible`
--

CREATE TABLE `injection_possible` (
  `id_injection_possible` int(11) NOT NULL,
  `id_injection` int(11) NOT NULL,
  `id_program` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `day` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `ID` int(11) NOT NULL,
  `etat` tinyint(1) DEFAULT 0,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`day`, `date`, `ID`, `etat`, `id_user`) VALUES
('test', '2021-08-18', 1, 1, 0),
('add', '2021-08-16', 2, 0, 0),
('test', '2021-08-17', 6, 0, 0),
('test', '2022-08-19', 13, 0, 0),
('test', '2021-08-21', 14, 0, 1),
('dfdfv', '2021-08-24', 15, 0, 2),
('DW2', '2021-08-13', 16, 1, 2),
('desing', '2021-08-19', 17, 0, 3),
('test3000', '2021-08-22', 21, 0, 1),
('recete', '2021-08-23', 23, 0, 21),
('edit', '2021-08-13', 24, 0, 20),
('save', '2021-09-02', 25, 0, 20),
('add', '2021-06-11', 26, 0, 21),
('test', '2021-08-24', 27, 0, 1),
('test', '2021-08-13', 28, 1, 1),
('test6', '2021-08-26', 29, 1, 1),
('yy', '2021-08-13', 30, 1, 1),
('trhrt', '2021-08-25', 31, 0, 1),
('aa', '2021-08-13', 32, 1, 1),
('ggg', '2021-08-13', 33, 1, 1),
('new', '2021-08-13', 34, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_img` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`, `user_img`) VALUES
(1, 'aymen', '123', 'Aymen', '1png'),
(2, 'yasser', '123456789', 'Yasser', '2png'),
(3, 'saad', '678', 'saad', 'IMG-6123b9f6b2c705.78775966.jpg'),
(5, 'ahmed', '123', 'ahmed', ''),
(16, 'legend', '123', 'lol', ''),
(21, 'haddad', '1234', 'maroi', 'IMG-6123c5794dde75.29413591.jpg'),
(22, 'aaa', 'aaa', 'aaa', 'img');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `injection`
--
ALTER TABLE `injection`
  ADD PRIMARY KEY (`id_injection`);

--
-- Indexes for table `injection_possible`
--
ALTER TABLE `injection_possible`
  ADD PRIMARY KEY (`id_injection_possible`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `injection`
--
ALTER TABLE `injection`
  MODIFY `id_injection` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `injection_possible`
--
ALTER TABLE `injection_possible`
  MODIFY `id_injection_possible` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
