-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2019 at 08:04 AM
-- Server version: 5.7.20-log
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_comp`
--

CREATE TABLE `admin_comp` (
  `S_no` int(11) NOT NULL,
  `C_no` decimal(10,0) NOT NULL,
  `Name` text NOT NULL,
  `Email` text NOT NULL,
  `complaint` text NOT NULL,
  `Category` tinytext NOT NULL,
  `Hostel` text NOT NULL,
  `Room` smallint(6) NOT NULL,
  `Block` char(1) NOT NULL,
  `C_number` decimal(11,0) NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Remark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_comp`
--

INSERT INTO `admin_comp` (`S_no`, `C_no`, `Name`, `Email`, `complaint`, `Category`, `Hostel`, `Room`, `Block`, `C_number`, `Date`, `Remark`) VALUES
(11, '2', 'Ishan Kumar', 'ishan@123.com', 'Switch Not working', 'Network', 'Vindhyanchal', 216, 'C', '9906168871', '2019-04-06 00:00:00', 'io box is missing'),
(12, '14', 'ishan', 'ishan@123.com', 'net is not working', 'Network', 'Nilgiri', 216, 'C', '906168871', '2019-04-06 00:00:00', 'hello'),
(13, '7', 'Ishan Kumar', '15bcs010@smvdu.ac.in', 'Lan port is not working.', 'Internet', 'Vindhyanchal', 215, 'C', '9906168871', '2019-04-12 00:00:00', 'io box is not in the inventory'),
(14, '1553051324', 'ishan', '15bcs010@smvdu.ac.in', 'hello', 'Network', 'Nilgiri', 316, 'C', '9906168871', '2019-05-09 00:00:00', 'Something needed');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `S_no` int(11) NOT NULL,
  `comp_no` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `Category` text NOT NULL,
  `Name` text NOT NULL,
  `C_number` decimal(10,0) NOT NULL,
  `Hostel` text NOT NULL,
  `Room` int(11) NOT NULL,
  `Block` char(1) NOT NULL,
  `Complaint` longtext NOT NULL,
  `Status` text NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Device_Category` text,
  `Item_Used` text,
  `Quantity` int(11) DEFAULT NULL,
  `Date_of_Issuing` date DEFAULT '0000-00-00',
  `Time_Slot` time DEFAULT '00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`S_no`, `comp_no`, `email`, `Category`, `Name`, `C_number`, `Hostel`, `Room`, `Block`, `Complaint`, `Status`, `Time`, `Device_Category`, `Item_Used`, `Quantity`, `Date_of_Issuing`, `Time_Slot`) VALUES
(2, 2, 'ishan@123.com', 'Network', 'Ishan Kumar', '9906168871', 'Vindhyanchal', 216, 'C', 'Switch Not working', 'Solved', '2019-01-08 15:30:08', '', '', 0, '0000-00-00', '00:00:00'),
(7, 7, '15bcs010@smvdu.ac.in', 'Internet', 'Ishan Kumar', '9906168871', 'Vindhyanchal', 215, 'C', 'Lan port is not working.', 'Forward_to_admin', '2019-04-12 06:16:16', '', '', 0, '0000-00-00', '00:00:00'),
(10, 10, 'ishan@123.com', 'Other', 'Ishan Kumar', '9906168871', 'Nilgiri', 216, 'C', 'Bookself deattached', 'submitted', '2019-03-03 07:20:06', '', '', 0, '0000-00-00', '00:00:00'),
(11, 11, 'ishan@123.com', 'Network', 'Ishan Kumar', '9906168871', 'Nilgiri', 216, 'C', 'Lan port is not working.', 'Solved', '2019-03-03 07:20:11', '', '', 0, '0000-00-00', '00:00:00'),
(12, 12, 'ishan@123.com', 'Network', 'ishan', '9906168871', 'Vindhyanchal', 216, 'c', 'net is not working', 'Solved', '2019-04-03 06:37:42', '', '', 0, '0000-00-00', '00:00:00'),
(13, 13, 'ishan@123.com', 'Network', 'vcghhtht', '9906168871', 'Basholi Boys Hostel', 454, 'c', 'net is not working', 'under_process', '2019-03-03 07:20:19', '', '', 0, '0000-00-00', '00:00:00'),
(14, 14, 'ishan@123.com', 'Network', 'ishan', '906168871', 'Nilgiri', 216, 'C', 'net is not working', 'Forward_to_admin', '2019-04-06 07:29:14', '', '', 0, '0000-00-00', '00:00:00'),
(15, 15, '15bcs010@smvdu.ac.in', 'Internet', 'ishan', '9906168871', 'Nilgiri', 216, 'C', 'net is not working', 'submitted', '2019-04-05 09:31:30', '', '', 0, '0000-00-00', '00:00:00'),
(16, 1553051324, '15bcs010@smvdu.ac.in', 'Network', 'ishan', '9906168871', 'Nilgiri', 316, 'C', 'hello', 'Forward_to_admin', '2019-05-09 14:20:22', NULL, NULL, NULL, '0000-00-00', '00:00:00'),
(17, 2088899774, '15bcs010@smvdu.ac.in', 'Other', 'ishan', '9906168871', 'Nilgiri', 212, 'C', 'Student CHeck', 'submitted', '2019-05-10 07:32:41', NULL, NULL, NULL, '0000-00-00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `emailfaculty`
--

CREATE TABLE `emailfaculty` (
  `S_no` int(11) NOT NULL,
  `Name` text NOT NULL,
  `E_id` int(11) NOT NULL,
  `Dept/school` text NOT NULL,
  `P_add` text NOT NULL,
  `Uni_add` text NOT NULL,
  `C_no` decimal(11,0) NOT NULL,
  `MAC_lan` text,
  `MAC_wifI` text,
  `Email` text NOT NULL,
  `Date _of_submit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `emailfaculty`
