-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2022 at 02:29 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbzia1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `ID` int(22) NOT NULL,
  `Adm_Name` text NOT NULL,
  `Adm_Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`ID`, `Adm_Name`, `Adm_Password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `ID` int(22) NOT NULL,
  `Location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`ID`, `Location`) VALUES
(1, 'Stadion Gelora Bung Karno'),
(3, 'Garuda Wisnu Kencana');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `ID` int(22) NOT NULL,
  `User_ID` int(22) NOT NULL,
  `Order_Code` int(20) NOT NULL,
  `User_Name` varchar(255) NOT NULL,
  `Total_Item` int(22) NOT NULL,
  `Total_Price` int(22) NOT NULL,
  `Order_date` date NOT NULL,
  `Order_time` time NOT NULL,
  `Phone_No` int(20) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Pick_Up_status` text NOT NULL,
  `Delivery_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`ID`, `User_ID`, `Order_Code`, `User_Name`, `Total_Item`, `Total_Price`, `Order_date`, `Order_time`, `Phone_No`, `Address`, `Pick_Up_status`, `Delivery_status`) VALUES
(33, 9, 273157, 'nana', 1, 200, '2022-02-19', '01:30:00', 2147483647, 'Indonesia', 'No', 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `order_temp`
--

CREATE TABLE `order_temp` (
  `ID` int(22) NOT NULL,
  `User_ID` int(22) NOT NULL,
  `Concert` text NOT NULL,
  `Location` text NOT NULL,
  `Secondseat_Price` int(100) NOT NULL,
  `Firstseat_Price` int(100) NOT NULL,
  `Total_Item` int(100) NOT NULL,
  `Pick_Delivery_Status` text NOT NULL,
  `Order_Status` text NOT NULL,
  `Order_code` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_temp`
--

INSERT INTO `order_temp` (`ID`, `User_ID`, `Concert`, `Location`, `Secondseat_Price`, `Firstseat_Price`, `Total_Item`, `Pick_Delivery_Status`, `Order_Status`, `Order_code`) VALUES
(60, 9, 'Blackpink Concert', 'Garuda Wisnu Kencana', 0, 200, 1, '2', 'active', '182983'),
(61, 9, 'BTS Concert', 'Stadion Gelora Bung Karno', 0, 400, 1, '2', 'active', '65812');

-- --------------------------------------------------------

--
-- Table structure for table `services_uploade`
--

CREATE TABLE `services_uploade` (
  `ID` int(22) NOT NULL,
  `Concert` varchar(100) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Firstseat_Price` int(120) NOT NULL,
  `Secondseat_Price` int(120) NOT NULL,
  `Date` varchar(30) NOT NULL,
  `Time` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services_uploade`
--

INSERT INTO `services_uploade` (`ID`, `Concert`, `Location`, `Firstseat_Price`, `Secondseat_Price`, `Date`, `Time`) VALUES
(21, 'Blackpink Concert', 'Garuda Wisnu Kencana', 200, 100, '2022-02-28', '11:45'),
(25, 'BTS Concert', 'Stadion Gelora Bung Karno', 400, 200, '2022-05-21', '07:45');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `ID` int(22) NOT NULL,
  `User_Name` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`ID`, `User_Name`, `Password`) VALUES
(9, 'nana', 'nana123');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `ID` int(22) NOT NULL,
  `User_Name` varchar(255) NOT NULL,
  `Full_Name` varchar(255) NOT NULL,
  `Password` int(50) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Contact_No` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`ID`, `User_Name`, `Full_Name`, `Password`, `Address`, `Contact_No`) VALUES
(16, 'nana', 'Nana Humaira', 0, 'Indonesia', '08123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `order_temp`
--
ALTER TABLE `order_temp`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `services_uploade`
--
ALTER TABLE `services_uploade`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `ID` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `ID` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `ID` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `order_temp`
--
ALTER TABLE `order_temp`
  MODIFY `ID` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `services_uploade`
--
ALTER TABLE `services_uploade`
  MODIFY `ID` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `ID` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `ID` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
