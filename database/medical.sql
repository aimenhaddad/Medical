-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2023 at 04:03 AM
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

--
-- Dumping data for table `injection`
--

INSERT INTO `injection` (`id_injection`, `name_injection`, `id_user`) VALUES
(3, 'Insulin', 1),
(4, 'Epinephrine', 1),
(5, 'Pfizer-BioNTech', 1),
(6, 'COVID-19', 1),
(7, 'Morphine', 1),
(8, 'Heparin', 1),
(9, 'Vitamin B1', 1),
(10, 'Adrenalin ', 1),
(11, 'Insulin2', 1),
(12, 'Insulin', 23),
(13, 'Epinephrine', 23);

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `day` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `name_injection` text DEFAULT NULL,
  `ID` int(11) NOT NULL,
  `etat` tinyint(1) DEFAULT 0,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`day`, `date`, `name_injection`, `ID`, `etat`, `id_user`) VALUES
('Sunday', '2023-04-28', 'COVID-19, Morphine, Heparin ', 37, 0, 1),
('Wednesday', '2023-04-17', 'Morphine ,Insulin2 ', 40, 0, 1),
('Monday', '2023-04-19', 'Vitamin B1 , Adrenalin ', 41, 0, 1),
('Tuesday', '2023-04-25', 'Morphine ', 42, 0, 1),
('Friday', '2023-04-29', 'Pfizer-BioNTech ', 43, 0, 1),
('Thursday', '2023-03-28', 'Epinephrine ', 44, 0, 1),
('Saturday', '2023-04-22', 'Morphine , Heparin , Vitamin B1 ', 45, 0, 1),
('Wednesday', '2023-04-05', '13 , 14', 46, 0, 25);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `wilaya` varchar(70) NOT NULL,
  `user_img` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`, `wilaya`, `user_img`) VALUES
(1, 'user', 'user', 'Mohamed Boudiaf', 'Ouargla', '1.png'),
(2, 'user1', 'user1', 'Military', 'Ouargla', '2.jpg'),
(23, 'user2', 'user2', 'Old Military', 'Ouargla', '23.jpg'),
(25, 'user3', 'user3', 'Almkhadma', 'Ouargla', '25.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `injection`
--
ALTER TABLE `injection`
  ADD PRIMARY KEY (`id_injection`);

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
  MODIFY `id_injection` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
