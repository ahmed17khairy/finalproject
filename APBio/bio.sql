-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 05, 2018 at 04:35 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bio`
--

-- --------------------------------------------------------

--
-- Table structure for table `Grades`
--

CREATE TABLE `Grades` (
  `studentId` int(11) NOT NULL,
  `quizID` int(11) NOT NULL,
  `grade` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `Grades`
--

TRUNCATE TABLE `Grades`;
-- --------------------------------------------------------

--
-- Table structure for table `Quiz`
--

CREATE TABLE `Quiz` (
  `quizID` int(11) NOT NULL,
  `quizName` text NOT NULL,
  `question1` text NOT NULL,
  `choice1` text NOT NULL,
  `choice2` text NOT NULL,
  `choice3` text NOT NULL,
  `choice4` text NOT NULL,
  `answer1` text NOT NULL,
  `question2` text NOT NULL,
  `choice2_1` text NOT NULL,
  `choice2_2` text NOT NULL,
  `choice2_3` text NOT NULL,
  `choice2_4` text NOT NULL,
  `answer2` text NOT NULL,
  `question3` text NOT NULL,
  `choice3_1` text NOT NULL,
  `choice3_2` text NOT NULL,
  `choice3_3` text NOT NULL,
  `choice3_4` text NOT NULL,
  `answer3` text NOT NULL,
  `question4` text NOT NULL,
  `choice4_1` text NOT NULL,
  `choice4_2` text NOT NULL,
  `choice4_3` text NOT NULL,
  `choice4_4` text NOT NULL,
  `answer4` text NOT NULL,
  `question5` text NOT NULL,
  `choice5_1` text NOT NULL,
  `choice5_2` text NOT NULL,
  `choice5_3` text NOT NULL,
  `choice5_4` text NOT NULL,
  `answer5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `Quiz`
--

TRUNCATE TABLE `Quiz`;
--
-- Dumping data for table `Quiz`
--

INSERT INTO `Quiz` (`quizID`, `quizName`, `question1`, `choice1`, `choice2`, `choice3`, `choice4`, `answer1`, `question2`, `choice2_1`, `choice2_2`, `choice2_3`, `choice2_4`, `answer2`, `question3`, `choice3_1`, `choice3_2`, `choice3_3`, `choice3_4`, `answer3`, `question4`, `choice4_1`, `choice4_2`, `choice4_3`, `choice4_4`, `answer4`, `question5`, `choice5_1`, `choice5_2`, `choice5_3`, `choice5_4`, `answer5`) VALUES
(1, 'Quiz 1', 'Q1?', 'a', 'b', 'c', 'd', 'a', 'Q2?', 'a', 'b', 'c', 'd', 'b', 'Q3?', 'a', 'b', 'c', 'd', 'c', 'Q4?', 'a', 'b', 'c', 'd', 'd', 'Q5?', 'a', 'b', 'c', 'd', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `Student`
--

CREATE TABLE `Student` (
  `UserID` int(11) NOT NULL,
  `FName` text NOT NULL,
  `LName` text NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL,
  `DOB` date NOT NULL,
  `type` text NOT NULL,
  `grades` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Student table ';

--
-- Truncate table before insert `Student`
--

TRUNCATE TABLE `Student`;
--
-- Dumping data for table `Student`
--

INSERT INTO `Student` (`UserID`, `FName`, `LName`, `Email`, `Password`, `DOB`, `type`, `grades`) VALUES
(1, 'ahmed', 'mohamed', 'ahmed@edu.com', 'test', '2000-02-02', 'student', 100),
(2, 'Sarah ', 'Kennedy', 'sarah@sarah.edu', 'test', '0200-02-02', 'student', 0),
(3, 'khyati', 'khyati', 'khyati@khyati.edu', 'test', '2000-01-01', 'student', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Teacher`
--

CREATE TABLE `Teacher` (
  `UserID` int(11) NOT NULL,
  `FName` text NOT NULL,
  `LName` text NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL,
  `DOB` date NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `Teacher`
--

TRUNCATE TABLE `Teacher`;
--
-- Dumping data for table `Teacher`
--

INSERT INTO `Teacher` (`UserID`, `FName`, `LName`, `Email`, `Password`, `DOB`, `type`) VALUES
(4, 'Galloway', 'Galloway', 'galloway@galloway.edu', 'test', '2000-01-02', 'teacher');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `UserID` int(11) NOT NULL,
  `Type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `User`
--

TRUNCATE TABLE `User`;
--
-- Dumping data for table `User`
--

INSERT INTO `User` (`UserID`, `Type`) VALUES
(1, 'student'),
(2, 'student'),
(3, 'student'),
(4, 'teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Grades`
--
ALTER TABLE `Grades`
  ADD PRIMARY KEY (`studentId`);

--
-- Indexes for table `Quiz`
--
ALTER TABLE `Quiz`
  ADD PRIMARY KEY (`quizID`);

--
-- Indexes for table `Student`
--
ALTER TABLE `Student`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `Teacher`
--
ALTER TABLE `Teacher`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Quiz`
--
ALTER TABLE `Quiz`
  MODIFY `quizID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
