-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2018 at 02:31 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

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
(1234556783, 'Eric Smith Reno', '1234567890', 'e@e.e', 'Eric S', '17e29738ea26c839bd68bdc22194a12c1f77f68a', '2018-02-08', 1),
(1234567895, 'DG RENO', '5145555555', 'dg@dg.com', 'Dave Gibbons', '1da6d5b0e9aed7a1b83a41670bf391fc688ca817', '2018-02-26', 1);

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
(38, 'Alan Moore', 'am@am.com', '5145555555', '3e21b07df25eec59bae31f1fcd7c020ec6b42c5b', '2018-02-26'),
(26, 'adfasdfs', 'itsnickzomg@gmail.com', '5144445555', 'f6fe17373602f8d1ec9eef56830e3957a3ef997a', '2018-01-19'),
(27, 'Big John', 'a@a.com', '5148883818', '2168fc20756a785f8ca77fa75c9ea98df991a61d', '2018-01-23'),
(28, 'Big Nick', 'c@c.com', '5144445555', '48a55030dfa1171850d365812eecd0d9d87dddd9', '2018-01-23'),
(29, 'Nicky Nick', 'c@c.com', '514-992-8449', '48a55030dfa1171850d365812eecd0d9d87dddd9', '2018-01-23'),
(30, 'adhfjkadsh', 'c@c.com', '5144445555', '48a55030dfa1171850d365812eecd0d9d87dddd9', '2018-01-23'),
(31, 'Nickadsf', 'tw@tw.com', '5144445555', '55fa44dbf32149926a25b3638e238a9dc530ae04', '2018-01-23'),
(32, 'nicky nick', 'qwe@qwe.com', '5149991234', '042a7cdf849b116e93037cfac0be21557f3cb99f', '2018-01-23'),
(33, 'Bob Loblah', 't@2.com', '5144445555', '38611cb8bf0cd3fa8fcfacc09b5f07fc03600b77', '2018-01-25'),
(34, 'adhfjkadsh', '1@1.com', '5144445555', '370eb39d93d03900913e36d607efdcf70c44db9d', '2018-01-25'),
(35, 'Jimmy', 'y@y.com', '5144445555', '02a48d67104bf3a465cad28df1cd3ded620da9f3', '2018-02-01'),
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
(149, 'am@am.com', 'Nunc feugiat sem non urna tempus bibendum. Cras est nisl, condimentum ultricies ullamcorper eget, mattis a massa. \r\n\r\nPhasellus sit amet magna ut diam aliquam dignissim nec quis tortor. Fusce molestie dolor at odio lobortis consequat. \r\nQuisque erat felis, consectetur vel sapien id, facilisis scelerisque nibh. Mauris vehicula mi at tincidunt sollicitudin. ', 'Drywalling', 1000.00, 'Drywall needs to be put up', '111 Owl', 'Montreal', '../images/project_images/17b14f17616b15cb4c0c0b512db03bf7.jpg', '2018-02-26'),
(148, 'y@y.com', 'Nunc feugiat sem non urna tempus bibendum. Cras est nisl, condimentum ultricies ullamcorper eget, mattis a massa. \r\n\r\nPhasellus sit amet magna ut diam aliquam dignissim nec quis tortor. Fusce molestie dolor at odio lobortis consequat. \r\nQuisque erat felis, consectetur vel sapien id, facilisis scelerisque nibh. Mauris vehicula mi at tincidunt sollicitudin. ', 'Painting', 2000.00, 'Paint for new addition', '631 Park', 'Montreal', '../images/project_images/151221b49e8d2e396b240019d08126e2.jpg', '2018-02-26'),
(147, 'y@y.com', 'Nunc feugiat sem non urna tempus bibendum. Cras est nisl, condimentum ultricies ullamcorper eget, mattis a massa. \r\nPhasellus sit amet magna ut diam aliquam dignissim nec quis tortor. Fusce molestie dolor at odio lobortis consequat. \r\n\r\nQuisque erat felis, consectetur vel sapien id, facilisis scelerisque nibh. Mauris vehicula mi at tincidunt sollicitudin. Nunc rutrum urna a dui facilisis dictum. Ut volutpat auctor dictum. Etiam scelerisque lacus sit amet felis malesuada commodo. ', 'Electrical Work', 2500.00, 'Electrical work for new addition', '631 Park', 'Montreal', '../images/project_images/4ddfbca898cddd5dff2e04c852bead1d.jpg', '2018-02-26'),
(146, 'y@y.com', 'Nulla nec erat eleifend, venenatis lectus sed, posuere ipsum. In auctor ultrices lectus, in imperdiet tellus placerat id. \r\nSed at gravida tortor, non lobortis turpis. Sed at gravida tortor, non lobortis turpis. \r\nSed at gravida tortor, non lobortis turpis. ', 'Wood Work', 5000.00, 'New floors in living room', '234 Nelson', 'Montreal', '../images/project_images/8e09cb5cf61de07d6619ae52b7ae11ae.jpg', '2018-02-26'),
(145, 'c@c.com', 'Nulla nec erat eleifend, venenatis lectus sed, posuere ipsum. In auctor ultrices lectus, in imperdiet tellus placerat id. \r\nSed at gravida tortor, non lobortis turpis. Integer consequat molestie posuere. Suspendisse quis velit id justo dignissim congue et vitae nisi. \r\nQuisque urna eros, bibendum at pretium ac, laoreet a leo. Donec egestas id mauris quis placerat. \r\nVestibulum gravida tortor ut magna commodo, non euismod turpis interdum. \r\n\r\nPhasellus eleifend diam quis purus egestas laoreet. ', 'Masonry', 1000.00, 'Brick work on outside of house', '4545 Walter', 'Montreal', '../images/project_images/f84e1ba58bc2534925b7475e3e295a6a.jpg', '2018-02-26'),
(144, 'c@c.com', 'Nulla nec erat eleifend, venenatis lectus sed, posuere ipsum. In auctor ultrices lectus, in imperdiet tellus placerat id. \r\nSed at gravida tortor, non lobortis turpis. Integer consequat molestie posuere. Suspendisse quis velit id justo dignissim congue et vitae nisi. \r\nQuisque urna eros, bibendum at pretium ac, laoreet a leo. Donec egestas id mauris quis placerat. \r\nVestibulum gravida tortor ut magna commodo, non euismod turpis interdum. \r\n\r\nPhasellus eleifend diam quis purus egestas laoreet. ', 'Bathroom', 2000.00, 'Bathroom Redo', '123 Cool St.', 'Montreal', '../images/project_images/e9be28c92e60141904f4abcc4f63a720.jpg', '2018-02-26'),
(150, 'am@am.com', 'Nunc feugiat sem non urna tempus bibendum. Cras est nisl, condimentum ultricies ullamcorper eget, mattis a massa. \r\n\r\nPhasellus sit amet magna ut diam aliquam dignissim nec quis tortor. Fusce molestie dolor at odio lobortis consequat. \r\nQuisque erat felis, consectetur vel sapien id, facilisis scelerisque nibh. Mauris vehicula mi at tincidunt sollicitudin. \r\n', 'Kitchen', 9000.00, 'Kitchen remodel', '111 Owl', 'Montreal', '../images/project_images/placeholder.jpg', '2018-02-26');

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
(78, 1234567895, 150, 1.00, 2),
(77, 1234567895, 144, 1.00, 2),
(76, 1234567895, 146, 1.00, 2),
(75, 1234567895, 147, 1.00, 2),
(74, 1234567895, 149, 1.00, 2),
(73, 55555, 150, 9000.00, 2),
(72, 55555, 147, 2250.00, 2),
(71, 1234556783, 145, 1234.00, 0),
(70, 1234556783, 149, 500.00, 2),
(69, 1234556783, 144, 950.00, 2),
(68, 1234556783, 148, 1500.00, 1),
(67, 55555, 145, 950.00, 1);

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
  MODIFY `Contractor_CO_Num` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234567896;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Customer_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `Payment_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `Project_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;
--
-- AUTO_INCREMENT for table `proposal`
--
ALTER TABLE `proposal`
  MODIFY `Proposal_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