--

INSERT INTO `emailfaculty` (`S_no`, `Name`, `E_id`, `Dept/school`, `P_add`, `Uni_add`, `C_no`, `MAC_lan`, `MAC_wifI`, `Email`, `Date _of_submit`) VALUES
(1, 'ishan', 12854, 'CSE', 'XYZ', 'ABS', '9906168871', NULL, NULL, 'smvdu@smvdu.ac.in', '2019-06-02'),
(2, 'ishan', 12854, 'CSE', 'XYZ', 'ABS', '9906168871', '', '', 'smvdu@smvdu.ac.in', '2019-06-02'),
(3, 'ISHAN KUMAR', 125465, 'Computer Science and Engineering', 'ward no 12, Hgr, Jammu', 'Room no c-216, vindyanchal Hostel', '9906168871', '', '', 'SMVDU@SMVDU.AC.IN', '2019-06-02'),
(4, 'ISHAN KUMAR', 125465, 'Computer Science and Engineering', 'ward no 12, Hgr, Jammu', 'Room no c-216, vindyanchal Hostel', '9906168871', '', '', 'SMVDU@SMVDU.AC.IN', '2019-06-02'),
(5, 'ISHAN KUMAR', 125465, 'Computer Science and Engineering', 'ward no 12, Hgr, Jammu', 'Room no c-216, vindyanchal Hostel', '9906168871', '', '', 'SMVDU@SMVDU.AC.IN', '2019-06-02');

-- --------------------------------------------------------

--
-- Table structure for table `emailstudent`
--

