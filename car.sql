-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 11, 2019 at 04:48 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id11445103_car`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`id11445103_mohith`@`%` PROCEDURE `getcar` ()  select * from new_cars$$

CREATE DEFINER=`id11445103_mohith`@`%` PROCEDURE `getcustmer` ()  select * from customer$$

CREATE DEFINER=`id11445103_mohith`@`%` PROCEDURE `getemp` ()  select * from employee e , emp_pro ep where ep.e_id=e.e_id$$

CREATE DEFINER=`id11445103_mohith`@`%` PROCEDURE `getmanager` ()  NO SQL
select * from manager m , manager_pro mp where mp.m_id = m.manager_id$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admini_d` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` int(11) NOT NULL,
  `c_id` varchar(20) NOT NULL,
  `datetime` datetime NOT NULL,
  `email` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admini_d`, `username`, `password`, `c_id`, `datetime`, `email`) VALUES
(11, 'mohith', 12345, '123', '2019-10-05 21:54:21', 'mohithamma03@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `carshowroom`
--

CREATE TABLE `carshowroom` (
  `name` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `cid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carshowroom`
--

INSERT INTO `carshowroom` (`name`, `location`, `cid`) VALUES
('adya showroom', 'banglore', '123'),
('aditya showroom', 'banglore', '345'),
('varun showroom', 'banglore', '456'),
('mahima showroom', 'banglore', '567'),
('kathi showroom', 'banglore', '789');

-- --------------------------------------------------------

--
-- Table structure for table `clocation`
--

CREATE TABLE `clocation` (
  `cid` varchar(20) NOT NULL,
  `location` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(20) NOT NULL,
  `fname` varchar(220) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `addr` varchar(40) NOT NULL,
  `cid` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `feedback` text DEFAULT NULL,
  `cost` int(11) DEFAULT NULL,
  `dob` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `fname`, `lname`, `addr`, `cid`, `email`, `feedback`, `cost`, `dob`) VALUES
(100, 'rahul', 'sharma', 'banglore', '123', 'mohithshivu03@gmail.com', 'nice !!!', 8776973, '2013-06-04'),
(101, 'karthik', 'gupa', 'nelmagala', '123', 'xyz@gmail.com', 'nice good experience!!!', 986750, '2000-07-13'),
(102, 'karthik', 'hulla', 'gulbarga', '123', 'mno@gmail.com', 'some workers are not treat properly!!!', 956750, '1998-06-23'),
(104, 'shivu', 'kanth', 'banglore', '123', 'rst@gmail.com', 'good well showroom nice experience!!!', 886750, '1978-04-04'),
(105, 'gupta', 'raj', 'banglore', '123', 'm@gmail', 'not bad!!!', 988609, '1992-09-10'),
(106, 'lakshmi', 'prasad', 'manglore', '123', '78h@gmail.com', 'nice workers!!', 788982, '1995-10-04'),
(107, 'lakshmi', 'prasad', 'manglore', '123', '78h@gmail.com', 'Not yet given the feed back', 788982, '1995-10-04'),
(109, 'dhilip', 'guptha', 'bangolore', '123', 'm@gmail.com', 'Not yet given the feed back', 987832, '1983-08-11');

-- --------------------------------------------------------

--
-- Table structure for table `customer_entry`
--

CREATE TABLE `customer_entry` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_entry`
--

INSERT INTO `customer_entry` (`fname`, `lname`, `email`) VALUES
('bhavana', 'a', 'bhavana.anaidu@gmil.com'),
('varsha', 'simha', 'drfy@gmail.com'),
('kamal', 'odkd', 'e@gmail.com'),
('mohit', 'na', 'f@gmail.com'),
('f', 'f', 'j@gmail.com'),
('janvi', 'raj', 'janvi@gmail.com'),
('kavya', 'm k', 'kavya@gmail.com'),
('nagaraju', 'kemapia', 'knagaraju@gmail.com'),
('l', 'k', 'lkk@gmail.com'),
('Mohammed', 'Fares', 'mohammedfares18@gmail.com'),
('jayamma', 'raj', 'mohithamma03@gmail.co'),
('Mark', 'N', 'n.marksteev1999@gmail.com'),
('naga', 'k', 'nagaraju@gmail.com'),
('nagaraju', 'sharma', 'nagu@gmail.com'),
('nikitha', 'l o', 'nikitha@gmail.com'),
('mnkj', 'uui', 'oupo@gmail.com'),
('raj', 'sankar', 'shivu4@gmail.com'),
('mohith', 'shivu', 'shivu@gmail.com'),
('cc', 'wdc', 't@gmail.com'),
('narasimha', 'varma', 'varma@gmail.com'),
('varsha', 'm g', 'varsha@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `customer_pro`
--

CREATE TABLE `customer_pro` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(40) NOT NULL,
  `addr` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `password` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_pro`
--

INSERT INTO `customer_pro` (`fname`, `lname`, `dob`, `email`, `addr`, `gender`, `password`, `cid`, `c_id`) VALUES
('rahul', 'sharma', '1996-08-09', 'mohithshivu03@gmail.com', 'banglore', 'male', 987065, 123, 102),
('karthik', 'gupta', '1987-09-16', 'vibav@gmail.com', 'managlore', 'male', 893676, 123, 104);

-- --------------------------------------------------------

--
-- Table structure for table `dependents`
--

CREATE TABLE `dependents` (
  `e_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `relation` varchar(20) NOT NULL,
  `phno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `e_id` int(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `j_date` date NOT NULL,
  `cid` varchar(20) NOT NULL,
  `password` int(11) NOT NULL,
  `emp_age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='ss';

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`e_id`, `fname`, `lname`, `dob`, `j_date`, `cid`, `password`, `emp_age`) VALUES
(2000, 'guptha', 'shrma', '1995-10-04', '2019-10-29', '123', 12345, 24),
(2001, 'jayanth', 'kanal', '1995-09-27', '2019-10-08', '123', 41000, 24),
(2002, 'ragav', 'nadhan', '1995-09-05', '2019-10-08', '123', 55992, 24),
(2004, 'Kamal', 'Thushar', '1996-11-14', '2019-11-20', '123', 916419, 23);

--
-- Triggers `employee`
--
DELIMITER $$
CREATE TRIGGER `emp_salary` BEFORE INSERT ON `employee` FOR EACH ROW INSERT INTO trigger_time VALUES(NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `emp_pro`
--

CREATE TABLE `emp_pro` (
  `e_id` int(11) NOT NULL,
  `ph_no` varchar(20) NOT NULL,
  `add` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_pro`
--

INSERT INTO `emp_pro` (`e_id`, `ph_no`, `add`, `email`, `salary`) VALUES
(2000, '890307982', 'nelmangala', 'mohithshivu03@gmail.com', 15000),
(2001, '983728', 'manglore', 'bcv@gmail.com', 12000),
(2002, '09809303', 'banglore', 'klh@gmail.com', 18000),
(2000, '890307982', 'nelmangala', 'mohithshivu03@gmail.com', 15000),
(2001, '983728', 'manglore', 'bcv@gmail.com', 12000),
(2002, '09809303', 'banglore', 'klh@gmail.com', 18000);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `manager_id` int(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `join_date` date NOT NULL,
  `cid` varchar(20) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`manager_id`, `fname`, `lname`, `dob`, `join_date`, `cid`, `password`) VALUES
(1000, 'navin', 'kumar', '1992-08-11', '2019-10-02', '123', 12345),
(1001, 'prashanth', 'vashista', '1993-08-04', '2019-10-09', '123', 89678),
(1002, 'kumar', 'vgoeda', '1987-08-04', '2019-10-09', '123', 21795);

-- --------------------------------------------------------

--
-- Table structure for table `manager_pro`
--

CREATE TABLE `manager_pro` (
  `m_id` int(20) NOT NULL,
  `phno` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `sal` float NOT NULL,
  `addr` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager_pro`
--

INSERT INTO `manager_pro` (`m_id`, `phno`, `email`, `sal`, `addr`) VALUES
(1000, 885949470, '1rn17cs054.mohith03@gmail.com', 984849, 'banglore'),
(1001, 948345987, 'xyz@gmail.com', 849484, 'manglore'),
(1002, 995959593, 'pqr@gmail.com', 938933, 'tumakur');

-- --------------------------------------------------------

--
-- Table structure for table `new_cars`
--

CREATE TABLE `new_cars` (
  `brand_name` varchar(20) NOT NULL,
  `model_name` varchar(20) NOT NULL,
  `rating` int(11) NOT NULL,
  `cost` float NOT NULL,
  `date_of_relese` date NOT NULL,
  `model_id` varchar(20) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_cars`
--

INSERT INTO `new_cars` (`brand_name`, `model_name`, `rating`, `cost`, `date_of_relese`, `model_id`, `cid`) VALUES
('Kia', 'Galif', 4, 865869, '2019-11-21', '26845', 126),
('benz', 'flarenza', 5, 9068700, '2019-10-30', '709', 123),
('kia', 'hapkas', 3, 2399870, '2019-10-08', '7649', 123),
('bmw', 'glaria', 5, 7899990, '2019-10-30', '8676', 123),
('maruthi', 'swift', 3, 550050, '2019-10-10', '8694', 123),
('suzuki', 'wagnor', 4, 405050, '2019-10-25', '9749', 123);

-- --------------------------------------------------------

--
-- Table structure for table `profit`
--

CREATE TABLE `profit` (
  `turn_over` int(11) NOT NULL,
  `total_salary` int(11) NOT NULL,
  `com_profit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profit`
--

INSERT INTO `profit` (`turn_over`, `total_salary`, `com_profit`) VALUES
(363879072, 176213040, 187666032);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `u_name` varchar(20) NOT NULL,
  `veh_id` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `cost` float NOT NULL,
  `sales_id` int(11) NOT NULL,
  `cid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`u_name`, `veh_id`, `date`, `cost`, `sales_id`, `cid`) VALUES
('lokesh', '81247', '2019-09-04', 1529870, 862, '123'),
('karthik', '27413', '2019-10-01', 983187, 888, '123'),
('raju', '18792', '2019-10-02', 895897, 999, '123'),
('jahnvi', '23344', '2019-10-06', 630929, 68922, '123'),
('jayanth', '23579', '2019-10-02', 9317340, 93238, '123');

-- --------------------------------------------------------

--
-- Table structure for table `trigger_time`
--

CREATE TABLE `trigger_time` (
  `exec_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trigger_time`
--

INSERT INTO `trigger_time` (`exec_time`) VALUES
('2019-11-03 02:50:35'),
('2019-11-05 02:37:08'),
('2019-11-05 02:41:55'),
('2019-11-05 02:43:55'),
('2019-11-05 02:56:04'),
('2019-11-05 02:56:17'),
('2019-11-05 02:56:34'),
('2019-11-07 13:40:26'),
('2019-11-07 13:52:46'),
('2019-11-07 14:12:30'),
('2019-11-07 14:16:10');

-- --------------------------------------------------------

--
-- Table structure for table `veh_list`
--

CREATE TABLE `veh_list` (
  `vname` varchar(20) NOT NULL,
  `vmodel` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `veh_list`
--

INSERT INTO `veh_list` (`vname`, `vmodel`, `color`, `price`) VALUES
('benz', 'uusur', 'red', 7777780),
('bmw', 'igink', 'white', 9808000),
('range rover', 'jakk', 'green', 977099),
('audii', 'karg', 'blue', 709899),
('susuzki', 'jag', 'grey', 897097),
('benz', 'uusur', 'red', 7777780),
('bmw', 'igink', 'white', 9808000),
('range rover', 'jakk', 'green', 977099),
('audii', 'karg', 'blue', 709899),
('susuzki', 'jag', 'grey', 897097);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admini_d`),
  ADD KEY `cid` (`c_id`);

--
-- Indexes for table `carshowroom`
--
ALTER TABLE `carshowroom`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `clocation`
--
ALTER TABLE `clocation`
  ADD PRIMARY KEY (`cid`,`location`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `customer_entry`
--
ALTER TABLE `customer_entry`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `customer_pro`
--
ALTER TABLE `customer_pro`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `password` (`password`),
  ADD KEY `cid` (`cid`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `dependents`
--
ALTER TABLE `dependents`
  ADD PRIMARY KEY (`name`),
  ADD KEY `e_id` (`e_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`e_id`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `emp_pro`
--
ALTER TABLE `emp_pro`
  ADD KEY `e_id` (`e_id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`manager_id`),
  ADD KEY `m_id` (`manager_id`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `manager_pro`
--
ALTER TABLE `manager_pro`
  ADD PRIMARY KEY (`phno`,`email`),
  ADD KEY `m_id` (`m_id`);

--
-- Indexes for table `new_cars`
--
ALTER TABLE `new_cars`
  ADD PRIMARY KEY (`model_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sales_id`),
  ADD KEY `cid` (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=869310;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `carshowroom` (`cid`) ON DELETE CASCADE;

--
-- Constraints for table `clocation`
--
ALTER TABLE `clocation`
  ADD CONSTRAINT `clocation_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `carshowroom` (`cid`) ON DELETE CASCADE;

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `carshowroom` (`cid`) ON DELETE CASCADE;

--
-- Constraints for table `customer_pro`
--
ALTER TABLE `customer_pro`
  ADD CONSTRAINT `customer_pro_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`) ON DELETE CASCADE;

--
-- Constraints for table `dependents`
--
ALTER TABLE `dependents`
  ADD CONSTRAINT `dependents_ibfk_1` FOREIGN KEY (`e_id`) REFERENCES `employee` (`e_id`) ON DELETE CASCADE;

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `carshowroom` (`cid`) ON DELETE CASCADE;

--
-- Constraints for table `emp_pro`
--
ALTER TABLE `emp_pro`
  ADD CONSTRAINT `emp_pro_ibfk_1` FOREIGN KEY (`e_id`) REFERENCES `employee` (`e_id`) ON DELETE CASCADE;

--
-- Constraints for table `manager`
--
ALTER TABLE `manager`
  ADD CONSTRAINT `manager_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `carshowroom` (`cid`);

--
-- Constraints for table `manager_pro`
--
ALTER TABLE `manager_pro`
  ADD CONSTRAINT `manager_pro_ibfk_1` FOREIGN KEY (`m_id`) REFERENCES `manager` (`manager_id`) ON DELETE CASCADE;

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `carshowroom` (`cid`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
