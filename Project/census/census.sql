-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 23, 2013 at 04:38 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `census`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `Id_Admin` int(11) NOT NULL,
  `Name_Admin` text NOT NULL,
  `LN_Admin` text NOT NULL,
  `Post` text NOT NULL,
  `D.O.B` date NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`Id_Admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`Id_Admin`, `Name_Admin`, `LN_Admin`, `Post`, `D.O.B`, `Username`, `Password`) VALUES
(1, 'Habyarimana', 'Abdallahman', 'Director', '1989-09-18', 'Habdal05', 'abdallah'),
(2, 'Nsanzimfura', 'Valens', 'Vice-President', '1990-08-05', 'Valens02', 'valens');

-- --------------------------------------------------------

--
-- Table structure for table `cell`
--

CREATE TABLE IF NOT EXISTS `cell` (
  `Id` int(8) NOT NULL,
  `Cell` text NOT NULL,
  `Id_sector` int(8) NOT NULL,
  `Id_district` int(8) NOT NULL,
  `Id_Province` int(8) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cell`
--

INSERT INTO `cell` (`Id`, `Cell`, `Id_sector`, `Id_district`, `Id_Province`) VALUES
(11, 'BUYENZI', 0, 0, 0),
(12, 'MUKIYANZI', 0, 0, 0),
(13, 'KAYONZA', 0, 0, 0),
(16, 'TABA', 0, 0, 0),
(17, 'MURAGO', 0, 0, 0),
(20, 'RUHANGO', 0, 0, 0),
(22, 'MUSEZERO', 0, 0, 0),
(24, 'REBERO', 0, 0, 0),
(26, 'KABUYE', 0, 0, 0),
(31, 'DUHA', 0, 0, 0),
(1010101, 'BYIMANA', 10101, 101, 1),
(1010102, 'KUGATARE', 10101, 101, 1),
(1010201, 'GATOKI', 10102, 101, 1),
(1010202, 'KAGUGU', 10102, 101, 1),
(1020101, 'KINYINYA', 10201, 102, 1),
(1020102, 'TETERO', 10201, 102, 1),
(1020201, 'GIHOGWE', 10202, 102, 1),
(1020202, 'NYAKARIRO', 10202, 102, 1),
(1030101, 'SHABA', 10301, 103, 1),
(1030102, 'IMUHUMURO', 10301, 103, 1),
(1030201, 'IBUMANZI', 10302, 103, 1),
(1030202, 'KABAGARI', 10302, 103, 1),
(2010101, 'INYARUREMBO', 20101, 201, 2),
(2010102, 'BUGARAGARA', 20101, 201, 2),
(2010201, 'NYAMISHABA', 20102, 201, 2),
(2010202, 'RUKOMO', 20102, 201, 2),
(2030101, 'NYAKARIRO', 20301, 203, 2),
(2030102, 'RUGERERO', 20301, 203, 2),
(3010101, 'RDC', 30101, 301, 3),
(3010102, 'BUGOYI', 30101, 301, 3),
(3010201, 'KIZUNGU', 30102, 301, 3),
(3010202, 'RWARATABARO', 30102, 301, 3),
(3020101, 'RUTSIRO', 30201, 302, 3),
(3020102, 'KAYOVE', 30201, 302, 3),
(3030101, 'KUMUKENKE', 30301, 303, 3),
(3030102, 'CYANAMO', 30301, 303, 3),
(4010101, 'BIRAMBO', 40101, 401, 4),
(4010102, 'MAHO', 40101, 401, 4),
(4010201, 'GITI', 40102, 401, 4),
(4010202, 'KANZENZE', 40102, 401, 4),
(4020101, 'BASE', 40201, 402, 4),
(4020102, 'CYANAMO', 40201, 402, 4),
(4020201, 'SHYIRA', 40202, 402, 4),
(4020202, 'GATOVU', 40202, 402, 4),
(4030101, 'RINGO', 40301, 403, 4),
(4030102, 'MBUGANGARI', 40301, 403, 4),
(4030201, 'GASHYARU', 40302, 403, 4),
(4030202, 'KARABAYE', 40302, 403, 4),
(5010101, 'BUTARE', 50101, 501, 5),
(5010102, 'NYAKARAMBI', 50101, 501, 5),
(5010201, 'GEREZA', 50102, 501, 5),
(5010202, 'KIMICANGA', 50102, 501, 5),
(5020101, 'TABARO', 50201, 502, 5),
(5020102, 'NGOMA', 50201, 502, 5),
(5020201, 'SHYORONGI', 50202, 502, 5),
(5020202, 'NYAKARIBA', 50202, 502, 5),
(5030101, 'MBYO', 50301, 503, 5),
(5030102, 'KARANGAZI', 50301, 503, 5),
(5030201, 'KANZAIRE', 50302, 503, 5),
(5030202, 'KIYANZI', 50302, 503, 5),
(11010202, 'MWIRANGO', 10102, 101, 1),
(11020101, 'MINAGRI', 10201, 102, 1),
(11020102, 'BIREMBO', 10201, 102, 1),
(11020202, 'GASAVE', 10202, 102, 1);

