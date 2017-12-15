-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2017 at 05:36 PM
-- Server version: 5.7.9
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ioreno`
--

-- --------------------------------------------------------

--
-- Table structure for table `contractor`
--

DROP TABLE IF EXISTS `contractor`;
CREATE TABLE IF NOT EXISTS `contractor` (
  `Contractor_CO_Num` int(5) NOT NULL AUTO_INCREMENT,
  `Contractor_CO_Name` varchar(40) NOT NULL,
  `Contractor_Phone` varchar(12) NOT NULL,
  `Contractor_Email` varchar(30) NOT NULL,
  `Contractor_Contact_Name` varchar(30) NOT NULL,
  `Contractor_Password` varchar(40) NOT NULL,
  `Contractor_Date_Registered` date NOT NULL,
  PRIMARY KEY (`Contractor_CO_Num`)
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contractor`
--

INSERT INTO `contractor` (`Contractor_CO_Num`, `Contractor_CO_Name`, `Contractor_Phone`, `Contractor_Email`, `Contractor_Contact_Name`, `Contractor_Password`, `Contractor_Date_Registered`) VALUES
(1, 'Perri Constructions & Rénovations Inc', '4506767247', 'luigi@perriconstruction.ca', 'Luigi Perri', '********', '2017-12-11'),
(2, 'Palumbo Construction', '5148030077', 'dario@palumbocon.ca', 'Dario Palumbo', '********', '2017-12-11'),
(3, 'Nesco Renovations', '4389379337', 'eddy@nescoreno.ca', 'Eddy Nesco', '********', '2017-12-11'),
(4, 'Quebec Kitchens', '5144612220', 'jack@quebeckitchens.ca', 'Jack Frost', '********', '2017-12-11'),
(5, 'Groupe Pigmentum Inc', '5145593664', 'emilio@pigmentum.ca', 'Emilio Escobar', '********', '2017-12-11'),
(6, 'Dash Construction', '5148899922', 'dash@dashconstruction.ca', 'Dash McFlash', '********', '2017-12-11'),
(7, 'Renovation Ubora Inc', '5146304573', 'brian@renoubora.ca', 'Brian Peters', '********', '2017-12-11'),
(8, 'Sunruse Paiting', '5149396000', 'ben@sunrisepaint.ca', 'Ben Chalmers', '********', '2017-12-11'),
(9, 'Ka Design', '5147963311', 'keith@kadesign.ca', 'Keith Richards', '********', '2017-12-11'),
(10, 'Ausbec Construction', '4383813998', 'joe@ausbec.ca', 'Joe Rogan', '********', '2017-12-11'),
(11, 'RenoMaster', '5148651274', 'terry@renomaster.ca', 'Terry Crews', '********', '2017-12-11'),
(12, 'AKN Renovations', '5147121300', 'ken@aknreno.ca', 'Ken Masters', '********', '2017-12-11'),
(13, 'Groupe Royalty', '5144291414', 'mario@groyalty.ca', 'Mario Montana', '********', '2017-12-11'),
(33, 'Sunruse Paiting', '5149396000', 'ben@sunrisepaint.ca', 'Ben Chalmers', '********', '2017-12-11'),
(40, 'Cavallino Construction', '5146179770', 'nathan@cavallino.ca', 'Nathan Cavallino', '********', '2017-12-11'),
(51, 'LY Construction Inc', '5148272628', 'leo@lyconstruction.ca', 'Leo Chong', '********', '2017-12-11'),
(53, 'adsf', '512-221-5321', 'itsnickzomg@gmail.com', 'Pickle rick', '3da541559918a808c2402bba5012f6c60b27661c', '2017-12-15'),
(54, 'af3a3fasd', '512-221-5321', 'itsnickzomg@gmail.com', 'Pickle rick', '3da541559918a808c2402bba5012f6c60b27661c', '2017-12-15'),
(55, 'af3a3fasd', '512-221-5321', 'asdf@a.com', 'asdf', '3da541559918a808c2402bba5012f6c60b27661c', '2017-12-15'),
(56, 'adsf', '512-221-5321', 'itsnickzomg@gmail.com', 'Pickle rick', '3da541559918a808c2402bba5012f6c60b27661c', '2017-12-15'),
(57, 'adsf', '512-221-5321', 'itsnickzomg@gmail.com', 'Pickle rick', '3da541559918a808c2402bba5012f6c60b27661c', '2017-12-15'),
(58, 'adsf', '512-221-5321', 'itsnickzomg@gmail.com', 'Pickle rick', '3da541559918a808c2402bba5012f6c60b27661c', '2017-12-15'),
(59, 'adsf', '512-221-5321', 'itsnickzomg@gmail.com', 'asdf', '3da541559918a808c2402bba5012f6c60b27661c', '2017-12-15'),
(60, 'adsf', '512-221-5321', 'itsnickzomg@gmail.com', 'Pickle rick', '3da541559918a808c2402bba5012f6c60b27661c', '2017-12-15'),
(61, 'af3a3fasd', '512-221-5321', 'itsnickzomg@gmail.com', 'Pickle rick', '3da541559918a808c2402bba5012f6c60b27661c', '2017-12-15'),
(62, 'adsf', '512-221-5321', 'itsnickzomg@gmail.com', 'Pickle rick', '3da541559918a808c2402bba5012f6c60b27661c', '2017-12-15'),
(63, 'adsf', '512-221-5321', 'itsnickzomg@gmail.com', 'Pickle rick', '3da541559918a808c2402bba5012f6c60b27661c', '2017-12-15'),
(64, 'adsf', '512-221-5321', 'itsnickzomg@gmail.com', 'asdf', '3da541559918a808c2402bba5012f6c60b27661c', '2017-12-15'),
(65, 'asdfasd', '512-221-5321', 'itsnickzomg@gmail.com', 'Pickle rick', '3da541559918a808c2402bba5012f6c60b27661c', '2017-12-15'),
(66, 'af3a3fasd', '512-221-5321', 'itsnickzomg@gmail.com', 'Pickle rick', '3da541559918a808c2402bba5012f6c60b27661c', '2017-12-15'),
(67, 'adsf', '512-221-5321', 'itsnickzomg@gmail.com', 'asdf', '3da541559918a808c2402bba5012f6c60b27661c', '2017-12-15'),
(68, 'af3a3fasd', '512-221-5321', 'itsnickzomg@gmail.com', 'Pickle rick', '3da541559918a808c2402bba5012f6c60b27661c', '2017-12-15'),
(69, 'adsf', '512-221-5321', 'itsnickzomg@gmail.com', 'asdf', '3da541559918a808c2402bba5012f6c60b27661c', '2017-12-15'),
(70, 'af3a3fasd', '512-221-5321', 'itsnickzomg@gmail.com', 'Pickle rick', '3da541559918a808c2402bba5012f6c60b27661c', '2017-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `Customer_ID` int(5) NOT NULL AUTO_INCREMENT,
  `Customer_Name` varchar(40) NOT NULL,
  `Customer_Email` varchar(30) NOT NULL,
  `Customer_Phone` varchar(30) DEFAULT NULL,
  `Customer_Password` varchar(40) NOT NULL,
  `Customer_Date_Registered` date NOT NULL,
  PRIMARY KEY (`Customer_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_ID`, `Customer_Name`, `Customer_Email`, `Customer_Phone`, `Customer_Password`, `Customer_Date_Registered`) VALUES
(1, 'Nicholas Camillo', 'ncamillo@gmail.com', '5145558449', '********', '2017-12-11'),
(2, 'Alexis Boyer', 'aboyer@gmail.com', '5145551234', '********', '2017-12-11'),
(3, 'Alexandru Turcan', 'aturcan@gmail.com', '5145554321', '********', '2017-12-11'),
(4, 'Jim Lahey', 'jlahey@gmail.com', '5145557443', '********', '2017-12-11'),
(5, 'Gord Downie', 'gdownie@gmail.com', '5145559756', '********', '2017-12-11'),
(6, 'Rami Malek', 'rmalek@gmail.com', '5145556969', '********', '2017-12-11'),
(7, 'Elliot Alderson', 'ealderson@gmail.com', '5145559654', '********', '2017-12-11'),
(8, 'Jason Ching', 'jching@gmail.com', '5144538745', '********', '2017-12-11'),
(9, 'Peter Fox', 'pfox@gmail.com', '5145538945', '********', '2017-12-11'),
(10, 'Arthur Reid', 'areid@gmail.com', '5145322154', '********', '2017-12-11'),
(11, 'Buster Baxter', 'bbaxter@gmail.com', '5145896545', '********', '2017-12-11'),
(12, 'Tommy Knox', 'tknox@gmail.com', '5145512312', '********', '2017-12-11'),
(13, 'Joey Minna', 'jminna@gmail.com', '5145584432', '********', '2017-12-11'),
(14, 'Seymour Skinner', 'sskinner@gmail.com', '5143217896', '********', '2017-12-11'),
(15, 'Lewis Hamilton', 'lhamilton@gmail.com', '5144443254', '********', '2017-12-11'),
(18, 'asdfsadfasd', 'asdfasdf', 'sdafasdf', 'e615fea0972f6eccb870cfe67e146a8e21f3ee7d', '2017-12-13'),
(19, 'f23f', 'asdf', 'asdf', '3da541559918a808c2402bba5012f6c60b27661c', '2017-12-13'),
(20, 'asdf3412', 'f23f', 'asdf213', '05fffcffa13e50ab025dd683cfaf752405353b72', '2017-12-13'),
(21, 'f23f', 'dasf1', 'asdf', '3da541559918a808c2402bba5012f6c60b27661c', '2017-12-13'),
(22, 'f213f', 'asdf23', '3f23', '45c585f6ce309302d09dabba6ed8240372567dd0', '2017-12-13'),
(23, 'f23', 'asdf', 'asdf', '3da541559918a808c2402bba5012f6c60b27661c', '2017-12-13'),
(24, 'asdf223', 'asdf', 'asdf', '3da541559918a808c2402bba5012f6c60b27661c', '2017-12-13'),
(25, 'dasf33', 'asdfasdf', 'asdf', '3da541559918a808c2402bba5012f6c60b27661c', '2017-12-13'),
(26, 'f23f', 'asdf23', 'asdf', '3da541559918a808c2402bba5012f6c60b27661c', '2017-12-13'),
(27, 'f23', 'awdf', 'asdf', '3da541559918a808c2402bba5012f6c60b27661c', '2017-12-13'),
(28, '1222211', 'asdfasdf', 'asdf', '3da541559918a808c2402bba5012f6c60b27661c', '2017-12-13'),
(29, 'dfasdf232', '2fsad', 'asdf', '3da541559918a808c2402bba5012f6c60b27661c', '2017-12-13'),
(30, '3423', '2342', '2342', '0ec09ef9836da03f1add21e3ef607627e687e790', '2017-12-13'),
(31, 'asdf324', '234', '234', '0ec09ef9836da03f1add21e3ef607627e687e790', '2017-12-13'),
(32, 'asdf', 'asdf', 'asdf', '3da541559918a808c2402bba5012f6c60b27661c', '2017-12-13'),
(33, 'NICKKKKKK', 'CNIASDLF', 'SADFK', '3da541559918a808c2402bba5012f6c60b27661c', '2017-12-13'),
(34, '34r23', 'asdf23', 'asdf', '3da541559918a808c2402bba5012f6c60b27661c', '2017-12-15'),
(35, 'asdf', 'asdf@a.com', 'asf', '3da541559918a808c2402bba5012f6c60b27661c', '2017-12-15'),
(36, 'asdf', 'itsnickzomg@gmail.com', 'asdf', '3da541559918a808c2402bba5012f6c60b27661c', '2017-12-15'),
(37, 'Pickle rick', 'itsnickzomg@gmail.com', '512-221-5321', '3da541559918a808c2402bba5012f6c60b27661c', '2017-12-15'),
(38, 'asdf', 'itsnickzomg@gmail.com', 'asdf', '3da541559918a808c2402bba5012f6c60b27661c', '2017-12-15'),
(39, 'Pickle rick', 'itsnickzomg@gmail.com', '512-221-5321', '3da541559918a808c2402bba5012f6c60b27661c', '2017-12-15'),
(40, 'asdf', 'itsnickzomg@gmail.com', '512-221-5321', '3da541559918a808c2402bba5012f6c60b27661c', '2017-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `Payment_ID` int(5) NOT NULL AUTO_INCREMENT,
  `Contractor_CO_Num` int(5) NOT NULL,
  `Payment_Amount` double NOT NULL,
  `Proposal_ID` int(5) NOT NULL,
  `Payment_Status` tinyint(1) DEFAULT NULL,
  `PAYMENT_DATE` date NOT NULL,
  PRIMARY KEY (`Payment_ID`),
  KEY `Contractor_CO_Num` (`Contractor_CO_Num`),
  KEY `Proposal_ID` (`Proposal_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`Payment_ID`, `Contractor_CO_Num`, `Payment_Amount`, `Proposal_ID`, `Payment_Status`, `PAYMENT_DATE`) VALUES
(1, 1, 6.99, 1, 1, '2017-12-11'),
(2, 2, 12.99, 2, 0, '2017-12-11'),
(3, 3, 3.99, 3, 1, '2017-12-11'),
(4, 4, 24.99, 4, 1, '2017-12-11'),
(5, 5, 7.99, 5, 0, '2017-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `Project_ID` int(5) NOT NULL AUTO_INCREMENT,
  `Customer_Email` varchar(30) NOT NULL,
  `Project_Description` varchar(255) NOT NULL,
  `Project_Budget` double(7,2) NOT NULL,
  PRIMARY KEY (`Project_ID`),
  KEY `Customer_Email` (`Customer_Email`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`Project_ID`, `Customer_Email`, `Project_Description`, `Project_Budget`) VALUES
(1, 'aboyer@gmail.com', 'New kitchen needs to be installed', 15000.00),
(2, 'ncamillo@gmail.com', 'Bathroom reconstruction', 9000.00),
(3, 'rmalek@gmail.com', 'Outside panneling needs to be redone', 2500.00),
(4, 'ealderson@gmail.com', 'Hardwood floor installation', 8500.00),
(5, 'pfox@gmail.com', 'New kitchen needs to be installed', 9700.00),
(6, 'bbaxter@gmail.com', 'Tiling needs to be done in bathroom', 12500.00),
(7, 'areid@gmail.com', 'Basement wall repairs', 3400.00),
(8, 'tknox@gmail.com', 'New roof needs to be installed', 15000.00),
(9, 'jminna@gmail.com', 'Deck construction', 5800.00),
(10, 'jminna@gmail.com', 'House needs to be repainted', 5000.00),
(11, 'aboyer@gmail.com', 'Drywall needs to be installed and painted', 7000.00),
(12, 'ncamillo@gmail.com', 'Bathroom reconstruction/tiling', 1200.00),
(13, 'lhamilton@gmail.com', 'Several rooms need to be painted', 1650.00),
(14, 'aturcan@gmail.com', 'Windows and doors need to be replaced', 10000.00),
(15, 'rmalek@gmail.com', 'Landscaping needs to be done in front and back of house', 6100.00);

-- --------------------------------------------------------

--
-- Table structure for table `proposal`
--

DROP TABLE IF EXISTS `proposal`;
CREATE TABLE IF NOT EXISTS `proposal` (
  `Proposal_ID` int(5) NOT NULL AUTO_INCREMENT,
  `Contractor_CO_Num` int(5) NOT NULL,
  `Project_ID` int(5) NOT NULL,
  `Project_Estimate` double(7,2) NOT NULL,
  PRIMARY KEY (`Proposal_ID`),
  KEY `Contractor_CO_Num` (`Contractor_CO_Num`),
  KEY `Project_ID` (`Project_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proposal`
--

INSERT INTO `proposal` (`Proposal_ID`, `Contractor_CO_Num`, `Project_ID`, `Project_Estimate`) VALUES
(1, 1, 1, 13000.00),
(2, 2, 2, 9100.00),
(3, 3, 3, 3000.00),
(4, 4, 4, 8250.00),
(5, 5, 5, 9800.00),
(6, 1, 1, 13000.00),
(7, 2, 2, 9100.00),
(8, 3, 3, 3000.00),
(9, 4, 4, 8250.00),
(10, 5, 5, 9800.00),
(11, 1, 1, 13000.00),
(12, 2, 2, 9100.00),
(13, 3, 3, 3000.00),
(14, 4, 4, 8250.00),
(15, 5, 5, 9800.00),
(16, 1, 1, 13000.00),
(17, 2, 2, 9100.00),
(18, 3, 3, 3000.00),
(19, 4, 4, 8250.00),
(20, 5, 5, 9800.00),
(21, 1, 1, 13000.00),
(22, 2, 2, 9100.00),
(23, 3, 3, 3000.00),
(24, 4, 4, 8250.00),
(25, 5, 5, 9800.00),
(26, 1, 1, 13000.00),
(27, 2, 2, 9100.00),
(28, 3, 3, 3000.00),
(29, 4, 4, 8250.00),
(30, 5, 5, 9800.00),
(31, 1, 1, 13000.00),
(32, 2, 2, 9100.00),
(33, 3, 3, 3000.00),
(34, 4, 4, 8250.00),
(35, 5, 5, 9800.00);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
