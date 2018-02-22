-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2018 at 04:54 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

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

CREATE TABLE `contractor` (
  `Contractor_CO_Num` int(5) NOT NULL,
  `Contractor_CO_Name` varchar(40) NOT NULL,
  `Contractor_Phone` varchar(10) NOT NULL,
  `Contractor_Email` varchar(30) NOT NULL,
  `Contractor_Contact_Name` varchar(30) NOT NULL,
  `Contractor_Password` varchar(40) NOT NULL,
  `Contractor_Date_Registered` date NOT NULL,
  `Approved` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contractor`
--

INSERT INTO `contractor` (`Contractor_CO_Num`, `Contractor_CO_Name`, `Contractor_Phone`, `Contractor_Email`, `Contractor_Contact_Name`, `Contractor_Password`, `Contractor_Date_Registered`, `Approved`) VALUES
(1, 'Perri Constructions & Rénovations Inc', '4506767247', 'luigi@perriconstruction.ca', 'Luigi Perri', '********', '2017-12-11', 1),
(2, 'Palumbo Construction', '5148030077', 'dario@palumbocon.ca', 'Dario Palumbo', '********', '2017-12-11', 1),
(3, 'Nesco Renovations', '4389379337', 'eddy@nescoreno.ca', 'Eddy Nesco', '********', '2017-12-11', 2),
(4, 'Quebec Kitchens', '5144612220', 'jack@quebeckitchens.ca', 'Jack Frost', '********', '2017-12-11', 1),
(5, 'Groupe Pigmentum Inc', '5145593664', 'emilio@pigmentum.ca', 'Emilio Escobar', '********', '2017-12-11', 1),
(6, 'Dash Construction', '5148899922', 'dash@dashconstruction.ca', 'Dash McFlash', '********', '2017-12-11', 1),
(7, 'Renovation Ubora Inc', '5146304573', 'brian@renoubora.ca', 'Brian Peters', '********', '2017-12-11', 2),
(8, 'Sunruse Paiting', '5149396000', 'ben@sunrisepaint.ca', 'Ben Chalmers', '********', '2017-12-11', 1),
(9, 'Ka Design', '5147963311', 'keith@kadesign.ca', 'Keith Richards', '********', '2017-12-11', 2),
(10, 'Ausbec Construction', '4383813998', 'joe@ausbec.ca', 'Joe Rogan', '********', '2017-12-11', 0),
(11, 'RenoMaster', '5148651274', 'terry@renomaster.ca', 'Terry Crews', '********', '2017-12-11', 0),
(12, 'AKN Renovations', '5147121300', 'ken@aknreno.ca', 'Ken Masters', '********', '2017-12-11', 0),
(13, 'Groupe Royalty', '5144291414', 'mario@groyalty.ca', 'Mario Montana', '********', '2017-12-11', 0),
(33, 'Sunruse Paiting', '5149396000', 'ben@sunrisepaint.ca', 'Ben Chalmers', '********', '2017-12-11', 0),
(40, 'Cavallino Construction', '5146179770', 'nathan@cavallino.ca', 'Nathan Cavallino', '********', '2017-12-11', 0),
(51, 'LY Construction Inc', '5148272628', 'leo@lyconstruction.ca', 'Leo Chong', '********', '2017-12-11', 0),
(469831245, 'Dunder Mifflin', '4385669865', 'mscott@dundermifflin.com', 'Michael Scott', '81e94e4250dc6744f8c5e2ea78edf12ba0a7b3d7', '2018-02-18', 1),
(12346, 'jkasdhfk', '5144445555', 'itsnickzomg@gmail.com', 'adhfjkadsh', '3da541559918a808c2402bba5012f6c60b27661c', '2018-01-12', 0),
(12555, 'jkasdhfk', '5144445555', 'itsnickzomg@gmail.com', 'adhfjkadsh', '3da541559918a808c2402bba5012f6c60b27661c', '2018-01-12', 0),
(541232548, 'Dunder Mifflin', '4385669865', 'michaelscott@dundermifflin.com', 'Michael Scott', '628fc1e28dd49adb48936fea7edf8ae670f36697', '2018-02-18', 0),
(55555, 'Big John\'s Reno Inc.', '5144445555', 'w@w.com', 'Big John', '96e057d9d3344c5f3f3cf6be7e63ecaa88866f65', '2018-02-06', 1),
(1234556789, 'q', '0123456789', 'q@q.q', 'q', '28296cd6959dc8c36c3368fe75d37f9edd19c059', '2018-02-08', 1),
(1234556783, 'e', '1234567890', 'e@e.e', 'e', '17e29738ea26c839bd68bdc22194a12c1f77f68a', '2018-02-08', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Customer_ID` int(5) NOT NULL,
  `Customer_Name` varchar(40) NOT NULL,
  `Customer_Email` varchar(60) NOT NULL,
  `Customer_Phone` varchar(30) DEFAULT NULL,
  `Customer_Password` varchar(60) NOT NULL,
  `Customer_Date_Registered` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
(35, 'asdf', 'y@y.com', '5144445555', '02a48d67104bf3a465cad28df1cd3ded620da9f3', '2018-02-01'),
(36, 'Pedro', 'pedro@gmail.com', '1234567890', 'a6d07b5f713939fcc9faffe288462aada5f340c8', '2018-02-09'),
(37, 'John Cena', 'youc@ntsee.me', '5144448456', '1c086c18171d72e853c04cb340992e2826628fa0', '2018-02-18');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `Payment_ID` int(5) NOT NULL,
  `Contractor_CO_Num` int(5) NOT NULL,
  `Payment_Amount` double NOT NULL,
  `Proposal_ID` int(5) NOT NULL,
  `Payment_Status` tinyint(1) DEFAULT NULL,
  `PAYMENT_DATE` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `project` (
  `Project_ID` int(5) NOT NULL,
  `Customer_Email` varchar(30) NOT NULL,
  `Project_Description` varchar(1000) NOT NULL,
  `projectType` varchar(50) NOT NULL,
  `Project_Budget` double(7,2) NOT NULL,
  `title` varchar(70) NOT NULL,
  `address` varchar(40) NOT NULL,
  `city` varchar(32) NOT NULL,
  `images` varchar(255) DEFAULT NULL,
  `date_posted` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`Project_ID`, `Customer_Email`, `Project_Description`, `projectType`, `Project_Budget`, `title`, `address`, `city`, `images`, `date_posted`) VALUES
(16, 'test', 'asdfasdf', '', 1000.00, 'asdfsadf', 'asdfasdf', '', NULL, NULL),
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
(122, 'c@c.com', 'asdf', 'Bathroom', 123.00, 'test', 'asdfsad', 'asdf', '../images/project_images/87a9f3c9af4f6f6d564b59df54343be6', NULL),
(138, 'c@c.com', 'rferwf', 'Bathroom', 1234.00, 'wer', 'werfew', 'ewrf', '../images/project_images/placeholder.jpg', '2018-02-15'),
(131, 'a@a.com', 'sdlkfjasdl;kfjas\r\nfjasd\'fkjas\r\ndfasjdklfja\r\n', 'Bathroom', 234.00, 'alskdjfla;skdjfl;kasdjfl;skadj', 'asdf', 'asdf', '../images/project_images/8f33952d52661ee24e576c05688b02c9.png', NULL),
(132, 'y@y.com', 'I\'d liek a new shed in my backyard. Could be made of wood or metal\r\nI\'m thinking of something pretty big\r\n9 feet by 10 feet\r\nthank', 'Bathroom', 950.00, 'Build a new shed', '512', 'Vasdf', '../images/project_images/18d615a25b2ec809eed20b2f4c503ebd.jpg', NULL),
(133, 'y@y.com', 'asdfasdfasdf\r\n\r\nasdfasdf\r\n\r\nasdfasdf\r\n\r\nasdfasdf\r\n\r\n', 'Bathroom', 123.00, 'dsfdsf', '123', 'test', '../images/project_images/placeholder.jpg', NULL),
(141, 'c@c.com', '1234', 'Other', 1234.00, '1234', '1234', '1234', '../images/project_images/f144bd3cb55b3b396d67a5791f6469d2.png', '2018-02-22'),
(140, 'youc@ntsee.me', 'Need to change the floor\r\nEven the ceiling looks bad\r\nChange everything please\r\naaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Kitchen', 25000.00, 'Need a cuisine makeover', '897 Random st', 'Brossard', '../images/project_images/da0b5235503f9a81302d0d86f2a8c12a.png', '2018-02-18'),
(137, 'pedro@gmail.com', 'floor is destroyed', 'Bathroom', 500.00, 'need to fix bathroom', '2455', 'srrf', '../images/project_images/676c0886fa13b53b2c7330805d4aec48.jpg', '2018-02-09');

-- --------------------------------------------------------

--
-- Table structure for table `proposal`
--

CREATE TABLE `proposal` (
  `Proposal_ID` int(5) NOT NULL,
  `Contractor_CO_Num` int(5) NOT NULL,
  `Project_ID` int(5) NOT NULL,
  `Project_Estimate` double(14,2) NOT NULL,
  `approved` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proposal`
--

INSERT INTO `proposal` (`Proposal_ID`, `Contractor_CO_Num`, `Project_ID`, `Project_Estimate`, `approved`) VALUES
(1, 1, 1, 13000.00, NULL),
(2, 2, 2, 9100.00, NULL),
(3, 3, 3, 3000.00, NULL),
(4, 4, 4, 8250.00, NULL),
(5, 5, 5, 9800.00, NULL),
(6, 1, 1, 13000.00, NULL),
(7, 2, 2, 9100.00, NULL),
(8, 3, 3, 3000.00, NULL),
(9, 4, 4, 8250.00, NULL),
(10, 5, 5, 9800.00, NULL),
(11, 1, 1, 13000.00, NULL),
(12, 2, 2, 9100.00, NULL),
(13, 3, 3, 3000.00, NULL),
(14, 4, 4, 8250.00, NULL),
(15, 5, 5, 9800.00, NULL),
(16, 1, 1, 13000.00, NULL),
(17, 2, 2, 9100.00, NULL),
(18, 3, 3, 3000.00, NULL),
(19, 4, 4, 8250.00, NULL),
(20, 5, 5, 9800.00, NULL),
(21, 1, 1, 13000.00, NULL),
(22, 2, 2, 9100.00, NULL),
(23, 3, 3, 3000.00, NULL),
(24, 4, 4, 8250.00, NULL),
(25, 5, 5, 9800.00, NULL),
(26, 1, 1, 13000.00, NULL),
(27, 2, 2, 9100.00, NULL),
(28, 3, 3, 3000.00, NULL),
(29, 4, 4, 8250.00, NULL),
(30, 5, 5, 9800.00, NULL),
(31, 1, 1, 13000.00, NULL),
(32, 2, 2, 9100.00, NULL),
(33, 3, 3, 3000.00, NULL),
(34, 4, 4, 8250.00, NULL),
(35, 5, 5, 9800.00, NULL),
(36, 43321, 134, 120.00, NULL),
(37, 43321, 127, 59999.00, NULL),
(38, 43321, 127, 123.00, NULL),
(39, 43321, 127, 555.00, NULL),
(40, 43321, 127, 99964.00, NULL),
(41, 43321, 129, 404.00, NULL),
(42, 55555, 129, 4055.00, NULL),
(43, 43321, 129, 909.00, NULL),
(44, 1234556789, 16, 2333.00, NULL),
(45, 1234556789, 136, 11111.00, 0),
(46, 1234556789, 136, 1111.00, 0),
(47, 1234556789, 136, 22222.00, 1),
(48, 1234556789, 136, 33333.00, 0),
(49, 1234556783, 136, 11111.00, 0),
(50, 1234556783, 136, 22222.00, 0),
(51, 1234556789, 16, 5.00, NULL),
(52, 1234556789, 16, 12341.00, NULL),
(53, 1234556789, 108, 16.00, NULL),
(54, 1234556789, 137, 450.00, 1),
(55, 469831245, 140, 24000.00, 1),
(56, 55555, 140, 26000.00, 0),
(57, 55555, 140, 123.00, 2),
(58, 55555, 140, 4321.00, 2),
(64, 55555, 141, 4444444.00, 1),
(63, 469831245, 141, 2222222.00, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contractor`
--
ALTER TABLE `contractor`
  ADD PRIMARY KEY (`Contractor_CO_Num`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_ID`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`Payment_ID`),
  ADD KEY `Contractor_CO_Num` (`Contractor_CO_Num`),
  ADD KEY `Proposal_ID` (`Proposal_ID`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`Project_ID`),
  ADD KEY `Customer_Email` (`Customer_Email`);

--
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`Proposal_ID`),
  ADD KEY `Contractor_CO_Num` (`Contractor_CO_Num`),
  ADD KEY `Project_ID` (`Project_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contractor`
--
ALTER TABLE `contractor`
  MODIFY `Contractor_CO_Num` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234556790;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Customer_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `Payment_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `Project_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;
--
-- AUTO_INCREMENT for table `proposal`
--
ALTER TABLE `proposal`
  MODIFY `Proposal_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
