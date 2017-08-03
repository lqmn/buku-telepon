-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2017 at 05:13 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `bukutelepon`
--
CREATE DATABASE IF NOT EXISTS `bukutelepon` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bukutelepon`;

-- --------------------------------------------------------

--
-- Table structure for table `bukutelepon`
--

CREATE TABLE `bukutelepon` (
  `ID` int(11) NOT NULL,
  `Nama` varchar(25) NOT NULL,
  `NoTel` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bukutelepon`
--

INSERT INTO `bukutelepon` (`ID`, `Nama`, `NoTel`, `Email`) VALUES
(15, 'Luqman Ariffandi', '082143227819', 'a.ariffandi12@live.com'),
(18, 'waw', '0821000009', 'awa@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bukutelepon`
--
ALTER TABLE `bukutelepon`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bukutelepon`
--
ALTER TABLE `bukutelepon`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;