-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2015 at 01:28 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `Contact_id` int(11) NOT NULL,
  `Emp_id` int(20) NOT NULL,
  `Address1` text NOT NULL,
  `Address2` text NOT NULL,
  `City` varchar(30) NOT NULL,
  `Province` varchar(30) NOT NULL,
  `Zip_code` text NOT NULL,
  `Country` varchar(30) NOT NULL,
  `Home_tel` int(20) NOT NULL,
  `Mobile` int(20) NOT NULL,
  `Office_tel` int(20) NOT NULL,
  `Office_email` text NOT NULL,
  `Other_email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE IF NOT EXISTS `dept` (
  `Dept_id` int(20) NOT NULL,
  `Dept_name` varchar(30) NOT NULL,
  `Location` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`Dept_id`, `Dept_name`, `Location`) VALUES
(12, 'com sci  ', 'khi'),
(78, 'bba  ', 'alka'),
(376, 'jfhdsjkf  ', 'jflkjfd');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE IF NOT EXISTS `emp` (
  `Emp_id` int(20) NOT NULL,
  `User_id` int(20) NOT NULL,
  `Dept_id` int(20) NOT NULL,
  `Emp_fname` varchar(30) NOT NULL,
  `Emp_Iname` varchar(30) NOT NULL,
  `Salary` int(20) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `Supervisor` varchar(30) NOT NULL,
  `Gender` varchar(30) NOT NULL,
  `Nationality` varchar(30) NOT NULL,
  `Martial_status` varchar(30) NOT NULL,
  `D_O_B` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`Emp_id`, `User_id`, `Dept_id`, `Emp_fname`, `Emp_Iname`, `Salary`, `Status`, `Supervisor`, `Gender`, `Nationality`, `Martial_status`, `D_O_B`) VALUES
(0, 0, 0, ' ', ' ', 32873, 'sdd ', '', ' ', 'jjs  ', '  ', '0000-00-00'),
(111, 21, 12, 'skdjd', 'dkd', 3232, 'Normal', 'kjs', 'on', 'hjh', 'gdfgawf', '2015-12-15'),
(782, 21, 12, 'kkj', 'la', 82, 'Normal', 'jks', 'on', 'js', 'jkzxj', '2015-12-15'),
(876, 21, 12, 'sdf', 'fegrt', 234, 'Supervisor', 'fdsg', 'on', 'fggres', 'gdfgawf', '2015-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `emp_leave`
--

CREATE TABLE IF NOT EXISTS `emp_leave` (
  `Emp_id` int(20) NOT NULL,
  `Emp_name` varchar(20) NOT NULL,
  `S_date` date NOT NULL,
  `E_date` date NOT NULL,
  `Reason` varchar(20) NOT NULL,
  `Request_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_leave`
--

INSERT INTO `emp_leave` (`Emp_id`, `Emp_name`, `S_date`, `E_date`, `Reason`, `Request_status`) VALUES
(32783, 'shoaib saleem', '2015-11-12', '2015-11-03', 'sick', 'Accepted'),
(32756, 'jawad', '2015-11-03', '2015-11-12', 'Sick', 'Rejected'),
(32781, 'Babar', '2015-11-12', '2015-11-13', 'Sick', 'Rejected'),
(32785, 'Jawad', '2015-11-26', '2015-11-29', 'Sick', ''),
(1100, 'anas ', '2015-12-01', '2015-12-03', 'not well ', 'Rejected'),
(1222, 'shoaib', '2015-12-01', '2015-12-16', 'sick', 'Accepted'),
(1222, 'shoaib', '2015-12-01', '2015-12-16', 'sick', 'Accepted'),
(1, 'Raza', '2015-12-09', '2015-12-18', 'sick', ''),
(23, 'anas 3', '2015-12-11', '2015-12-12', 'sick ', 'Accepted'),
(0, '', '2015-12-17', '2015-12-30', 'sick', ''),
(876, 'anas xxx', '2015-12-15', '2015-12-18', 'fever ', 'Rejected');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE IF NOT EXISTS `job` (
  `Job_id` int(20) NOT NULL,
  `Emp_id` int(20) NOT NULL,
  `Job_title` varchar(30) NOT NULL,
  `Job_status` varchar(30) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `Joined_date` date NOT NULL,
  `Sub_unit` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mark_attendance`
--

