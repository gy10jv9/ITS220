-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2024 at 12:05 AM
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
-- Table structure for table `tbl_approvalrequests`
--

CREATE TABLE `tbl_approvalrequests` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `isdone` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_approvalrequests`
--

INSERT INTO `tbl_approvalrequests` (`id`, `user_id`, `type_id`, `isdone`) VALUES
(2, 24, 1, 1),
(3, 28, 1, 1),
(4, 29, 1, 1),
(5, 30, 2, 1),
(6, 31, 2, 1),
(7, 32, 2, 1),
(8, 33, 1, 1),
(9, 34, 1, 0),
(10, 35, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_beneficiaries`
--

CREATE TABLE `tbl_beneficiaries` (
  `id` int(11) NOT NULL,
  `beneficiaryName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brands`
--

CREATE TABLE `tbl_brands` (
  `id` int(11) NOT NULL,
  `brandName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_brands`
--

INSERT INTO `tbl_brands` (`id`, `brandName`) VALUES
(1, 'brandtest');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_distributors`
--

CREATE TABLE `tbl_distributors` (
  `id` int(11) NOT NULL,
  `distributorName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_distributors`
--

INSERT INTO `tbl_distributors` (`id`, `distributorName`) VALUES
(1, 'distributortest');

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
  `ccv` varchar(100) NOT NULL,
  `dateAdded` date NOT NULL DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_donations`
--

INSERT INTO `tbl_donations` (`id`, `fname`, `lname`, `contactnum`, `nationality`, `amount`, `brand`, `item`, `purchaseDate`, `quant`, `distributor`, `streetAddr`, `city`, `region`, `country`, `cardnum`, `expdate`, `ccv`, `dateAdded`) VALUES
(1, 'ssca', 'cassssss', 'csaaaaaaaa', 'sacccccccccc', 47757, 'kihhhh', 'lhhhhhhhk', '2024-05-30', 1, 'hhhhhhhh', 'tttttttttt', 'kkkkkkk', 'yyyyyyyyy', 'kkkkkkkkk', 'uiiiiiiii', '2024-05-23', '111', '2024-06-13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inventory`
--

CREATE TABLE `tbl_inventory` (
  `id` int(11) NOT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `purchaseDate` date DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `distributor_id` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `remarks` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_inventory`
--

INSERT INTO `tbl_inventory` (`id`, `brand_id`, `item_id`, `purchaseDate`, `quantity`, `distributor_id`, `description`, `remarks`) VALUES
(1, 1, 1, '2024-06-11', 2, 1, 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_items`
--

CREATE TABLE `tbl_items` (
  `id` int(11) NOT NULL,
  `itemName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_items`
--

INSERT INTO `tbl_items` (`id`, `itemName`) VALUES
(1, 'itemtest');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_locations`
--

CREATE TABLE `tbl_locations` (
  `id` int(11) NOT NULL,
  `location` varchar(100) NOT NULL
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
  `frequency_id` tinyint(4) NOT NULL,
  `profileImage_url` text DEFAULT NULL,
  `dateAdded` date NOT NULL DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_members2`
--

INSERT INTO `tbl_members2` (`volunteer_id`, `firstName`, `lastName`, `contactNumber`, `nationality`, `sexuality_id`, `civilStatus_id`, `bdate`, `occupation`, `streetAddress`, `city`, `region`, `country`, `day_id`, `timeofday_id`, `sun`, `mon`, `tue`, `wed`, `thu`, `fri`, `sat`, `morning`, `afternoon`, `evening`, `frequency_id`, `profileImage_url`, `dateAdded`) VALUES
(4, 'test', 'edited', '11111111', 'adwdawd', 1, 1, '2024-06-12', 1, 'vwevweweg', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'img/Capture.PNG', '2024-06-09'),
(5, 'Array', '', '0', '0', 0, 0, NULL, 0, '', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'img/default-profile.jpg', '2024-06-09'),
(6, 'Array', '', '0', '0', 0, 0, NULL, 0, '', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'img/default-profile.jpg', '2024-06-09'),
(7, 'Array', '', '0', '0', 0, 0, NULL, 0, '', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'img/default-profile.jpg', '2024-06-09'),
(8, 'test3', '', '0', '0', 0, 0, NULL, 0, '', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'img/default-profile.jpg', '2024-06-09'),
(9, 'test', 'random', '09123456789', 'Atlantic', 0, 0, NULL, 0, '', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'img/default-profile.jpg', '2024-06-10'),
(10, 'random', 'with sexuality', '587468465', 'wadaw', 1, 0, NULL, 0, '', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'img/default-profile.jpg', '2024-06-10'),
(11, 'random', 'with sexuality', '587468465', 'wadaw', 0, 0, NULL, 0, '', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'img/default-profile.jpg', '2024-06-10'),
(12, 'random', 'with sexuality', '587468465', 'wadaw', 0, 0, NULL, 0, '', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'img/default-profile.jpg', '2024-06-10'),
(13, 'random', 'name', '524545', 'filam', 1, 1, NULL, 0, '', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'img/default-profile.jpg', '2024-06-10'),
(14, 'random', 'name', '524545', 'filam', 1, 1, '0000-00-00', 0, '', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'img/default-profile.jpg', '2024-06-10'),
(15, 'name', 'try', '1354151', 'fil', 1, 2, '2015-12-17', 0, '', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'img/default-profile.jpg', '2024-06-10'),
(16, 'test', 'date', '587468465', 'wadaw', 0, 0, '2024-05-17', 0, '', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'img/default-profile.jpg', '2024-06-10'),
(17, 'test2', 'date2', '587468465', 'wadaw', 0, 0, '2024-05-31', 0, '', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'img/default-profile.jpg', '2024-06-10'),
(18, 'test', 'with address', '65165165', 'wdadw', 0, 1, '0000-00-00', 0, 'test asdrea', 'city', 'reg', 'countyr', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'img/default-profile.jpg', '2024-06-10'),
(19, 'test', 'with address', '65165165', 'wdadw', 0, 1, '0000-00-00', 0, 'test asdrea', 'city', 'reg', 'countyr', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'img/default-profile.jpg', '2024-06-10'),
(21, 'with', 'frequency', '8327837', 'efage', 1, 1, '2024-05-22', 1, 'feeeeeeeeee', 'i,u', 'iul', '.uooooooo', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'img/default-profile.jpg', '2024-06-10'),
(22, 'with', 'frequency', '8327837', 'efage', 1, 1, '2024-05-22', 1, 'feeeeeeeeee', 'i,u', 'iul', '.uooooooo', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'img/default-profile.jpg', '2024-06-10'),
(23, 'with', 'frequency', '8327837', 'efage', 1, 1, '2024-05-22', 1, 'feeeeeeeeee', 'i,u', 'iul', '.uooooooo', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'img/default-profile.jpg', '2024-06-10'),
(24, 'with', 'frequency', '8327837', 'efage', 1, 1, '2024-05-22', 1, 'feeeeeeeeee', 'i,u', 'iul', '.uooooooo', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'img/default-profile.jpg', '2024-06-11'),
(25, 'with', 'frequency', '8327837', 'efage', 1, 1, '2024-05-22', 1, 'feeeeeeeeee', 'i,u', 'iul', '.uooooooo', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'img/default-profile.jpg', '2024-06-11'),
(26, ':fname', ':lname', ':num', ':nat', 1, 1, '2024-05-31', 1, ':strtAddress', ':city', ':region', ':country', 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'img/default-profile.jpg', '2024-06-11'),
(27, 'with', 'frequency', '8327837', 'efage', 1, 1, '2024-05-22', 1, 'feeeeeeeeee', 'i,u', 'iul', '.uooooooo', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'img/default-profile.jpg', '2024-06-11'),
(28, 'with', 'frequency', '8327837', 'efage', 1, 1, '2024-05-22', 1, 'feeeeeeeeee', 'i,u', 'iul', '.uooooooo', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'img/default-profile.jpg', '2024-06-12'),
(29, 'with', 'frequency', '8327837', 'efage', 1, 1, '2024-05-22', 1, 'feeeeeeeeee', 'i,u', 'iul', '.uooooooo', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'img/default-profile.jpg', '2024-06-12'),
(30, 'with', 'frequency', '8327837', 'efage', 1, 1, '2024-05-22', 1, 'feeeeeeeeee', 'i,u', 'iul', '.uooooooo', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'img/default-profile.jpg', '2024-06-12'),
(31, 'ewttt', 'wtttttttttt', 'w3333333', 'errrrr', 0, 2, '2024-05-23', 2, 'rge', 'yjjjjjjjjjjj', 'jyyyyyyyyyyy', 'htttttt', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'img/default-profile.jpg', '2024-06-12'),
(32, 'ewttt', 'wtttttttttt', 'w3333333', 'errrrr', 0, 2, '2024-05-23', 2, 'rge', 'yjjjjjjjjjjj', 'jyyyyyyyyyyy', 'htttttt', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'img/default-profile.jpg', '2024-06-12'),
(37, 'test', 'test', '453378', 'test', 0, 1, '2024-06-13', 2, 'test', 'test', 'test', 'test', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'img/default-profile.jpg', '2024-06-12'),
(38, 'url', 'test', '516516', 'test', 0, 0, '0000-00-00', 0, 'url test', 'test', 'test', 'test', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'img/', '2024-06-12'),
(39, 'url', 'test2', '56146444654', 'test2', 0, 1, '0000-00-00', 0, 'url test2', 'test2', 'test2', 'test2', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'img/446809910_122118958346293815_920552017238265037_n.jpg', '2024-06-12'),
(40, 'test', 'added date', '', '', 0, 0, '0000-00-00', 0, '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'img/', '2024-06-12'),
(41, 'added date', 'test', '416846', 'dadw', 0, 0, '2024-06-11', 0, 'fefwefw', 'ewafwe', 'fwfew', 'fwefw', 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 1, 0, 3, 'img/', '2024-06-13'),
(42, 'defaultprofile', 'test', '838938', 'defaultprofile', 1, 2, '2024-06-11', 0, 'defaultprofile', 'defaultprofile', 'defaultprofile', 'defaultprofile', 0, 0, 0, 1, 0, 1, 0, 1, 0, 0, 1, 1, 1, 'img/default-profile.jpg', '2024-06-13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_requesttypes`
--

CREATE TABLE `tbl_requesttypes` (
  `id` int(11) NOT NULL,
  `type` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_requesttypes`
--

INSERT INTO `tbl_requesttypes` (`id`, `type`) VALUES
(1, 'role-superAdmin'),
(2, 'role-admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `id` int(11) NOT NULL,
  `roles` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`id`, `roles`) VALUES
(1, 'guest'),
(2, 'admin'),
(3, 'super admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `role_id` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `email`, `password`, `role_id`) VALUES
(24, 'test', 'test@test.com', '$2y$10$GRkNTftrepKR0jWJKDlZv.5o0sO2TnjhjdWsj9EOFsvNoqOylgQMy', 3),
(25, 'admin', 'admin@admin.com', '$2y$10$girSurEViGNgMYpTaoYj1eKrDY3VbU.2OGoQ6BXac3.AIKC0uUZP6', 3),
(26, 'superadmintest', 'sample@email.com', '$2y$10$.DMP6A8xmrEQJoWOsfMnu.OktCrS2GLUjjIUBEuoErh2hFt11d5Xu', 1),
(27, 'superadmintest2', 'sample@email.com', '$2y$10$WBt3ThSG/TriAH1llR1BRu1l2vB86Hi4HUXea1BWyT6XA.kIkSX/e', 1),
(28, 'superadmintest3', 'sample@email.com', '$2y$10$pxBxol9bMjcYgugC6yM/C.mIcD59P1FDow02tUSju4enCBKU8xGo.', 3),
(29, 'superadmintest4', 'sample@email.com', '$2y$10$6qm3Z/yXCW30ssz/RLTk6.HG5WJ.p8CsjeCocxi8Mxc59jVaW0nwq', 1),
(30, 'admintest', 'sample@email.com', '$2y$10$MO7a3k0k2u7ygKtpNYAIH.KiAb2nSrLlMyMueqLkIaf9Kek0UQ3LW', 2),
(31, '', '', '$2y$10$Ag.HTWc7Yfgofc3Ahwg7Yu.jwmJzTYDIqj2kNbkmvA9rsvb4Q98l6', 1),
(32, 'you&me', 'you&me@jennie.com', '$2y$10$qybIOZfkxL0Mcyg/r7hP3u1WgaaUYscaEEWHFs.g5fdgoyKSX8N6C', 2),
(33, 'you&me-admin', 'you&me@jennie.com', '$2y$10$Np3roBdwRbX0YWB/.CFp0erpdCuwkL2hoyr/W.uqY4Vyq6ksf8Smy', 3),
(34, 'rgwgwe', 'wgw@gsgrw', '$2y$10$wu2cICTJMXQoHv7e8qzY1.UOMoqN94KWIRfvjsiTDP667R3YIwRr2', 1),
(35, 'k,ikuyikuy', 'afq@fgsgsrg', '$2y$10$KVhF6ZmHbBAWmGxIf/8gEenM3er2UBn6dXydMJOocR9A51xx3OKkq', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_works`
--

CREATE TABLE `tbl_works` (
  `id` int(11) NOT NULL,
  `beneficiary_id` int(11) DEFAULT NULL,
  `location_id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT curdate(),
  `expenses` double NOT NULL,
  `description` text DEFAULT NULL,
  `remarks` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_approvalrequests`
--
ALTER TABLE `tbl_approvalrequests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id` (`user_id`),
  ADD KEY `tbl_approvalrequests_tbl_requesttypes_FK` (`type_id`);

--
-- Indexes for table `tbl_beneficiaries`
--
ALTER TABLE `tbl_beneficiaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_brands`
--
ALTER TABLE `tbl_brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_distributors`
--
ALTER TABLE `tbl_distributors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_donations`
--
ALTER TABLE `tbl_donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_inventory`
--
ALTER TABLE `tbl_inventory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_inventory_tbl_brands_fk_1` (`brand_id`),
  ADD KEY `tbl_inventory_tbl_items_fk` (`item_id`),
  ADD KEY `tbl_inventory_tbl_distributors_fk` (`distributor_id`);

--
-- Indexes for table `tbl_items`
--
ALTER TABLE `tbl_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_locations`
--
ALTER TABLE `tbl_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_members2`
--
ALTER TABLE `tbl_members2`
  ADD PRIMARY KEY (`volunteer_id`);

--
-- Indexes for table `tbl_requesttypes`
--
ALTER TABLE `tbl_requesttypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role_id`);

--
-- Indexes for table `tbl_works`
--
ALTER TABLE `tbl_works`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_works_tbl_beneficiaries_FK` (`beneficiary_id`),
  ADD KEY `tbl_works_tbl_locations_FK` (`location_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_approvalrequests`
--
ALTER TABLE `tbl_approvalrequests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_beneficiaries`
--
ALTER TABLE `tbl_beneficiaries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_brands`
--
ALTER TABLE `tbl_brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_distributors`
--
ALTER TABLE `tbl_distributors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_donations`
--
ALTER TABLE `tbl_donations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_inventory`
--
ALTER TABLE `tbl_inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_items`
--
ALTER TABLE `tbl_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_locations`
--
ALTER TABLE `tbl_locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_members2`
--
ALTER TABLE `tbl_members2`
  MODIFY `volunteer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tbl_requesttypes`
--
ALTER TABLE `tbl_requesttypes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_works`
--
ALTER TABLE `tbl_works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_approvalrequests`
--
ALTER TABLE `tbl_approvalrequests`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`id`),
  ADD CONSTRAINT `tbl_approvalrequests_tbl_requesttypes_FK` FOREIGN KEY (`type_id`) REFERENCES `tbl_requesttypes` (`id`);

--
-- Constraints for table `tbl_inventory`
--
ALTER TABLE `tbl_inventory`
  ADD CONSTRAINT `tbl_inventory_tbl_brands_fk` FOREIGN KEY (`brand_id`) REFERENCES `tbl_brands` (`id`),
  ADD CONSTRAINT `tbl_inventory_tbl_brands_fk_1` FOREIGN KEY (`brand_id`) REFERENCES `tbl_brands` (`id`),
  ADD CONSTRAINT `tbl_inventory_tbl_distributors_fk` FOREIGN KEY (`distributor_id`) REFERENCES `tbl_distributors` (`id`),
  ADD CONSTRAINT `tbl_inventory_tbl_items_fk` FOREIGN KEY (`item_id`) REFERENCES `tbl_items` (`id`);

--
-- Constraints for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD CONSTRAINT `tbl_users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `tbl_roles` (`id`);

--
-- Constraints for table `tbl_works`
--
ALTER TABLE `tbl_works`
  ADD CONSTRAINT `tbl_works_tbl_beneficiaries_FK` FOREIGN KEY (`beneficiary_id`) REFERENCES `tbl_beneficiaries` (`id`),
  ADD CONSTRAINT `tbl_works_tbl_locations_FK` FOREIGN KEY (`location_id`) REFERENCES `tbl_locations` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
