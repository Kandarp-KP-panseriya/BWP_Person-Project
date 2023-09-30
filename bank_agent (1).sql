-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2023 at 03:39 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank_agent`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountlimits`
--

CREATE TABLE `accountlimits` (
  `Id` int(11) NOT NULL,
  `Banknm` varchar(30) NOT NULL,
  `CWL` varchar(50) NOT NULL,
  `CTL` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accountlimits`
--

INSERT INTO `accountlimits` (`Id`, `Banknm`, `CWL`, `CTL`) VALUES
(3, 'Yes Bank		', 'Rs.25,000 to Rs.1 lakh', 'Rs.1 lakh to Rs.3 lakh'),
(4, 'Kotak Mahindra Bank', 'Rs.40,000 to Rs.2.5 lakh	', 'Rs.50,000 to Rs.4.5 lakh');

-- --------------------------------------------------------

--
-- Table structure for table `demateaccounts`
--

CREATE TABLE `demateaccounts` (
  `id` int(11) NOT NULL,
  `Details` varchar(50) NOT NULL,
  `Demat-broker-1` varchar(100) NOT NULL,
  `Demat-broker-2` varchar(100) NOT NULL,
  `Demat-broker-3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `demateaccounts`
--

INSERT INTO `demateaccounts` (`id`, `Details`, `Demat-broker-1`, `Demat-broker-2`, `Demat-broker-3`) VALUES
(1, 'Charges for opening a trading account', '₹ 200', '₹ 0', '₹ 0'),
(2, 'Brokerage for Equity delivery', '₹0', '₹ 15 if the order <₹ 50,000, ₹ 30 if the order val', '0.05% or ₹ 20 per trade whichever is lower'),
(4, 'The exchange', 'BSE , NSE , MCX, MCX-SX', 'BSE , NSE , MCX, MCX-SX', 'BSE, NSE, CSE, MSE, INX');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `Number` int(10) NOT NULL,
  `Query` varchar(500) NOT NULL,
  `Email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`Number`, `Query`, `Email`) VALUES
(1, 'which is best bank for demate account', 'demo@gmail.com'),
(38, 'please add Credit card info and types of credit card', 'raj@gmail.com'),
(39, 'Groww Have any branches', 'jay@gmail.com'),
(40, 'Information about Services is best', 'yes@gmail.com'),
(41, 'how this websit work', 'raj@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `savingaccount`
--

CREATE TABLE `savingaccount` (
  `ID` int(11) NOT NULL,
  `Accounts` varchar(50) NOT NULL,
  `InterestR` varchar(20) NOT NULL,
  `mrb` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `savingaccount`
--

INSERT INTO `savingaccount` (`ID`, `Accounts`, `InterestR`, `mrb`) VALUES
(1, 'HDFC', '3% to 5%', '10000'),
(3, 'State Bank of India Savings Account,', '2.70% p.a.', 'Nill'),
(4, 'Axis Bank Savings Account,', '3.00% p.a. onwards', 'Zero Balance Savings Account'),
(11, 'Yes Bank Savings Account,', '4.00% p.a. to 5.00% ', 'Rs.10,000'),
(12, 'IndusInd Bank Savings Account,', '4.00% p.a. onwards', 'Rs.1,00,000'),
(13, 'Kotak Bank Savings Account,', '3.50% p.a. ', ' Zero Balance Savings Account');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `Id` int(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `User/Admin` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`Id`, `Name`, `Email`, `Username`, `Password`, `User/Admin`) VALUES
(1, 'Kandarp Panseriya', 'Kandarp123@gmail.com', 'Kandarp-kp12345', 'Kandarp-Kp', 'Admin'),
(2039, 'Redmi Mobile', 'redmi@gmail.com', 'redmi1', 'redmi1', 'User'),
(2042, 'oggy', 'noddy@gmail.com', 'noddy1', 'noddy1', 'User'),
(2045, 'tapu', 'tapu@gmail.com', 'tapu', 'tapu', 'User'),
(2047, 'nobita', 'Nobita@gmial.com', 'nobita okok', 'okok', 'Admin'),
(2048, 'Jethalal Gada', 'Jethalal@gmail.com', 'Tiger123', 'tiger', 'User'),
(2049, 'Raj Patoliya', 'raj@gmail.com', 'raj123', 'raj123', 'User'),
(2050, 'demodemo', 'tapu1@gmail.com', 'demo', 'demo', 'User'),
(2051, 'asdc', 'asdc@gmail.com', 'asdasd', 'a', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `userinterest`
--

CREATE TABLE `userinterest` (
  `id` int(10) NOT NULL,
  `BankName` varchar(30) NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `UserEmail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userinterest`
--

INSERT INTO `userinterest` (`id`, `BankName`, `UserName`, `UserEmail`) VALUES
(16, 'State Bank of India Savings Ac', 'tapu', 'tapu@gmail.com'),
(34, 'Groww ', 'Jethalal Gada', 'Jethalal@gmail.com'),
(36, 'Axis Bank Savings Account,', 'Jethalal Gada', 'Jethalal@gmail.com'),
(37, 'Kotak Bank Savings Account,', 'Raj Patoliya', 'raj@gmail.com'),
(38, 'Angel Broking ', 'Raj Patoliya', 'raj@gmail.com'),
(39, 'HDFC', 'demodemo', 'tapu1@gmail.com'),
(40, 'State Bank of India Savings Ac', 'demodemo', 'tapu1@gmail.com'),
(41, 'Axis Bank Savings Account,', 'demodemo', 'tapu1@gmail.com'),
(42, 'Angel Broking ', 'demodemo', 'tapu1@gmail.com'),
(43, 'Kotak Bank Savings Account,', 'demodemo', 'tapu1@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountlimits`
--
ALTER TABLE `accountlimits`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `demateaccounts`
--
ALTER TABLE `demateaccounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`Number`);

--
-- Indexes for table `savingaccount`
--
ALTER TABLE `savingaccount`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `userinterest`
--
ALTER TABLE `userinterest`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accountlimits`
--
ALTER TABLE `accountlimits`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `demateaccounts`
--
ALTER TABLE `demateaccounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `Number` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `savingaccount`
--
ALTER TABLE `savingaccount`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `Id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2052;

--
-- AUTO_INCREMENT for table `userinterest`
--
ALTER TABLE `userinterest`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
