-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2018 at 01:01 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelmanage`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `COLL` ()  NO SQL
BEGIN
SELECT COUNT(usn) FROM student;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `usn` int(5) NOT NULL,
  `test1` int(3) NOT NULL,
  `test2` int(3) DEFAULT NULL,
  `test3` int(3) DEFAULT NULL,
  `finalia` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`usn`, `test1`, `test2`, `test3`, `finalia`) VALUES
(100, 40, 55, 90, 185);

--
-- Triggers `education`
--
DELIMITER $$
CREATE TRIGGER `final_ia_marks` BEFORE INSERT ON `education` FOR EACH ROW BEGIN
    SET NEW.finalia = NEW.test1 + NEW.test2 + NEW.test3;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `lfno` int(5) NOT NULL,
  `roomno` int(3) DEFAULT NULL,
  `block_no` char(1) DEFAULT NULL,
  `floorno` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`lfno`, `roomno`, `block_no`, `floorno`) VALUES
(42, 1, 'a', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `lfno` int(5) NOT NULL,
  `usn` int(5) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `dob` date NOT NULL,
  `place` varchar(30) NOT NULL,
  `id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`lfno`, `usn`, `name`, `dob`, `place`, `id`) VALUES
(42, 100, 'asd', '2009-10-01', 'goa', 18);

--
-- Triggers `student`
--
DELIMITER $$
CREATE TRIGGER `user_student_info_trigger` BEFORE INSERT ON `student` FOR EACH ROW BEGIN
INSERT into user_student VALUES(NEW.id, NEW.name);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(16, 'Admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
(17, 'pra', 'pra@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(18, 'omi', 'omi@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `user_student`
--

CREATE TABLE `user_student` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_student`
--

INSERT INTO `user_student` (`id`, `name`) VALUES
(16, 'Prateek'),
(18, 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `vlfno` int(5) NOT NULL,
  `lfno` int(5) NOT NULL,
  `vname` varchar(20) DEFAULT NULL,
  `relation` varchar(20) DEFAULT NULL,
  `v_date` date NOT NULL,
  `visiting_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`vlfno`, `lfno`, `vname`, `relation`, `v_date`, `visiting_time`) VALUES
(1, 42, 'asddffghh', 'father', '0000-00-00', '00:00:02'),
(2, 42, 'asddffghh', 'father', '0000-00-00', '00:00:02'),
(3, 42, '', 'bro', '2005-10-03', '00:00:02'),
(4, 42, '', 'bro', '2018-10-03', '00:00:06'),
(5, 42, 'omi', 'father', '2018-10-04', '00:00:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`usn`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`lfno`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`lfno`,`usn`),
  ADD UNIQUE KEY `lfno` (`lfno`),
  ADD UNIQUE KEY `usn` (`usn`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user_student`
--
ALTER TABLE `user_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`vlfno`),
  ADD KEY `lfno` (`lfno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `lfno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `vlfno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `education_ibfk_1` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`lfno`) REFERENCES `student` (`lfno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `visitor`
--
ALTER TABLE `visitor`
  ADD CONSTRAINT `visitor_ibfk_1` FOREIGN KEY (`lfno`) REFERENCES `student` (`lfno`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
