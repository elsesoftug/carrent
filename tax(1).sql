-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2021 at 07:21 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tax`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `telphone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `hash` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`firstname`, `lastname`, `telphone`, `password`, `email`, `status`, `hash`) VALUES
('Mbabazi', 'Brenda', '0784211256', 'qwerty', 'brenda@gmail.com', '', ''),
('Kasiba', 'Richard', '0779941964', 'qwerty', 'kasiba@yahoo.com', '', ''),
('Tazuba', 'Cyrus', '07898989988', 'qwerty', 'tazubac@gmail.com', 't', 'h');

-- --------------------------------------------------------

--
-- Table structure for table `addverts`
--

CREATE TABLE `addverts` (
  `Add_id` varchar(100) NOT NULL,
  `branda_Name` varchar(1000) NOT NULL,
  `No_passangers` varchar(100) NOT NULL,
  `Self_drive` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date_rec` text NOT NULL,
  `image` text NOT NULL,
  `price` varchar(100) NOT NULL,
  `location` varchar(1000) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addverts`
--

INSERT INTO `addverts` (`Add_id`, `branda_Name`, `No_passangers`, `Self_drive`, `email`, `date_rec`, `image`, `price`, `location`, `Description`) VALUES
('09/May/2021/1620545842', 'zrtyj', '', '', 'tazubac@gmail.com', '', '', '600', 'fghjohiugdtdtdt', '            This car is good to drive, more spacious than before and higher tech. There are more practical small SUVs if\r\n            you’re happy with more conservative looks, mind.'),
('09/May/2021/1620546738', 'jjjj', '', '', 'tazubac@gmail.com', '', '', '456789', 'sdfghjkkjhg', '            This car is good to drive, more spacious than before and higher tech. There are more practical small SUVs if\r\n            you’re happy with more conservative looks, mind.'),
('09/May/2021/1620557277', 'Supper Custom for Hire', '', '', 'brenda@gmail.com', '', '', '15000', 'Entebe', 'This car is good to drive, more spacious han before and higher tech. There are more ractical small SUVs if you’re happy with more conservative looks, mind.');

-- --------------------------------------------------------

--
-- Table structure for table `diagonosis`
--

CREATE TABLE `diagonosis` (
  `id` int(11) NOT NULL,
  `PID` varchar(67) NOT NULL,
  `Diadonosis` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `display`
--

CREATE TABLE `display` (
  `Image_Id` int(11) NOT NULL,
  `Add_id` varchar(100) NOT NULL,
  `path` text NOT NULL,
  `upload_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `display`
--

INSERT INTO `display` (`Image_Id`, `Add_id`, `path`, `upload_at`) VALUES
(12, '09/May/2021/1620545842', 'uploads/1620545842al5.jpg', '2021-05-09 07:49:31'),
(13, '09/May/2021/1620545842', 'uploads/1620545842al5.jpg', '0000-00-00 00:00:00'),
(14, '09/May/2021/1620545842', 'uploads/1620545842als6.PNG', '0000-00-00 00:00:00'),
(15, '09/May/2021/1620545842', 'uploads/1620545842als7.jpg', '0000-00-00 00:00:00'),
(16, '09/May/2021/1620545842', 'uploads/1620545842als7.PNG', '0000-00-00 00:00:00'),
(17, '09/May/2021/1620546738', 'uploads/IMG-20210226-WA0023.jpg', '0000-00-00 00:00:00'),
(18, '09/May/2021/1620557277', 'uploads/IMG-20210423-WA0001.jpg', '0000-00-00 00:00:00'),
(19, '09/May/2021/1620557277', 'uploads/IMG-20210423-WA0004.jpg', '0000-00-00 00:00:00'),
(20, '09/May/2021/1620557277', 'uploads/IMG-20210423-WA0005.jpg', '0000-00-00 00:00:00'),
(21, '09/May/2021/1620557277', 'uploads/IMG-20210423-WA0006.jpg', '0000-00-00 00:00:00'),
(22, '09/May/2021/1620557277', 'uploads/IMG-20210423-WA0007.jpg', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `Receipt_No` varchar(400) NOT NULL,
  `name` varchar(100) NOT NULL,
  `man_date` varchar(400) NOT NULL,
  `Description` varchar(788) NOT NULL,
  `type` varchar(900) NOT NULL,
  `Amount` varchar(567) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `investigation`
--

CREATE TABLE `investigation` (
  `id` int(11) NOT NULL,
  `PID` varchar(67) NOT NULL,
  `investigations` varchar(700) NOT NULL,
  `date_rec` varchar(678) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `items_sold`
--

CREATE TABLE `items_sold` (
  `id` int(11) NOT NULL,
  `SID` text NOT NULL,
  `Item` text NOT NULL,
  `Unit_price` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items_sold`
--

INSERT INTO `items_sold` (`id`, `SID`, `Item`, `Unit_price`, `Quantity`, `Price`) VALUES
(32, 'M/3363', 'Typhoid test', 20000, 1, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `labtests`
--

CREATE TABLE `labtests` (
  `id` int(11) NOT NULL,
  `PID` varchar(56) NOT NULL,
  `D1` varchar(34) NOT NULL,
  `specimen_1` varchar(56) NOT NULL,
  `Result` varchar(45) NOT NULL,
  `served_by` varchar(66) NOT NULL,
  `date` varchar(67) NOT NULL,
  `Profile` text NOT NULL,
  `value` text NOT NULL,
  `flag` text NOT NULL,
  `Units` text NOT NULL,
  `Lower_Limit` text NOT NULL,
  `Upper_Limit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medicalexamination`
--

CREATE TABLE `medicalexamination` (
  `id` int(11) NOT NULL,
  `PID` varchar(34) CHARACTER SET latin1 NOT NULL,
  `PhysicalExamin` text NOT NULL,
  `Invesitigation` text NOT NULL,
  `provisitiona_Diagonosis` text NOT NULL,
  `Diagonosis` text NOT NULL,
  `P_complaint` text NOT NULL,
  `Prescription` text NOT NULL,
  `served_by` varchar(5600) NOT NULL,
  `date_rec` varchar(450) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `medical_history`
--

CREATE TABLE `medical_history` (
  `id` int(11) NOT NULL,
  `PID` varchar(34) CHARACTER SET latin1 NOT NULL,
  `M_history` text NOT NULL,
  `last_vist` varchar(567) NOT NULL,
  `served_by` varchar(678) NOT NULL,
  `Review_date` varchar(567) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `id` int(11) NOT NULL,
  `MID` varchar(400) NOT NULL,
  `medicine_name` varchar(100) NOT NULL,
  `man_date` varchar(400) NOT NULL,
  `exp_date` varchar(788) NOT NULL,
  `nob` int(5) NOT NULL,
  `nop` int(4) NOT NULL,
  `number_tabs` varchar(78) NOT NULL,
  `medicine_type` varchar(100) NOT NULL,
  `buying_price` varchar(45) NOT NULL,
  `selling_price` varchar(560) NOT NULL,
  `unit_cost` int(11) NOT NULL,
  `Total_number_o_units` varchar(590) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`id`, `MID`, `medicine_name`, `man_date`, `exp_date`, `nob`, `nop`, `number_tabs`, `medicine_type`, `buying_price`, `selling_price`, `unit_cost`, `Total_number_o_units`) VALUES
(11, 'M/3158', 'Diapride 4mg 3x10\'s', '2021-01-19', '2023-04-30', 1, 6, '10', 'Syrups', '23000', '4000', 2000, '71'),
(12, 'M/4039', 'Spirnolactone 25Mg 10x10 UK', '2021-12-12', '2023-04-30', 1, 1, '6', 'Tablets', '23900', '23900', 2300, '-28'),
(13, 'M/1396', 'Limzer cap 1X30', '2020-11-14', '2025-09-25', 1, 1, '1', 'Tablets', '16500', '16500', 16500, '-4'),
(14, 'M/6781', 'Ecorin', '', '', 1, 1, '100', 'Eyedrop', '12000', '1200', 700, '100'),
(15, 'M/1626', 'Nifedipine Tab 20mg', '', '', 1, 1, '100', 'Tablets', '1', '1', 700, '100'),
(16, 'M/6633', 'Giving Sets', '2021-03-10', '2022-09-25', 1, 1, '50', 'Tablets', '16500', '16500', 330, '50'),
(17, 'M/145', 'Plaster 3 7.5cm', '0021-10-31', '2022-03-31', 1, 1, '6', 'Tablets', '3200', '3200', 3200, '6'),
(18, 'M/9135', 'Resuvastatin(Ldnil)20mg 1X30', '2021-02-06', '2025-04-25', 1, 1, '1', 'Tablets', '33500', '33500', 33500, '1'),
(19, 'M/8471', 'IBUMEX SYR', '2020-09-01', '2023-08-01', 1, 1, '10', 'Syrups', '0', '', 6000, '10'),
(20, 'M/6815', 'PARACETAMOL 60mls SYP', '2020-05-01', '2023-04-01', 1, 1, '17', 'Syrups', '', '', 6000, '17'),
(21, 'M/1624', 'HALMO FORTE 90ml', '2019-08-01', '2021-11-01', 1, 1, '1', 'Syrups', '', '', 9000, '1'),
(22, 'M/3018', 'PROMETHAZINE', '2019-11-01', '2022-10-01', 1, 1, '1', 'Syrups', '', '', 6000, '1'),
(23, 'M/4635', 'MUCOGEL 125ml SYP', '2020-12-01', '2023-12-01', 1, 1, '2', 'Syrups', '', '', 20000, '2'),
(24, 'M/3411', 'APFLU', '2020-12-01', '2022-11-01', 1, 1, '10', 'Syrups', '', '', 10000, '10'),
(25, 'M/3348', 'ASCORIL 100mls SYP', '2020-06-01', '2022-05-01', 1, 1, '5', 'Syrups', '', '', 10000, '398'),
(26, 'M/2006', 'CEFAMOL', '2020-06-01', '2023-05-01', 1, 1, '2', 'Syrups', '', '', 12000, '2'),
(27, 'M/6932', 'AMOXYL 100ml SYP', '2020-07-01', '2023-09-01', 1, 1, '32', 'Syrups', '', '', 6000, '122'),
(28, 'M/9908', 'AMOXYCILLIN (EGYPT)', '2019-06-01', '2022-05-01', 1, 1, '10', 'Syrups', '', '', 12000, '-20'),
(29, 'M/6242', 'CLAVULIN SYP', '2020-03-01', '2022-05-01', 1, 1, '4', 'Syrups', '', '', 25000, '92'),
(30, 'M/2972', 'AMPICLOX 100ml SYP', '2021-01-01', '2022-12-01', 1, 1, '21', 'Syrups', '', '', 9000, '21'),
(31, 'M/6961', 'CHLORAMPHENICAL SYP', '2019-08-01', '2022-07-01', 1, 1, '5', 'Syrups', '', '', 6000, '5'),
(32, 'M/7120', 'METRONIDAZOLE', '2020-10-01', '2023-09-01', 1, 1, '28', 'Syrups', '', '', 6000, '28'),
(33, 'M/7977', 'KABUTI SYP', '2021-02-02', '2022-02-02', 1, 1, '7', 'Syrups', '', '', 5000, '7'),
(34, 'M/3494', 'KWESIIMA COUGH MIXTURE', '2020-09-01', '2021-12-01', 1, 1, '9', 'Syrups', '', '', 5000, '9'),
(35, 'M/2993', 'GABOGOLA SYP', '2020-08-27', '2021-08-27', 1, 1, '4', 'Syrups', '', '', 5000, '4'),
(36, 'M/3233', 'ZEDEX 100ml SYP', '2020-03-01', '2022-08-01', 1, 1, '7', 'Syrups', '', '', 9000, '7'),
(37, 'M/7489', 'BROZEDEX 100ml SYP', '2020-03-01', '2023-03-01', 1, 1, '5', 'Syrups', '', '', 9000, '5'),
(38, 'M/9971', 'METFORMIN DENK 500mg', '2020-02-01', '2025-02-01', 1, 1, '100', 'Tablets', '', '', 1000, '100'),
(39, 'M/3047', 'PREGABLIN 75mg', '2020-08-01', '2022-07-01', 2, 1, '30', 'Eyedrop', '1', '1', 1500, '60'),
(40, 'M/3002', 'LOSANTA_H', '2020-06-01', '2023-05-01', 3, 1, '30', 'Eyedrop', '1', '1', 1000, '90'),
(41, 'M/1647', 'AMLODIPINE 5mg', '2020-08-01', '2023-07-01', 2, 1, '30', 'Eyedrop', '1', '1', 700, '60'),
(42, 'M/4604', 'AMLODIPINE 10mg', '2020-08-01', '2023-07-01', 1, 1, '29', 'Tablets', '1', '1', 1000, '29'),
(43, 'M/7016', 'DOXAZOSIN 4mg', '2020-12-01', '2024-12-01', 1, 1, '56', 'Tablets', '1', '1', 1500, '56'),
(44, 'M/2752', 'CAP FLUCONAZOLE 200mg', '2019-12-01', '2021-11-01', 2, 1, '20', 'Tablets', '1', '1', 2500, '40'),
(45, 'M/7471', 'DYNAPAR', '2020-12-01', '2021-11-01', 1, 1, '399', 'Injectable', '1', '1', 500, '399'),
(46, 'M/7225', 'PCM EXTRA', '2020-08-01', '2023-07-01', 1, 1, '200', 'Tablets', '1', '1', 250, '200'),
(47, 'M/9935', 'DICLOFENAC 50mg', '2020-06-01', '2022-05-01', 1, 1, '0', 'Eyedrop', '1', '1', 100, '0'),
(48, 'M/9257', 'ACCECLOFENAC 100mg', '2020-07-01', '2023-06-01', 1, 1, '100', 'Tablets', '1', '1', 800, '100'),
(49, 'M/8047', 'DEXOMETHASONE 0.5mg', '2020-09-01', '2023-05-01', 1, 1, '200', 'Tablets', '1', '1', 200, '200'),
(50, 'M/3483', 'CETRIZINE HYDROCHOLIRIDE 10mg', '2020-11-01', '2023-09-01', 1, 1, '500', 'Tablets', '1', '1', 200, '500'),
(51, 'M/7637', 'PREDNISOLONE 5mg', '2020-06-01', '2024-05-01', 1, 1, '100', 'Tablets', '1', '1', 200, '100'),
(52, 'M/5320', 'LORATADINE DISPERSIBLE 10mg', '2020-06-01', '2023-05-01', 1, 1, '100', 'Tablets', '1', '1', 1000, '100'),
(53, 'M/2606', 'TOFF PLUS', '2020-08-01', '2023-07-01', 1, 1, '20', 'Tablets', '1', '1', 500, '20'),
(54, 'M/5993', 'VITAMIN C', '2021-03-01', '2023-02-01', 1, 1, '500', 'Tablets', '1', '1', 200, '500'),
(55, 'M/5198', 'CAP OMEZ 20mg', '2020-09-01', '2022-08-01', 1, 1, '300', 'Tablets', '1', '1', 300, '300'),
(56, 'M/6873', 'ESOMEPRAZOLE 20mg', '2020-09-01', '2022-08-01', 1, 1, '100', 'Tablets', '1', '1', 500, '100'),
(57, 'M/4055', 'MOXIFLOXACIN HCL 400mg', '2019-01-01', '2021-12-01', 1, 1, '5', 'Tablets', '1', '1', 1000, '5'),
(58, 'M/3761', 'AMOXICLAV 625mg', '2020-02-01', '2022-10-22', 1, 1, '20', 'Tablets', '1', '1', 2000, '20'),
(59, 'M/8529', 'AZITHROMYCIN 500mg', '2020-11-01', '2022-10-01', 1, 1, '8', 'Tablets', '1', '1', 3000, '8'),
(60, 'M/3485', 'AZITHRO 250mg', '2020-05-01', '2024-04-01', 1, 1, '8', 'Tablets', '1', '1', 2000, '8'),
(61, 'M/2944', 'LENOFLOXACIN', '2020-12-01', '2023-11-01', 1, 1, '70', 'Tablets', '1', '1', 2000, '70'),
(62, 'M/2959', 'NITROFURANTOIN', '2021-10-12', '2023-12-01', 1, 1, '100', 'Tablets', '1', '1', 300, '100'),
(63, 'M/8656', 'RECTAL DICLO DENK 100mg', '0020-10-12', '2023-01-01', 1, 1, '10', 'Tablets', '1', '1', 5000, '10'),
(64, 'M/9808', 'PARACETAMOL 500mg TABS', '2020-09-01', '2023-08-01', 1, 1, '2000', 'Tablets', '1', '1', 100, '2000'),
(65, 'M/5711', 'GINSOMIN CAP', '2020-05-12', '2022-05-11', 1, 1, '150', 'Tablets', '1', '1', 2500, '150'),
(66, 'M/5917', 'MANIX', '2019-11-01', '2022-10-01', 1, 1, '30', 'Tablets', '1', '1', 3000, '30'),
(67, 'M/3078', 'MEBENDAZOLE', '2020-12-01', '2023-11-01', 1, 1, '100', 'Tablets', '1', '1', 100, '100'),
(68, 'M/5995', 'ENAT', '2019-11-18', '2022-11-17', 1, 1, '30', 'Tablets', '1', '1', 2500, '30'),
(69, 'M/5889', 'MULTIVITAMIN TABS', '2020-09-01', '2022-08-01', 1, 1, '100', 'Tablets', '1', '1', 300, '100'),
(70, 'M/4751', 'CALCIUM LACTATE 300mg', '2020-09-01', '2023-08-01', 1, 1, '200', 'Tablets', '1', '1', 500, '200'),
(71, 'M/7825', 'ALBENDAZOLE 400mg', '2020-08-01', '2023-07-01', 1, 1, '10', 'Tablets', '1', '1', 2000, '10'),
(72, 'M/3475', 'ZINC', '2020-08-01', '2023-07-01', 1, 1, '200', 'Tablets', '1', '1', 300, '200'),
(73, 'M/2488', 'CAP FEFO', '2019-07-01', '2022-07-01', 1, 1, '300', 'Tablets', '1', '1', 500, '300'),
(74, 'M/9407', 'ALBENDAZOLE ', '2020-07-01', '2023-06-01', 1, 1, '12', 'Syrups', '1', '1', 4000, '12'),
(75, 'M/3487', 'CAP AMOXYL', '2020-11-01', '2022-10-01', 1, 1, '900', 'Tablets', '1', '1', 200, '900'),
(76, 'M/1968', 'FOLI ACID', '2020-04-01', '2023-03-01', 1, 1, '100', 'Tablets', '1', '1', 200, '100'),
(77, 'M/4172', 'CAP AMPLICLOX', '2020-08-01', '2023-07-01', 1, 1, '800', 'Tablets', '1', '1', 300, '800'),
(78, 'M/4676', 'TINIDAZOLE 500mg', '2020-02-02', '2023-10-01', 1, 1, '100', 'Tablets', '1', '1', 500, '100'),
(79, 'M/9764', 'METRO', '2019-09-01', '2024-08-01', 1, 1, '1900', 'Tablets', '1', '1', 100, '1900'),
(80, 'M/5476', 'CIPROFLOXACIN 500mg', '2020-03-01', '2023-02-01', 1, 1, '300', '', '1', '1', 500, '300'),
(81, 'M/2202', 'ACYLOVIR 200mg', '2020-08-01', '2023-07-01', 1, 1, '200', 'Tablets', '1', '1', 300, '200'),
(82, 'M/8303', 'APIDONE SYP 125ml', '2020-05-01', '2022-05-01', 1, 1, '1', 'Syrups', '1', '1', 25000, '1'),
(83, 'M/4498', 'MOSEDIN SYP 5mg/5ml', '2019-09-01', '2022-09-01', 1, 1, '2', 'Syrups', '1', '1', 25000, '2'),
(84, 'M/4204', 'PRITEX BABY 60ml SYP', '2020-01-02', '2023-12-01', 1, 1, '4', 'Syrups', '1', '1', 5000, '4'),
(85, 'M/8067', 'PRITEX JUNIOR 60ml SYP', '2021-01-01', '2023-12-01', 1, 1, '5', 'Syrups', '1', '1', 5000, '5'),
(86, 'M/8126', 'CEFIXIME 100ml SYP', '2020-03-01', '2023-02-01', 1, 1, '1', 'Syrups', '1', '1', 25000, '1'),
(87, 'M/8756', 'SINAREST NASAL DROPS 10ml', '2019-09-01', '2023-08-01', 1, 1, '5', 'Eyedrop', '1', '1', 5000, '5'),
(88, 'M/5098', 'CIPROFLOXACIN HYDROCHLORIDE EYE/EAR DROPS 10ml', '2019-11-01', '2021-10-01', 1, 1, '2', 'Eyedrop', '1', '1', 15000, '2'),
(89, 'M/1702', 'GENTAMICIN EYE/EAR DROPS 10ml', '2020-06-01', '2023-05-01', 1, 1, '10', 'Eyedrop', '1', '1', 5000, '10'),
(90, 'M/4187', 'NORMAL SALINE NOSSAL DROPS', '2020-12-01', '2023-11-01', 1, 1, '3', 'Eyedrop', '1', '1', 5000, '3'),
(91, 'M/9834', 'PROBETA N 7.5ml EYE/EYE/NOSE DROP', '', '', 1, 1, '1', 'Eyedrop', '1', '1', 8000, '1'),
(92, 'M/9104', 'ARTESUNATE INJ 60ml', '2020-02-01', '0023-10-12', 1, 1, '1', 'Injectable', '1', '1', 10000, '1'),
(93, 'M/9001', 'FANCIDA 525mg', '2020-07-01', '2022-06-01', 1, 1, '30', 'Tablets', '1', '1', 1000, '30'),
(94, 'M/9694', 'LONART SYP 60ml', '2020-05-01', '2022-04-01', 1, 1, '3', 'Syrups', '1', '1', 15000, '3'),
(95, 'M/4636', 'LONART TABS 80+480mg', '2020-06-01', '2023-05-01', 1, 1, '1', 'Tablets', '1', '1', 20000, '1'),
(96, 'M/5376', 'AMINOPHYLLINES INJ BP 250mg/10ml', '2021-10-12', '2022-12-01', 1, 1, '5', 'Injectable', '1', '1', 10000, '5'),
(97, 'M/4447', 'TRAMADOL HYDROCHLORIDE INJ', '2020-05-01', '2022-04-01', 1, 1, '1', 'Injectable', '1', '1', 5000, '1'),
(98, 'M/859', 'DYNAPA INJ 75mg', '2020-09-01', '2022-08-01', 1, 1, '1', 'Injectable', '1', '1', 10, '1'),
(99, 'M/809', 'CENTAMICIN INJ 80mg', '2020-02-01', '2022-01-01', 1, 1, '30', 'Injectable', '1', '1', 5000, '30'),
(100, 'M/862', 'CEF SULBACTAM INJ 1.5g', '2020-09-01', '2022-08-01', 1, 1, '5', 'Injectable', '1', '1', 15000, '5'),
(101, 'M/7399', 'IV METRONIDAZOLE INJ 500mg', '2020-10-01', '2022-09-01', 1, 1, '26', 'Injectable', '1', '1', 5000, '26'),
(102, 'M/7447', 'TETRACYCLINE OINTMENT', '2020-07-01', '2023-06-01', 1, 1, '4', 'Tubes And Creams', '1', '1', 5000, '4'),
(103, 'M/9070', 'CLOTRIMAZOLE POWDER', '2020-10-01', '2024-01-01', 1, 1, '2', 'Tubes And Creams', '1', '1', 11000, '2'),
(104, 'M/1445', 'NEOMYCIN CREAM', '2020-08-01', '2023-07-01', 1, 1, '3', 'Tubes And Creams', '1', '1', 7000, '3'),
(105, 'M/7141', 'CANDIDERM CREAM', '2020-08-01', '2023-07-01', 1, 1, '9', 'Tubes And Creams', '1', '1', 9000, '9'),
(106, 'M/5833', 'DICLO GEL', '2020-12-01', '2023-11-01', 1, 1, '2', 'Tubes And Creams', '1', '1', 7000, '2'),
(107, 'M/9975', 'ACYCLOVIR 200ML CREAM', '2019-12-01', '2022-11-01', 1, 1, '5', 'Tubes And Creams', '1', '1', 5000, '5'),
(108, 'M/8505', 'CLOTRIMAZOLE CREAM', '2019-06-01', '2022-06-01', 1, 1, '5', 'Tubes And Creams', '1', '1', 7000, '5'),
(109, 'M/6641', 'DEXONA EYE DROP', '2020-09-01', '2023-04-01', 1, 1, '13', 'Eyedrop', '1', '1', 5000, '13'),
(110, 'M/367', 'CHLORAMPHENICOL EYE DROP', '2020-05-01', '2023-04-01', 1, 1, '9', 'Eyedrop', '1', '1', 5000, '9'),
(111, 'M/7471', 'DYNAPAR', '2020-12-01', '2021-11-01', 1, 1, '399', 'Injectable', '1', '1', 500, '399'),
(112, 'M/7187', 'IV OMEZ 40mg', '2020-10-01', '2022-10-01', 1, 1, '2', 'Injectable', '1', '1', 10000, '2'),
(113, 'M/249', 'IV BENZYL PENICILLIN 1.0mega', '2019-11-01', '12022-11-01', 1, 1, '', 'Injectable', '1', '1', 5000, '0'),
(114, 'M/4908', 'IV HYDROCORTISONE 100mg', '0021-10-12', '2023-12-01', 1, 1, '30', 'Injectable', '1', '1', 5000, '30'),
(115, 'M/9995', 'TEGRETOL 200mg TABS', '2019-09-01', '2023-08-22', 1, 1, '150', 'Tablets', '1', '1', 1000, '150'),
(116, 'M/3', 'IV TRAMEXAMIC ACID', '2019-12-01', '2021-12-01', 1, 1, '5', 'Injectable', '1', '1', 15000, '5'),
(117, 'M/2321', 'GRIP WATER SYP', '2020-02-01', '2022-01-01', 1, 1, '1', 'Syrups', '1', '1', 0, '1'),
(118, 'M/8321', 'RELCER SYRUP 100ml', '2020-08-01', '2024-07-01', 1, 1, '2', 'Syrups', '1', '1', 0, '2'),
(119, 'M/1752', 'MULTIVITAMIN SYP 300ml', '2019-10-01', '2022-09-01', 1, 1, '5', 'Syrups', '1', '1', 6500, '5'),
(120, 'M/8121', 'MULTIVITAMIN SYP 600ml', '2020-08-01', '2022-07-01', 1, 1, '1', 'Syrups', '1', '1', 0, '1'),
(121, 'M/8250', 'PROMETHAZINE 60ml SYP', '2019-11-01', '2022-10-01', 1, 1, '3', 'Syrups', '1', '1', 0, '3'),
(122, 'M/7793', 'KETROCONAZOLE CREAM', '2020-06-01', '2023-05-01', 1, 1, '4', 'Tubes And Creams', '1', '1', 0, '4'),
(123, 'M/679', 'MCG CREAM', '2020-11-01', '2022-08-01', 1, 1, '3', 'Tubes And Creams', '1', '1', 0, '3'),
(124, 'M/5799', 'DUO-COTECXIN TABS', '2020-08-01', '2022-08-01', 1, 1, '27', 'Tablets', '1', '1', 0, '27'),
(125, 'M/8382', 'ACTION TABS', '2019-10-01', '2024-10-01', 1, 1, '83', 'Tablets', '1', '1', 0, '83'),
(126, 'M/8144', 'IV CEFTRIAXONE 1g', '2021-02-01', '2024-01-01', 1, 1, '43', 'Injectable', '1', '1', 0, '43'),
(127, 'M/9427', 'MAMA KIT', '', '', 1, 1, '4', 'Sundries', '1', '1', 0, '4'),
(128, 'M/4233', 'NOSPA TABS', '2020-06-01', '2023-05-01', 1, 1, '70', 'Tablets', '1', '1', 0, '70'),
(129, 'M/2681', 'CEFALEXIN SYP', '2020-11-01', '2022-10-01', 1, 1, '1', 'Syrups', '1', '1', 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `next_of_kin`
--

CREATE TABLE `next_of_kin` (
  `id` int(11) NOT NULL,
  `PID` varchar(789) CHARACTER SET latin1 NOT NULL,
  `Names` text NOT NULL,
  `Relationship` text NOT NULL,
  `contact` text NOT NULL,
  `date_rec` varchar(8990) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parameters`
--

CREATE TABLE `parameters` (
  `id` int(11) NOT NULL,
  `SID` text NOT NULL,
  `Profile` text NOT NULL,
  `Units` text NOT NULL,
  `Lower_Limit` text NOT NULL,
  `Upper_Limit` text NOT NULL,
  `servicename` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parameters`
--

INSERT INTO `parameters` (`id`, `SID`, `Profile`, `Units`, `Lower_Limit`, `Upper_Limit`, `servicename`) VALUES
(1, 'S/1424', 'LYM%', '%', '4.0', '10.0', 'BS'),
(2, 'S/1424', 'WBC', 'x10^9/L', '4.0', '10.0', 'BS'),
(9, 'S/1424', 'MON%', '%', '1.0', '10.0', 'BS'),
(10, 'S/1424', 'LYM', 'x10^3/uL', '0.1', '1.8', 'BS'),
(14, 'S/4525', 'LDL-C holesterol', 'mmol/L', '0.0.', '2.6', 'LIPID PROFILE'),
(15, 'S/8548', 'HDL-Cholesterol', 'mmol/L', '1.03', '1.55', 'LIPID PROFILE'),
(16, 'S/8103', 'P-LCR', '%', '13.0', '43.0', 'CBC'),
(17, 'S/2269', 'PDW', '', '9.0', '17.0', 'FULL BLOOD COUNT (FBC/CBC) (PRIVATE)'),
(18, 'S/2269', 'MPV', 'fL', '6.5', '12.0', 'FULL BLOOD COUNT (FBC/CBC) (PRIVATE)'),
(19, 'S/2269', 'PLT', 'x10^9/L', '100', '300', 'FULL BLOOD COUNT (FBC/CBC) (PRIVATE)'),
(20, 'S/2269', 'RDW-SD', 'fL', '35.0', '56.0', 'FULL BLOOD COUNT (FBC/CBC) (PRIVATE)'),
(21, 'S/2269', 'RDW-CV', '%', '11.0', '16.0', 'FULL BLOOD COUNT (FBC/CBC) (PRIVATE)'),
(22, 'S/2269', 'MCHC', 'g/dL', '32.0', '36.0', 'FULL BLOOD COUNT (FBC/CBC) (PRIVATE)'),
(23, 'S/2269', 'MCH', 'pg', '27.0', '34.0', 'FULL BLOOD COUNT (FBC/CBC) (PRIVATE)'),
(24, 'S/2269', 'MCV', 'fL', '80.0', '100.0', 'FULL BLOOD COUNT (FBC/CBC) (PRIVATE)'),
(25, 'S/2269', 'HCT', '%', '37.0', '54.0', 'FULL BLOOD COUNT (FBC/CBC) (PRIVATE)'),
(26, 'S/2269', ' 	RBC', 'x10^12/L', '3.50', '5.50', 'FULL BLOOD COUNT (FBC/CBC) (PRIVATE)'),
(27, 'S/2269', 'HGB', 'g/dL', '11.0', '16.0', 'FULL BLOOD COUNT (FBC/CBC) (PRIVATE)'),
(28, 'S/2269', 'Gran%', '%', '50.0', '70.0', 'FULL BLOOD COUNT (FBC/CBC) (PRIVATE)'),
(29, 'S/2269', 'Lymph%', '%', '20.0', '40.0', 'FULL BLOOD COUNT (FBC/CBC) (PRIVATE)'),
(30, 'S/2269', 'Gran#', 'x10^9/L', '2.0', '7.0', 'FULL BLOOD COUNT (FBC/CBC) (PRIVATE)'),
(31, 'S/2269', 'Mid#', 'x10^9/L', '0.1', '1.5', 'FULL BLOOD COUNT (FBC/CBC) (PRIVATE)'),
(32, 'S/2269', 'Lymph#', 'x10^9/L', '0.8', '4.0', 'FULL BLOOD COUNT (FBC/CBC) (PRIVATE)'),
(33, 'S/2269', 'WBC', 'x10^9/L', '4.0', '10.0', 'FULL BLOOD COUNT (FBC/CBC) (PRIVATE)'),
(34, 'S/8103', 'PCT', '%', '0.108', '0.282', 'CBC'),
(35, 'S/8103', 'PDW', '', '9.0', '17.0', 'CBC'),
(36, 'S/8103', 'MPV', 'fL', '6.5', '12.0', 'CBC'),
(37, 'S/8103', ' 	PLT', 'x10^9/L', '100', '300', 'CBC'),
(38, 'S/8103', 'RDW-SD', 'fL', '35.0', '56.0', 'CBC'),
(39, 'S/8103', 'RDW-CV', '%', '11.0', '16.0', 'CBC'),
(40, 'S/8103', ' 	MCHC', 'g/dL', '32.0', '36.0', 'CBC'),
(41, 'S/8103', 'MCH', 'pg', '27.0', '34.0', 'CBC'),
(42, 'S/8103', 'MCV', 'fL', '80.0', '100.0', 'CBC'),
(43, 'S/8103', 'HCT', '%', '37.0', '54.0', 'CBC'),
(44, 'S/8103', 'HGB', 'x10^3/uL', '3.5', '5.5', 'CBC'),
(45, 'S/8103', 'RBC', 'x10^3/uL', '3.5', '5.5', 'CBC'),
(46, 'S/8103', 'GRAN', 'x10^3/uL', '2.0', '7.8', 'CBC'),
(47, 'S/8103', 'MON', 'x10^3/uL', '0.1', '1.8', 'CBC'),
(48, 'S/8103', 'LYM', 'x10^3/uL', '0.8', '4.0', 'CBC'),
(49, 'S/8103', 'Gran%', '%', '50.0', '70.0', 'CBC'),
(50, 'S/8103', 'MON%', '%', '1.0', '15.0', 'CBC'),
(51, 'S/8103', 'LYM%', '%', '20.0', '40.0', 'CBC'),
(52, 'S/8103', 'WBC', 'x10^9/L', '4.0', '10.0', 'CBC'),
(53, 'S/5981', 'Triglycelides', 'mmol/L', '0.0.', '1.7', 'LIPID PROFILE'),
(54, 'S/5981', 'Total Cholesterol', 'mmol/L', '3.7', '5.2', 'LIPID PROFILE'),
(55, 'S/7918', 'Gramstain', '', '', '', ' GRAM STAIN (PRIVATE)'),
(56, 'S/7918', 'Gramstain', '', '', '', ' GRAM STAIN (PRIVATE)'),
(57, 'S/9686', 'FNAC', '', '', '', 'FNAC (PRIVATE)'),
(58, 'S/8715', 'FNAC', '', '', '', 'FNAC (GENERAL)'),
(59, 'S/1353', 'HB', 'mg/dL', '11', '18', 'HB/HAEMOGLOBIN (PRIVATE)'),
(60, 'S/6122', 'HB', 'mg/dL', '11', '18', 'HB/HAEMOGLOBIN (GENERAL)'),
(61, 'S/3940', 'Serum Crag', '', '', '', 'SERUM/CSF CRAG (PRIVATE)'),
(62, 'S/1325', 'ESR-Adults Above 50 yrs', 'mm/Hr', '0', '30', 'ESR (ERYTHROCYTE SEDIMENTATION RATE) (PRIVATE)'),
(63, 'S/5910', 'Salmonella Typhi IgM', '', '', '', 'WIdal'),
(64, 'S/5910', 'Salmonella Typhi IgG', '', '', '', 'WIdal'),
(65, 'S/8945', 'Resistant To', '', '', '', 'CULTURE AND SENSTIVITY (PRIVATE)'),
(66, 'S/8945', 'Intermediate To', '', '', '', 'CULTURE AND SENSTIVITY (PRIVATE)'),
(67, 'S/8945', 'Sensitive To', '', '', '', 'CULTURE AND SENSTIVITY (PRIVATE)'),
(68, 'S/8945', 'Culture/Isolate', '', '', '', 'CULTURE AND SENSTIVITY (PRIVATE)'),
(69, 'S/7771', 'Uric Acid', 'umol/l', '140', '420', 'URIC ACID (PRIVATE)'),
(70, 'S/3302', 'Impression', '', '', '', 'SEMINAL ANALYSIS (PRIVATE)'),
(71, 'S/3302', 'Gram Stain', '', '', '', 'SEMINAL ANALYSIS (PRIVATE)'),
(72, 'S/3302', 'Normal Morphology', '%', '60', '100', 'SEMINAL ANALYSIS (PRIVATE)'),
(73, 'S/3302', 'Morphology comment(s)', '', '', '', 'SEMINAL ANALYSIS (PRIVATE)'),
(74, 'S/3302', 'Non-motile', '%', '', '', 'SEMINAL ANALYSIS (PRIVATE)'),
(75, 'S/3302', 'Slow but progressive', '%', '', '', 'SEMINAL ANALYSIS (PRIVATE)'),
(76, 'S/3302', 'Fast & progressive', '%', '', '', 'SEMINAL ANALYSIS (PRIVATE)'),
(77, 'S/3302', 'Motility 2nd Hour', '%', '', '', 'SEMINAL ANALYSIS (PRIVATE)'),
(78, 'S/3302', 'Non-motile', '%', '', '', 'SEMINAL ANALYSIS (PRIVATE)'),
(79, 'S/3302', 'Slow but progressive', '%', '', '', 'SEMINAL ANALYSIS (PRIVATE)'),
(80, 'S/3302', 'Fast & progressive', '%', '', '', 'SEMINAL ANALYSIS (PRIVATE)'),
(81, 'S/3302', 'Motility 1st Hour', '%', '80', '100', 'SEMINAL ANALYSIS (PRIVATE)'),
(82, 'S/3302', 'Viability', '%', '60', '100', 'SEMINAL ANALYSIS (PRIVATE)'),
(83, 'S/3302', 'pH', '', '7.2', '8', 'SEMINAL ANALYSIS (PRIVATE)'),
(84, 'S/3302', 'Volume', 'mls', '2', '6', 'SEMINAL ANALYSIS (PRIVATE)'),
(85, 'S/3302', 'Appearance', '', '', '', 'SEMINAL ANALYSIS (PRIVATE)'),
(86, 'S/3302', 'Liquefaction', '', '', '', 'SEMINAL ANALYSIS (PRIVATE)'),
(87, 'S/3302', 'Period of abstinence', '', '', '', 'SEMINAL ANALYSIS (PRIVATE)'),
(88, 'S/3302', 'Method of collection', '', '', '', 'SEMINAL ANALYSIS (PRIVATE)'),
(89, 'S/3302', 'Time recieved in the lab', '', '', '', 'SEMINAL ANALYSIS (PRIVATE)'),
(90, 'S/3302', 'Time of collection', '', '', '', 'SEMINAL ANALYSIS (PRIVATE)'),
(91, 'S/3302', 'Gram stain', '', '', '', 'SEMINAL ANALYSIS (PRIVATE)'),
(92, 'S/3302', 'Wet preparation', '', '', '', 'SEMINAL ANALYSIS (PRIVATE)'),
(93, 'S/3302', 'Appearance', '', '', '', 'SEMINAL ANALYSIS (PRIVATE)'),
(94, 'S/2387', 'Gram stain', '', '', '', 'HIGH VIGINAL SCRAB/WET PREP (PRIVATE)'),
(95, 'S/2387', 'Wet preparation', '', '', '', 'HIGH VIGINAL SCRAB/WET PREP (PRIVATE)'),
(96, 'S/2387', 'Appearance', '', '', '', 'HIGH VIGINAL SCRAB/WET PREP (PRIVATE)'),
(97, 'S/2387', 'Specimen:', '', '', '', 'HIGH VIGINAL SCRAB/WET PREP (PRIVATE)'),
(98, 'S/96', 'Sputum-2 ZN stain', '', '', '', 'SPUTUM MICRO WET FOR PARASITES (PRIVATE)'),
(99, 'S/96', 'Sputum-2 Appearance', '', '', '', 'SPUTUM MICRO WET FOR PARASITES (PRIVATE)'),
(100, 'S/96', 'Sputum-1 ZN stain', '', '', '', 'SPUTUM MICRO WET FOR PARASITES (PRIVATE)'),
(101, 'S/96', 'Sputum-1 Appearance', '', '', '', 'SPUTUM MICRO WET FOR PARASITES (PRIVATE)'),
(102, 'S/6115', 'Malaria Antigen(RDT)', '', '', '', 'RAPID DIOGNOSTIC TEST FOR FALCIPORUM (PRIVATE)'),
(103, 'S/7774', 'Microscopy', '', '', '', 'URINALYSIS (URINE CHEMISTRY AND MICROSCOPY) (PRIVATE)'),
(104, 'S/7774', 'Appearance', '', '', '', 'URINALYSIS (URINE CHEMISTRY AND MICROSCOPY) (PRIVATE)'),
(105, 'S/7774', 'Urobilinogen', '', '', '', 'URINALYSIS (URINE CHEMISTRY AND MICROSCOPY) (PRIVATE)'),
(106, 'S/7774', 'Bilirubin', '', '', '', 'URINALYSIS (URINE CHEMISTRY AND MICROSCOPY) (PRIVATE)'),
(107, 'S/7774', 'Ketones', '', '', '', 'URINALYSIS (URINE CHEMISTRY AND MICROSCOPY) (PRIVATE)'),
(108, 'S/7774', 'Nitrites', '', '', '', 'URINALYSIS (URINE CHEMISTRY AND MICROSCOPY) (PRIVATE)'),
(109, 'S/7774', 'Leucocytes', '', '', '', 'URINALYSIS (URINE CHEMISTRY AND MICROSCOPY) (PRIVATE)'),
(110, 'S/7774', 'Blood', '', '', '', 'URINALYSIS (URINE CHEMISTRY AND MICROSCOPY) (PRIVATE)'),
(111, 'S/7774', 'Glucose', '', '', '', 'URINALYSIS (URINE CHEMISTRY AND MICROSCOPY) (PRIVATE)'),
(112, 'S/7774', 'Protein', '', '', '', 'URINALYSIS (URINE CHEMISTRY AND MICROSCOPY) (PRIVATE)'),
(113, 'S/7774', 'Specific gravity', '', '', '', 'URINALYSIS (URINE CHEMISTRY AND MICROSCOPY) (PRIVATE)'),
(114, 'S/7774', 'PH', '', '', '', 'URINALYSIS (URINE CHEMISTRY AND MICROSCOPY) (PRIVATE)'),
(115, 'S/1444', 'VDRL', '', '', '', 'SYPHILIS(VDRL/RPR) (PRIVATE)'),
(116, 'S/1444', 'TPHA', '', '', '', 'SYPHILIS(VDRL/RPR) (PRIVATE)'),
(117, 'S/4850', 'Urine HCG(QUALITATIVE)', '', '', '', 'URINE HCG (PREGNANCY TEST) (PRIVATE)'),
(118, 'S/2944', 'RBS', '', '', '', 'RANDOM FASTING BLOOD SUGAR (FBS/RBS) (PRIVATE)'),
(119, 'S/2944', 'RBS', 'mmol/L', '3.6', '6.9', 'RANDOM FASTING BLOOD SUGAR (FBS/RBS) (PRIVATE)'),
(120, 'S/8218', 'Microscopy', '', '', '', 'STOOL ANALYSIS (PRIVATE)'),
(121, 'S/8218', 'Appearance', '', '', '', 'STOOL ANALYSIS (PRIVATE)'),
(122, 'S/8218', 'Modified ZN(For stool)', '', '', '', 'STOOL ANALYSIS (PRIVATE)'),
(123, 'S/7616', 'Blood Slide', '', '', '', 'BLOODSLIDE FOR HAEMOPARASITES (MPS) (PRIVATE)'),
(124, 'S/4339', 'Appearance', '', '', '', 'CSF CULTURE (PRIVATE)'),
(125, 'S/8352', 'Brucella Mellitensis', '', '', '', 'BRUCELLA AGGLUTINATIONTEST (BAT) (PRIVATE)'),
(126, 'S/8352', 'Brucella Abortus', '', '', '', 'BRUCELLA AGGLUTINATIONTEST (BAT) (PRIVATE)'),
(127, 'S/4980', 'FBS-Diabetic', 'mmol/L', '4', '7', 'RANDOM FASTING BLOOD SUGAR (FBS/RBS) (PRIVATE)'),
(128, 'S/5075', 'Blood/Serum HCG', '', '', '', 'SERUM HCG (PRIVATE)'),
(129, 'S/3470', 'Resistant To:', '', '', '', 'BLOOD CULTURE (PRIVATE)'),
(130, 'S/3470', 'Intermediate To:', '', '', '', 'BLOOD CULTURE (PRIVATE)'),
(131, 'S/3470', 'Sensitive To:', '', '', '', 'BLOOD CULTURE (PRIVATE)'),
(132, 'S/3470', 'Blood culture', '', '', '', 'BLOOD CULTURE (PRIVATE)'),
(133, 'S/7526', 'CK', 'U/L', '26', '308', 'CREATININE KINASE (CK-MB) (PRIVATE)'),
(134, 'S/432', 'LDH', 'U/L', '135', '225', 'LDH CHOLESTROL (PRIVATE)'),
(135, 'S/9470', 'AHG/Coombs Indirect', '', '', '', 'INDIRECT COOMBS TEST (PRIVATE)'),
(136, 'S/8523', 'AHG/Coombs Direct', '', '', '', 'COOMBS TEST (PRIVATE)'),
(137, 'S/6261', 'Blood group', '', '', '', 'BLOOD GROUPING (PRIVATE)'),
(138, 'S/655', 'HBeAg', '', '', '', 'HEPATITIS B (PRIVATE)'),
(139, 'S/9105', 'Rheumatoid Factor', '', '', '', 'RA FACTOR (PRIVATE)'),
(140, 'S/60', 'HIV 1 & 2 Serology', '', '', '', 'HIV/ RCT SCREENING COUPLE (PRIVATE)'),
(141, 'S/60', 'HIV 1 & 2 Serology', '', '', '', 'HIV/ RCT SCREENING COUPLE (PRIVATE)'),
(142, 'S/5789', 'H.Pylori Antigen', '', '', '', 'H.PYLORI (PRIVATE)'),
(143, 'S/5255', 'APTT', 'Seconds', '26', '35', 'PTT ( PARTIAL THROMBOPLASTIN TIME) (PRIVATE)'),
(144, 'S/9699', 'Troponin-I', 'ng/mL', '0', '0.11', 'CARDIAC ENZYMES (PRIVATE)'),
(145, 'S/9699', 'CK-MB', 'U/L', '0', '24', 'CARDIAC ENZYMES (PRIVATE)'),
(146, 'S/1505', 'Direct Bilirubin', 'umol/L', '0', '6.8', 'T.BILIRUBIN (PRIVATE)'),
(147, 'S/1505', 'Total Bilirubin', 'umol/L', '0', '20.5', 'T.BILIRUBIN (PRIVATE)'),
(148, 'S/9913', 'T4', 'nmol/L', '66', '181', 'TSH, T4,T3 (PRIVATE)'),
(149, 'S/9913', 'T3', 'nmol/L', '1.3', '3.1', 'TSH, T4,T3 (PRIVATE)'),
(150, 'S/9913', 'TSH', 'uIU/mL', '0.27', '4.2', 'TSH, T4,T3 (PRIVATE)'),
(151, 'S/3006', 'Phosphate', 'mmol/L', '0.9', '1.5', 'PHOSPHOROUS (P) (PRIVATE)'),
(152, 'S/4343', 'Magnesium', 'mmol/L', '0.9', '1.5', 'MAGNESIUM (Mg+) (PRIVATE)'),
(153, 'S/6243', 'Magnesium', 'mmol/L', '0.7', '1.05', 'MAGNESIUM (Mg+) (PRIVATE)'),
(154, 'S/7063', 'Calcium', 'mmol/L', '2.2', '2.6', 'CALICIUM (Ca+) (PRIVATE)'),
(155, 'S/2832', 'Chloride', 'mmol/L', '97', '107', 'CHLORIDE (CL-) (PRIVATE)'),
(156, 'S/1987', 'Potassium', 'mmol/L', '3.5', '5.2', 'POTASSIUM (K+) (PRIVATE)'),
(157, 'S/4306', 'Sodium', 'mmol/L', '135', '145', 'SODIUM (Na+) (PRIVATE)');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `email` varchar(100) NOT NULL,
  `fname` varchar(56) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `gender` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patientbills`
--

CREATE TABLE `patientbills` (
  `id` int(11) NOT NULL,
  `BID` varchar(100) NOT NULL,
  `services` varchar(100) NOT NULL,
  `totalfee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `Topic` text NOT NULL,
  `Display_img` text NOT NULL,
  `messages` text NOT NULL,
  `date_posted` text NOT NULL,
  `posted_by` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `Topic`, `Display_img`, `messages`, `date_posted`, `posted_by`) VALUES
(15, 'dental', 'img/photo1.png', '<h2><u>Heading Of Message</u></h2>\r\n                      <h4>Subheading</h4>\r\n                      <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain\r\n                        was born and I will give you a complete account of the system, and expound the actual teachings\r\n                        of the great explorer of the truth, the master-builder of human happiness. No one rejects,\r\n                        dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know\r\n                        how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again\r\n                        is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain,\r\n                        but because occasionally circumstances occur in which toil and pain can procure him some great\r\n                        pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise,\r\n                        except to obtain some advantage from it? But who has any right to find fault with a man who\r\n                        chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that\r\n                        produces no resultant pleasure? On the other hand, we denounce with righteous indignation and\r\n                        dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so\r\n                        blinded by desire, that they cannot foresee</p>', '07/17/19', 'Dr.----');

-- --------------------------------------------------------

--
-- Table structure for table `priscription`
--

CREATE TABLE `priscription` (
  `id` int(11) NOT NULL,
  `PID` varchar(67) NOT NULL,
  `Priscription` varchar(700) NOT NULL,
  `date_rec` varchar(67) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int(11) NOT NULL,
  `patient_id` varchar(34) CHARACTER SET latin1 NOT NULL,
  `total_cost` int(11) NOT NULL,
  `blance` int(10) UNSIGNED NOT NULL,
  `served_by` varchar(45) NOT NULL,
  `date` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `SID` varchar(11) NOT NULL,
  `Amount` varchar(11) NOT NULL,
  `made_by` varchar(38) NOT NULL,
  `Date` varchar(118) NOT NULL,
  `Dept` varchar(56) NOT NULL,
  `cash` text NOT NULL,
  `Debt` int(11) NOT NULL,
  `Balance` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `SID`, `Amount`, `made_by`, `Date`, `Dept`, `cash`, `Debt`, `Balance`) VALUES
(28, 'M/3363', '20000', 'Masika  Ritah', '01/May/2021 11:16:30am', 'Self Request', '20000', 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `SID` varchar(100) NOT NULL,
  `Servicename` varchar(100) NOT NULL,
  `Servicfee` varchar(100) NOT NULL,
  `PID` varchar(100) NOT NULL,
  `Dept` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `SID`, `Servicename`, `Servicfee`, `PID`, `Dept`) VALUES
(28, 'S/4175', 'Typhoid test', '20000', '', 'Lab'),
(29, 'S/8103', 'CBC', '4500', '', 'Lab'),
(30, 'S/4878', 'BS', '56000', '', 'Lab'),
(31, 'S/4747', 'Room1-Bed 1', '30000', '', 'Doctors_room'),
(32, 'S/8077', 'Room1-Bed 2', '30000', '', 'Doctors_room'),
(33, 'S/7648', 'HIV', '5000', '', 'Lab'),
(34, 'S/4525', 'LIPID PROFILE', '3000', '', 'Lab'),
(35, 'S/8548', 'LIPID PROFILE', '3000', '', 'Lab'),
(36, 'S/2269', 'FULL BLOOD COUNT (FBC/CBC) (PRIVATE)', '3000', '', 'Lab'),
(37, 'S/5981', 'LIPID PROFILE', '2300', '', 'Lab'),
(38, 'S/7918', ' GRAM STAIN (PRIVATE)', '3000', '', 'Lab'),
(39, 'S/9686', 'FNAC (PRIVATE)', '2000', '', 'Lab'),
(40, 'S/8715', 'FNAC (GENERAL)', '23000', '', 'Lab'),
(41, 'S/1829', 'FNAC (GENERAL)', '45600', '', 'Lab'),
(42, 'S/1353', 'HB/HAEMOGLOBIN (PRIVATE)', '5000', '', 'Lab'),
(43, 'S/6122', 'HB/HAEMOGLOBIN (GENERAL)', '5000', '', 'Lab'),
(44, 'S/3940', 'SERUM/CSF CRAG (PRIVATE)', '5000', '', 'Lab'),
(45, 'S/1325', 'ESR (ERYTHROCYTE SEDIMENTATION RATE) (PRIVATE)', '5000', '', 'Lab'),
(46, 'S/5910', 'WIdal', '4000', '', 'Lab'),
(47, 'S/8945', 'CULTURE AND SENSTIVITY (PRIVATE)', '45000', '', 'Lab'),
(48, 'S/7771', 'URIC ACID (PRIVATE)', '45000', '', 'Lab'),
(49, 'S/3302', 'SEMINAL ANALYSIS (PRIVATE)', '45000', '', 'Lab'),
(50, 'S/2387', 'HIGH VIGINAL SCRAB/WET PREP (PRIVATE)', '50000', '', 'Lab'),
(51, 'S/96', 'SPUTUM MICRO WET FOR PARASITES (PRIVATE)', '45000', '', 'Lab'),
(52, 'S/6115', 'RAPID DIOGNOSTIC TEST FOR FALCIPORUM (PRIVATE)', '6000', '', 'Lab'),
(53, 'S/7774', 'URINALYSIS (URINE CHEMISTRY AND MICROSCOPY) (PRIVATE)', '45000', '', 'Lab'),
(54, 'S/1444', 'SYPHILIS(VDRL/RPR) (PRIVATE)', '67000', '', 'Lab'),
(55, 'S/4850', 'URINE HCG (PREGNANCY TEST) (PRIVATE)', '56000', '', 'Lab'),
(56, 'S/2944', 'RANDOM FASTING BLOOD SUGAR (FBS/RBS) (PRIVATE)', '56000', '', 'Lab'),
(57, 'S/8218', 'STOOL ANALYSIS (PRIVATE)', '56000', '', 'Lab'),
(58, 'S/7616', 'BLOODSLIDE FOR HAEMOPARASITES (MPS) (PRIVATE)', '80000', '', 'Lab'),
(59, 'S/4339', 'CSF CULTURE (PRIVATE)', '67000', '', 'Lab'),
(60, 'S/8352', 'BRUCELLA AGGLUTINATIONTEST (BAT) (PRIVATE)', '45000', '', 'Lab'),
(61, 'S/4980', 'RANDOM FASTING BLOOD SUGAR (FBS/RBS) (PRIVATE)', '80000', '', 'Lab'),
(62, 'S/5075', 'SERUM HCG (PRIVATE)', '50000', '', 'Lab'),
(63, 'S/1551', 'THIN BLOOD FILMS (PRIVATE) report', '45000', '', 'Lab'),
(64, 'S/3470', 'BLOOD CULTURE (PRIVATE)', '45000', '', 'Lab'),
(65, 'S/7526', 'CREATININE KINASE (CK-MB) (PRIVATE)', '45000', '', 'Lab'),
(66, 'S/432', 'LDH CHOLESTROL (PRIVATE)', '56000', '', 'Lab'),
(67, 'S/9470', 'INDIRECT COOMBS TEST (PRIVATE)', '45000', '', 'Lab'),
(68, 'S/8523', 'COOMBS TEST (PRIVATE)', '45000', '', 'Lab'),
(69, 'S/6261', 'BLOOD GROUPING (PRIVATE)', '56000', '', 'Lab'),
(70, 'S/655', 'HEPATITIS B (PRIVATE)', '50000', '', 'Lab'),
(71, 'S/9105', 'RA FACTOR (PRIVATE)', '67000', '', 'Lab'),
(72, 'S/60', 'HIV/ RCT SCREENING COUPLE (PRIVATE)', '80000', '', 'Lab'),
(73, 'S/5789', 'H.PYLORI (PRIVATE)', '34000', '', 'Lab'),
(74, 'S/5255', 'PTT ( PARTIAL THROMBOPLASTIN TIME) (PRIVATE)', '5670', '', 'Lab'),
(75, 'S/9699', 'CARDIAC ENZYMES (PRIVATE)', '30000', '', 'Lab'),
(76, 'S/1505', 'T.BILIRUBIN (PRIVATE)', '60000', '', 'Lab'),
(78, 'S/9913', 'TSH, T4,T3 (PRIVATE)', '6000', '', 'Lab'),
(79, 'S/3006', 'PHOSPHOROUS (P) (PRIVATE)', '20000', '', 'Lab'),
(80, 'S/4343', 'MAGNESIUM (Mg+) (PRIVATE)', '70000', '', 'Lab'),
(81, 'S/6243', 'MAGNESIUM (Mg+) (PRIVATE)', '50000', '', 'Lab'),
(82, 'S/7063', 'CALICIUM (Ca+) (PRIVATE)', '56000', '', 'Lab'),
(83, 'S/2832', 'CHLORIDE (CL-) (PRIVATE)', '70000', '', 'Lab'),
(84, 'S/1987', 'POTASSIUM (K+) (PRIVATE)', '30000', '', 'Lab'),
(85, 'S/4306', 'SODIUM (Na+) (PRIVATE)', '20000', '', 'Lab');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` int(11) NOT NULL,
  `Servicename` varchar(56) NOT NULL,
  `cost` varchar(56) NOT NULL,
  `PID` varchar(23) NOT NULL,
  `Type` varchar(56) NOT NULL,
  `date_rec` varchar(3456) NOT NULL,
  `test_status` varchar(700) NOT NULL,
  `Completion_date` varchar(4500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `id` int(11) NOT NULL,
  `PID` varchar(34) NOT NULL,
  `Names` varchar(45) NOT NULL,
  `Treatment` varchar(56) NOT NULL,
  `Type` varchar(67) NOT NULL,
  `Tabs` varchar(76) NOT NULL,
  `Times_per_day` varchar(67) NOT NULL,
  `Served_by` varchar(67) NOT NULL,
  `dates` varchar(77) NOT NULL,
  `status` varchar(67) NOT NULL,
  `Doctors_comment` varchar(45) NOT NULL,
  `Number_o_days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `addverts`
--
ALTER TABLE `addverts`
  ADD PRIMARY KEY (`Add_id`),
  ADD KEY `fk_person` (`email`);

--
-- Indexes for table `diagonosis`
--
ALTER TABLE `diagonosis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `display`
--
ALTER TABLE `display`
  ADD PRIMARY KEY (`Image_Id`),
  ADD KEY `FK_Ac` (`Add_id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investigation`
--
ALTER TABLE `investigation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items_sold`
--
ALTER TABLE `items_sold`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labtests`
--
ALTER TABLE `labtests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PID` (`PID`);

--
-- Indexes for table `medicalexamination`
--
ALTER TABLE `medicalexamination`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PID` (`PID`);

--
-- Indexes for table `medical_history`
--
ALTER TABLE `medical_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PID` (`PID`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `next_of_kin`
--
ALTER TABLE `next_of_kin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PID` (`PID`);

--
-- Indexes for table `parameters`
--
ALTER TABLE `parameters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `patientbills`
--
ALTER TABLE `patientbills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `priscription`
--
ALTER TABLE `priscription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PID` (`PID`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PID` (`PID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diagonosis`
--
ALTER TABLE `diagonosis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `display`
--
ALTER TABLE `display`
  MODIFY `Image_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `investigation`
--
ALTER TABLE `investigation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items_sold`
--
ALTER TABLE `items_sold`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `labtests`
--
ALTER TABLE `labtests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=284;

--
-- AUTO_INCREMENT for table `medicalexamination`
--
ALTER TABLE `medicalexamination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `medical_history`
--
ALTER TABLE `medical_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `next_of_kin`
--
ALTER TABLE `next_of_kin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `parameters`
--
ALTER TABLE `parameters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `patientbills`
--
ALTER TABLE `patientbills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `priscription`
--
ALTER TABLE `priscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=829;

--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addverts`
--
ALTER TABLE `addverts`
  ADD CONSTRAINT `fk_person` FOREIGN KEY (`email`) REFERENCES `accounts` (`email`) ON DELETE CASCADE;

--
-- Constraints for table `display`
--
ALTER TABLE `display`
  ADD CONSTRAINT `FK_Ac` FOREIGN KEY (`Add_id`) REFERENCES `addverts` (`Add_id`);

--
-- Constraints for table `labtests`
--
ALTER TABLE `labtests`
  ADD CONSTRAINT `labtests_ibfk_1` FOREIGN KEY (`PID`) REFERENCES `patient` (`email`) ON DELETE CASCADE;

--
-- Constraints for table `medicalexamination`
--
ALTER TABLE `medicalexamination`
  ADD CONSTRAINT `medicalexamination_ibfk_1` FOREIGN KEY (`PID`) REFERENCES `patient` (`email`) ON DELETE CASCADE;

--
-- Constraints for table `medical_history`
--
ALTER TABLE `medical_history`
  ADD CONSTRAINT `medical_history_ibfk_1` FOREIGN KEY (`PID`) REFERENCES `patient` (`email`) ON DELETE CASCADE;

--
-- Constraints for table `next_of_kin`
--
ALTER TABLE `next_of_kin`
  ADD CONSTRAINT `next_of_kin_ibfk_1` FOREIGN KEY (`PID`) REFERENCES `patient` (`email`) ON DELETE CASCADE;

--
-- Constraints for table `records`
--
ALTER TABLE `records`
  ADD CONSTRAINT `records_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`email`) ON DELETE CASCADE;

--
-- Constraints for table `tests`
--
ALTER TABLE `tests`
  ADD CONSTRAINT `tests_ibfk_1` FOREIGN KEY (`PID`) REFERENCES `patient` (`email`) ON DELETE CASCADE;

--
-- Constraints for table `treatment`
--
ALTER TABLE `treatment`
  ADD CONSTRAINT `treatment_ibfk_1` FOREIGN KEY (`PID`) REFERENCES `patient` (`email`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
