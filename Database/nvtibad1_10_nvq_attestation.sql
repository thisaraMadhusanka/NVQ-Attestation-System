-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 19, 2023 at 01:06 PM
-- Server version: 10.6.16-MariaDB-cll-lve
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nvtibad1_10_nvq_attestation`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `NIC` varchar(12) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `Mobile` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`NIC`, `Name`, `Mobile`) VALUES
('2002', 'thisara', '0987654321');

-- --------------------------------------------------------

--
-- Table structure for table `student_certificate`
--

CREATE TABLE `student_certificate` (
  `Certificate_Serial_Number` varchar(10) NOT NULL,
  `Student_NIC` varchar(12) NOT NULL,
  `Back_Serial_Number` varchar(20) NOT NULL,
  `Effective_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_certificate`
--

INSERT INTO `student_certificate` (`Certificate_Serial_Number`, `Student_NIC`, `Back_Serial_Number`, `Effective_Date`) VALUES
('123456', '2002', '12344', '2023-11-17');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, '0', '0'),
(2, 'madhusanka', 'a08b2a98599efc12a8a559a7fe78eb8c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`NIC`);

--
-- Indexes for table `student_certificate`
--
ALTER TABLE `student_certificate`
  ADD PRIMARY KEY (`Certificate_Serial_Number`),
  ADD KEY `Student_NIC` (`Student_NIC`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student_certificate`
--
ALTER TABLE `student_certificate`
  ADD CONSTRAINT `student_certificate_ibfk_1` FOREIGN KEY (`Student_NIC`) REFERENCES `student` (`NIC`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