CREATE TABLE `emailstudent` (
  `S_no` int(11) NOT NULL,
  `Req_no` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Entry_number` text NOT NULL,
  `Dept/School` text NOT NULL,
  `Semester` int(11) NOT NULL,
  `P_add` text NOT NULL,
  `U_add` text NOT NULL,
  `C_no` decimal(11,0) NOT NULL,
  `MAC_lan` text,
  `MAC_wifi` text,
  `Email` text NOT NULL,
  `Date_of_submit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `emailstudent`
--

INSERT INTO `emailstudent` (`S_no`, `Req_no`, `Name`, `Entry_number`, `Dept/School`, `Semester`, `P_add`, `U_add`, `C_no`, `MAC_lan`, `MAC_wifi`, `Email`, `Date_of_submit`) VALUES
(2, 12545, 'Ishan', '15bcs010', 'CSE', 8, 'xyz', 'ABC', '9906168871', '', '', 'smvdu@smvdu.ac.in', '2019-06-02'),
(3, 17182, 'ISHAN KUMAR', '15BCS010', 'CSE', 8, 'ward no 12, Hgr, Jammu', 'Room no c-216, vindyanchal Hostel', '9906168871', '', '', 'SMVDU@SMVDU.AC.IN', '2019-06-02'),
(4, 23936, 'ISHAN KUMAR', '15BCS010', 'CSE', 8, 'ward no 12, Hgr, Jammu', 'Room no c-216, vindyanchal Hostel', '9906168871', '', '', 'SMVDU@SMVDU.AC.IN', '2019-06-02'),
(5, 88454, 'ISHAN KUMAR', '15BCS010', 'CSE', 8, 'ward no 12, Hgr, Jammu', 'Room no c-216, vindyanchal Hostel', '9906168871', '', '', 'SMVDU@SMVDU.AC.IN', '2019-06-02');

-- --------------------------------------------------------

--
-- Table structure for table `emailtoall`
--

CREATE TABLE `emailtoall` (
  `S_no` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Emp_Id` text NOT NULL,
  `Dept/School` text NOT NULL,
  `Designation` text NOT NULL,
  `Purpose` text NOT NULL,
  `C_no` decimal(11,0) NOT NULL,
  `Ext_No` int(11) NOT NULL,
  `Uni_Email` text NOT NULL,
  `Date_of_submit` date NOT NULL,
  `Pre_email` text,
  `NewEmailTitle` text NOT NULL,
  `NewEmailName` text NOT NULL,
  `From_Date` date NOT NULL,
  `To_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `emailtoall`
--

INSERT INTO `emailtoall` (`S_no`, `Name`, `Emp_Id`, `Dept/School`, `Designation`, `Purpose`, `C_no`, `Ext_No`, `Uni_Email`, `Date_of_submit`, `Pre_email`, `NewEmailTitle`, `NewEmailName`, `From_Date`, `To_Date`) VALUES
(1, 'Ishan', '1255', 'CSE', 'Asst. Prof', 'XYZ', '9906168871', 1255, 'smvdu@smvdu.ac.in', '2019-06-02', 'xyz', 'xyz', 'xyz', '2019-06-02', '2019-06-30'),
(2, 'ishan', '20155', 'CSE', 'Proff.', 'XYZ', '9906168871', 12554, 'smvdu@smvdu.ac.in', '2019-06-02', NULL, 'YZ', 'XYZ', '2019-06-02', '2019-06-20'),
(3, 'Ishan', '1256', 'CSE', 'XYZ', 'XYZ', '9906168871', 1254, 'XYZ', '2019-06-03', '', 'XYZ', 'XYZ', '2019-06-03', '2019-06-04'),
(4, 'Ishan', '1256', 'CSE', 'XYZ', 'XYZ', '9906168871', 1254, 'XYZ', '2019-06-03', '', 'XYZ', 'XYZ', '2019-06-03', '2019-06-04'),
(5, 'Ishan', '1256', 'CSE', 'XYZ', 'XYZ', '9906168871', 1254, 'XYZ', '2019-06-03', '', 'XYZ', 'XYZ', '2019-06-03', '2019-06-04'),
(6, 'Ishan', '1256', 'CSE', 'XYZ', 'XYZ', '9906168871', 1254, 'XYZ', '2019-06-03', '', 'XYZ', 'XYZ', '2019-06-03', '2019-06-04'),
(7, 'ISHAN', '1256', 'CSE', 'XYZ', 'XYZ', '9906168871', 1254, 'XYZ', '2019-06-03', '', 'XYZ', 'XYZ', '2019-06-03', '2019-06-04'),
(8, 'ISHAN', '1256', 'Computer Science and Engineering', 'Asst. Professor', 'XYZ', '9906168871', 1254, 'XYZ', '2019-06-03', '', 'XYZ', 'XYZ', '2019-06-03', '2019-06-04'),
(9, 'ISHAN', '1256', 'Computer Science and Engineering', 'Asst. Professor', 'Need to give information to students', '9906168871', 1254, 'SMVDU@SMVDU.AC.IN', '2019-06-03', '', 'XYZ', 'XYZ', '2019-06-03', '2019-06-04'),
(10, 'ISHAN', '1256', 'Computer Science and Engineering', 'Asst. Professor', 'Need to give information to students', '9906168871', 1254, 'SMVDU@SMVDU.AC.IN', '2019-06-03', 'N/A', 'VHFUVHFOBU@NFJB.COM', 'XYZ', '2019-06-03', '2019-06-12'),
(11, 'ISHAN', '1256', 'Computer Science and Engineering', 'Asst. Professor', 'Need to give information to students', '9906168871', 1254, 'SMVDU@SMVDU.AC.IN', '2019-06-03', 'N/A', 'VHFUVHFOBU@NFJB.COM', 'vbfvjfbufi', '2019-06-03', '2019-06-12'),
(12, 'ISHAN', '1256', 'Computer Science and Engineering', 'Asst. Professor', 'Need to give information to students', '9906168871', 1254, 'SMVDU@SMVDU.AC.IN', '2019-06-03', 'N/A', 'VHFUVHFOBU@NFJB.COM', 'vbfvjfbufi', '2019-06-03', '2019-06-12'),
(13, 'ISHAN', '1256', 'Computer Science and Engineering', 'Asst. Professor', 'Need to give information to students', '9906168871', 1254, 'SMVDU@SMVDU.AC.IN', '2019-06-03', 'N/A', 'VHFUVHFOBU@NFJB.COM', 'vbfvjfbufi', '2019-06-03', '2019-06-12'),
(14, 'ISHAN', '1256', 'Computer Science and Engineering', 'Asst. Professor', 'Need to give information to students', '9906168871', 1254, 'SMVDU@SMVDU.AC.IN', '2019-06-03', 'N/A', 'VHFUVHFOBU@NFJB.COM', 'vbfvjfbufi', '2019-06-03', '2019-06-12');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `S_no` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Category` text NOT NULL,
  `T_units` int(11) NOT NULL,
  `M_unit` tinytext NOT NULL,
  `Issued` int(11) NOT NULL,
  `Balance` int(11) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`S_no`, `Name`, `Category`, `T_units`, `M_unit`, `Issued`, `Balance`, `Date`) VALUES
(1, 'HP Deskjet 1280', 'printer', 1, 'Pieces', 0, 1, '2019-02-01'),
(2, 'HP Laserjet 1020', 'printer', 5, '', 0, 5, '2019-02-01'),
(3, 'HP PSC 1315 All-in-One', 'printer', 1, '', 0, 1, '2019-02-01'),
(4, 'Epson LQ 2070', 'printer', 1, '', 0, 1, '2019-02-01'),
(5, 'HP Laserjet 1320n', 'printer', 1, '', 0, 1, '2019-02-01'),
(6, 'HP Scanjet 2400', 'printer', 2, '', 0, 2, '2019-02-01'),
(7, 'HP Deskjet 3550', 'printer', 1, '', 0, 1, '2019-02-01'),
(8, 'HP 11311 printer', 'printer', 3, '', 0, 3, '2019-02-01'),
(9, 'Wipro HQ 1040', 'printer', 1, '', 0, 1, '2019-02-01'),
(10, 'Dell Cpu', 'computer', 30, '', 17, 13, '2019-02-01'),
(11, 'Dell TFT / LCD', 'computer', 29, '', 17, 12, '2019-02-01'),
(12, 'Hp cpu', 'computer', 37, '', 0, 37, '2019-02-01'),
(13, 'IBM cpu', 'computer', 6, '', 0, 6, '2019-02-01'),
(14, 'Hp LCD', 'computer', 24, '', 0, 24, '2019-02-01'),
(15, 'Hp Monitor', 'computer', 5, '', 0, 5, '2019-02-01'),
(16, 'IBM Monitor', 'computer', 10, '', 0, 10, '2019-02-01'),
(17, 'Acer Monitor', 'computer', 1, '', 0, 1, '2019-02-01'),
(18, 'Vivek 40mm', 'hardware', 460, '', 0, 460, '2019-02-01'),
(19, 'Wani 35mm', 'hardware', 25, '', 0, 25, '2019-02-01'),
(20, 'Tie 6 inch', 'hardware', 70, '', 4, 66, '2019-02-01'),
(21, 'Screw 35/8', 'hardware', 64, '', 0, 64, '2019-02-01'),
(22, 'Flexible pipes 25mm', 'hardware', 180, '', 20, 160, '2019-02-01'),
(23, 'Cat 6(305m)', 'hardware', 915, '', 173, 742, '2019-02-01'),
(24, 'PVC Pipes 25mm', 'hardware', 146, '', 9, 137, '2019-02-01'),
(25, 'Outdoor cables', 'hardware', 48, '', 0, 48, '2019-02-01'),
(26, 'S.Batton', 'hardware', 700, '', 21, 679, '2019-02-01'),
(27, 'L.Batton', 'hardware', 1400, '', 0, 1400, '2019-02-01'),
(28, 'Single Mode 3mm, Simplex LSZH 5mtr Patchcord', 'hardware', 410, '', 0, 410, '2019-02-01'),
(29, 'Single Mode 3mm, Simplex 1 mtr Patchcord2', 'hardware', 325, '', 0, 325, '2019-02-01'),
(30, 'Single Mode 2mm, Duplex 10 mtr Patchcord', 'hardware', 14, '', 0, 14, '2019-02-01'),
(31, 'HTGD OFC Simplex 9/125 OFNR', 'hardware', 10, '', 0, 10, '2019-02-01'),
(32, 'LOCK', 'hardware', 76, '', 0, 76, '2019-02-01'),
(33, 'Tablets', 'hardware', 135, '', 0, 135, '2019-02-01'),
(34, 'Rack_3U', 'hardware', 0, '', 0, 0, '2019-02-01'),
(35, 'Rack_6U', 'hardware', 10, '', 8, 2, '2019-02-01'),
(36, 'Rack_9U', 'hardware', 3, '', 0, 3, '2019-02-01'),
(37, 'RJ 45', 'hardware', 100, '', 0, 100, '2019-02-01'),
(38, 'KeyStone', 'hardware', 100, '', 1, 99, '2019-02-01'),
(39, 'Face Plate', 'hardware', 20, '', 0, 20, '2019-02-01'),
(40, 'SMB Box', 'hardware', 36, '', 0, 36, '2019-02-01'),
(41, 'Patch Cable 5 m', 'hardware', 25, '', 2, 23, '2019-02-01'),
(42, 'Patch Cable 2 m\r\n', 'hardware', 20, '', 2, 18, '2019-02-01'),
(43, 'Fibre Ter. Box', 'hardware', 15, '', 0, 15, '2019-02-01'),
(44, 'Patch Panel', 'hardware', 11, '', 0, 11, '2019-02-01'),
(45, 'OFC ARMED', 'hardware', 135, '', 6, 129, '2019-02-01'),
(46, 'xyz', 'Printer', 2, 'piece', 0, 2, '2019-04-15');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Email`, `password`, `category`) VALUES
('ishan@123.com', 'qwerty', 'student'),
('nh@123.com', '6f6a4b9e983c1de1ae719bb187de13c7', 'Network'),
('ih@123.com', '6f6a4b9e983c1de1ae719bb187de13c7', 'Internet'),
('oh@123.com', 'qwerty', 'Other'),
('15bcs010@smvdu.ac.in', 'qwerty', 'student'),
('15bcs035@smvdu.ac.in', 'qwerty', 'student'),
('15bcs003@smvdu.ac.in', 'qwerty', 'student'),
('admin@123.com', '6f6a4b9e983c1de1ae719bb187de13c7', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `S_no` int(11) NOT NULL,
  `Name` text,
  `Email` text NOT NULL,
  `Password` text NOT NULL,
  `C_no` bigint(11) NOT NULL,
  `Gender` text,
  `Hostel` text,
  `R_no` text,
  `Block` char(11) DEFAULT NULL,
  `category` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`S_no`, `Name`, `Email`, `Password`, `C_no`, `Gender`, `Hostel`, `R_no`, `Block`, `category`) VALUES
(2, 'Ishan Kumar', '15bcs010@smvdu.ac.in', '26b526926766e6ee0ad9a38425f41c58', 9906168871, 'Male', 'Vindhyanchal', '216', 'C', ''),
(5, NULL, 'nh@smvdu.ac.in', '26b526926766e6ee0ad9a38425f41c58', 9906168871, NULL, NULL, NULL, NULL, 'network'),
(6, NULL, 'ih@smvdu.ac.in', '26b526926766e6ee0ad9a38425f41c58', 9906168871, NULL, NULL, NULL, NULL, 'internet'),
(7, NULL, 'oh@smvdu.ac.in', '26b526926766e6ee0ad9a38425f41c58', 9906168871, NULL, NULL, NULL, NULL, 'other'),
(8, NULL, 'admin@smvdu.ac.in', '26b526926766e6ee0ad9a38425f41c58', 9906168871, NULL, NULL, NULL, NULL, 'Administrator'),
(9, NULL, '15bcs007@smvdu.ac.in', '26b526926766e6ee0ad9a38425f41c58', 9906168871, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `solved_comp`
--

CREATE TABLE `solved_comp` (
  `S_no` int(11) NOT NULL,
  `comp_no` int(11) NOT NULL,
  `status` text NOT NULL,
  `c_no` decimal(10,0) NOT NULL,
  `Device_category` text NOT NULL,
  `Item_used` text NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Date_of_issuing` date DEFAULT '0000-00-00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `solved_comp`
--

INSERT INTO `solved_comp` (`S_no`, `comp_no`, `status`, `c_no`, `Device_category`, `Item_used`, `Quantity`, `Date_of_issuing`) VALUES
(1, 2, '', '9906168871', 'Printer', 'HP', 1, '2019-04-10'),
(2, 2, '', '9906168871', 'Printer', 'HP Deskjet 1280', 2, '2019-04-10'),
(3, 2, 'Under_process', '9906168871', 'Printer', 'HP Deskjet 1280', 1, '2019-04-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_comp`
--
ALTER TABLE `admin_comp`
  ADD PRIMARY KEY (`S_no`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`S_no`);

--
-- Indexes for table `emailfaculty`
--
ALTER TABLE `emailfaculty`
  ADD PRIMARY KEY (`S_no`);

--
-- Indexes for table `emailstudent`
--
ALTER TABLE `emailstudent`
  ADD PRIMARY KEY (`S_no`);

--
-- Indexes for table `emailtoall`
--
ALTER TABLE `emailtoall`
  ADD PRIMARY KEY (`S_no`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`S_no`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`S_no`);

--
-- Indexes for table `solved_comp`
--
ALTER TABLE `solved_comp`
  ADD PRIMARY KEY (`S_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_comp`
--
ALTER TABLE `admin_comp`
  MODIFY `S_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `S_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `emailfaculty`
--
ALTER TABLE `emailfaculty`
  MODIFY `S_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `emailstudent`
--
ALTER TABLE `emailstudent`
  MODIFY `S_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `emailtoall`
--
ALTER TABLE `emailtoall`
  MODIFY `S_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `S_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `S_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `solved_comp`
--
ALTER TABLE `solved_comp`
  MODIFY `S_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
