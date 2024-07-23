-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2022 at 05:28 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `naukridekho`
--

-- --------------------------------------------------------

--
-- Table structure for table `job`
--
use naukridekho;
update  job set  jobtitle = "carpainter", address= "Bambhori" ,contactno = 9142505307 
where job_id = 3 ;
select * from job;
select * from jobapplication;
show tables;
CREATE TABLE `job` (
  `job_id` int(5) NOT NULL,
  `jobtitle` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `profession` varchar(20) NOT NULL,
  `jobduration` varchar(20) NOT NULL,
  `contactNo` varchar(10) NOT NULL,
  `jobdetail` varchar(100) NOT NULL,
  `budget` varchar(100) NOT NULL,
  `posted_by` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE JOB;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `jobtitle`, `address`, `profession`, `jobduration`, `contactNo`, `jobdetail`, `budget`, `posted_by`) VALUES
(1, 'Plumber needed ', 'jalgaon', 'Plumber', '1-2 Days', '9142505304', 'Plumber needed for fitting ', '500', '1'),
(3, 'carpainter', 'bambhori', 'worker', '1-2 Days', '657485858', 'expert', '50000', '2'),
(8, 'Electrician needed ', 'jalgaon', 'Electrician', '2 days', '9142505305', 'electrician is needed for wiring', '800', '3');



-- --------------------------------------------------------

--
-- Table structure for table `jobapplication`
--



DROP TABLE 

CREATE TABLE `jobapplication` (
  `u_id` int(5) NOT NULL,
  `job_id` int(5) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `owndetail` varchar(100) NOT NULL,
  `phoneNo` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobapplication`
--

INSERT INTO `jobapplication` (`u_id`, `job_id`, `firstname`, `lastname`, `email`, `owndetail`, `phoneNo`) VALUES
(0, 9, 'RAJ', 'KESHAV', 'raj@gmail.com', 'yhg', '9142505304'),
(0, 9, 'RUSHI', 'ALHAT', 'rushi1@gmail.com', 'plumber ', '1111111111'),
(0, 10, 'RUSHI', 'ALHAT', 'rushi@gmail.com', 'red', '1111111111'),
(0, 3, 'ajay', 'tanvar', 'ajay1@gmail.com', 'wkshnj', '2222222222'),
(0, 9, 'ajay', 'tanvar', 'ajay@gmail.com', 'car', '2222222222');
-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(5) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phonenumber` varchar(11) NOT NULL,
  `usertype` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `job_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



--
-- Dumping data for table `user`
--
DROP TABLE user ;

INSERT INTO `user` (`u_id`, `firstname`, `lastname`, `dob`, `gender`, `email`, `phonenumber`, `usertype`, `password`, `job_id`) VALUES
(1, 'RUSHIKESH', 'ALHAT', '15/05/2001', 'M', 'rushi@gmail.com', '1111111111', '2', 'rushi@123', 1),
(2, 'RAJ', 'KESHAV', '15/01/2001', 'M', '007rajkeshav@gmail.com', '9142505304', '2', 'raj@123', 2),
(3, 'TEJASWINI', 'PAWAR', '19/07/2001', 'F', 'teju@gmail.com', '9999999999', '2', 'teju@123', 3);


--
-- Indexes for dumped tables
--

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`job_id`),
  ADD UNIQUE KEY `job_id` (`job_id`),
  ADD UNIQUE KEY `contactNo` (`contactNo`);

--
-- Indexes for table `jobapplication`
--
ALTER TABLE `jobapplication`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `job_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
