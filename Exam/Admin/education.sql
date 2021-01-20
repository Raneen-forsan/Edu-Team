-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 07:22 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `education`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`, `full_name`) VALUES
(1, 'mohamad92@gmail.com', '3010', 'Shatarat'),
(37, 'Ali@ali.ali', '12345', 'Ali'),
(39, 'mohammad92d@gmail.com', '3010', 'MOHAMMAD IBRAHIM'),
(40, 'hmdan_2222@hotmail.com', '3010', 'HAMDAN'),
(41, 'raneenforsan97@gmail.com', '123456', 'Raneen Forsan');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `course_description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_description`) VALUES
(19, 'Math', 'Math Course ');

-- --------------------------------------------------------

--
-- Table structure for table `info_student`
--

CREATE TABLE `info_student` (
  `id_info` int(11) NOT NULL,
  `mark_total` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `statues_student` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `info_student`
--

INSERT INTO `info_student` (`id_info`, `mark_total`, `statues_student`, `student_id`, `course_id`) VALUES
(36, '4 / 4', 'PASS', 15, 19),
(37, '4 / 4', 'PASS', 29, 19),
(38, '4 / 4', 'PASS', 14, 19);

-- --------------------------------------------------------

--
-- Table structure for table `quiztf`
--

CREATE TABLE `quiztf` (
  `id` int(11) NOT NULL,
  `question` varchar(250) NOT NULL,
  `Cquestion` varchar(100) NOT NULL,
  `Cquestion1` varchar(100) NOT NULL,
  `c1` varchar(250) NOT NULL,
  `c2` varchar(250) NOT NULL,
  `c3` varchar(250) NOT NULL,
  `c4` varchar(250) NOT NULL,
  `correct_a` varchar(250) NOT NULL,
  `mark` int(50) NOT NULL,
  `exam_image` text NOT NULL,
  `course_id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `exam_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiztf`
--

INSERT INTO `quiztf` (`id`, `question`, `Cquestion`, `Cquestion1`, `c1`, `c2`, `c3`, `c4`, `correct_a`, `mark`, `exam_image`, `course_id`, `course_name`, `exam_name`) VALUES
(123, '2*2=4?', 'T', 'F', '', '', '', '', 'T', 2, '', 19, 'Math', 'First Exam Math'),
(124, '2*2=', '', '', '4', '8', '12', '16', '4', 2, '', 19, 'Math', 'First Exam Math');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` int(11) NOT NULL,
  `image` text NOT NULL,
  `education_level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `email`, `full_name`, `password`, `mobile`, `image`, `education_level`) VALUES
(14, 'm.almasri97.me@gmail.com', 'Mohammad Almasri', '1', 795439152, '', 'Some High School'),
(15, 'raneenforsan97@gmail.com', 'Raneen Forsan', '123456', 788653882, '', ''),
(29, 'Rama@gmail.com', 'Rama Ahmad', '1', 788653882, 'Admin.jpg', 'Some High School');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `info_student`
--
ALTER TABLE `info_student`
  ADD PRIMARY KEY (`id_info`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `quiztf`
--
ALTER TABLE `quiztf`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `info_student`
--
ALTER TABLE `info_student`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `quiztf`
--
ALTER TABLE `quiztf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `info_student`
--
ALTER TABLE `info_student`
  ADD CONSTRAINT `info_student_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `info_student_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `quiztf`
--
ALTER TABLE `quiztf`
  ADD CONSTRAINT `quiztf_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