CREATE TABLE IF NOT EXISTS `mark_attendance` (
  `Emp_id` int(11) NOT NULL,
  `Emp_name` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(6) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mark_attendance`
--

INSERT INTO `mark_attendance` (`Emp_id`, `Emp_name`, `Date`, `Time`, `Status`) VALUES
(0, '', '0000-00-00', '00:00:00.000000', ''),
(0, '', '0000-00-00', '00:00:00.000000', ''),
(0, '', '0000-00-00', '00:00:00.000000', ''),
(0, '', '0000-00-00', '00:00:00.000000', ''),
(111, 'kkj la', '2015-12-03', '02:02:00.000000', 'Present'),
(782, 'kkj la', '2015-12-02', '23:00:00.000000', 'Present'),
(876, 'anas xxx', '2015-12-14', '12:04:00.000000', 'Absent');

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE IF NOT EXISTS `qualification` (
  `Q_id` int(20) NOT NULL,
  `Emp_id` int(20) NOT NULL,
  `Work_experience` text NOT NULL,
  `Eduation_level` text NOT NULL,
  `Skills` text NOT NULL,
  `Languages` varchar(30) NOT NULL,
  `Attachments(CV)` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `User_id` int(20) NOT NULL,
  `User_name` text NOT NULL,
  `Password` text NOT NULL,
  `User_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_id`, `User_name`, `Password`, `User_type`) VALUES
(0, '$user_name ', '$pasword  ', '$user_type'),
(1, 'admin', 'e2fc714c4727ee9395f324cd2e7f331f', 'admin'),
(2, 'employee1', 'e2fc714c4727ee9395f324cd2e7f331f', 'role'),
(3, 'Emp2', 'd16fb36f0911f878998c136191af705e', 'role'),
(5, 'raja ', '1212  ', ''),
(21, 'shahid ', '23457  ', ''),
(81, 'jkaj ', '9812  ', 'Supervisor'),
(87, 'hanif ', '121212  ', ''),
(99, 'nida ', '891  ', 'Normal'),
(123, 'raja ', '566  ', ''),
(213, 'kc ', '324  ', 'Supervisor'),
(232, 'ddsf ', '322  ', ''),
(233, 'rajanademm ', '2313  ', 'Supervisor'),
(321, 'hamid ', '221  ', ''),
(333, 'fdfds ', '4342  ', ''),
(422, 'malik ', '77722  ', 'Supervisor'),
(555, 'mahira ', '777  ', 'Supervisor'),
(611, 'hah ', '1821  ', 'Supervisor'),
(637, 'hdjkd ', '67832  ', ''),
(665, 'kajdh ', '32425  ', ''),
(901, 'naheed ', '566  ', 'Supervisor'),
(1010, 'ali ', '1010  ', ''),
(1112, 'malik ', '1231  ', ''),
(1234, 'jasim ', '1287  ', ''),
(2111, 'fajiaaa ', '3233  ', ''),
(2311, 'sajid ', '7882  ', 'Supervisor'),
(2331, 'sajid ', '678  ', 'Normal'),
(2333, 'ksms ', '5272  ', ''),
(2929, 'hdwbd ', '391  ', ''),
(3232, 'ajksa ', '83223  ', ''),
(3728, 'hhskj ', '6372  ', ''),
(3782, 'usdjdsk ', '921901  ', ''),
(3933, 'wajiha ', '1221  ', ''),
(4738, 'ffjgbh ', '345345  ', ''),
(9876, 'hashhas ', '77281  ', ''),
(22111, 'klsa ', '211  ', ''),
(27348, 'jhfjgh ', '676  ', ''),
(29128, 'dsjkdk ', '12334  ', ''),
(33221, 'jslsdksk ', '932  ', ''),
(82891, 'sklksal ', '892  ', 'Supervisor'),
(121223, 'jkalks ', '231  ', ''),
(271881, 'maklik ', '782879  ', ''),
(783783, 'njslsmk ', '7292  ', ''),
(3222222, 'jdsk ', '3322  ', 'Admin'),
(22222222, 'makaka ', '232  ', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Contact_id`), ADD KEY `Emp_id` (`Emp_id`), ADD KEY `Emp_id_2` (`Emp_id`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`Dept_id`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`Emp_id`), ADD KEY `User_id` (`User_id`);

--
-- Indexes for table `emp_leave`
--
ALTER TABLE `emp_leave`
  ADD KEY `Emp_id` (`Emp_id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`Job_id`), ADD KEY `Emp_id` (`Emp_id`);

--
-- Indexes for table `mark_attendance`
--
ALTER TABLE `mark_attendance`
  ADD KEY `Emp_id` (`Emp_id`), ADD KEY `Emp_id_2` (`Emp_id`);

--
-- Indexes for table `qualification`
--
ALTER TABLE `qualification`
  ADD PRIMARY KEY (`Q_id`), ADD KEY `Emp_id` (`Emp_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`Emp_id`) REFERENCES `emp` (`Emp_id`);

--
-- Constraints for table `emp`
--
ALTER TABLE `emp`
ADD CONSTRAINT `emp_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`);

--
-- Constraints for table `job`
--
ALTER TABLE `job`
ADD CONSTRAINT `job_ibfk_1` FOREIGN KEY (`Emp_id`) REFERENCES `emp` (`Emp_id`);

--
-- Constraints for table `mark_attendance`
--
ALTER TABLE `mark_attendance`
ADD CONSTRAINT `mark_attendance_ibfk_1` FOREIGN KEY (`Emp_id`) REFERENCES `emp` (`Emp_id`);

--
-- Constraints for table `qualification`
--
ALTER TABLE `qualification`
ADD CONSTRAINT `qualification_ibfk_1` FOREIGN KEY (`Emp_id`) REFERENCES `emp` (`Emp_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
