-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2022 at 11:01 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminregistration`
--

CREATE TABLE `adminregistration` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `ID` int(11) NOT NULL,
  `Job` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminregistration`
--

INSERT INTO `adminregistration` (`Username`, `Password`, `ID`, `Job`) VALUES
('sojo2105mngr', '1234', 1, 'personal manger'),
('noto2604mngr', '4321', 2, 'general manger'),
('Amir0711mngr', '0711', 3, 'Financial manager'),
('Remon1904mngr', '1904RN', 4, 'Human Resource manger');

-- --------------------------------------------------------

--
-- Table structure for table `auditorregistration`
--

CREATE TABLE `auditorregistration` (
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `ID` int(11) NOT NULL,
  `PersonalPhoto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auditorregistration`
--

INSERT INTO `auditorregistration` (`Username`, `Password`, `ID`, `PersonalPhoto`) VALUES
('Auditor', '12345', 1, './assets-admin/img-Extra/man-profile-01.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `courseinformation`
--

CREATE TABLE `courseinformation` (
  `Course Name` varchar(100) NOT NULL,
  `Tutor Name` varchar(100) NOT NULL,
  `Course Id` varchar(100) NOT NULL,
  `Tutor Id` varchar(100) NOT NULL,
  `Students Number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `CourseID` int(11) NOT NULL,
  `CourseName` varchar(50) NOT NULL,
  `CourseType` varchar(50) NOT NULL,
  `CoursePrice` int(10) NOT NULL,
  `Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`CourseID`, `CourseName`, `CourseType`, `CoursePrice`, `Image`) VALUES
(1, 'English', 'A12', 5000, 'english.jpg'),
(2, 'Arabic', 'A12', 6000, 'arabic11.png'),
(3, 'Italian', 'A12', 3000, 'french1.jpg'),
(4, 'French', 'A12', 3000, 'french1.jpg'),
(5, 'Islamic', 'A12', 1000, 'islamic.jpg'),
(6, 'Christian ', 'A12', 1000, 'christian.jpg'),
(7, 'citizenship', 'A12', 1000, 'geography.jpg'),
(8, 'statistics ', 'A12', 1500, 'statistics.jpg'),
(9, 'Physics', 'MS12', 7000, 'physics.jpg'),
(10, 'Chemistry', 'MS12', 7000, 'chemistry.jpg'),
(11, 'Geology ', 'MS12', 4000, 'biology.jpg'),
(12, 'Biology ', 'MS12', 5000, 'biology.jpg'),
(13, 'Dynamics', 'MS12', 3000, 'math.jpg'),
(14, 'Statics ', 'MS12', 3500, 'statistics.jpg'),
(15, 'Calculus ', 'MS12', 2500, 'math.jpg'),
(16, 'Algebra & Solid Geometry', 'MS12', 4500, 'math.jpg'),
(17, 'History', 'AD12', 2500, 'history.jpg'),
(18, 'Geography ', 'AD12', 2000, 'geography.jpg'),
(19, 'philosophy', 'AD12', 3000, 'sociology.jpg'),
(20, 'Sociology', 'AD12', 3500, 'sociology.jpg'),
(21, 'psychology', 'AD12', 2300, 'sociology.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `learnersignup`
--

CREATE TABLE `learnersignup` (
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `NationalID` text NOT NULL,
  `DateOfBirth` date NOT NULL,
  `MobileNumber` int(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `PersonalPhoto` varchar(10000) NOT NULL,
  `LearnerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `learnersignup`
--

INSERT INTO `learnersignup` (`FirstName`, `LastName`, `NationalID`, `DateOfBirth`, `MobileNumber`, `Email`, `Username`, `Password`, `PersonalPhoto`, `LearnerID`) VALUES
('Amir', 'Ayman', '1234567890123456', '2000-11-09', 1284885096, 'amiraymannabil@gmail.com', 'admin', '12345', './uploads/Amirr.jpeg', 17),
('hamada', 'ibrahim', '1213214413445337', '0000-00-00', 2121313131, 'aiieyy@fyfy.fhu', 'amir3131', '412424', './uploads/Amir.jpeg', 18),
('tareeq', 'sameh', '1234567890123456', '0000-00-00', 1213412424, 'ahuasgfus@gug.hu', 'kkkkkkk', '12345', './uploads/Amirc.jpeg', 20),
('manal', 'ahmed', '2147483647', '2022-01-14', 35213542, 'manal@std.com', 'manal345', '1478', './LearnersImages/Lava_ft.jpg', 10),
('mohamed', 'ahmed', '1234567890123456', '0000-00-00', 2147483647, 'hhfwugu@ghyg.hdi', 'mohamed11', '12345', './uploads/Amirc.jpeg', 19),
('Nathalie', 'Sameh', '879851454', '2020-10-06', 854125189, 'n@gmail.com', 'nathalie2604', '2604', './LearnersImages/ypos.png', 11),
('saja', 'saadoun', '1234567890123456', '2022-01-26', 1234352323, 'dauhusah@huh.fs', 'saja21212', '12345', './uploads/Amirc.jpeg', 21),
('Amir0711mngr', 'Salah m', '874521', '2021-03-23', 35412852, 'salma1801@gmail.com', 'salma1801@std.com', '7410', '', 3),
('sojo', 'Saadoun', '54685', '2021-10-29', 1113858572, 'sajatarek2001@gmail.com', 'sj24', '4321', './uploads/Amir.jpeg', 12),
('Youssef', 'yassin', '87452', '2022-01-20', 8746521, 'y@gmail.com', 'youssefY', '7410', '', 7);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `MessageID` int(11) NOT NULL,
  `Bodymessage` text NOT NULL,
  `SenderID` int(11) NOT NULL,
  `ReceiverID` int(11) NOT NULL,
  `createdAt` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`MessageID`, `Bodymessage`, `SenderID`, `ReceiverID`, `createdAt`) VALUES
(1, 'y', 0, 234, '2022-01-13 11:53:25pm'),
(2, 'hii tany', 2, 0, '2022-01-08 09:14:00pm'),
(3, 'hii', 12, 0, '2022-01-10 06:56:18pm'),
(4, 'database', 234, 0, '2022-01-14 11:26:22am'),
(5, 'hello', 234, 1, '2022-01-11 08:51:07pm'),
(6, 'error', 234, 0, '2022-01-14 11:29:13am'),
(7, 'haaaa', 234, 1, '2022-01-14 11:41:02am'),
(8, 'hii remon', 3, 4, '2022-01-14 11:43:42am'),
(9, 'admin to learner', 4, 234, '2022-01-14 12:30:22pm'),
(10, 'response ', 4, 3, '2022-01-14 12:53:44pm'),
(11, 'from me noto learner to amir manager', 2, 403, '2022-01-16 07:50:19pm'),
(12, 'response from amir manager to noto learner', 403, 2, '2022-01-16 07:52:58pm'),
(13, 'from saja learner to amir admin', 1, 403, '2022-01-16 09:03:45pm'),
(14, 'me saja sending again to the manager amir', 1, 0, '2022-01-21 01:22:22am'),
(15, 'Hi', 17, 3, '2022-01-22 03:32:26am'),
(16, 'Hi', 17, 3, '2022-01-22 03:32:30am'),
(17, 'Hi', 17, 3, '2022-01-22 03:38:21am'),
(18, 'Hi', 17, 3, '2022-01-22 03:39:53am'),
(19, 'Hello', 3, 17, '2022-01-22 03:43:04am'),
(20, 'Hello', 3, 17, '2022-01-22 03:43:26am'),
(21, 'Hello', 3, 17, '2022-01-22 03:44:16am'),
(22, 'Hello', 3, 17, '2022-01-22 03:44:33am'),
(23, 'Hello', 3, 17, '2022-01-22 03:46:48am'),
(24, 'Hello', 3, 17, '2022-01-22 03:48:55am'),
(25, 'Hello', 3, 17, '2022-01-22 03:50:33am'),
(26, 'Hello', 3, 17, '2022-01-22 03:52:55am'),
(27, 'Hello', 3, 17, '2022-01-22 03:54:46am'),
(28, 'Hello', 3, 17, '2022-01-22 03:55:06am');

-- --------------------------------------------------------

--
-- Table structure for table `mycart`
--

CREATE TABLE `mycart` (
  `CartID` int(11) NOT NULL,
  `CourseID` int(11) NOT NULL,
  `LearnerID` int(11) NOT NULL,
  `CourseName` text NOT NULL,
  `CourseType` text NOT NULL,
  `CoursePrice` text NOT NULL,
  `Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mycourse`
--

CREATE TABLE `mycourse` (
  `OrderID` int(11) NOT NULL,
  `CourseID` int(11) NOT NULL,
  `LearnerID` int(11) NOT NULL,
  `CourseName` text NOT NULL,
  `CourseType` text NOT NULL,
  `CoursePrice` text NOT NULL,
  `Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mycourse`
--

INSERT INTO `mycourse` (`OrderID`, `CourseID`, `LearnerID`, `CourseName`, `CourseType`, `CoursePrice`, `Image`) VALUES
(1, 0, 0, '', '', '', ''),
(3, 1, 17, 'English', 'A12', '5000', 'english.jpg'),
(4, 3, 17, 'Italian', 'A12', '3000', 'french1.jpg'),
(5, 4, 17, 'French', 'A12', '3000', 'french1.jpg'),
(6, 2, 17, 'Arabic', 'A12', '6000', 'arabic11.png'),
(7, 6, 17, 'Christian ', 'A12', '1000', 'christian.jpg'),
(8, 5, 17, 'Islamic', 'A12', '1000', 'islamic.jpg'),
(9, 8, 17, 'statistics ', 'A12', '1500', 'statistics.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `CourseID` int(11) NOT NULL,
  `LearnerID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Comment` text NOT NULL,
  `ChosenRate` int(11) NOT NULL,
  `RateID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`CourseID`, `LearnerID`, `Name`, `Comment`, `ChosenRate`, `RateID`) VALUES
(1, 17, 'Amir', '', 3, 1),
(1, 17, 'Amir', 'Very Good Course', 4, 2),
(3, 17, 'Amir', 'I love this course', 4, 3),
(4, 17, 'Amir', 'Very Good Course', 5, 4),
(4, 17, 'Amir', 'Very Bad', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `requestedcourse`
--

CREATE TABLE `requestedcourse` (
  `CourseID` int(50) NOT NULL,
  `CourseName` varchar(50) NOT NULL,
  `Price` int(50) NOT NULL,
  `CourseType` varchar(50) NOT NULL,
  `TutorName` varchar(50) NOT NULL,
  `Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requestedcourse`
--

INSERT INTO `requestedcourse` (`CourseID`, `CourseName`, `Price`, `CourseType`, `TutorName`, `Image`) VALUES
(1, 'network', 74, 'MS12', 'IbrahimKm26@TUTR.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `tutorregistration`
--

CREATE TABLE `tutorregistration` (
  `Name` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `TutorID` int(11) NOT NULL,
  `CourseName` varchar(50) NOT NULL,
  `CourseID` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutorregistration`
--

INSERT INTO `tutorregistration` (`Name`, `Username`, `Password`, `TutorID`, `CourseName`, `CourseID`) VALUES
('Mohamed Ayman', 'MohamedAy1@TUTR.com', '1234', 1, 'Arabic', '2'),
('Hassan Alturki', 'HassanTk2@TUTR.com', '5823', 2, 'Arabic', '2'),
('Amr Khaled', 'AmrKd3@TUTR.com', '7458', 3, 'English', '1'),
('Naglaa Aly', 'NaglaaAl4@TUTR.com', '7856', 4, 'English', '1'),
('Maha Ahmed ', 'MahaAd5@TUTR.com', '5893', 5, 'Italian', '3'),
('Zain Mahmoud ', 'ZainMd6@TUTR.com', '2147', 6, 'French', '4'),
('Abdallah Walid', 'AbdallahWd7@TUTR.com', '2174', 7, 'Islamic', '5'),
('Emad Botros', 'EmadBs8@TUTR.com', '3258', 8, 'Christian ', '6'),
('Sherif Youns', 'SherifYs9@TUTR.com', '1258', 9, 'Citizenship', '7'),
('Shahen Osama', 'ShahenOa10@TUTR.com', '0178', 10, 'Statistics ', '8'),
('Nabil Ahmed', 'NabilAd11@TUTR.com', '2017', 11, 'Physics', '9'),
('Sameh Ismail', 'SamehIs12@TUTR.com', '3207', 12, 'Physics', '9'),
('Shimaa Aly', 'ShimaaAi13@TUTR.com', '4109', 13, 'Chemistry', '10'),
('Youssef Hassan', 'YoussefHs14@TUTR.com', '9634', 14, 'Chemistry', '10'),
('Walid Emad', 'WalidEd15@TUTR.com', '5283', 15, 'Geology', '11'),
('George Ayman', 'GeorgeAn16@TUTR.com', '8526', 16, 'Geology', '11'),
('Mariam Bassem', 'MariamBs17@TUTR.com', '0492', 17, 'Biology', '12'),
('Karim Samir', 'KarimSr18@TUTR.com', '6148', 18, 'Biology', '12'),
('Zeina Tamer', 'ZeinaTm19@TUTR.com', '6358', 19, 'Dynamics', '13'),
('Omar Hilal', 'OmarHl20@TUTR.com', '6842', 20, 'Dynamics', '13'),
('Kamal Walid', 'KamalWd21@TUTR.com', '4852', 21, 'Statics', '14'),
('Noha Karim', 'NohaKm22@TUTR.com', '7421', 22, 'Calculus', '15'),
('Sameer Aly', 'SameerAi23@TUTR.com', '8529', 23, 'Algebra & Solid Geometry', '16'),
('Bassma Amer', 'BassmaAr24@TUTR.com', '7592', 24, 'Calculus', '15'),
('Hashim Hussien', 'HashimHs25@TUTR.com', '2578', 25, 'History', '17'),
('Ibrahim Karam', 'IbrahimKm26@TUTR.com', '0278', 26, 'History', 'AD12'),
('Seif Nabil ', 'SeifNb27@TUTR.com', '9862', 27, 'Geography', 'AD12'),
('Salah Kandeel', 'SalahKn28@TUTR.com', '7293', 28, 'philosophy', 'AD12'),
('Ahmed Zaky ', 'Ahmedzky29@TUTR.com', '8239', 29, 'philosophy', 'AD12'),
('Hazem Ammar', 'HazemAr30@TUTR.com', '1025', 30, 'Sociology ', 'AD12'),
('Mayar Ashraf', 'MayarAh31@TUTR.com', '9635', 31, 'Sociology', 'AD12'),
('Adham Hassan ', 'AdhamHs32@TUTR.com', '7425', 32, 'Psychology', 'AD12'),
('Momen Naiem', 'MomenNs33@TUTR.com', '3750', 33, 'Psychology', 'AD12'),
('William Amir', 'WilliamAm36@TUTR.com', '8369', 36, 'Geography', 'AD12');

-- --------------------------------------------------------

--
-- Table structure for table `tutorsurvey`
--

CREATE TABLE `tutorsurvey` (
  `CourseName` varchar(100) NOT NULL,
  `TutorName` varchar(50) NOT NULL,
  `CourseContentRate` varchar(50) NOT NULL,
  `CourseExerciseRate` varchar(50) NOT NULL,
  `TeachingSkillsRate` varchar(50) NOT NULL,
  `Comments` text NOT NULL,
  `TotalStudentNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutorsurvey`
--

INSERT INTO `tutorsurvey` (`CourseName`, `TutorName`, `CourseContentRate`, `CourseExerciseRate`, `TeachingSkillsRate`, `Comments`, `TotalStudentNumber`) VALUES
('History', 'Ibrahim Karam', 'Dissatisfied', 'Dissatisfied', 'Neither satisfied or dissatisfied', '', 0),
('Arabic', 'Mohamed Ayman', 'Neither satisfied or dissatisfied', 'Neither satisfied or dissatisfied', 'Dissatisfied', 'hello', 0),
('Psychology', 'Momen Naiem', 'Dissatisfied', 'Neither satisfied or dissatisfied', 'Neither satisfied or dissatisfied', 'hello', 0),
('Calculus', 'Noha Karim', 'Dissatisfied', 'Neither satisfied or dissatisfied', 'Neither satisfied or dissatisfied', 'knvjkf', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminregistration`
--
ALTER TABLE `adminregistration`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `auditorregistration`
--
ALTER TABLE `auditorregistration`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`CourseID`);

--
-- Indexes for table `learnersignup`
--
ALTER TABLE `learnersignup`
  ADD PRIMARY KEY (`Username`),
  ADD UNIQUE KEY `LearnerID` (`LearnerID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`MessageID`);

--
-- Indexes for table `mycart`
--
ALTER TABLE `mycart`
  ADD PRIMARY KEY (`CartID`),
  ADD UNIQUE KEY `CourseID` (`CourseID`,`LearnerID`);

--
-- Indexes for table `mycourse`
--
ALTER TABLE `mycourse`
  ADD PRIMARY KEY (`OrderID`),
  ADD UNIQUE KEY `CourseID` (`CourseID`,`LearnerID`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`RateID`);

--
-- Indexes for table `requestedcourse`
--
ALTER TABLE `requestedcourse`
  ADD PRIMARY KEY (`CourseID`);

--
-- Indexes for table `tutorregistration`
--
ALTER TABLE `tutorregistration`
  ADD PRIMARY KEY (`TutorID`);

--
-- Indexes for table `tutorsurvey`
--
ALTER TABLE `tutorsurvey`
  ADD PRIMARY KEY (`TutorName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminregistration`
--
ALTER TABLE `adminregistration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `auditorregistration`
--
ALTER TABLE `auditorregistration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `CourseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `learnersignup`
--
ALTER TABLE `learnersignup`
  MODIFY `LearnerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `MessageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `mycart`
--
ALTER TABLE `mycart`
  MODIFY `CartID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `mycourse`
--
ALTER TABLE `mycourse`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `RateID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `requestedcourse`
--
ALTER TABLE `requestedcourse`
  MODIFY `CourseID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tutorregistration`
--
ALTER TABLE `tutorregistration`
  MODIFY `TutorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
