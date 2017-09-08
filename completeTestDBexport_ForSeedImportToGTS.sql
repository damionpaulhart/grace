-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 31, 2012 at 02:02 PM
-- Server version: 5.5.25
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `damionha_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `form01`
--

CREATE TABLE IF NOT EXISTS `form01` (
  `entryID` int(8) NOT NULL AUTO_INCREMENT,
  `dateInspect` text,
  `owner` text,
  `ownerID` text,
  `woID` text,
  `vin` text,
  `dotspec` text,
  `mfg` text,
  `datemfg` text,
  `designpressure` text,
  `testpressure` text,
  `comp1size` text,
  `comp2size` text,
  `comp3size` text,
  `comp4size` text,
  `totalcapacity` text,
  `doublebulk` text,
  `insulated` text,
  `radio1` text,
  `radio2` text,
  `radio3` text,
  `radio4` text,
  `radio5` text,
  `radio6` text,
  `inspector` text,
  `inspectorID` text,
  `dateInspector` text,
  PRIMARY KEY (`entryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `form01`
--

INSERT INTO `form01` (`entryID`, `dateInspect`, `owner`, `ownerID`, `woID`, `vin`, `dotspec`, `mfg`, `datemfg`, `designpressure`, `testpressure`, `comp1size`, `comp2size`, `comp3size`, `comp4size`, `totalcapacity`, `doublebulk`, `insulated`, `radio1`, `radio2`, `radio3`, `radio4`, `radio5`, `radio6`, `inspector`, `inspectorID`, `dateInspector`) VALUES
(12, '05/21/2012', 'Anderson Trailer', '12345', '54321', '123403-3490', 'MC306', 'Gracon', '2005', '60', '60', '60', '60', '60', '60', '240', 'on', 'on', '1', '3', '2', '2', '2', '3', 'admin', '1234-534', '05/21/2012'),
(13, '5/21/2012', 'Anderson Trailer', '12345', '54321', '123403-3490', 'MC306', 'Gracon', '2005', '60', '60', '60', '60', '60', '60', '240', 'on', 'on', '1', '3', '2', '2', '2', '3', 'admin', '1234-534', '5/21/2012'),
(14, '5/21/2012', 'Anderson Trailer', '12345', '54322', '399393-3848', 'MC306', 'Gracon', '2005', '60', '60', '60', '60', '60', '60', '240', 'on', 'on', '1', '3', '2', '2', '2', '3', 'admin', '1234-534', '5/21/2012'),
(15, '5/21/2012', 'Anderson Trailer', '12345', '54323', '848838-9393', 'MC306', 'Gracon', '2005', '60', '60', '60', '60', '60', '60', '240', 'on', 'on', '1', '3', '2', '2', '2', '3', 'admin', '1234-534', '5/21/2012'),
(16, '5/21/2012', 'Test Owner', '13456', 'na', '123403-3590', 'MC306', 'Gracon', '2005', '60', '60', '60', '60', '60', '60', '240', 'on', 'on', '1', '3', '2', '2', '2', '3', 'admin', '1234-534', '5/21/2012'),
(17, '5/21/2012', 'Test Owner', '13456', 'na', '399593-3848', 'MC306', 'Gracon', '2005', '60', '60', '60', '60', '60', '60', '240', 'on', 'on', '1', '3', '2', '2', '2', '3', 'admin', '1234-534', '5/21/2012'),
(18, '5/21/2012', 'Test Owner', '13456', 'na', '848838-9353', 'MC306', 'Gracon', '2005', '60', '60', '60', '60', '60', '60', '240', 'on', 'on', '1', '3', '2', '2', '2', '3', 'admin', '1234-534', '5/21/2012'),
(19, '5/21/2012', 'Don Rusen', '45466', '4567', '124403-3490', 'MC306', 'Gracon', '2005', '60', '60', '60', '60', '60', '60', '240', 'on', 'on', '1', '3', '2', '2', '2', '3', 'admin', '1234-534', '5/21/2012'),
(20, '5/21/2012', 'Don Rusen', '45466', '4568', '399393-3868', 'MC306', 'Gracon', '2005', '60', '60', '60', '60', '60', '60', '240', 'on', 'on', '1', '3', '2', '2', '2', '3', 'admin', '1234-534', '5/21/2012'),
(21, '5/21/2012', 'Don Rusen', '45466', '4569', '838838-9393', 'MC306', 'Gracon', '2005', '60', '60', '60', '60', '60', '60', '240', 'on', 'on', '1', '3', '2', '2', '2', '3', 'admin', '1234-534', '5/21/2012'),
(22, 'test', 'test', 'test', 'test', 'test', 'DOT406', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'on', NULL, '1', '2', '2', '2', '1', '2', 'Dennis Woosley', 'test', 'test'),
(23, '', '', '', '', '', 'DOT406', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '', ''),
(24, '08/08/2012', '', '', '', '', 'DOT406', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '', ''),
(25, '', '', '', '', '', 'DOT406', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '', ''),
(26, '', 'Anderson Tralier', '234234', '', '', 'MC307', '234', '234', '234', '234', '', '', '', '', '234', 'on', NULL, '2', '1', '2', '1', NULL, NULL, 'admin', '123434', '08/07/2012');

-- --------------------------------------------------------

--
-- Table structure for table `form02`
--