-- --------------------------------------------------------

--
-- Table structure for table `census_tb`
--

CREATE TABLE IF NOT EXISTS `census_tb` (
  `Year_Census` int(4) NOT NULL,
  `Start_Censu` date NOT NULL,
  `End_Census` date NOT NULL,
  PRIMARY KEY (`Year_Census`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `census_tb`
--

INSERT INTO `census_tb` (`Year_Census`, `Start_Censu`, `End_Census`) VALUES
(2013, '2013-08-18', '2013-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
  `Id` int(8) NOT NULL,
  `districtname` text NOT NULL,
  `Id_Province` int(8) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`Id`, `districtname`, `Id_Province`) VALUES
(101, 'KICUKIRO', 1),
(102, 'GASABO', 1),
(103, 'NYARUGENGE', 1),
(201, 'MUSANZE', 2),
(202, 'GAKENKE', 2),
(203, 'GICUMBI', 2),
(301, 'RUBAVU', 3),
(302, 'KARONGI', 3),
(303, 'NYAMASHEKE', 3),
(401, 'RWAMAGANA', 4),
(402, 'NYAGATARE', 4),
(403, 'BUGESERA', 4),
(501, 'HUYE', 5),
(502, 'MUHANGA', 5),
(503, 'RUHANGO', 5);

-- --------------------------------------------------------

--
-- Table structure for table `enumerators`
--

CREATE TABLE IF NOT EXISTS `enumerators` (
  `Id_Enum` varchar(25) NOT NULL,
  `Name_Enum` text NOT NULL,
  `LN_Enum` text NOT NULL,
  `Phone` varchar(12) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Year_Of_census` int(4) NOT NULL,
  `ProvinceId` int(15) NOT NULL,
  `District_Id` int(15) NOT NULL,
  `Sector_Id` int(15) NOT NULL,
  PRIMARY KEY (`Id_Enum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enumerators`
--

INSERT INTO `enumerators` (`Id_Enum`, `Name_Enum`, `LN_Enum`, `Phone`, `Username`, `Password`, `Year_Of_census`, `ProvinceId`, `District_Id`, `Sector_Id`) VALUES
('1198380002745040', 'KAREMERA', 'Jean', '0788601986', 'Kareme00', 'eb2598150a6384fd0bc59dc75b31ab00', 2013, 1, 101, 10101),
('1198480002746040', 'Mutwarasibo', 'Claude', '0785369070', 'Dclauso06', '8bb75b3015682d910daf88b6d728be2c', 2013, 3, 301, 30101);

-- --------------------------------------------------------

--
-- Table structure for table `household`
--

CREATE TABLE IF NOT EXISTS `household` (
  `House_Id` varchar(30) NOT NULL,
  `Id_Enum` varchar(25) NOT NULL,
  `Nu.Members` int(3) NOT NULL,
  `Ty_Habitant` text NOT NULL,
  `Ty_Building` text NOT NULL,
  `Tenure` text NOT NULL,
  `Mat_Roof` varchar(15) NOT NULL,
  `Mat_walls` varchar(15) NOT NULL,
  `Mat_Floor` varchar(15) NOT NULL,
  `Nu_of_Rooms` int(3) NOT NULL,
  `Nu_of_bedroom` int(3) NOT NULL,
  `Nu_of_occupant` int(3) NOT NULL,
  `So_water` text NOT NULL,
  `Toi_facility` text NOT NULL,
  `Energy_Light` text NOT NULL,
  `Energy_Cooking` text NOT NULL,
  `Date` date NOT NULL,
  `Year_Of_Census` int(4) NOT NULL,
  `Id_village` int(8) NOT NULL,
  `Cell_Id` int(8) NOT NULL,
  `Id_sector` int(8) NOT NULL,
  `Id_district` int(8) NOT NULL,
  `Id_Province` int(8) NOT NULL,
  PRIMARY KEY (`House_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `household`
--

INSERT INTO `household` (`House_Id`, `Id_Enum`, `Nu.Members`, `Ty_Habitant`, `Ty_Building`, `Tenure`, `Mat_Roof`, `Mat_walls`, `Mat_Floor`, `Nu_of_Rooms`, `Nu_of_bedroom`, `Nu_of_occupant`, `So_water`, `Toi_facility`, `Energy_Light`, `Energy_Cooking`, `Date`, `Year_Of_Census`, `Id_village`, `Cell_Id`, `Id_sector`, `Id_district`, `Id_Province`) VALUES
('10', '1198570002355040', 3, '#', 'default', 'default', 'default', 'Wood/Mud', 'Earth/Sand', 0, 0, 0, 'Internal pipe-born water', 'Flush toilet', 'Electricity by EWSA', 'Electricity', '2013-08-04', 0, 101010101, 1010101, 10101, 101, 1),
('101', '1198480002746040', 3, 'umudugudu', 'House occupied', 'Owner', 'Iron', 'Wood/Mud', 'Earth/Sand', 0, 2, 2, 'Internal pipe-born water', 'Flush toilet', 'Electricity by EWSA', 'Electricity', '2013-08-18', 2013, 101010101, 1010101, 10101, 101, 1),
('1198880002745040', '1198570002355040', 2, 'umudugudu', 'Storey building', 'Free lodging', 'Concrete', 'Cement blocks', 'Concrete', 5, 2, 2, 'River', 'Private pit latrine', 'Electricity by EWSA', 'Electricity', '2013-08-18', 2013, 102010101, 1020101, 10201, 102, 1),
('18', '1198570002355040', 3, '#', 'default', 'default', 'default', 'Wood/Mud', 'Earth/Sand', 0, 0, 0, 'Internal pipe-born water', 'Flush toilet', 'Electricity by EWSA', 'Electricity', '2013-08-06', 2013, 101010101, 1010101, 10101, 101, 1),
('3', '1198380002745040', 3, '#', 'default', 'default', 'default', 'Wood/Mud', 'Earth/Sand', 0, 0, 0, 'Internal pipe-born water', 'Flush toilet', 'Electricity by EWSA', 'Electricity', '2013-07-30', 0, 101010101, 1010101, 10101, 101, 1),
('4', '1198380002745040', 2, '#', 'default', 'default', 'default', 'Wood/Mud', 'Earth/Sand', 0, 0, 0, 'Internal pipe-born water', 'Flush toilet', 'Electricity by EWSA', 'Electricity', '2013-07-30', 0, 101010101, 1010101, 10101, 101, 1),
('5', '1198570002355040', 3, '#', 'default', 'default', 'default', 'Wood/Mud', 'Earth/Sand', 0, 0, 0, 'Internal pipe-born water', 'Flush toilet', 'Electricity by EWSA', 'Electricity', '2013-08-04', 0, 101010201, 1010102, 10101, 101, 1),
('6', '1198570002355040', 3, 'Old settlement', 'House occupied', 'Owner', 'Local tiles', 'Wood/Mud', 'Concrete', 0, 0, 0, 'Internal pipe-born water', 'Flush toilet', 'Electricity by EWSA', 'Electricity', '2013-08-04', 0, 101010101, 1010101, 10101, 101, 1),
('7', '1198570002355040', 2, 'umudugudu', 'House occupied', 'default', 'default', 'Wood/Mud', 'Earth/Sand', 0, 0, 0, 'Internal pipe-born water', 'Flush toilet', 'Electricity by EWSA', 'Electricity', '2013-08-04', 0, 101010101, 1010101, 10101, 101, 1),
('9', '1198570002355040', 3, '#', 'default', 'default', 'default', 'Wood/Mud', 'Earth/Sand', 0, 0, 0, 'Internal pipe-born water', 'Flush toilet', 'Electricity by EWSA', 'Electricity', '2013-08-04', 0, 101010102, 1010101, 10101, 101, 1),
('GS/2000/001', '1198380002745040', 3, '#', 'default', 'default', 'default', 'Wood/Mud', 'Earth/Sand', 2, 2, 2, 'Internal pipe-born water', 'Flush toilet', 'Electricity by EWSA', 'Electricity', '2013-07-28', 0, 101010101, 1010101, 10101, 101, 1),
('GS/2002/002', '1198670002725040', 2, '#', 'default', 'default', 'default', 'Wood/Mud', 'Earth/Sand', 0, 0, 0, 'Internal pipe-born water', 'Flush toilet', 'Electricity by EWSA', 'Electricity', '2013-07-28', 0, 301010102, 3010101, 30101, 301, 3),
('GS/2011', '1198480002746040', 3, 'Old settlement', 'House occupied', 'Tenant', 'Iron', 'Wood/Mud', 'Earth/Sand', 0, 3, 3, 'Internal pipe-born water', 'Flush toilet', 'kerosene lamp', 'Electricity', '2013-08-18', 2013, 101010101, 1010101, 10101, 101, 1),
('GS/2011/009', '1198380002745040', 3, '#', 'default', 'default', 'default', 'Wood/Mud', 'Earth/Sand', 0, 2, 2, 'Internal pipe-born water', 'Flush toilet', 'Electricity by EWSA', 'Electricity', '2013-07-29', 0, 101010101, 1010101, 10101, 101, 1);

-- --------------------------------------------------------

--
-- Table structure for table `population`
--

CREATE TABLE IF NOT EXISTS `population` (
  `Id_Population` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Fname` text NOT NULL,
  `Lname` text NOT NULL,
  `Sex` text NOT NULL,
  `Relationship` varchar(20) NOT NULL,
  `Residence_statue` varchar(15) NOT NULL,
  `Marital_statue` varchar(20) DEFAULT NULL,
  `Dob` date NOT NULL,
  `Nationality` varchar(20) NOT NULL,
  `Religion` varchar(20) NOT NULL,
  `Problem` varchar(20) NOT NULL,
  `Insurance` varchar(20) NOT NULL,
  `Language` varchar(20) NOT NULL,
  `Attend_School` text NOT NULL,
  `Level_Educat` varchar(10) NOT NULL,
  `Degree` varchar(10) NOT NULL,
  `Work` varchar(3) NOT NULL,
  `Status_of_work` varchar(15) NOT NULL,
  `Activity` varchar(25) NOT NULL,
  `Institution` varchar(15) NOT NULL,
  `Spouse` int(2) NOT NULL,
  `Nu_Children` int(2) NOT NULL,
  `Nu_Lchildren` int(2) NOT NULL,
  `Nu_Mchildren` int(2) NOT NULL,
  `Nu_Fchildren` int(2) NOT NULL,
  `House_Id` varchar(30) NOT NULL,
  PRIMARY KEY (`Id_Population`),
  UNIQUE KEY `Id_Population` (`Id_Population`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `population`
--

INSERT INTO `population` (`Id_Population`, `Fname`, `Lname`, `Sex`, `Relationship`, `Residence_statue`, `Marital_statue`, `Dob`, `Nationality`, `Religion`, `Problem`, `Insurance`, `Language`, `Attend_School`, `Level_Educat`, `Degree`, `Work`, `Status_of_work`, `Activity`, `Institution`, `Spouse`, `Nu_Children`, `Nu_Lchildren`, `Nu_Mchildren`, `Nu_Fchildren`, `House_Id`) VALUES
(1, 'Nzabamwita', 'Leonidas', 'Male', 'Head of household', 'Present', 'married', '1965-02-06', 'Rwandan', 'Catholic', 'None', 'Mutuelle', 'English', 'Has ever attended', 'Secondary', 'A2', 'Yes', 'Employer', 'Service', 'Public', 1, 1, 3, 1, 0, 'GS/2000/001 '),
(2, 'Nyirahabimana', 'Stephanie', 'Female', 'spouse', 'Present', 'Never married', '1973-08-09', 'Rwandan', 'Catholic', 'None', 'Mutuelle', 'kinyarwanda', 'Has ever attended', 'Preschool', 'None', 'Yes', 'Employee', 'Farming', 'Public', 0, 0, 0, 0, 0, 'GS/2000/001 '),
(3, 'Sibomana', 'Wellars', 'Male', 'Brother/Sister', 'Absent', '', '1991-06-09', 'rwandan', 'Protestant', 'None', '#', 'French', 'Is currently attending', 'Preschool', 'None', 'Yes', 'Employee', 'Farming', 'Public', 0, 0, 0, 0, 0, 'GS/2000/001 '),
(4, 'Habyarimana', 'Leonidas', 'Male', 'Head of household', 'Present', 'married', '1982-08-09', 'Rwandan', 'Protestant', 'None', 'MMI', 'all language', 'Has ever attended', 'Secondary', 'A2', 'Yes', 'Self-mployed', 'Production', 'Public', 1, 0, 0, 0, 0, 'GS/2002/002 '),
(5, 'Nyirakamana', 'Martine', 'Female', 'spouse', 'Absent', 'Never married', '1987-03-09', 'Rwandan', 'Protestant', 'Hearing', 'Mutuelle', 'kinyarwanda', 'Has never attended', 'Preschool', 'None', 'Non', 'Employee', 'Farming', 'Public', 0, 0, 0, 0, 0, 'GS/2002/002 '),
(6, 'Uwamahoro', 'Perpetue', 'Female', 'Head of household', 'Present', 'Widowed', '1981-09-12', 'Rwandan', 'Catholic', 'None', 'Mutuelle', 'English', 'Has ever attended', 'Secondary', 'A1', 'Non', 'Employee', 'Farming', 'Public', 1, 1, 1, 1, 0, 'GS/2011/009 '),
(7, 'Sanzabera', 'Leodomir', 'Male', 'Brother/Sister', 'Present', 'Never married', '1986-12-08', 'Rwandan', 'Muslim', 'Seeing', 'Mutuelle', 'kinyarwanda', 'Has never attended', 'Preschool', 'None', 'Non', 'Employee', 'Farming', 'Public', 0, 0, 0, 0, 0, 'GS/2011/009 '),
(8, 'NYIRAMANA', 'Tidjara', 'Female', 'Unrelated Child', 'Present', '', '1985-08-06', 'Rwandan', 'Muslim', 'None', 'RAMA', 'all language', 'Has never attended', 'Preschool', 'None', 'Non', 'Employee', 'Farming', 'Public', 0, 0, 0, 0, 0, 'GS/2011/009 '),
(9, 'Nyinawumuntu ', 'Clementine', 'Female', 'Head of household', 'Present', 'Never married', '1987-12-12', 'Rwandan', 'Protestant', 'None', 'Mutuelle', 'kinyarwanda', 'Has ever attended', 'University', 'A0', 'Yes', 'Self-mployed', 'Production', 'Public', 0, 0, 0, 0, 0, '4 '),
(10, 'NIYITEGEKA', 'Leonie', 'Female', 'Non Relative', 'Present', 'Never married', '1986-08-09', 'Rwandan', 'Catholic', 'None', '#', 'kinyarwanda', 'Has ever attended', 'Preschool', 'None', 'Yes', 'Employee', 'Farming', 'Public', 0, 0, 0, 0, 0, '4 '),
(11, 'Nsanzimfura', 'Valens', 'Male', 'Head of household', 'Present', 'married', '0000-00-00', 'Rwamda', 'Adventist', 'None', 'Mutuelle', 'kinyarwanda', 'Has ever attended', 'Preschool', 'None', 'Yes', 'Employer', 'Farming', 'Public', 0, 0, 0, 0, 0, '1198880002745040 '),
(12, 'Nsanzimana', 'Peter', 'Male', 'Brother/Sister', 'Present', 'Never married', '0000-00-00', 'Rwanda', 'Catholic', 'None', 'RAMA', 'kinyarwanda', 'Has ever attended', 'Primary', 'None', 'Non', 'Employee', 'Farming', 'Public', 0, 0, 0, 0, 0, '1198880002745040 ');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE IF NOT EXISTS `province` (
  `Id` int(8) NOT NULL,
  `Name` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`Id`, `Name`) VALUES
(1, 'KIGALI'),
(2, 'NORTH'),
(3, 'WEST'),
(4, 'EAST'),
(5, 'SOUTH');

-- --------------------------------------------------------

--
-- Table structure for table `sector`
--

CREATE TABLE IF NOT EXISTS `sector` (
  `Id` int(8) NOT NULL,
  `sectorname` text NOT NULL,
  `Id_district` int(8) NOT NULL,
  `Id_Province` int(8) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sector`
--

INSERT INTO `sector` (`Id`, `sectorname`, `Id_district`, `Id_Province`) VALUES
(10101, 'GATENGA', 101, 1),
(10102, 'KAGARAMA', 101, 1),
(10201, 'GISOZI', 102, 1),
(10202, 'KACYIRU', 102, 1),
(10301, 'GITEGA', 103, 1),
(10302, 'NYAKABANDA', 103, 1),
(20101, 'RUKOMO', 201, 2),
(20102, 'RWERO', 201, 2),
(20201, 'SHYARA', 202, 2),
(20202, 'RWIMIYAGA', 202, 2),
(20301, 'RUBONA', 203, 2),
(20302, 'RUTARE', 203, 2),
(30101, 'GISENYI', 301, 3),
(30102, 'RUSHASHI', 301, 3),
(30201, 'RUBAVU', 302, 3),
(30202, 'RANGIRO', 302, 3),
(30301, 'SHANGI', 303, 3),
(30302, 'TWUMBA', 303, 3),
(40101, 'NZIGE', 401, 4),
(40102, 'RULI', 401, 4),
(40201, 'RUVUNE', 402, 4),
(40202, 'BUSOGO', 402, 4),
(40301, 'MUHOZA', 403, 4),
(40302, 'NGOMA', 403, 4),
(50101, 'TUMBA', 501, 5),
(50102, 'RWANKUBA', 501, 5),
(50201, 'KINAZI', 502, 5),
(50202, 'RONGI', 502, 5),
(50301, 'SHYOGWE', 503, 5),
(50302, 'KINIHIRA', 503, 5);

-- --------------------------------------------------------

--
-- Table structure for table `village`
--

CREATE TABLE IF NOT EXISTS `village` (
  `Id` int(8) NOT NULL,
  `Village` text NOT NULL,
  `Cell_Id` int(8) NOT NULL,
  `Id_sector` int(8) NOT NULL,
  `Id_district` int(8) NOT NULL,
  `Id_Province` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `village`
--

INSERT INTO `village` (`Id`, `Village`, `Cell_Id`, `Id_sector`, `Id_district`, `Id_Province`) VALUES
(201010101, 'NYAMIBWA', 2010101, 20101, 201, 2),
(201010102, 'SHINGIRO', 2010101, 20101, 201, 2),
(201010201, 'NYIRANARINDWA', 2010102, 20101, 201, 2),
(201010202, 'RAMBURA', 2010102, 20101, 201, 2),
(301020102, 'KESO', 3010201, 30102, 301, 3),
(301020101, 'RWAHENZE', 3010201, 30102, 301, 3),
(301020201, 'RURIBA', 3010202, 30102, 301, 3),
(501010101, 'KAMPENGE', 5010101, 50101, 501, 5),
(501010102, 'NDOBANDI', 5010101, 50101, 501, 5),
(501010201, 'NTARAGA', 5010102, 50101, 501, 5),
(501010202, 'GAHUNGA', 5010102, 50101, 501, 5),
(301020202, 'CYANIKA', 3010202, 30102, 301, 3),
(3, 'ISONGA', 0, 0, 0, 0),
(4, 'TARINYOTA', 0, 0, 0, 0),
(102010201, 'UWAMAHORO', 1020102, 10201, 102, 1),
(303010201, 'KABUTORE', 3030102, 30301, 303, 3),
(303010101, 'KABUGESHI', 3030101, 30301, 303, 3),
(303010202, 'GAFUNZO', 3030102, 30301, 303, 3),
(302010101, 'GIRAMATA', 3020101, 30201, 302, 3),
(102010202, 'GIPOROSO', 1020102, 10201, 102, 1),
(302010202, 'JANJA', 3020102, 30201, 302, 3),
(12, 'BUNGO', 0, 0, 0, 0),
(502010101, 'KAMUHOZA', 5020101, 50201, 502, 5),
(302010102, 'GATOVU', 3020101, 30201, 302, 3),
(502010102, 'GITEGA', 5020101, 50201, 501, 5),
(501020101, 'NTORA', 5010201, 50102, 501, 5),
(501020102, 'REBERO', 5010201, 50102, 501, 5),
(303010102, 'MUGANO', 3030101, 30301, 303, 3),
(2, 'AHITEGEYE', 0, 0, 0, 0),
(302010201, 'KAMUTWE', 3020102, 30201, 302, 3),
(102010101, 'KABEZO', 1020101, 10201, 102, 1),
(102010102, 'KUMURINDI', 1020101, 10201, 102, 1),
(401020102, 'GAKINJIRO', 4010201, 40102, 401, 4),
(401010102, 'NYAMIRENGE', 4010101, 40101, 401, 4),
(301010102, 'BUNYONGA', 3010101, 30101, 301, 3),
(502010202, 'BURESHYI', 5020102, 50201, 502, 5),
(401010202, 'NYAKIZU', 4010102, 40101, 401, 4),
(101010101, 'KABUTSINDO', 1010101, 10101, 101, 1),
(101010102, 'RUNDA', 1010101, 10101, 101, 1),
(101010201, 'NKOTO', 1010102, 10101, 101, 1),
(101010202, 'JOMA', 1010102, 10101, 101, 1),
(401020101, 'KIGESHI', 4010201, 40102, 401, 4),
(401010201, 'GAHOROMANI', 4010102, 40101, 401, 4),
(1101020201, 'GIKONDO', 1010202, 10102, 101, 1),
(301010201, 'KIVUMU', 3010102, 30101, 301, 3),
(301010202, 'MUNEZERO', 3010102, 30101, 301, 3),
(301010101, 'NKURA', 3010101, 30101, 301, 3),
(401010101, 'GIHEKE', 4010101, 40101, 401, 4),
(101020201, 'GACYAMO', 1010202, 10102, 101, 1),
(103010102, 'GAKOMEYE', 1030101, 10301, 103, 1),
(503010101, 'KANYIRAREBE', 5030101, 50301, 503, 5),
(101020202, 'BURERA', 1010202, 10102, 101, 1),
(503010201, 'GIKOMBE', 5030102, 50301, 503, 5),
(501020201, 'CYIGENGE', 5010202, 50102, 501, 5),
(101020202, 'KATABARO', 1010202, 10102, 101, 1),
(501020202, 'MBUYEHO', 5010202, 50102, 501, 5),
(503010202, 'ABAGENZI', 5030102, 50301, 503, 5),
(103010101, 'INSENGERO', 1030101, 10301, 103, 1),
(502010201, 'BUSHYENGE', 5020102, 50201, 502, 5),
(503010102, 'RUKUMBERI', 5030101, 50301, 503, 5),
(302010101, 'ISANGANO', 3020101, 30201, 302, 3),
(302010102, 'IRAKIZA', 3020101, 30201, 302, 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
