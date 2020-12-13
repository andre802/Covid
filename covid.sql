-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 12:44 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commentID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL DEFAULT 'Guest',
  `userID` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `content` text NOT NULL,
  `likes` int(11) NOT NULL DEFAULT 0,
  `dislikes` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentID`, `username`, `userID`, `time`, `content`, `likes`, `dislikes`) VALUES
(4, 'Justin Reeves', 1, '2020-11-24 08:05:10', 'Hello', 1, 0),
(5, 'Justin Reeves', 1, '2020-11-24 08:07:51', 'I started a new book today', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `profileID` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(255) DEFAULT 'none',
  `zipcode` int(11) DEFAULT NULL,
  `race` varchar(255) DEFAULT NULL,
  `loggedIn` enum('True','False') NOT NULL DEFAULT 'False'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`profileID`, `firstName`, `lastName`, `email`, `password`, `age`, `gender`, `zipcode`, `race`, `loggedIn`) VALUES
(1, 'Justin', 'Reeves', 'justinreeves52@gmail.com', 'ILoveDogs!1', 21, 'male', 30328, 'black', 'True'),
(2, 'Joe', 'Smith', 'joesmith@yahoo.com', 'JimmysShoe4$', 58, 'male', 30350, 'white', 'False'),
(7, 'Reggit', 'Larp', 'reggiel@outlook.com', '123!LOOKATMEe', 68, 'male', 0, 'white', 'False'),
(8, 'Billy', 'Bob', 'billybob@yahoo.com', 'BillyBobsPass1#', 54, 'male', 44121, 'white', 'False');

-- --------------------------------------------------------

--
-- Table structure for table `symptoms`
--

CREATE TABLE `symptoms` (
  `cough` enum('True','False') DEFAULT NULL,
  `nausea` enum('True','False') DEFAULT NULL,
  `fever` enum('True','False') DEFAULT NULL,
  `soreThroat` enum('True','False') DEFAULT NULL,
  `smell` enum('True','False') DEFAULT NULL,
  `diarrhea` enum('True','False') DEFAULT NULL,
  `headache` enum('True','False') DEFAULT NULL,
  `fatigue` enum('True','False') DEFAULT NULL,
  `congestion` enum('True','False') DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `dateOfCheck` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `symptoms`
--

INSERT INTO `symptoms` (`cough`, `nausea`, `fever`, `soreThroat`, `smell`, `diarrhea`, `headache`, `fatigue`, `congestion`, `email`, `dateOfCheck`) VALUES
('True', 'True', 'True', 'True', NULL, NULL, 'True', 'True', NULL, NULL, NULL),
('True', 'True', 'True', 'True', NULL, NULL, 'True', 'True', NULL, 'justinreeves52@gmail.com', '2020-11-23 20:42:02'),
('True', 'True', 'True', 'True', NULL, NULL, 'True', 'True', NULL, 'reggiel@outlook.com', '2020-11-23 23:51:48'),
('True', 'True', 'True', 'True', NULL, NULL, 'True', 'True', NULL, 'reggiel@outlook.com', '2020-11-23 23:52:30'),
('True', 'True', 'True', 'True', NULL, NULL, NULL, 'True', NULL, 'reggiel@outlook.com', '2020-11-23 23:52:45'),
('True', 'True', 'True', 'True', NULL, NULL, NULL, NULL, NULL, 'justinreeves52@gmail.com', '2020-11-24 01:44:20'),
('True', 'True', 'True', 'True', NULL, NULL, NULL, NULL, NULL, 'justinreeves52@gmail.com', '2020-11-24 03:13:03'),
('True', 'True', 'True', NULL, NULL, NULL, NULL, NULL, NULL, 'justinreeves52@gmail.com', '2020-11-24 14:08:03'),
(NULL, 'True', 'True', NULL, NULL, NULL, NULL, NULL, NULL, 'justinreeves52@gmail.com', '2020-11-24 15:02:27');

-- --------------------------------------------------------

--
-- Table structure for table `united_states_covid19_cases_and_deaths_by_state__1_`
--

CREATE TABLE `united_states_covid19_cases_and_deaths_by_state__1_` (
  `State/Territory` varchar(30) DEFAULT NULL,
  `Total Cases` int(8) DEFAULT NULL,
  `Confirmed Cases` varchar(7) DEFAULT NULL,
  `Probable Cases` varchar(6) DEFAULT NULL,
  `Cases in Last 7 Days` int(7) DEFAULT NULL,
  `Case Rate per 100000` int(4) DEFAULT NULL,
  `Total Deaths` int(6) DEFAULT NULL,
  `Confirmed Deaths` varchar(6) DEFAULT NULL,
  `Probable Deaths` varchar(5) DEFAULT NULL,
  `Deaths in Last 7 Days` int(5) DEFAULT NULL,
  `Death Rate per 100000` int(3) DEFAULT NULL,
  `Case Rate per 100000 in Last 7 Days` decimal(4,1) DEFAULT NULL,
  `Death Rate per 100K in Last 7 Days` decimal(2,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `united_states_covid19_cases_and_deaths_by_state__1_`
--

INSERT INTO `united_states_covid19_cases_and_deaths_by_state__1_` (`State/Territory`, `Total Cases`, `Confirmed Cases`, `Probable Cases`, `Cases in Last 7 Days`, `Case Rate per 100000`, `Total Deaths`, `Confirmed Deaths`, `Probable Deaths`, `Deaths in Last 7 Days`, `Death Rate per 100000`, `Case Rate per 100000 in Last 7 Days`, `Death Rate per 100K in Last 7 Days`) VALUES
('Alaska', 26587, 'null', 'null', 3925, 3605, 102, 'null', 'null', 4, 13, '76.0', '0.1'),
('Alabama', 232506, '194585', '37921', 14684, 4757, 3457, '3153', '304', 209, 70, '42.9', '0.6'),
('Arkansas', 145173, 'null', 'null', 12133, 4817, 2357, 'null', 'null', 174, 78, '57.5', '0.8'),
('American Samoa', 3, 'null', 'null', 0, 5, 0, 'null', 'null', 0, 0, '0.0', '0.0'),
('Arizona', 299665, '291043', '8622', 24229, 4178, 6464, '5992', '472', 162, 90, '48.3', '0.3'),
('California', 1102033, 'null', 'null', 82688, 2786, 18676, 'null', 'null', 423, 47, '29.9', '0.2'),
('Colorado', 198600, '189285', '9315', 35183, 3487, 2806, '2343', '463', 260, 49, '88.3', '0.7'),
('Connecticut', 101469, '94426', '7043', 12824, 2840, 4828, '3878', '950', 91, 135, '51.3', '0.4'),
('District of Columbia', 20151, 'null', 'null', 1174, 2869, 670, 'null', 'null', 10, 95, '23.9', '0.2'),
('Delaware', 31808, '30492', '1316', 3005, 3289, 748, '657', '91', 12, 77, '44.4', '0.2'),
('Florida', 924614, 'null', 'null', 51804, 4341, 17991, 'null', 'null', 473, 84, '34.8', '0.3'),
('Federated States of Micronesia', 0, '0', '0', 0, 0, 0, 'null', 'null', 0, 0, '0.0', '0.0'),
('Georgia', 449132, '404411', '44721', 24143, 4270, 9198, '8627', '571', 241, 87, '32.8', '0.3'),
('Guam', 6452, 'null', 'null', 528, 3892, 103, 'null', 'null', 11, 62, '45.5', '1.0'),
('Hawaii', 17039, 'null', 'null', 660, 1200, 231, 'null', 'null', 10, 16, '6.6', '0.1'),
('Iowa', 210514, 'null', 'null', 25358, 6670, 2192, 'null', 'null', 207, 69, '114.8', '0.9'),
('Idaho', 91653, '78163', '13490', 9408, 5225, 850, '783', '67', 91, 48, '76.6', '0.7'),
('Illinois', 656298, '656298', '0', 82682, 5151, 12051, '11506', '545', 889, 94, '92.7', '1.0'),
('Indiana', 295357, 'null', 'null', 43760, 4414, 5305, '5040', '265', 395, 79, '93.4', '0.8'),
('Kansas', 134533, '118400', '16133', 19026, 4621, 1410, 'null', 'null', 151, 48, '93.4', '0.7'),
('Kentucky', 158100, '130899', '27201', 20514, 3538, 1787, '1742', '45', 126, 39, '65.6', '0.4'),
('Louisiana', 220192, 'null', 'null', 15679, 4725, 6260, '6015', '245', 128, 134, '48.1', '0.4'),
('Massachusetts', 209946, '200050', '9896', 17506, 3042, 10489, '10281', '208', 183, 151, '36.2', '0.4'),
('Maryland', 183797, 'null', 'null', 16141, 3042, 4448, '4293', '155', 139, 73, '38.2', '0.3'),
('Maine', 10544, '9471', '1073', 1427, 788, 177, 'null', 'null', 12, 13, '15.2', '0.1'),
('Michigan', 329021, '302705', '26316', 53229, 3294, 8875, '8478', '397', 499, 88, '76.1', '0.7'),
('Minnesota', 270157, 'null', 'null', 46576, 4815, 3297, '3181', '116', 336, 58, '118.6', '0.9'),
('Missouri', 271527, 'null', 'null', 32076, 4432, 3559, 'null', 'null', 185, 58, '74.8', '0.4'),
('Northern Mariana Islands', 104, '104', '0', 2, 0, 2, '2', '0', 0, 3, '0.5', '0.0'),
('Mississippi', 143879, '117670', '26209', 8981, 4818, 3676, '3233', '443', 131, 123, '43.0', '0.6'),
('Montana', 55680, '55680', '0', 8522, 5241, 603, '603', '0', 83, 56, '114.6', '1.1'),
('North Carolina', 336775, '318763', '18012', 24540, 3243, 5034, '4907', '127', 228, 48, '33.8', '0.3'),
('North Dakota', 73397, 'null', 'null', 8512, 9656, 846, 'null', 'null', 103, 111, '160.0', '1.9'),
('Nebraska', 114061, 'null', 'null', 15900, 5912, 909, 'null', 'null', 130, 47, '117.7', '1.0'),
('New Hampshire', 17598, 'null', 'null', 2927, 1297, 512, 'null', 'null', 13, 37, '30.8', '0.1'),
('New Jersey', 306007, 'null', 'null', 26733, 3435, 16761, '14949', '1812', 195, 188, '42.9', '0.3'),
('New Mexico', 81896, 'null', 'null', 17695, 3908, 1383, 'null', 'null', 168, 66, '120.6', '1.2'),
('Nevada', 133888, 'null', 'null', 13705, 4412, 2017, 'null', 'null', 108, 66, '64.5', '0.5'),
('New York', 301449, 'null', 'null', 23305, 2705, 9679, 'null', 'null', 182, 86, '29.9', '0.2'),
('New York City', 302143, '280884', '21259', 16650, 3598, 24218, '19544', '4674', 82, 288, '28.3', '0.1'),
('Ohio', 351419, '333020', '18399', 53323, 3006, 5996, '5612', '384', 274, 51, '65.2', '0.3'),
('Oklahoma', 186136, '156527', '29609', 23763, 4721, 1651, '1590', '61', 116, 41, '86.1', '0.4'),
('Oregon', 65170, '63450', '1720', 8290, 1555, 820, '805', '15', 59, 19, '28.3', '0.2'),
('Pennsylvania', 309639, '288938', '20701', 44502, 2418, 9842, 'null', 'null', 530, 76, '49.6', '0.6'),
('Puerto Rico', 48200, '46923', '1277', 5184, 1508, 1032, '812', '220', 90, 32, '23.2', '0.4'),
('Palau', 0, 'null', 'null', 0, 0, 0, 'null', 'null', 0, 0, '0.0', '0.0'),
('Rhode Island', 48001, 'null', 'null', 6472, 4540, 1294, 'null', 'null', 40, 122, '87.5', '0.5'),
('Republic of Marshall Islands', 4, '1', '3', 3, 7, 0, 'null', 'null', 0, 0, '0.7', '0.0'),
('South Carolina', 206295, '193787', '12508', 10788, 4058, 4283, '3982', '301', 171, 84, '30.3', '0.5'),
('South Dakota', 73065, 'null', 'null', 7684, 8282, 819, '714', '105', 175, 92, '124.4', '2.8'),
('Tennessee', 340476, '314854', '25622', 29539, 5029, 4266, '3929', '337', 373, 63, '62.3', '0.8'),
('Texas', 1094275, 'null', 'null', 73554, 3813, 20556, 'null', 'null', 997, 71, '36.6', '0.5'),
('Utah', 177176, '177176', '0', 23368, 5605, 793, '776', '17', 75, 25, '105.6', '0.3'),
('Virginia', 221039, '198143', '22896', 16401, 2595, 3942, '3629', '313', 137, 46, '27.5', '0.2'),
('Virgin Islands', 1504, 'null', 'null', 70, 1437, 23, 'null', 'null', 0, 21, '9.6', '0.0'),
('Vermont', 3629, 'null', 'null', 740, 579, 63, 'null', 'null', 4, 10, '16.9', '0.1'),
('Washington', 141260, 'null', 'null', 11220, 1875, 2619, 'null', 'null', 100, 34, '21.3', '0.2'),
('Wisconsin', 376238, '354676', '21562', 46314, 6472, 3150, '3005', '145', 399, 54, '113.8', '1.0'),
('West Virginia', 40478, '35292', '5186', 6799, 2242, 662, 'null', 'null', 80, 36, '53.8', '0.6'),
('Wyoming', 28169, '24309', '3860', 5675, 4876, 176, '176', '0', 32, 30, '140.3', '0.8'),
('United States of America', 12175921, '5660425', '431870', 1191520, 3722, 255958, '144237', '13848', 10496, 78, '52.0', '0.5');

-- --------------------------------------------------------

--
-- Table structure for table `usercommentrating`
--

CREATE TABLE `usercommentrating` (
  `ratingID` int(11) NOT NULL,
  `commentID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `liked` int(11) NOT NULL DEFAULT 0,
  `disliked` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usercommentrating`
--

INSERT INTO `usercommentrating` (`ratingID`, `commentID`, `userID`, `liked`, `disliked`) VALUES
(1, 3, 1, 1, 0),
(2, 4, 2, 1, 0),
(3, 5, 1, 0, 0),
(4, 8, 1, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentID`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`profileID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `usercommentrating`
--
ALTER TABLE `usercommentrating`
  ADD PRIMARY KEY (`ratingID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `profileID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `usercommentrating`
--
ALTER TABLE `usercommentrating`
  MODIFY `ratingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