CREATE TABLE IF NOT EXISTS `form02` (
  `entryID` int(8) NOT NULL AUTO_INCREMENT,
  `dateInspect` text,
  `owner` text,
  `ownerID` text,
  `woID` text,
  `mfg` text,
  `vin` text,
  `datemfg` text,
  `dotspec` text,
  `RadioGroupProbes` text,
  `comp1wet` text,
  `comp2wet` text,
  `comp3wet` text,
  `comp4wet` text,
  `comp5wet` text,
  `comp6wet` text,
  `comp1brake` text,
  `comp2brake` text,
  `comp3brake` text,
  `comp4brake` text,
  `comp5brake` text,
  `comp6brake` text,
  `comp1vapor` text,
  `comp2vapor` text,
  `comp3vapor` text,
  `inspector` text,
  `inspectorID` text,
  `dateInspector` text,
  PRIMARY KEY (`entryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `form02`
--

INSERT INTO `form02` (`entryID`, `dateInspect`, `owner`, `ownerID`, `woID`, `mfg`, `vin`, `datemfg`, `dotspec`, `RadioGroupProbes`, `comp1wet`, `comp2wet`, `comp3wet`, `comp4wet`, `comp5wet`, `comp6wet`, `comp1brake`, `comp2brake`, `comp3brake`, `comp4brake`, `comp5brake`, `comp6brake`, `comp1vapor`, `comp2vapor`, `comp3vapor`, `inspector`, `inspectorID`, `dateInspector`) VALUES
(7, '5/1/2012', 'A Trailer Co.', '1', '3', 'Olsten', '111111-1111', '2000', 'DOT412', 'yes', '60', '60', '60', '60', '60', '60', '60', '60', '60', '60', '60', '60', '60', '60', '60', 'admin', '1234', '5/2/2012'),
(8, '5/1/2012', 'B Trailer Co', '2', '34545', 'Taylor', '123412-1234', '1934', 'DOT412', 'no', '60', '60', '60', '60', '60', '60', '60', '60', '60', '60', '60', '60', '60', '60', '60', 'admin', '1234', '5/2/2012'),
(9, '5/1/2012', 'C Trailer Co', '3', '65634', 'Mack', '143032-2343', '1980', 'DOT406', 'yes', '60', '60', '60', '60', '60', '60', '60', '60', '60', '60', '60', '60', '60', '60', '60', 'admin', '1234', '5/2/2012'),
(10, '5/1/2012', 'D Trailer Co', '4', '4565', 'Winston', '123434-3413', '1975', 'MC306', 'no', '60', '60', '60', '60', '60', '60', '60', '60', '60', '60', '60', '60', '60', '60', '60', 'admin', '1234', '5/2/2012'),
(11, '5/1/2012', 'E Trailer Co', '5', '5645', 'Olander', '234433-1343', '1943', 'DOT406', 'yes', '60', '60', '60', '60', '60', '60', '60', '60', '60', '60', '60', '60', '60', '60', '60', 'admin', '1234', '5/2/2012'),
(12, '', '', '', '', '', '', '', 'DOT406', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'admin', '', ''),
(13, '', '', '', '', '', '', '', 'DOT406', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'admin', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `form03`
--

CREATE TABLE IF NOT EXISTS `form03` (
  `entryID` int(8) NOT NULL AUTO_INCREMENT,
  `dateInspect` text,
  `owner` text,
  `ownerID` text,
  `woID` text,
  `mfg` text,
  `vin` text,
  `datemfg` text,
  `dotspec` text,
  `head` text,
  `shell` text,
  `comp1cap` text,
  `comp2cap` text,
  `comp3cap` text,
  `comp4cap` text,
  `comp5cap` text,
  `comp1des` text,
  `comp2des` text,
  `comp3des` text,
  `comp4des` text,
  `comp5des` text,
  `comp1open` text,
  `comp2open` text,
  `comp3open` text,
  `comp4open` text,
  `comp5open` text,
  `comp1close` text,
  `comp2close` text,
  `comp3close` text,
  `comp4close` text,
  `comp5close` text,
  `CorrectiveAction` text,
  `Rstamp` text,
  `Ustamp` text,
  `inspector` text,
  `inspectorID` text,
  `dateInspector` text,
  PRIMARY KEY (`entryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `form03`
--

INSERT INTO `form03` (`entryID`, `dateInspect`, `owner`, `ownerID`, `woID`, `mfg`, `vin`, `datemfg`, `dotspec`, `head`, `shell`, `comp1cap`, `comp2cap`, `comp3cap`, `comp4cap`, `comp5cap`, `comp1des`, `comp2des`, `comp3des`, `comp4des`, `comp5des`, `comp1open`, `comp2open`, `comp3open`, `comp4open`, `comp5open`, `comp1close`, `comp2close`, `comp3close`, `comp4close`, `comp5close`, `CorrectiveAction`, `Rstamp`, `Ustamp`, `inspector`, `inspectorID`, `dateInspector`) VALUES
(1, '', '', '', '', '', '', '', 'DOT406', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '', ''),
(2, '', '', '', '', '', '', '', 'DOT406', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'admin', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `form04`
--

CREATE TABLE IF NOT EXISTS `form04` (
  `entryID` int(8) NOT NULL AUTO_INCREMENT,
  `dateInspect` text,
  `owner` text,
  `ownerID` text,
  `woID` text,
  `mfg` text,
  `vin` text,
  `datemfg` text,
  `dotspec` text,
  `RadioGroupInsulated` text,
  `RadioGroupLined` text,
  `RadioGroupDedicated` text,
  `RadioGroupCorrosive` text,
  `press_one_start` text,
  `press_one_start_time` text,
  `press_two_start` text,
  `press_two_start_time` text,
  `press_one_finish` text,
  `press_one_finish_time` text,
  `press_two_finish` text,
  `press_two_finish_time` text,
  `press_one_change` text,
  `press_two_change` text,
  `press_measured_change` text,
  `press_calculate_change` text,
  `vac_one_start` text,
  `vac_one_start_time` text,
  `vac_two_start` text,
  `vac_two_start_time` text,
  `vac_one_finish` text,
  `vac_one_finish_time` text,
  `vac_two_finish` text,
  `vac_two_finish_time` text,
  `vac_one_change` text,
  `vac_two_change` text,
  `vac_measured_change` text,
  `vac_calculate_change` text,
  `vapor_vent` text,
  `RadioGroupRepair` text,
  `RadioGroupWeld` text,
  `Rstamp` text,
  `Ustamp` text,
  `CorrectiveAction` text,
  `meetsReq` text,
  `failsReq` text,
  `markingApplied` text,
  `inspector` text,
  `inspectorID` text,
  `dateInspector` text,
  PRIMARY KEY (`entryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `form04`
--

INSERT INTO `form04` (`entryID`, `dateInspect`, `owner`, `ownerID`, `woID`, `mfg`, `vin`, `datemfg`, `dotspec`, `RadioGroupInsulated`, `RadioGroupLined`, `RadioGroupDedicated`, `RadioGroupCorrosive`, `press_one_start`, `press_one_start_time`, `press_two_start`, `press_two_start_time`, `press_one_finish`, `press_one_finish_time`, `press_two_finish`, `press_two_finish_time`, `press_one_change`, `press_two_change`, `press_measured_change`, `press_calculate_change`, `vac_one_start`, `vac_one_start_time`, `vac_two_start`, `vac_two_start_time`, `vac_one_finish`, `vac_one_finish_time`, `vac_two_finish`, `vac_two_finish_time`, `vac_one_change`, `vac_two_change`, `vac_measured_change`, `vac_calculate_change`, `vapor_vent`, `RadioGroupRepair`, `RadioGroupWeld`, `Rstamp`, `Ustamp`, `CorrectiveAction`, `meetsReq`, `failsReq`, `markingApplied`, `inspector`, `inspectorID`, `dateInspector`) VALUES
(7, '5/15/2012', 'Anderson Trailer', '12345', '54321', 'Gracon', '123403-3490', '2005', 'MC306', 'yes', 'yes', 'yes', 'yes', '30', '5:00', '30', '5:00', '25', '5:00', '20', '5:00', '5', '10', '5', '22.5', '30', '5:00', '30', '5:00', '30', '5:00', '30', '5:00', '0', '0', '0', '0', '45', 'yes', 'yes', 'ASDF1234', 'ASDF1234', 'asdf asdf asdf asdf asdf asdf asdfajdhsfpaiusnd kjn aousdn fkausnd ans dua dsfiun aweiufnw eunw ouansd fiuan fiauwen asiudn aosudfn aosdufn aosdnf auwenf aweun asfnoausdnf u,', 'on', 'on', 'on', 'admin', '1234', '5/15/2012'),
(9, '5/15/2012', 'A Trailer Co', '1', '345', 'Mack', '888888-8884', '5/4/1999', 'DOT412', 'yes', 'yes', 'yes', 'yes', '30', '5:00', '30', '5:00', '25', '5:00', '20', '5:00', '5', '10', '5', '22.5', '30', '5:00', '30', '5:00', '30', '5:00', '30', '5:00', '0', '0', '0', '0', '45', 'yes', 'yes', 'ASDF1234', 'ASDF1234', 'asdf asdf asdf asdf asdf asdf asdfajdhsfpaiusnd kjn aousdn fkausnd ans dua dsfiun aweiufnw eunw ouansd fiuan fiauwen asiudn aosudfn aosdufn aosdnf auwenf aweun asfnoausdnf u,', 'on', 'on', 'on', 'admin', '1234', '5/15/2012'),
(10, '5/15/2012', 'A Trailer Co', '1', '3454', 'Volvo', '888888-8885', '5/4/1999', 'DOT406', 'yes', 'yes', 'yes', 'yes', '30', '5:00', '30', '5:00', '25', '5:00', '20', '5:00', '5', '10', '5', '22.5', '30', '5:00', '30', '5:00', '30', '5:00', '30', '5:00', '0', '0', '0', '0', '45', 'yes', 'yes', 'ASDF1234', 'ASDF1234', 'asdf asdf asdf asdf asdf asdf asdfajdhsfpaiusnd kjn aousdn fkausnd ans dua dsfiun aweiufnw eunw ouansd fiuan fiauwen asiudn aosudfn aosdufn aosdnf auwenf aweun asfnoausdnf u,', 'on', 'on', 'on', 'admin', '1234', '5/15/2012'),
(11, '5/15/2012', 'A Trailer Co', '1', '34596', 'Cat', '888888-8886', '5/4/1999', 'DOT412', 'yes', 'yes', 'yes', 'yes', '30', '5:00', '30', '5:00', '25', '5:00', '20', '5:00', '5', '10', '5', '22.5', '30', '5:00', '30', '5:00', '30', '5:00', '30', '5:00', '0', '0', '0', '0', '45', 'yes', 'yes', 'ASDF1234', 'ASDF1234', 'asdf asdf asdf asdf asdf asdf asdfajdhsfpaiusnd kjn aousdn fkausnd ans dua dsfiun aweiufnw eunw ouansd fiuan fiauwen asiudn aosudfn aosdufn aosdnf auwenf aweun asfnoausdnf u,', 'on', 'on', 'on', 'admin', '1234', '5/15/2012'),
(12, '5/15/2012', 'B Trailer Co', '2', '6549', 'Allstar', '888888-8887', '5/4/1999', 'DOT406', 'yes', 'yes', 'yes', 'yes', '30', '5:00', '30', '5:00', '25', '5:00', '20', '5:00', '5', '10', '5', '22.5', '30', '5:00', '30', '5:00', '30', '5:00', '30', '5:00', '0', '0', '0', '0', '45', 'yes', 'yes', 'ASDF1234', 'ASDF1234', 'asdf asdf asdf asdf asdf asdf asdfajdhsfpaiusnd kjn aousdn fkausnd ans dua dsfiun aweiufnw eunw ouansd fiuan fiauwen asiudn aosudfn aosdufn aosdnf auwenf aweun asfnoausdnf u,', 'on', 'on', 'on', 'admin', '1234', '5/15/2012'),
(13, '5/15/2012', 'B Trailer Co', '2', '69594', 'Murry', '888888-8888', '5/4/1999', 'DOT412', 'yes', 'yes', 'yes', 'yes', '30', '5:00', '30', '5:00', '25', '5:00', '20', '5:00', '5', '10', '5', '22.5', '30', '5:00', '30', '5:00', '30', '5:00', '30', '5:00', '0', '0', '0', '0', '45', 'yes', 'yes', 'ASDF1234', 'ASDF1234', 'asdf asdf asdf asdf asdf asdf asdfajdhsfpaiusnd kjn aousdn fkausnd ans dua dsfiun aweiufnw eunw ouansd fiuan fiauwen asiudn aosudfn aosdufn aosdnf auwenf aweun asfnoausdnf u,', 'on', 'on', 'on', 'admin', '1234', '5/15/2012'),
(14, 'test', 'test', 'test', 'test', '', 'test', 'test', 'DOT406', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'test', '', '', '', '', 'test', '', '', NULL, NULL, '', 'test', '', NULL, NULL, NULL, 'admin', 'test', '');

-- --------------------------------------------------------

--
-- Table structure for table `form05`
--

CREATE TABLE IF NOT EXISTS `form05` (
  `entryID` int(8) NOT NULL AUTO_INCREMENT,
  `dateInspect` text,
  `owner` text,
  `ownerID` text,
  `woID` text,
  `mfg` text,
  `vin` text,
  `datemfg` text,
  `dotspec` text,
  `RadioGroupInsulated` text,
  `RadioGroupLined` text,
  `RadioGroupDedicated` text,
  `mawp` text,
  `testpressure` text,
  `fluid` text,
  `comp1cap` text,
  `comp2cap` text,
  `comp3cap` text,
  `comp4cap` text,
  `comp5cap` text,
  `comp6cap` text,
  `radio1` text,
  `radio2` text,
  `CorrectiveAction` text,
  `RadioGroupWeld` text,
  `Rstamp` text,
  `Ustamp` text,
  `RadioGroupPressure` text,
  `meetsReq` text,
  `failsReq` text,
  `markingApplied` text,
  `inspector` text,
  `inspectorID` text,
  `dateInspector` text,
  PRIMARY KEY (`entryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `form05`
--

INSERT INTO `form05` (`entryID`, `dateInspect`, `owner`, `ownerID`, `woID`, `mfg`, `vin`, `datemfg`, `dotspec`, `RadioGroupInsulated`, `RadioGroupLined`, `RadioGroupDedicated`, `mawp`, `testpressure`, `fluid`, `comp1cap`, `comp2cap`, `comp3cap`, `comp4cap`, `comp5cap`, `comp6cap`, `radio1`, `radio2`, `CorrectiveAction`, `RadioGroupWeld`, `Rstamp`, `Ustamp`, `RadioGroupPressure`, `meetsReq`, `failsReq`, `markingApplied`, `inspector`, `inspectorID`, `dateInspector`) VALUES
(1, 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'DOT412', 'yes', 'yes', 'yes', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', '1', '1', 'asdf', 'yes', 'asdf', 'asdf', 'yes', 'on', 'on', 'on', 'Dennis C. Cameron', 'asdf', 'asdf'),
(2, '', '', '', '', '', '', '', 'DOT406', NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', NULL, NULL, '', NULL, '', '', NULL, NULL, NULL, NULL, 'admin', '', ''),
(3, '', '', '', '', '', '', '', 'DOT406', NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', NULL, NULL, '', NULL, '', '', NULL, NULL, NULL, NULL, 'admin', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `form06`
--

CREATE TABLE IF NOT EXISTS `form06` (
  `entryID` int(8) NOT NULL AUTO_INCREMENT,
  `dateInspect` text,
  `owner` text,
  `ownerID` text,
  `woID` text,
  `mfg` text,
  `vin` text,
  `datemfg` text,
  `dotspec` text,
  `head` text,
  `shell` text,
  `RadioGroupInsulated` text,
  `RadioGroupLined` text,
  `RadioGroupDedicated` text,
  `RadioGroupCorrosive` text,
  `comp1cap` text,
  `comp2cap` text,
  `comp3cap` text,
  `comp4cap` text,
  `comp5cap` text,
  `comp6cap` text,
  `radio1` text,
  `radio2` text,
  `radio3` text,
  `CorrectiveAction` text,
  `RadioGroupThickCorrode` text,
  `RadioGroupSketch` text,
  `RadioGroupWeld` text,
  `Rstamp` text,
  `Ustamp` text,
  `RadioGroupSketchWeld` text,
  `RadioGroupPressure` text,
  `meetsReq` text,
  `failsReq` text,
  `markingApplied` text,
  `inspector` text,
  `inspectorID` text,
  `dateInspector` text,
  PRIMARY KEY (`entryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `form06`
--

INSERT INTO `form06` (`entryID`, `dateInspect`, `owner`, `ownerID`, `woID`, `mfg`, `vin`, `datemfg`, `dotspec`, `head`, `shell`, `RadioGroupInsulated`, `RadioGroupLined`, `RadioGroupDedicated`, `RadioGroupCorrosive`, `comp1cap`, `comp2cap`, `comp3cap`, `comp4cap`, `comp5cap`, `comp6cap`, `radio1`, `radio2`, `radio3`, `CorrectiveAction`, `RadioGroupThickCorrode`, `RadioGroupSketch`, `RadioGroupWeld`, `Rstamp`, `Ustamp`, `RadioGroupSketchWeld`, `RadioGroupPressure`, `meetsReq`, `failsReq`, `markingApplied`, `inspector`, `inspectorID`, `dateInspector`) VALUES
(1, '07/19/2012', 'test', 'test', 'test', 'test', 'test', 'test', 'DOT407', 'test', 'test', 'yes', 'yes', 'yes', 'yes', 'test', 'test', 'test', 'test', 'test', 'test', '1', '1', '1', 'test', 'yes', 'yes', 'yes', 'test', 'test', 'yes', 'yes', 'on', 'on', 'on', 'admin', 'test', 'test'),
(2, '', '', '', '', '', '', '', 'DOT406', '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, '', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, 'admin', '', ''),
(3, '08/09/2012', 'Adm trucking inc', '0425', '1458', 'Brenner', '4fob5186', '2004', 'DOT406', '.115', '.115', 'yes', 'no', 'no', 'no', '7200', '', '', '', '', '', '1', '1', '1', '', 'no', 'no', 'no', '7833', '', 'no', 'no', 'on', NULL, 'on', 'admin', '783', '08/09/2012');

-- --------------------------------------------------------

--
-- Table structure for table `form07`
--

CREATE TABLE IF NOT EXISTS `form07` (
  `entryID` int(8) NOT NULL AUTO_INCREMENT,
  `dateInspect` text,
  `owner` text,
  `ownerID` text,
  `woID` text,
  `mfg` text,
  `vin` text,
  `datemfg` text,
  `dotspec` text,
  `RadioGroupInsulated` text,
  `RadioGroupLined` text,
  `RadioGroupDedicated` text,
  `RadioGroupCorrosive` text,
  `comp1cap` text,
  `comp2cap` text,
  `comp3cap` text,
  `comp4cap` text,
  `comp5cap` text,
  `comp6cap` text,
  `RadioGroupHeat` text,
  `testpressure` text,
  `fluid` text,
  `RadioGroupVent` text,
  `radio1` text,
  `CorrectiveAction` text,
  `RadioGroupWeld` text,
  `Rstamp` text,
  `Ustamp` text,
  `meetsReq` text,
  `failsReq` text,
  `markingApplied` text,
  `inspector` text,
  `inspectorID` text,
  `dateInspector` text,
  PRIMARY KEY (`entryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `form07`
--

INSERT INTO `form07` (`entryID`, `dateInspect`, `owner`, `ownerID`, `woID`, `mfg`, `vin`, `datemfg`, `dotspec`, `RadioGroupInsulated`, `RadioGroupLined`, `RadioGroupDedicated`, `RadioGroupCorrosive`, `comp1cap`, `comp2cap`, `comp3cap`, `comp4cap`, `comp5cap`, `comp6cap`, `RadioGroupHeat`, `testpressure`, `fluid`, `RadioGroupVent`, `radio1`, `CorrectiveAction`, `RadioGroupWeld`, `Rstamp`, `Ustamp`, `meetsReq`, `failsReq`, `markingApplied`, `inspector`, `inspectorID`, `dateInspector`) VALUES
(1, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'MC306', 'no', 'yes', 'yes', 'yes', 'test', 'test', 'test', 'test', 'test', 'test', 'no', 'test', 'test', '1', '1', 'asdf', 'yes', 'test', 'test', 'on', 'on', 'on', 'admin', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `form08`
--

CREATE TABLE IF NOT EXISTS `form08` (
  `entryID` int(8) NOT NULL AUTO_INCREMENT,
  `dateInspect` text,
  `owner` text,
  `ownerID` text,
  `woID` text,
  `mfg` text,
  `vin` text,
  `datemfg` text,
  `dotspec` text,
  `thickManuHead` text,
  `thickManuTop` text,
  `thickManuSide` text,
  `thickManuBottom` text,
  `thickAnnualHead` text,
  `thickAnnualTop` text,
  `thickAnnualSide` text,
  `thickAnnualBottom` text,
  `thickMinHead` text,
  `thickMinTop` text,
  `thickMinSide` text,
  `thickMinBottom` text,
  `RadioGroupInsulated` text,
  `RadioGroupLined` text,
  `RadioGroupDedicated` text,
  `RadioGroupCorrosive` text,
  `numbercompartments` text,
  `totalcapacity` text,
  `RadioGroupWeld` text,
  `Rstamp` text,
  `Ustamp` text,
  `RadioGroupPressure` text,
  `meetsReq` text,
  `failsReq` text,
  `markingApplied` text,
  `CorrectiveAction` text,
  `inspector` text,
  `inspectorID` text,
  `dateInspector` text,
  PRIMARY KEY (`entryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `form08`
--

INSERT INTO `form08` (`entryID`, `dateInspect`, `owner`, `ownerID`, `woID`, `mfg`, `vin`, `datemfg`, `dotspec`, `thickManuHead`, `thickManuTop`, `thickManuSide`, `thickManuBottom`, `thickAnnualHead`, `thickAnnualTop`, `thickAnnualSide`, `thickAnnualBottom`, `thickMinHead`, `thickMinTop`, `thickMinSide`, `thickMinBottom`, `RadioGroupInsulated`, `RadioGroupLined`, `RadioGroupDedicated`, `RadioGroupCorrosive`, `numbercompartments`, `totalcapacity`, `RadioGroupWeld`, `Rstamp`, `Ustamp`, `RadioGroupPressure`, `meetsReq`, `failsReq`, `markingApplied`, `CorrectiveAction`, `inspector`, `inspectorID`, `dateInspector`) VALUES
(1, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'DOT407', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'no', 'yes', 'yes', 'yes', 'test', 'test', 'yes', 'test', 'test', 'yes', 'on', 'on', 'on', 'test', 'admin', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `form09`
--

CREATE TABLE IF NOT EXISTS `form09` (
  `entryID` int(8) NOT NULL AUTO_INCREMENT,
  `dateInspect` text,
  `owner` text,
  `ownerID` text,
  `woID` text,
  `mfg` text,
  `vin` text,
  `datemfg` text,
  `dotspec` text,
  `mawp` text,
  `temprature` text,
  `materialspec` text,
  `testpressure` text,
  `serviceoftank` text,
  `fluid` text,
  `hoseID1` text,
  `dateHose1` text,
  `hoseID2` text,
  `dateHose2` text,
  `hoseID3` text,
  `dateHose3` text,
  `hoseID4` text,
  `dateHose4` text,
  `hoseID5` text,
  `dateHose5` text,
  `radio1` text,
  `radio2` text,
  `radio3` text,
  `radio4` text,
  `radio5` text,
  `radio6` text,
  `radio7` text,
  `radio8` text,
  `radio9` text,
  `meteredService` text,
  `nonmeteredService` text,
  `hoseAttached` text,
  `hoseSeperate` text,
  `radio10` text,
  `radio11` text,
  `radio12` text,
  `radio13` text,
  `radio14` text,
  `radio15` text,
  `CorrectiveAction` text,
  `meetsReq` text,
  `failsReq` text,
  `markingApplied` text,
  `Rstamp` text,
  `Ustamp` text,
  `inspector` text,
  `inspectorID` text,
  `dateInspector` text,
  PRIMARY KEY (`entryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `form09`
--

INSERT INTO `form09` (`entryID`, `dateInspect`, `owner`, `ownerID`, `woID`, `mfg`, `vin`, `datemfg`, `dotspec`, `mawp`, `temprature`, `materialspec`, `testpressure`, `serviceoftank`, `fluid`, `hoseID1`, `dateHose1`, `hoseID2`, `dateHose2`, `hoseID3`, `dateHose3`, `hoseID4`, `dateHose4`, `hoseID5`, `dateHose5`, `radio1`, `radio2`, `radio3`, `radio4`, `radio5`, `radio6`, `radio7`, `radio8`, `radio9`, `meteredService`, `nonmeteredService`, `hoseAttached`, `hoseSeperate`, `radio10`, `radio11`, `radio12`, `radio13`, `radio14`, `radio15`, `CorrectiveAction`, `meetsReq`, `failsReq`, `markingApplied`, `Rstamp`, `Ustamp`, `inspector`, `inspectorID`, `dateInspector`) VALUES
(1, '7/19/2012', 'test', 'test', 'test', 'test', 'test', 'test', 'DOT407', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'on', 'on', 'on', 'on', '1', '1', '1', '1', '1', '1', 'test', 'on', 'on', 'on', 'test', 'test', 'admin', 'test', '7/19/2012');

-- --------------------------------------------------------

--
-- Table structure for table `form10`
--

CREATE TABLE IF NOT EXISTS `form10` (
  `entryID` int(8) NOT NULL AUTO_INCREMENT,
  `dateInspect` text,
  `owner` text,
  `ownerID` text,
  `woID` text,
  `mfg` text,
  `vin` text,
  `datemfg` text,
  `dotspec` text,
  `RadioGroupInsulated` text,
  `RadioGroupLined` text,
  `RadioGroupDedicated` text,
  `RadioGroupCorrosive` text,
  `comp1cap` text,
  `comp2cap` text,
  `comp3cap` text,
  `comp4cap` text,
  `comp5cap` text,
  `comp6cap` text,
  `RadioGroupHeat` text,
  `testpressure` text,
  `fluid` text,
  `RadioGroupVent` text,
  `radio1` text,
  `CorrectiveAction` text,
  `RadioGroupWeld` text,
  `RadioGroupPressure` text,
  `Rstamp` text,
  `Ustamp` text,
  `meetsReq` text,
  `failsReq` text,
  `markingApplied` text,
  `inspector` text,
  `inspectorID` text,
  `dateInspector` text,
  PRIMARY KEY (`entryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `form10`
--

INSERT INTO `form10` (`entryID`, `dateInspect`, `owner`, `ownerID`, `woID`, `mfg`, `vin`, `datemfg`, `dotspec`, `RadioGroupInsulated`, `RadioGroupLined`, `RadioGroupDedicated`, `RadioGroupCorrosive`, `comp1cap`, `comp2cap`, `comp3cap`, `comp4cap`, `comp5cap`, `comp6cap`, `RadioGroupHeat`, `testpressure`, `fluid`, `RadioGroupVent`, `radio1`, `CorrectiveAction`, `RadioGroupWeld`, `RadioGroupPressure`, `Rstamp`, `Ustamp`, `meetsReq`, `failsReq`, `markingApplied`, `inspector`, `inspectorID`, `dateInspector`) VALUES
(1, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'DOT412', 'yes', 'yes', 'yes', 'yes', 'test', 'test', 'test', 'test', 'test', 'test', 'yes', 'test', 'test', '1', '1', 'test', 'yes', 'yes', 'test', 'test', 'on', 'on', 'on', 'admin', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `form11`
--

CREATE TABLE IF NOT EXISTS `form11` (
  `entryID` int(8) NOT NULL AUTO_INCREMENT,
  `dateInspect` text,
  `owner` text,
  `ownerID` text,
  `woID` text,
  `mfg` text,
  `vin` text,
  `datemfg` text,
  `dotspec` text,
  `nationalSerial` text,
  `mc330` text,
  `mc331` text,
  `RadioGroupMag` text,
  `material` text,
  `RadioGroupQT` text,
  `RadioGroupInsulated` text,
  `RadioGroupLined` text,
  `RadioGroupDedicated` text,
  `RadioGroupCorrosive` text,
  `RadioGroupStressRelieved` text,
  `mawp` text,
  `testpressure` text,
  `gaugeNum` text,
  `calibrationDate` text,
  `testerName` text,
  `testDate` text,
  `RadioGroupWeld` text,
  `RadioGroupSketch` text,
  `RadioGroupPWHT` text,
  `RadioGroupRT` text,
  `Rstamp` text,
  `Ustamp` text,
  `PSIdesign1` text,
  `PSIdesign2` text,
  `PSIreseat1` text,
  `PSIreseat2` text,
  `procedureNum` text,
  `procedureRev` text,
  `witnessDate` text,
  `meetsReq` text,
  `failsReq` text,
  `markingApplied` text,
  `CorrectedWithoutWelding` text,
  `CorrectedByWelding` text,
  `inspector` text,
  `inspectorID` text,
  `dateInspector` text,
  PRIMARY KEY (`entryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `form11`
--

INSERT INTO `form11` (`entryID`, `dateInspect`, `owner`, `ownerID`, `woID`, `mfg`, `vin`, `datemfg`, `dotspec`, `nationalSerial`, `mc330`, `mc331`, `RadioGroupMag`, `material`, `RadioGroupQT`, `RadioGroupInsulated`, `RadioGroupLined`, `RadioGroupDedicated`, `RadioGroupCorrosive`, `RadioGroupStressRelieved`, `mawp`, `testpressure`, `gaugeNum`, `calibrationDate`, `testerName`, `testDate`, `RadioGroupWeld`, `RadioGroupSketch`, `RadioGroupPWHT`, `RadioGroupRT`, `Rstamp`, `Ustamp`, `PSIdesign1`, `PSIdesign2`, `PSIreseat1`, `PSIreseat2`, `procedureNum`, `procedureRev`, `witnessDate`, `meetsReq`, `failsReq`, `markingApplied`, `CorrectedWithoutWelding`, `CorrectedByWelding`, `inspector`, `inspectorID`, `dateInspector`) VALUES
(1, 'asdf', 'asdf', 'asdf', 'asdf', 'adf', 'asdf', 'asfd', 'DOT412', 'asdf', 'asfd', 'asdf', 'yes', 'asdf', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asf', 'yes', 'yes', 'yes', 'yes', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asfd', 'asf', 'asfd', 'asdf', 'on', 'on', 'on', 'asdf', 'asdf', 'Dennis C. Cameron', 'asdf', 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `form12`
--

CREATE TABLE IF NOT EXISTS `form12` (
  `entryID` int(8) NOT NULL AUTO_INCREMENT,
  `dateInspect` text,
  `owner` text,
  `ownerID` text,
  `woID` text,
  `mfg` text,
  `vin` text,
  `datemfg` text,
  `dotspec` text,
  `head` text,
  `shell` text,
  `mawp` text,
  `RadioGroupInsulated` text,
  `RadioGroupLined` text,
  `RadioGroupDedicated` text,
  `RadioGroupCorrosive` text,
  `radio1` text,
  `radio2` text,
  `radio3` text,
  `radio4` text,
  `radio5` text,
  `radio6` text,
  `radio7` text,
  `CorrectiveAction` text,
  `RadioGroupWeld` text,
  `Rstamp` text,
  `Ustamp` text,
  `meetsReq` text,
  `failsReq` text,
  `markingApplied` text,
  `inspector` text,
  `inspectorID` text,
  `dateInspector` text,
  PRIMARY KEY (`entryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `form12`
--

INSERT INTO `form12` (`entryID`, `dateInspect`, `owner`, `ownerID`, `woID`, `mfg`, `vin`, `datemfg`, `dotspec`, `head`, `shell`, `mawp`, `RadioGroupInsulated`, `RadioGroupLined`, `RadioGroupDedicated`, `RadioGroupCorrosive`, `radio1`, `radio2`, `radio3`, `radio4`, `radio5`, `radio6`, `radio7`, `CorrectiveAction`, `RadioGroupWeld`, `Rstamp`, `Ustamp`, `meetsReq`, `failsReq`, `markingApplied`, `inspector`, `inspectorID`, `dateInspector`) VALUES
(1, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'DOT407', 'test', 'test', 'test', 'yes', 'yes', 'yes', 'yes', '1', '1', '1', '1', '1', '1', '1', 'test', 'yes', 'test', 'test', 'on', 'on', 'on', 'admin', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `form13`
--

CREATE TABLE IF NOT EXISTS `form13` (
  `entryID` int(8) NOT NULL AUTO_INCREMENT,
  `dateInspect` text,
  `owner` text,
  `ownerID` text,
  `woID` text,
  `mfg` text,
  `vin` text,
  `datemfg` text,
  `dotspec` text,
  `nationalSerial` text,
  `mc330` text,
  `mc331` text,
  `RadioGroupQT` text,
  `material` text,
  `RadioGroupMag` text,
  `RadioGroupInsulated` text,
  `RadioGroupLined` text,
  `RadioGroupDedicated` text,
  `RadioGroupCorrosive` text,
  `RadioGroupStressRelieved` text,
  `mawp` text,
  `testpressure` text,
  `gaugeNum` text,
  `calibrationDate` text,
  `testerName` text,
  `testDate` text,
  `RadioGroupWeld` text,
  `RadioGroupSketchWeld` text,
  `RadioGroupPWHT` text,
  `RadioGroupRT` text,
  `Rstamp` text,
  `Ustamp` text,
  `PSIdesign1` text,
  `PSIdesign2` text,
  `PSIreseat1` text,
  `PSIreseat2` text,
  `procedureNum` text,
  `procedureRev` text,
  `witnessDate` text,
  `meetsReq` text,
  `failsReq` text,
  `markingApplied` text,
  `CorrectedWithoutWelding` text,
  `CorrectedByWelding` text,
  `inspector` text,
  `inspectorID` text,
  `dateInspector` text,
  PRIMARY KEY (`entryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `form13`
--

INSERT INTO `form13` (`entryID`, `dateInspect`, `owner`, `ownerID`, `woID`, `mfg`, `vin`, `datemfg`, `dotspec`, `nationalSerial`, `mc330`, `mc331`, `RadioGroupQT`, `material`, `RadioGroupMag`, `RadioGroupInsulated`, `RadioGroupLined`, `RadioGroupDedicated`, `RadioGroupCorrosive`, `RadioGroupStressRelieved`, `mawp`, `testpressure`, `gaugeNum`, `calibrationDate`, `testerName`, `testDate`, `RadioGroupWeld`, `RadioGroupSketchWeld`, `RadioGroupPWHT`, `RadioGroupRT`, `Rstamp`, `Ustamp`, `PSIdesign1`, `PSIdesign2`, `PSIreseat1`, `PSIreseat2`, `procedureNum`, `procedureRev`, `witnessDate`, `meetsReq`, `failsReq`, `markingApplied`, `CorrectedWithoutWelding`, `CorrectedByWelding`, `inspector`, `inspectorID`, `dateInspector`) VALUES
(1, 'asdf', 'asdf', 'asdf', 'asfd', 'asdf', 'asdf', 'asdf', 'DOT412', 'asdf', 'asdf', 'asdf', 'yes', 'asdf', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'yes', 'yes', 'yes', 'yes', 'asdf', 'aasdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asfd', 'asdf', 'asdf', 'on', 'on', 'on', 'asdfasdf', 'asdf', 'Dennis C. Cameron', 'asdf', 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE IF NOT EXISTS `forms` (
  `formID` int(8) NOT NULL AUTO_INCREMENT,
  `form_num` text,
  `form_title` text,
  `form_subtitle` text,
  `form_ready` tinyint(1) NOT NULL,
  PRIMARY KEY (`formID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`formID`, `form_num`, `form_title`, `form_subtitle`, `form_ready`) VALUES
(7, '01', 'UPPER COUPLER INSPECTION', NULL, 1),
(8, '02', 'WET TEST / BRAKE INSPECTION', NULL, 1),
(9, '03', 'EXTERNAL VISUAL INSPECTION', 'In Accordance with 49 CFR Part 180 Para. 180.407[d] and 180.417)', 1),
(10, '04', 'Method 27 - Determination of vapor tightness of gasoline delivery tank using pressure-vacuum test', 'EPA 40CFR Part 60 | DOT 49CFR [180.407(h)(2) and 180.417)]', 1),
(11, '05', 'LEAKAGE TEST REPORT', 'In Accordance with 49 CFT Part 180 Para. 180.407[h] and 180.417)', 1),
(12, '06', 'INTERNAL VISUAL INSPECTION REPORT', 'In Accordance with 49 CFR Part 180 Para. 180.407(e) and 180.417)', 1),
(13, '07', 'PRESSURE RETEST - HYDROSTATIC METHOD', 'In Accordance with 49CFT Part 180 Para. 180.407[g] and 180.417)', 1),
(14, '08', 'THICKNESS TEST REPORT', 'In Accordance with 49 CFR Part 180.407(l) and 180.417)', 1),
(15, '09', 'MC 330/331 LEAKAGE TEST REPORT', 'Per 49 CFR 180.407 b', 1),
(16, '10', 'PRESSURE RETEST - PNEUMATIC METHOD', 'In Accordance with 49 CFR Part 180 Para. 180.407[g] and 180.417)', 1),
(17, '11', 'MC 330/MC 331 HYDROSTATIC PRESSURE RETEST', 'In Accordance with DOT 49CFR Part 180 Para. 180.407[g] and 180.417)', 1),
(18, '12', 'LINING INSPECTION', 'In Accordance with 49CFR Part 180 Para. 180.407[f] and 180.417', 1),
(19, '13', 'MC 330/ MC331 HYDROSTATIC PRESSURE RETEST', 'In Accordance with DOT 49CFR Part 180 Para. 180.407[g] and 180.417', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `user_inspectorID` varchar(20) DEFAULT NULL,
  `user_name` varchar(32) NOT NULL,
  `user_password` varchar(32) NOT NULL,
  `user_role` varchar(20) NOT NULL,
  `user_email` varchar(65) NOT NULL,
  `user_image_url` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_inspectorID`, `user_name`, `user_password`, `user_role`, `user_email`, `user_image_url`) VALUES
(27, '', 'Lewis D. Morris', 'pass', 'user', 'ldmorris@grace.com', '50e988064fb940afc4be7cea9c1a0805.jpg'),
(35, '', 'admin', 'password', 'admin', 'admin@domain.com', '675b53cfea6767e51694fab0af2b30ff.png'),
(60, '', 'Dennis C. Cameron', 'pass', 'user', '', '731145c327a9b211c687d9722b6dcb8d.jpg'),
(61, '', 'Dennis Woosley', 'password', 'user', '', '35c17eb6cff79af111962c8e25121ec1.jpg'),
(62, '', 'Donavan Miller', 'pass', 'user', '', '748d890f574d8970170e2ec486b10de7.jpg'),
(63, '', 'Jeremy Treece', 'pass', 'user', '', 'dc2d642a348d17684fc4404df13f6841.jpg'),
(64, '', 'John Martinsen', 'pass', 'user', '', '3f1b024f48d79632f77cf195e2cd3e9e.jpg'),
(65, '', 'Michael Rucker', 'pass', 'user', '', 'c132f22ad9aad5f807f2e508cb528cac.jpg'),
(66, '', 'Sam Byrd', 'pass', 'user', '', '17afdb8e6a9a9eb636a4bb65d3ac5abc.jpg'),
(67, '', 'Silas Chism', 'pass', 'user', '', '039b54a154f460be848fac5deb4ab679.jpg'),
(68, '', 'Thomas Edwards', 'pass', 'user', '', 'd4d4bb90c9a62b3e79d52f4f5c3bb11b.jpg'),
(69, '', 'Timothy Kinney', 'pass', 'user', '', 'f35681470e546e9ab9658e1569f1f69e.jpg'),
(70, '', 'Tony Fowler', 'pass', 'user', '', '73d1309155d7e5c53279f9991bbbd6c7.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
