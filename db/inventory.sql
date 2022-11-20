-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2021 at 11:02 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `cashtrans`
--

CREATE TABLE `cashtrans` (
  `SN` int(100) NOT NULL,
  `parti` varchar(100) NOT NULL,
  `lf` varchar(100) NOT NULL,
  `cash` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `parti1` varchar(100) NOT NULL,
  `lf1` varchar(100) NOT NULL,
  `cash1` varchar(100) NOT NULL,
  `amount1` varchar(100) NOT NULL,
  `date1` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cash_trans`
--

CREATE TABLE `cash_trans` (
  `SN` int(100) NOT NULL,
  `parti` varchar(100) NOT NULL,
  `lf` varchar(100) NOT NULL,
  `cash` varchar(100) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `parti1` varchar(100) NOT NULL,
  `lf1` varchar(100) NOT NULL,
  `cash1` varchar(100) NOT NULL,
  `bank1` varchar(100) NOT NULL,
  `date1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `genledger`
--

CREATE TABLE `genledger` (
  `SN` int(100) NOT NULL,
  `parti` varchar(100) NOT NULL,
  `lf` varchar(100) NOT NULL,
  `cash` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `parti1` varchar(100) NOT NULL,
  `lf1` varchar(100) NOT NULL,
  `cash1` varchar(100) NOT NULL,
  `date1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genledger`
--

INSERT INTO `genledger` (`SN`, `parti`, `lf`, `cash`, `date`, `parti1`, `lf1`, `cash1`, `date1`) VALUES
(1, 'kj', '222', '11122', '2021-09-15', 'hhh', '2222', '55555', '2021-09-16'),
(2, 'loan', '44', '44', '2021-09-16', 'house', '44', '44', '2021-09-17');

-- --------------------------------------------------------

--
-- Table structure for table `individualledgger`
--

CREATE TABLE `individualledgger` (
  `SN` int(11) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `parti` varchar(100) NOT NULL,
  `debit` text NOT NULL,
  `credit` text NOT NULL,
  `cash` text NOT NULL,
  `debit1` text NOT NULL,
  `credit1` text NOT NULL,
  `cash1` text NOT NULL,
  `interest` text NOT NULL,
  `month` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `individualledgger`
--

INSERT INTO `individualledgger` (`SN`, `Date`, `parti`, `debit`, `credit`, `cash`, `debit1`, `credit1`, `cash1`, `interest`, `month`) VALUES
(1, 'house', '4555', '555', '55555', '555', '5555', '55', '55', '100', ''),
(2, '2021-09-07', 'loan', '999', '9999', '999', '999', '99', '999', '99', ''),
(3, '2020-01-12', 'kiii', '10000', '1000', '10000', '1000', '10000', '1000', '10000', ''),
(6, '2021-09-07', 'GG', '22', '22', '22', '22', '22', '22', '22', '');

-- --------------------------------------------------------

--
-- Table structure for table `registrition`
--

CREATE TABLE `registrition` (
  `SN` int(100) NOT NULL,
  `Fname` varchar(100) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `Adress` varchar(100) NOT NULL,
  `Phone` int(100) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `comp_number` varchar(100) NOT NULL,
  `Pwork` varchar(100) NOT NULL,
  `Design` varchar(100) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Interest` int(100) NOT NULL,
  `Particular` varchar(100) NOT NULL,
  `Credit` int(100) NOT NULL,
  `Cbalance1` varchar(100) NOT NULL,
  `Cash1` varchar(100) NOT NULL,
  `Bank_name` varchar(100) NOT NULL,
  `Debit` varchar(100) NOT NULL,
  `Facility` varchar(100) NOT NULL,
  `Amount1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrition`
--

INSERT INTO `registrition` (`SN`, `Fname`, `Lname`, `Adress`, `Phone`, `Date`, `comp_number`, `Pwork`, `Design`, `Location`, `Interest`, `Particular`, `Credit`, `Cbalance1`, `Cash1`, `Bank_name`, `Debit`, `Facility`, `Amount1`) VALUES
(20, 'john', 'isaac', 'benin', 2, '2020-08-28', '', 'asaba', 'engr', 'ibusa', 0, 'land', 0, '5000', '50000', 'zenith', '10000', 'land', '45000'),
(21, 'john', 'isaac', 'benin', 3, '2020-08-28', '', 'asaba', 'engr', 'ibusa', 0, 'land', 0, '5000', '50000', 'zenith', '100000', 'house', '45000'),
(23, 'OGE', 'LUCKY', 'BENI', 5, '2020-07-30', '', 'AGBOR', 'LECTURER', 'AGBOR', 0, 'LAND', 0, '10000', '100000', 'ZENITH', '5000', 'loan', '500000'),
(24, 'OGE', 'LUCKY', 'BENI', 6, '2020-07-30', '', 'AGBOR', 'LECTURER', 'AGBOR', 0, 'LAND', 0, '10000', '100000', 'ZENITH', '5000', 'loan', '500000'),
(25, 'OGE', 'LUCKY', 'BENI', 7, '2020-07-30', '', 'AGBOR', 'LECTURER', 'AGBOR', 0, 'LAND', 0, '10000', '100000', 'ZENITH', '5000', 'loan', '500000');

-- --------------------------------------------------------

--
-- Table structure for table `savingsloan`
--

CREATE TABLE `savingsloan` (
  `SN` int(50) NOT NULL,
  `Full_Name` varchar(100) NOT NULL,
  `Particulars` varchar(100) NOT NULL,
  `Interest` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Debit` varchar(100) NOT NULL,
  `Initial_Credit` varchar(100) NOT NULL,
  `Final_Credit` varchar(100) NOT NULL,
  `Balance` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `savingsloan`
--

INSERT INTO `savingsloan` (`SN`, `Full_Name`, `Particulars`, `Interest`, `Date`, `Debit`, `Initial_Credit`, `Final_Credit`, `Balance`) VALUES
(0, 'll', 'l', 'l', '2020-06-28', 'kk', 'kk', '', ''),
(0, 'kk', 'k', 'k', '2020-07-28', 'hhh', 'hh', 'h', 'h'),
(0, 'kk', 'k', 'k', '2020-07-28', 'hhh', 'hh', 'h', 'h'),
(0, 'ogechi okoh', 'land', '10', '2020-07-28', '2000', '10000', '8000', '8000'),
(0, 'gg', 'gg', 'gg', '2020-06-28', 'ff', 'ff', 'ff', 'ff');

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `sn` int(50) NOT NULL,
  `UserID` varchar(100) NOT NULL,
  `Full_Name` varchar(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `C_Password` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Control` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`sn`, `UserID`, `Full_Name`, `UserName`, `Password`, `C_Password`, `Email`, `Control`) VALUES
(9, '001', 'ogechukwu', 'ogechi', '1234', '1234', 'oge@gmail.com', ''),
(10, '002', 'john', 'afam', '1234', '1234', 'afam@gamil.com', ''),
(11, '004', 'oge', 'okoli', 'admin', 'admin', 'sam@gmail.com', ''),
(12, '005', 'koluto', 'kolo', '123', '123', 'kolu@gmail.com', ''),
(15, 'GG', 'DD', 'DD', 'DD', 'DD', 'SAM@MAIL.COM', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cashtrans`
--
ALTER TABLE `cashtrans`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `cash_trans`
--
ALTER TABLE `cash_trans`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `genledger`
--
ALTER TABLE `genledger`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `individualledgger`
--
ALTER TABLE `individualledgger`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `registrition`
--
ALTER TABLE `registrition`
  ADD PRIMARY KEY (`SN`),
  ADD KEY `SN` (`SN`),
  ADD KEY `Fname` (`Fname`),
  ADD KEY `Lname` (`Lname`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`sn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cashtrans`
--
ALTER TABLE `cashtrans`
  MODIFY `SN` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cash_trans`
--
ALTER TABLE `cash_trans`
  MODIFY `SN` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genledger`
--
ALTER TABLE `genledger`
  MODIFY `SN` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `individualledgger`
--
ALTER TABLE `individualledgger`
  MODIFY `SN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `registrition`
--
ALTER TABLE `registrition`
  MODIFY `SN` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `sn` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
