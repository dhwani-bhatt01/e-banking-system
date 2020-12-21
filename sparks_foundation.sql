-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2020 at 11:54 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparks_foundation`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `Cust_id` int(11) NOT NULL,
  `Cust_name` varchar(30) NOT NULL,
  `Cust_age` int(11) NOT NULL,
  `Cust_email` varchar(30) NOT NULL,
  `Cust_mobile` bigint(11) NOT NULL,
  `Cust_bankBal` bigint(11) NOT NULL,
  `Cust_city` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cust_id`, `Cust_name`, `Cust_age`, `Cust_email`, `Cust_mobile`, `Cust_bankBal`, `Cust_city`) VALUES
(1, 'Debra Burks', 23, 'debra.burks@yahoo.com', 9134394021, 160040, 'Orchard Park'),
(2, 'Kasha Todd', 24, 'kasha.todd@yahoo.com', 9134394021, -15000, 'Campbell'),
(3, 'Tameka Fisher', 35, 'tameka.fisher@gmail.com', 9134394021, 210048, 'Redondo Beach'),
(4, 'Daryl Spence', 42, 'daryl.spence@gmail.com', 9134394021, 123087, 'Uniondale'),
(5, 'Charo Rice', 32, 'charo.rice@yahoo.com', 9134394021, 356825, 'Sacromento'),
(6, 'Lynsy Bean', 26, 'lynsy_bean@gmail.com', 9134394021, 130853, 'Fairport'),
(7, 'Latasha Hays', 31, 'latasha_hays@hotmail.com', 9134394021, 467321, 'Washington'),
(8, 'Jack Dunchain', 36, 'jack_dunch@yahoo.com', 9134394021, 65345, 'Vine Street'),
(9, 'Genova Baldwin', 39, 'win_gen@hotmail.com', 9134394021, 65396, 'Port Washington'),
(10, 'Pamelia Newman', 46, 'new.pam@gmail.com', 9134394021, 98365, 'Monroe');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE `transactions` (
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `senderId` int(11) NOT NULL,
  `receiverId` int(11) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`time`, `senderId`, `receiverId`, `amount`) VALUES
('2020-12-19 16:33:31', 2, 1, 50000),
('2020-12-19 16:34:51', 1, 2, 50000),
('2020-12-19 17:34:39', 0, 0, 0),
('2020-12-19 17:43:21', 0, 0, 0),
('2020-12-19 18:23:31', 0, 0, 0),
('2020-12-19 18:51:35', 3, 1, 40),
('2020-12-19 18:54:02', 2, 1, 50000),
('2020-12-19 19:11:14', 2, 1, 50000),
('2020-12-19 19:14:05', 2, 1, 50000),
('2020-12-19 19:14:36', 3, 1, 50000),
('2020-12-20 11:26:37', 5, 6, 10000),
('2020-12-20 11:34:28', 3, 5, 10000),
('2020-12-20 14:36:42', 2, 1, 10000),
('2020-12-20 15:52:53', 1, 2, 50000),
('2020-12-20 15:58:18', 2, 1, 50000),
('2020-12-20 16:10:34', 1, 2, 50000),
('2020-12-20 16:13:08', 2, 1, 50000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Cust_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
