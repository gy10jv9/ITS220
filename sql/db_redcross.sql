-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2024 at 03:42 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_redcross`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cities`
--

CREATE TABLE `tbl_cities` (
  `city_id` int(11) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_civilstatus`
--

CREATE TABLE `tbl_civilstatus` (
  `civilStatus_id` int(11) NOT NULL,
  `civilStatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_countries`
--

CREATE TABLE `tbl_countries` (
  `country_id` int(11) NOT NULL,
  `countryName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_daysofweek`
--

CREATE TABLE `tbl_daysofweek` (
  `day_id` int(11) NOT NULL,
  `dayName` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donations`
--

CREATE TABLE `tbl_donations` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `contactnum` varchar(200) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `brand` varchar(200) NOT NULL,
  `item` varchar(200) NOT NULL,
  `purchaseDate` date NOT NULL,
  `quant` int(11) NOT NULL,
  `distributor` varchar(200) NOT NULL,
  `streetAddr` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `cardnum` varchar(100) NOT NULL,
  `expdate` date NOT NULL,
  `ccv` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_donations`
--

INSERT INTO `tbl_donations` (`id`, `fname`, `lname`, `contactnum`, `nationality`, `amount`, `brand`, `item`, `purchaseDate`, `quant`, `distributor`, `streetAddr`, `city`, `region`, `country`, `cardnum`, `expdate`, `ccv`) VALUES
(1, 'ssca', 'cassssss', 'csaaaaaaaa', 'sacccccccccc', 47757, 'kihhhh', 'lhhhhhhhk', '2024-05-30', 1, 'hhhhhhhh', 'tttttttttt', 'kkkkkkk', 'yyyyyyyyy', 'kkkkkkkkk', 'uiiiiiiii', '2024-05-23', '111');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_frequency`
--

CREATE TABLE `tbl_frequency` (
  `frequency_id` int(11) NOT NULL,
  `frequency` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inventory`
--

CREATE TABLE `tbl_inventory` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `measureUnit` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_members`
--

CREATE TABLE `tbl_members` (
  `volunteer_id` int(11) NOT NULL,
  `firstName` varchar(200) NOT NULL,
  `lastName` varchar(200) NOT NULL,
  `contactNumber` int(11) NOT NULL,
  `nationality_id` tinyint(4) NOT NULL,
  `sexuality_id` tinyint(4) NOT NULL,
  `civilStatus_id` tinyint(4) NOT NULL,
  `streetAddress` varchar(255) NOT NULL,
  `city_id` tinyint(4) NOT NULL,
  `region_id` tinyint(4) NOT NULL,
  `country_id` tinyint(4) NOT NULL,
  `day_id` tinyint(4) NOT NULL,
  `timeofday_id` tinyint(4) NOT NULL,
  `frequency_id` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_members2`
--

CREATE TABLE `tbl_members2` (
  `volunteer_id` int(11) NOT NULL,
  `firstName` varchar(200) NOT NULL,
  `lastName` varchar(200) NOT NULL,
  `contactNumber` varchar(20) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `sexuality_id` tinyint(4) NOT NULL,
  `civilStatus_id` tinyint(4) NOT NULL,
  `bdate` date DEFAULT NULL,
  `occupation` tinyint(4) NOT NULL,
  `streetAddress` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `day_id` tinyint(4) NOT NULL,
  `timeofday_id` tinyint(4) NOT NULL,
  `sun` tinyint(4) NOT NULL,
  `mon` tinyint(4) NOT NULL,
  `tue` tinyint(4) NOT NULL,
  `wed` tinyint(4) NOT NULL,
  `thu` tinyint(4) NOT NULL,
  `fri` tinyint(4) NOT NULL,
  `sat` tinyint(4) NOT NULL,
  `morning` tinyint(4) NOT NULL,
  `afternoon` tinyint(4) NOT NULL,
  `evening` tinyint(4) NOT NULL,
  `frequency_id` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_members2`
--

INSERT INTO `tbl_members2` (`volunteer_id`, `firstName`, `lastName`, `contactNumber`, `nationality`, `sexuality_id`, `civilStatus_id`, `bdate`, `occupation`, `streetAddress`, `city`, `region`, `country`, `day_id`, `timeofday_id`, `sun`, `mon`, `tue`, `wed`, `thu`, `fri`, `sat`, `morning`, `afternoon`, `evening`, `frequency_id`) VALUES
(1, '', '', '0', '0', 0, 0, NULL, 0, '', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'junico', '', '0', '0', 0, 0, NULL, 0, '', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, '', '', '0', '0', 0, 0, NULL, 0, '', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'test', '', '0', '0', 0, 0, NULL, 0, '', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'Array', '', '0', '0', 0, 0, NULL, 0, '', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'Array', '', '0', '0', 0, 0, NULL, 0, '', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 'Array', '', '0', '0', 0, 0, NULL, 0, '', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 'test3', '', '0', '0', 0, 0, NULL, 0, '', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 'test', 'random', '09123456789', 'Atlantic', 0, 0, NULL, 0, '', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 'random', 'with sexuality', '587468465', 'wadaw', 1, 0, NULL, 0, '', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 'random', 'with sexuality', '587468465', 'wadaw', 0, 0, NULL, 0, '', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 'random', 'with sexuality', '587468465', 'wadaw', 0, 0, NULL, 0, '', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 'random', 'name', '524545', 'filam', 1, 1, NULL, 0, '', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 'random', 'name', '524545', 'filam', 1, 1, '0000-00-00', 0, '', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 'name', 'try', '1354151', 'fil', 1, 2, '2015-12-17', 0, '', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 'test', 'date', '587468465', 'wadaw', 0, 0, '2024-05-17', 0, '', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 'test2', 'date2', '587468465', 'wadaw', 0, 0, '2024-05-31', 0, '', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 'test', 'with address', '65165165', 'wdadw', 0, 1, '0000-00-00', 0, 'test asdrea', 'city', 'reg', 'countyr', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 'test', 'with address', '65165165', 'wdadw', 0, 1, '0000-00-00', 0, 'test asdrea', 'city', 'reg', 'countyr', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 'with', 'frequency', '8327837', 'efage', 1, 1, '2024-05-22', 1, 'feeeeeeeeee', 'i,u', 'iul', '.uooooooo', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 'with', 'frequency', '8327837', 'efage', 1, 1, '2024-05-22', 1, 'feeeeeeeeee', 'i,u', 'iul', '.uooooooo', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 'with', 'frequency', '8327837', 'efage', 1, 1, '2024-05-22', 1, 'feeeeeeeeee', 'i,u', 'iul', '.uooooooo', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 'with', 'frequency', '8327837', 'efage', 1, 1, '2024-05-22', 1, 'feeeeeeeeee', 'i,u', 'iul', '.uooooooo', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 'with', 'frequency', '8327837', 'efage', 1, 1, '2024-05-22', 1, 'feeeeeeeeee', 'i,u', 'iul', '.uooooooo', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, ':fname', ':lname', ':num', ':nat', 1, 1, '2024-05-31', 1, ':strtAddress', ':city', ':region', ':country', 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(27, 'with', 'frequency', '8327837', 'efage', 1, 1, '2024-05-22', 1, 'feeeeeeeeee', 'i,u', 'iul', '.uooooooo', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(28, 'with', 'frequency', '8327837', 'efage', 1, 1, '2024-05-22', 1, 'feeeeeeeeee', 'i,u', 'iul', '.uooooooo', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 'with', 'frequency', '8327837', 'efage', 1, 1, '2024-05-22', 1, 'feeeeeeeeee', 'i,u', 'iul', '.uooooooo', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, 'with', 'frequency', '8327837', 'efage', 1, 1, '2024-05-22', 1, 'feeeeeeeeee', 'i,u', 'iul', '.uooooooo', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(31, 'ewttt', 'wtttttttttt', 'w3333333', 'errrrr', 0, 2, '2024-05-23', 2, 'rge', 'yjjjjjjjjjjj', 'jyyyyyyyyyyy', 'htttttt', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(32, 'ewttt', 'wtttttttttt', 'w3333333', 'errrrr', 0, 2, '2024-05-23', 2, 'rge', 'yjjjjjjjjjjj', 'jyyyyyyyyyyy', 'htttttt', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nationality`
--

CREATE TABLE `tbl_nationality` (
  `nationality_id` int(11) NOT NULL,
  `nationality` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_regions`
--

CREATE TABLE `tbl_regions` (
  `region_id` int(11) NOT NULL,
  `regionName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sexual_identity`
--

CREATE TABLE `tbl_sexual_identity` (
  `sex_id` int(11) NOT NULL,
  `sexual_identity` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_timeofday`
--

CREATE TABLE `tbl_timeofday` (
  `timeofday_id` int(11) NOT NULL,
  `timeofdayName` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_works`
--

CREATE TABLE `tbl_works` (
  `id` int(11) NOT NULL,
  `beneficiary` varchar(200) NOT NULL,
  `location` varchar(255) NOT NULL,
  `expenses` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cities`
--
ALTER TABLE `tbl_cities`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `tbl_civilstatus`
--
ALTER TABLE `tbl_civilstatus`
  ADD PRIMARY KEY (`civilStatus_id`);

--
-- Indexes for table `tbl_countries`
--
ALTER TABLE `tbl_countries`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `tbl_daysofweek`
--
ALTER TABLE `tbl_daysofweek`
  ADD PRIMARY KEY (`day_id`);

--
-- Indexes for table `tbl_donations`
--
ALTER TABLE `tbl_donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_frequency`
--
ALTER TABLE `tbl_frequency`
  ADD PRIMARY KEY (`frequency_id`);

--
-- Indexes for table `tbl_inventory`
--
ALTER TABLE `tbl_inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_members`
--
ALTER TABLE `tbl_members`
  ADD PRIMARY KEY (`volunteer_id`);

--
-- Indexes for table `tbl_members2`
--
ALTER TABLE `tbl_members2`
  ADD PRIMARY KEY (`volunteer_id`);

--
-- Indexes for table `tbl_nationality`
--
ALTER TABLE `tbl_nationality`
  ADD PRIMARY KEY (`nationality_id`);

--
-- Indexes for table `tbl_regions`
--
ALTER TABLE `tbl_regions`
  ADD PRIMARY KEY (`region_id`);

--
-- Indexes for table `tbl_sexual_identity`
--
ALTER TABLE `tbl_sexual_identity`
  ADD PRIMARY KEY (`sex_id`);

--
-- Indexes for table `tbl_timeofday`
--
ALTER TABLE `tbl_timeofday`
  ADD PRIMARY KEY (`timeofday_id`);

--
-- Indexes for table `tbl_works`
--
ALTER TABLE `tbl_works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cities`
--
ALTER TABLE `tbl_cities`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_civilstatus`
--
ALTER TABLE `tbl_civilstatus`
  MODIFY `civilStatus_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_countries`
--
ALTER TABLE `tbl_countries`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_daysofweek`
--
ALTER TABLE `tbl_daysofweek`
  MODIFY `day_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_donations`
--
ALTER TABLE `tbl_donations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_frequency`
--
ALTER TABLE `tbl_frequency`
  MODIFY `frequency_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_inventory`
--
ALTER TABLE `tbl_inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_members`
--
ALTER TABLE `tbl_members`
  MODIFY `volunteer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_members2`
--
ALTER TABLE `tbl_members2`
  MODIFY `volunteer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_nationality`
--
ALTER TABLE `tbl_nationality`
  MODIFY `nationality_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_regions`
--
ALTER TABLE `tbl_regions`
  MODIFY `region_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_sexual_identity`
--
ALTER TABLE `tbl_sexual_identity`
  MODIFY `sex_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_timeofday`
--
ALTER TABLE `tbl_timeofday`
  MODIFY `timeofday_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_works`
--
ALTER TABLE `tbl_works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
