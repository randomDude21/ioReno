-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2018 at 06:45 PM
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
  `Contractor_Phone` varchar(10) NOT NULL,
  `Contractor_Email` varchar(30) NOT NULL,
  `Contractor_Contact_Name` varchar(30) NOT NULL,
  `Contractor_Password` varchar(40) NOT NULL,
  `Contractor_Date_Registered` date NOT NULL,
  `Approved` tinyint(1) NOT NULL,
  PRIMARY KEY (`Contractor_CO_Num`)
) ENGINE=MyISAM AUTO_INCREMENT=43322 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contractor`
--

INSERT INTO `contractor` (`Contractor_CO_Num`, `Contractor_CO_Name`, `Contractor_Phone`, `Contractor_Email`, `Contractor_Contact_Name`, `Contractor_Password`, `Contractor_Date_Registered`, `Approved`) VALUES
(1, 'Perri Constructions & Rénovations Inc', '4506767247', 'luigi@perriconstruction.ca', 'Luigi Perri', '********', '2017-12-11', 0),
(2, 'Palumbo Construction', '5148030077', 'dario@palumbocon.ca', 'Dario Palumbo', '********', '2017-12-11', 0),
(3, 'Nesco Renovations', '4389379337', 'eddy@nescoreno.ca', 'Eddy Nesco', '********', '2017-12-11', 0),
(4, 'Quebec Kitchens', '5144612220', 'jack@quebeckitchens.ca', 'Jack Frost', '********', '2017-12-11', 0),
(5, 'Groupe Pigmentum Inc', '5145593664', 'emilio@pigmentum.ca', 'Emilio Escobar', '********', '2017-12-11', 0),
(6, 'Dash Construction', '5148899922', 'dash@dashconstruction.ca', 'Dash McFlash', '********', '2017-12-11', 0),
(7, 'Renovation Ubora Inc', '5146304573', 'brian@renoubora.ca', 'Brian Peters', '********', '2017-12-11', 0),
(8, 'Sunruse Paiting', '5149396000', 'ben@sunrisepaint.ca', 'Ben Chalmers', '********', '2017-12-11', 0),
(9, 'Ka Design', '5147963311', 'keith@kadesign.ca', 'Keith Richards', '********', '2017-12-11', 0),
(10, 'Ausbec Construction', '4383813998', 'joe@ausbec.ca', 'Joe Rogan', '********', '2017-12-11', 0),
(11, 'RenoMaster', '5148651274', 'terry@renomaster.ca', 'Terry Crews', '********', '2017-12-11', 0),
(12, 'AKN Renovations', '5147121300', 'ken@aknreno.ca', 'Ken Masters', '********', '2017-12-11', 0),
(13, 'Groupe Royalty', '5144291414', 'mario@groyalty.ca', 'Mario Montana', '********', '2017-12-11', 0),
(33, 'Sunruse Paiting', '5149396000', 'ben@sunrisepaint.ca', 'Ben Chalmers', '********', '2017-12-11', 0),
(40, 'Cavallino Construction', '5146179770', 'nathan@cavallino.ca', 'Nathan Cavallino', '********', '2017-12-11', 0),
(51, 'LY Construction Inc', '5148272628', 'leo@lyconstruction.ca', 'Leo Chong', '********', '2017-12-11', 0),
(12345, ' Dunder Mifflin', '1234567890', 'mscott@dundermifflin.com', 'Michael Scott', '33a9e269dd782e92489a8e547b7ed582e0e1d42b', '2018-01-12', 0),
(12346, 'jkasdhfk', '5144445555', 'itsnickzomg@gmail.com', 'adhfjkadsh', '3da541559918a808c2402bba5012f6c60b27661c', '2018-01-12', 0),
(12555, 'jkasdhfk', '5144445555', 'itsnickzomg@gmail.com', 'adhfjkadsh', '3da541559918a808c2402bba5012f6c60b27661c', '2018-01-12', 0),
(43321, 'Big Tiddies', '5144445555', 'x@x.com', 'Timmy Esteban', 'd4c5108cbc830a44d93a621c1a9f30e7028ce3e7', '2018-02-01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `Customer_ID` int(5) NOT NULL AUTO_INCREMENT,
  `Customer_Name` varchar(40) NOT NULL,
  `Customer_Email` varchar(60) NOT NULL,
  `Customer_Phone` varchar(30) DEFAULT NULL,
  `Customer_Password` varchar(60) NOT NULL,
  `Customer_Date_Registered` date NOT NULL,
  PRIMARY KEY (`Customer_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

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
(16, 'ddd', 'ddd', 'ddd', '9c969ddf454079e3d439973bbab63ea6233e4087', '2017-12-13'),
(17, 'ddd', 'ddd@d.d', 'ddd', '9c969ddf454079e3d439973bbab63ea6233e4087', '2017-12-13'),
(18, 'aa', 'a@a.a', 'aa', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', '2017-12-14'),
(19, 'awq', 'asd@a.a', '555-145-1234', 'f10e2821bbbea527ea02200352313bc059445190', '2017-12-15'),
(20, 'Nick', 'c@c.com', '5144445555', '48a55030dfa1171850d365812eecd0d9d87dddd9', '2018-01-12'),
(21, 'joe', 'b@b.com', '5141235555', '370f6f6fae7d55eac4bb3e833d4ff9b369ebf15d', '2018-01-19'),
(22, 'adhfjkadsh', 'c@c.com', '5145555555', '48a55030dfa1171850d365812eecd0d9d87dddd9', '2018-01-19'),
(23, 'fasdf', 'chchouin@gmail.com', '5144445555', '7fb06990f39085a6ecf48557d97831c3d4c15d1f', '2018-01-19'),
(24, 'adhfjkadsh', 'itsnickzomg@gmail.com', '5144445555', 'df370c83758ea87851f5cd12b9e637c7710b1a5b', '2018-01-19'),
(25, 'sdfasd', 'itsnickzomg@gmail.com', '5144445555', 'f6fe17373602f8d1ec9eef56830e3957a3ef997a', '2018-01-19'),
(26, 'adfasdfs', 'itsnickzomg@gmail.com', '5144445555', 'f6fe17373602f8d1ec9eef56830e3957a3ef997a', '2018-01-19'),
(27, 'Big John', 'a@a.com', '5148883818', '2168fc20756a785f8ca77fa75c9ea98df991a61d', '2018-01-23'),
(28, 'Big Nick', 'c@c.com', '5144445555', '48a55030dfa1171850d365812eecd0d9d87dddd9', '2018-01-23'),
(29, 'Nicky Nick', 'c@c.com', '514-992-8449', '48a55030dfa1171850d365812eecd0d9d87dddd9', '2018-01-23'),
(30, 'adhfjkadsh', 'c@c.com', '5144445555', '48a55030dfa1171850d365812eecd0d9d87dddd9', '2018-01-23'),
(31, 'Nickadsf', 'tw@tw.com', '5144445555', '55fa44dbf32149926a25b3638e238a9dc530ae04', '2018-01-23'),
(32, 'nicky nick', 'qwe@qwe.com', '5149991234', '042a7cdf849b116e93037cfac0be21557f3cb99f', '2018-01-23'),
(33, 'Bob Loblah', 't@2.com', '5144445555', '38611cb8bf0cd3fa8fcfacc09b5f07fc03600b77', '2018-01-25'),
(34, 'adhfjkadsh', '1@1.com', '5144445555', '370eb39d93d03900913e36d607efdcf70c44db9d', '2018-01-25'),
(35, 'asdf', 'y@y.com', '5144445555', '02a48d67104bf3a465cad28df1cd3ded620da9f3', '2018-02-01');

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
  `Project_Description` varchar(1000) NOT NULL,
  `projectType` varchar(50) NOT NULL,
  `Project_Budget` double(7,2) NOT NULL,
  `title` varchar(70) NOT NULL,
  `address` varchar(40) NOT NULL,
  `city` varchar(32) NOT NULL,
  `images` varchar(255) DEFAULT NULL,
  `date_posted` date DEFAULT NULL,
  PRIMARY KEY (`Project_ID`),
  KEY `Customer_Email` (`Customer_Email`)
) ENGINE=MyISAM AUTO_INCREMENT=136 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`Project_ID`, `Customer_Email`, `Project_Description`, `projectType`, `Project_Budget`, `title`, `address`, `city`, `images`, `date_posted`) VALUES
(16, 'test', 'asdfasdf', '', 1000.00, 'asdfsadf', 'asdfasdf', '', NULL, NULL),
(17, 'test', 'Look at the tiles they are destroyed pls help.', '', 999.00, 'My floor is fucked', '5645 Baillargeon', '', NULL, NULL),
(18, 'test', 'Look at the tiles they are destroyed pls help.', '', 999.00, 'My floor is fucked', '5645 Baillargeon', '', NULL, NULL),
(19, 'test', 'Look at the tiles they are destroyed pls help.', '', 999.00, 'My floor is fucked', '5645 Baillargeon', '', NULL, NULL),
(20, 'test', 'Look at the tiles they are destroyed pls help.', '', 999.00, 'My floor is fucked', '5645 Baillargeon', '', NULL, NULL),
(21, 'test', 'Look at the tiles they are destroyed pls help.', '', 999.00, 'My floor is fucked', '5645 Baillargeon', '', NULL, NULL),
(22, 'test', 'wake me up (wake me up inside)', '', 19214.00, 'help meeeee', '12412 Bail', '', NULL, NULL),
(37, 'test', 'gsegs', '', 1000.00, '45gser', 'sgdr', '', NULL, NULL),
(38, 'test', 'asdfasdf', '', 1000.00, 'fadsfasdf', 'asdfasdf', '', NULL, NULL),
(39, 'test', 'a3fw3f', '', 1000.00, 'fa3fw3', 'aefsdf', '', NULL, NULL),
(40, 'test', 'a3fw3f', '', 1000.00, 'fa3fw3', 'aefsdf', '', NULL, NULL),
(43, 'test', 'fasdfasd', '', 1000.00, 'asfeafase', 'sadfasdf', '', NULL, NULL),
(44, 'test', 'fasdfasd', '', 1000.00, 'asfeafase', 'sadfasdf', '', NULL, NULL),
(104, '1@1.com', '21312', 'Drywalling', 1324.00, 'w3e23', '12312', '', NULL, NULL),
(107, '1@1.com', 'test22', 'Other', 2313.00, 'test2', 'test address', 'boop', NULL, NULL),
(108, '1@1.com', 'test image', 'Wood Work', 1234.00, 'test image', 'test image add', 'test image cit', '../images/project_images/placeholder.jpg', NULL),
(109, '1@1.com', 'tesatserasdf', 'Landscaping', 1234.00, 'test knuckles', 'eaer', 'asdfaewf', '../images/project_images/C:\\wamp64\\tmp\\php51FE.tmp', NULL),
(110, '1@1.com', '1231231231', 'Landscaping', 1234.00, 'test knuckles 2', 'dafsdf', 'asdfasd', '../images/project_images/576hbgz08ca01.png', NULL),
(111, '1@1.com', 'this is da wae', 'Landscaping', 1231.00, 'test knuckles 3', 'asdf3f', 'asdfsd', '../images/project_images/576hbgz08ca01.png', NULL),
(112, '1@1.com', '12312', 'Bathroom', 1231.00, 'tests', '12312', '12312', '../images/project_images/23915568_886229441542623_469020689808279370_n.jpg', NULL),
(113, '1@1.com', '12312', 'Bathroom', 1231.00, 'tests', '12312', '12312', '../images/project_images/23915568_886229441542623_469020689808279370_n.jpg', NULL),
(114, '1@1.com', '12312', 'Bathroom', 1231.00, 'tests', '12312', '12312', '../images/project_images/23915568_886229441542623_469020689808279370_n.jpg', NULL),
(115, '1@1.com', '12312', 'Bathroom', 1231.00, 'tests', '12312', '12312', '../images/project_images/23915568_886229441542623_469020689808279370_n.jpg', NULL),
(116, '1@1.com', '12312', 'Bathroom', 1231.00, 'tests', '12312', '12312', '../images/project_images/23915568_886229441542623_469020689808279370_n.jpg', NULL),
(117, '1@1.com', '12312', 'Bathroom', 1231.00, 'tests', '12312', '12312', '../images/project_images/23915568_886229441542623_469020689808279370_n.jpg', NULL),
(118, '1@1.com', '12312', 'Bathroom', 1231.00, 'tests', '12312', '12312', '../images/project_images/23915568_886229441542623_469020689808279370_n.jpg', NULL),
(119, '1@1.com', '12312', 'Bathroom', 1231.00, 'tests', '12312', '12312', '../images/project_images/23915568_886229441542623_469020689808279370_n.jpg', NULL),
(127, 'c@c.com', 'test', 'Masonry', 123.00, 'knuckles', '123', 'new city', '../images/project_images/b075807a36a333962464850f26f3f7c6.png', NULL),
(130, 'c@c.com', 'Look my bathroom is complete shit\r\nthe toilet is old and filthy\r\nblah blah blah\r\ni need a life\r\nSomewhere to poop\r\nand possibly shower', 'Bathroom', 9000.00, 'I need a new heckin bathroom', '123 asdf', 'Brossard', '../images/project_images/1bd2e24c61d9a5ede6916dd64c280de9.png', NULL),
(128, 'c@c.com', '123', 'Bathroom', 123.00, 'TEST!', '123', '123', '../images/project_images/9cccaeeab6ba5d707c8a74d27546b9ea.jpg', NULL),
(122, 'c@c.com', 'asdf', 'Bathroom', 123.00, 'test', 'asdfsad', 'asdf', '../images/project_images/87a9f3c9af4f6f6d564b59df54343be6', NULL),
(123, 'c@c.com', 'asdf', 'Bathroom', 123.00, 'test', 'asdfsad', 'asdf', '../images/project_images/8d6d05ff4d533d39c96c3a83b9d6db5c', NULL),
(124, 'c@c.com', 'asdf', 'Bathroom', 123.00, 'test', 'asdfsad', 'asdf', '../images/project_images/9e5978afc087ae120336958fda038cdf', NULL),
(125, 'c@c.com', '23423', 'Bathroom', 2342.00, '34234', '234', '2342', '../images/project_images/5ff192c39b55d82a8fb952ad3ead5a97jpg', NULL),
(126, 'c@c.com', '1231', 'Bathroom', 2314.00, 'dsfdsf', '123', '123', '../images/project_images/8103cbb733da0c4d5a353c5599318e9f.jpg', NULL),
(129, 'c@c.com', '123', 'Bathroom', 123.00, 'NEWEST PROJ', '123', '123', '../images/project_images/0c16cb46404ea6d4837eb4043e0e92c5.jpg', NULL),
(131, 'a@a.com', 'sdlkfjasdl;kfjas\r\nfjasd''fkjas\r\ndfasjdklfja\r\n', 'Bathroom', 234.00, 'alskdjfla;skdjfl;kasdjfl;skadj', 'asdf', 'asdf', '../images/project_images/8f33952d52661ee24e576c05688b02c9.png', NULL),
(132, 'y@y.com', 'I''d liek a new shed in my backyard. Could be made of wood or metal\r\nI''m thinking of something pretty big\r\n9 feet by 10 feet\r\nthank', 'Bathroom', 950.00, 'Build a new shed', '512', 'Vasdf', '../images/project_images/18d615a25b2ec809eed20b2f4c503ebd.jpg', NULL),
(133, 'y@y.com', 'asdfasdfasdf\r\n\r\nasdfasdf\r\n\r\nasdfasdf\r\n\r\nasdfasdf\r\n\r\n', 'Bathroom', 123.00, 'dsfdsf', '123', 'test', '../images/project_images/placeholder.jpg', NULL),
(134, 'y@y.com', 'adfasldjfal;skdjfas\r\nasdklfj asld;fjasl;kdfja; sldkfa; lsdjfa sl;df                       aslkdjfl;asd\r\nasdflk \r\n     - asdfas\r\n    - asdlkfjasd;\r\n\r\n ----- ad aslkfj\r\n                                             asldkjf', 'Bathroom', 412.00, 'NEW FUCKIN PROJ', 'asdf', 'test', '../images/project_images/87ed389a56a331ca9ec47ac149bdcd4f.jpg', NULL),
(135, 'c@c.com', 'asdfasd\r\nfas\r\ndfa\r\nsdf\r\nasdf\r\n', 'Bathroom', 123.00, 'TEST DATE PROJECT', 'asdf', 'asdf', '../images/project_images/placeholder.jpg', '2018-02-01');

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
