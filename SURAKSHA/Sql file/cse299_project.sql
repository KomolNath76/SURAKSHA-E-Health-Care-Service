-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2022 at 06:17 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cse299 project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_id`
--

CREATE TABLE `admin_id` (
  `ID` int(100) NOT NULL,
  `Password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_id`
--

INSERT INTO `admin_id` (`ID`, `Password`) VALUES
(14588, '589jk7w'),
(16878, '579jh9y'),
(25798, '857kg7t'),
(54789, '578kp9u'),
(70586, '980tp7u');

-- --------------------------------------------------------

--
-- Table structure for table `admin_registration`
--

CREATE TABLE `admin_registration` (
  `Email_Address` varchar(100) NOT NULL,
  `Full_Name` varchar(100) DEFAULT NULL,
  `Contact` varchar(100) DEFAULT NULL,
  `Age` int(100) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Blood_Group` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_registration`
--

INSERT INTO `admin_registration` (`Email_Address`, `Full_Name`, `Contact`, `Age`, `Address`, `Blood_Group`) VALUES
('Mritunjoy225@gmail.com', 'Mritunjoy Chakrabarty', '01745879588', 23, 'A block, 8 no road, Bashundhara, Dhaka', 'A+'),
('shuvonath910@gmail.com', 'Shuvo', '01888888889', 25, 'D block, 6 no road, Bashundhara, Dhaka', 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `blooddonorlist`
--

CREATE TABLE `blooddonorlist` (
  `ID` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Age` int(100) NOT NULL,
  `Blood_Group` varchar(100) NOT NULL,
  `Contact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blooddonorlist`
--

INSERT INTO `blooddonorlist` (`ID`, `Name`, `Age`, `Blood_Group`, `Contact`) VALUES
(201, 'Fahim Islam', 26, 'A+', '01857964850'),
(202, 'Fahim Chowdhury', 22, 'A+', '01857964852'),
(203, 'Fahimul Islam', 21, 'B+', '01857964854'),
(204, 'Setu Das', 34, 'A+', '01857964856'),
(205, 'Kotha Sen', 26, 'A-', '01857964858'),
(206, 'Pushpita Das', 27, 'A-', '01857964860'),
(207, 'Taufiq Islam', 36, 'A-', '01857964862'),
(208, 'Annay Sen', 32, 'B+', '01857964864'),
(209, 'Piyash Islam', 25, 'B+', '01857964866'),
(210, 'Kamal Islam', 23, 'B+', '01857964868'),
(211, 'Nahian Khan', 27, 'AB+', '01857964870'),
(212, 'Oishorjo Chowdhury', 29, 'AB+', '01857964872'),
(213, 'Tusher Islam', 31, 'AB+', '01857964874'),
(214, 'Shahriar Islam', 33, 'AB-', '01857964876'),
(215, 'Fahim Khan', 35, 'AB-', '01857964878'),
(216, 'Tusher Khan', 25, 'AB-', '01857964880'),
(217, 'Piyash Das', 26, 'B-', '01857964884'),
(218, 'Sakib Islam', 26, 'B-', '01857964886'),
(219, 'Tarek Chowdhury', 20, 'B-', '01857964888'),
(220, 'Jabed Islam', 22, 'A-', '01857964890'),
(221, 'Tarek Islam', 24, 'A+', '01857964892'),
(222, 'Taijul Islam', 26, 'O+', '01857964894'),
(223, 'Musfiq Islam', 28, 'O+', '01857964896'),
(224, 'Farzana Chowdhury', 30, 'O+', '01857964898'),
(225, 'Payel Das', 21, 'O-', '01857964100'),
(226, 'Puja Das', 21, 'O-', '01857964102'),
(227, 'Taskin Islam', 23, 'O+', '01857964785'),
(228, 'Shanto Islam', 26, 'O-', '01857964106'),
(229, 'Sakib Chowdhury', 27, 'AB+', '01857964108'),
(230, 'Apurba Chowdhury', 28, 'A+', '01857964110'),
(231, 'Monisha Sen', 29, 'A-', '01857964112'),
(232, 'Efty Islam', 31, 'B+', '01857964114'),
(233, 'Neha Chowdhury', 20, 'O-', '01857964116');

-- --------------------------------------------------------

--
-- Table structure for table `doctorlist`
--

