-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 18, 2022 at 02:05 PM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gnews`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `Employee_id` int(11) NOT NULL AUTO_INCREMENT,
  `First_name` varchar(255) DEFAULT NULL,
  `Last_name` varchar(255) DEFAULT NULL,
  `Salary` double(10,2) DEFAULT NULL,
  `Joining_date` date DEFAULT NULL,
  `Departement` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Employee_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Employee_id`, `First_name`, `Last_name`, `Salary`, `Joining_date`, `Departement`, `created_at`, `updated_at`) VALUES
(1, 'Bob', 'Kinto', 1000000.00, '2019-01-20', 'Finance', '2022-01-18 13:31:53', '2022-01-18 13:31:53'),
(2, 'Jerry', 'Kansxo', 6000000.00, '2019-01-15', 'IT', '2022-01-18 13:31:53', '2022-01-18 13:31:53'),
(3, 'Philip', 'Jose', 8900000.00, '2019-02-05', 'Banking', '2022-01-18 13:32:49', '2022-01-18 13:32:49'),
(4, 'John', 'Abraham', 2000000.00, '2019-02-25', 'Insurance', '2022-01-18 13:32:49', '2022-01-18 13:32:49'),
(5, 'Michael', 'Mathew', 2200000.00, '2019-02-28', 'Finance', '2022-01-18 13:33:37', '2022-01-18 13:33:37'),
(6, 'Alex', 'chreketo', 4000000.00, '2019-05-10', 'IT', '2022-01-18 13:33:37', '2022-01-18 13:33:37'),
(7, 'Yohan', 'Soso', 1230000.00, '2019-06-20', 'Banking', '2022-01-18 13:34:02', '2022-01-18 13:34:02');

-- --------------------------------------------------------

--
-- Table structure for table `reward`
--

DROP TABLE IF EXISTS `reward`;
CREATE TABLE IF NOT EXISTS `reward` (
  `Employee_ref_id` int(11) DEFAULT NULL,
  `date_reward` date DEFAULT NULL,
  `amount` double(10,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reward`
--

INSERT INTO `reward` (`Employee_ref_id`, `date_reward`, `amount`) VALUES
(1, '2019-05-11', 1000.00),
(2, '2019-02-15', 5000.00),
(3, '2019-04-22', 2000.00),
(1, '2019-06-20', 8000.00);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
