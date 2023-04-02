-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2023 at 02:58 AM
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
(1, 'inj', 1),
(2, 'ok go', 1),
(3, 'Insulin', 1),
(4, 'Epinephrine', 1),
(5, 'Pfizer-BioNTech', 1),
(6, 'COVID-19', 1),
(7, 'Morphine', 1),
(8, 'Heparin', 1),
(9, 'Vitamin B1', 1),
(10, 'Adrenalin ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `injection_possible`
--

CREATE TABLE `injection_possible` (
  `id_injection_possible` int(11) NOT NULL,
  `name_injection` varchar(70) NOT NULL,
  `id_program` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `injection_possible`
--

INSERT INTO `injection_possible` (`id_injection_possible`, `name_injection`, `id_program`) VALUES
(30, ' COVID-19', 36),
(31, ' Morphine', 36),
(32, ' Adrenalin ', 36),
(39, ' inj', 31),
(40, ' ok go', 31),
(41, ' Insulin', 31),
(42, ' Heparin', 37);

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
('Tuesday', '2021-08-21', NULL, 14, 0, 1),
('Monday', '2021-08-22', NULL, 21, 0, 1),
('Thursday', '2021-08-24', NULL, 27, 0, 1),
('Friday', '2021-08-25', 'inj-ok go-Insulin-', 31, 0, 1),
('Wednesday', '2023-04-07', 'COVID-19 Morphine Adrenalin  ', 36, 0, 1),
('Friday', '2023-04-28', 'Heparin ', 37, 0, 1);

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
(1, 'aymen', '123', 'Aymen', '', '1png'),
(2, 'yasser', '123456789', 'Yasser', '', '2png'),
(3, 'saad', '678', 'saad', '', 'IMG-6123b9f6b2c705.78775966.jpg'),
(5, 'ahmed', '123', 'ahmed', '', ''),
(16, 'legend', '123', 'lol', '', ''),
(21, 'haddad', '1234', 'maroi', '', 'IMG-6123c5794dde75.29413591.jpg'),
(22, 'aaa', 'aaa', 'aaa', '', 'img');

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
  MODIFY `id_injection` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `injection_possible`
--
ALTER TABLE `injection_possible`
  MODIFY `id_injection_possible` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