CREATE TABLE `doctorlist` (
  `ID` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `Contact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctorlist`
--

INSERT INTO `doctorlist` (`ID`, `Name`, `Department`, `Contact`) VALUES
(111, 'Dr. Mritunjoy Chakrabarty', 'Neurologist', '01784597852'),
(112, 'Dr. Newaz Mohammad Nahian Khan', 'Neurologist', '01784597854'),
(113, 'Dr. Komol Nath', 'Neurologist', '01784597860'),
(114, 'Dr. Kamal Hossain', 'Allergist', '01784597858'),
(115, 'Dr. Alamgir Haque', 'Allergist', '01784597860'),
(116, 'Dr. Faysal Hossain ', 'Allergist', '01784597862'),
(117, 'Dr. Rahima Chowdhury ', ' Gayani', '01784597864'),
(118, 'Dr. Fatema Chowdhury ', ' Gayani ', '01784597866'),
(119, 'Dr. Tasmia Chowdhury ', ' Gayani ', '01784597868'),
(120, 'Dr. Monisha Chowdhury', ' Gayani ', '01784597870'),
(121, 'Dr. Pavel Haque ', 'Endocrinologist ', '01784597872'),
(122, 'Dr. Mahir Hossain', 'Endocrinologist', '01784597874'),
(123, 'Dr. Fatema Chowdhury', 'Gastroenterologist ', '01784597876'),
(124, 'Dr. Pavel Haque', ' Gastroenterologist ', '01784597878'),
(125, 'Dr. Mahir Hossain', 'Gastroenterologist', '01784597880'),
(126, 'Dr. Taufiq Hossain', 'Cardiologist', '01784597882'),
(127, 'Dr. Sadman Hauqe', 'Cardiologist ', '01784597884'),
(128, 'Dr. Hasib Hossain', 'Cardiologist ', '01784597886'),
(129, 'Dr. Sihab Hossain', 'Cardiologist ', '01784597888'),
(130, 'Dr. Keya Islam', 'Cardiologist ', '01784597890'),
(131, 'Dr. Mahir Hossain', ' Dentist ', '01784597892'),
(132, 'Dr. Oishorjo Chowdhury', 'Dentist ', '01784597894'),
(133, 'Dr. Ritu Chowdhury', ' Dentist ', '01784597896'),
(134, 'Dr. Rehana Hossain', ' Dentist ', '01784597898'),
(135, 'Dr.Asif Iqbal', ' Dentist ', '01784597900'),
(136, 'Dr. Nusrat Chowdhury', 'Dentist ', '01784597985'),
(137, 'Dr. Nusrat Chowdhury', ' chiropractor ', '01784597902'),
(138, 'Dr. Fahim Iqbal', ' chiropractor ', '01784597904'),
(139, 'Dr. Fahim Hossain', 'chiropractor ', '01784597906'),
(140, 'Dr. Piyash Chowdhury', ' chiropractor ', '01784597908'),
(141, 'Dr. Setu Das', ' chiropractor ', '01784597910');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_appointment`
--

CREATE TABLE `doctor_appointment` (
  `serial` int(11) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `doctor_name` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `medicinelist`
--

CREATE TABLE `medicinelist` (
  `ID` int(250) NOT NULL,
  `Product_Name` varchar(250) DEFAULT NULL,
  `Power` varchar(250) NOT NULL,
  `Price` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicinelist`
--

INSERT INTO `medicinelist` (`ID`, `Product_Name`, `Power`, `Price`) VALUES
(101, 'Napa Tablet', '500 mg', 8),
(102, 'Napa Extend', '665 mg', 15),
(103, 'Napa Syrup', '120 mg', 20),
(104, 'Napa Extra', '565 mg', 30),
(105, 'Sergel', '20 mg', 70),
(106, 'Sergel 40', '40 mg', 100),
(107, 'Seclo', '20 mg', 60),
(108, 'Hexisol', '250 ml', 126),
(109, 'Hexisol', '50 ml', 40),
(110, 'Alatrol', '10 mg', 30),
(111, 'Omidon', '10 mg', 30),
(112, 'Fenadin 60', '60 mg', 40),
(113, 'Febustat 80', '80 mg', 200),
(114, 'Monas 10', '10 mg', 145),
(115, 'Fenadin 120', '120 mg', 85),
(116, 'Ace', '500 mg', 10),
(117, 'Ace Plus', '500 mg', 25),
(118, 'Ace XR', '665 mg', 15),
(119, 'Ace Syrup', '120 mg', 20),
(120, 'Tab Ceevit', '250 mg', 100),
(121, 'Tab Maxpro', '20 mg', 98),
(122, 'Osartil', '50 mg', 80),
(123, 'E Cap', '200 mg', 45),
(124, 'E Cap', '400 mg', 65),
(125, 'Montair 10', '10 mg', 160),
(126, 'Ometid', '20 mg', 50),
(127, 'Tufnil', '200mg', 95),
(128, 'Finix 20', '20 mg', 135),
(129, 'Cosec', '20 mg', 45),
(130, 'Monas 5', '5 mg', 80),
(131, 'Esotid', '20 mg', 70),
(132, 'Tab Vasco', '250 mg', 100),
(133, 'Tab Nexum', '10 mg', 100),
(134, 'Rocal D', '600 mg', 80),
(135, 'Renova XR', '665 mg', 30),
(136, 'Paricel', '20 mg', 60),
(137, 'Fexo', '120 mg', 80),
(138, 'Calbo D', '500 mg', 210),
(139, 'Losectil', '20 mg', 60),
(140, 'Xeldrin', '20 mg', 50),
(141, 'Rolac', '10 mg', 168),
(142, 'Algin', '50 mg', 80),
(143, 'Acifix', '20 mg', 70),
(144, 'Avolac Syrup', '3 mg', 140),
(145, 'Xinc', '100 ml', 35),
(146, 'Ambrox Syrup', '15 mg', 50),
(147, 'Fexo Syrup', '30 mg', 48),
(148, 'Fenadin Syrup', '30 mg', 48),
(149, 'Tofen', '1 mg', 65),
(150, 'Tab Pantonix', '40 mg', 112),
(151, 'Tab Pantonix', '20 mg', 85),
(152, 'Tab Xinc', '20 mg', 28),
(153, 'Max Pro', '20 mg', 20);

-- --------------------------------------------------------

--
-- Table structure for table `userorder`
--

CREATE TABLE `userorder` (
  `id` int(250) NOT NULL,
  `useremail` varchar(250) DEFAULT NULL,
  `username` varchar(250) DEFAULT NULL,
  `useraddress` varchar(250) DEFAULT NULL,
  `usercontact` varchar(250) DEFAULT NULL,
  `product_name` varchar(250) DEFAULT NULL,
  `quantity` int(250) DEFAULT NULL,
  `power` varchar(250) DEFAULT NULL,
  `price` int(250) DEFAULT NULL,
  `total` int(250) DEFAULT NULL,
  `status` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userorder`
--

INSERT INTO `userorder` (`id`, `useremail`, `username`, `useraddress`, `usercontact`, `product_name`, `quantity`, `power`, `price`, `total`, `status`) VALUES
(1, 'Mritunjoy@gmail.com', 'Mritunjoy', 'Khulna', '01789548521', 'Ace', 1, '500 mg', 10, 10, 'Delivered'),
(2, 'Mritunjoy@gmail.com', 'Mritunjoy', 'Khulna', '01789548521', 'Ace Plus', 1, '500 mg', 25, 25, 'Delivered'),
(3, 'Mritunjoy@gmail.com', 'Mritunjoy', 'Khulna', '01789548521', 'Ace Syrup', 100, '120 mg', 20, 2000, 'done');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `Email_Address` varchar(100) NOT NULL,
  `Full_Name` varchar(100) DEFAULT NULL,
  `Contact` varchar(100) DEFAULT NULL,
  `Age` int(100) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Blood_Group` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`Email_Address`, `Full_Name`, `Contact`, `Age`, `Address`, `Blood_Group`, `Password`) VALUES
('Mritunjoy@gmail.com', 'Mritunjoy Chakrabarty', '01875898475', 23, '10 no road, 6 no sector, Uttara', 'O+', '9898'),
('Shuvo@gmail.com', 'Shuvo Nath', '01828514120', 23, 'D block, 6 no road, Bashundhara', 'A+', '7878');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_id`
--
ALTER TABLE `admin_id`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `admin_registration`
--
ALTER TABLE `admin_registration`
  ADD PRIMARY KEY (`Email_Address`);

--
-- Indexes for table `blooddonorlist`
--
ALTER TABLE `blooddonorlist`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `doctorlist`
--
ALTER TABLE `doctorlist`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `doctor_appointment`
--
ALTER TABLE `doctor_appointment`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `medicinelist`
--
ALTER TABLE `medicinelist`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `userorder`
--
ALTER TABLE `userorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`Email_Address`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor_appointment`
--
ALTER TABLE `doctor_appointment`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `userorder`
--
ALTER TABLE `userorder`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
